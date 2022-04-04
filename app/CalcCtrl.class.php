<?php
require_once $conf->root_path.'/lib/smarty/Smarty.class.php';
require_once $conf->root_path.'/lib/Messages.class.php';
require_once $conf->root_path.'/app/CalcForm.class.php';
require_once $conf->root_path.'/app/CalcResult.class.php';

class CalcCtrl {
    private $messages;
    private $form;
    private $result;
    private $currencyJSON;

    public function __construct(){
        $this->messages = new Messages();
        $this->form = new CalcForm();
        $this->result = new CalcResult();
    }

    public function getParams(){
        $this->form->amount = isset($_REQUEST['amount']) ? $_REQUEST['amount'] : null;
        $this->form->duration = isset($_REQUEST['duration']) ? $_REQUEST['duration'] : null;
        $this->form->currency = isset($_REQUEST['currency']) ? $_REQUEST['currency'] : null;
    }


    public function validate(){
        if(!isset($this->form->amount)){
            return false;
        }
        if($this->form->amount==""){
            $this->messages->addError("You didnt provide how much money you want to lend");
        }
        if(!$this->messages->isError()){
            if(! is_numeric($this->form->amount)){
                $this->messages->addError("The amount you provided is not a number");
            }
        }
        return ! $this->messages->isError();
    }

    public function process(){
        $this->getParams();
        if($this->validate()){
            $this->form->amount = intval($this->form->amount);
            $this->form->duration = intval($this->form->duration);
            $this->form->currency = floatval($this->form->currency);
            $this->form->currency = number_format($this->form->currency, 2, '.','');
            $this->messages->addInfo("Correct parameters");

            //wzor na rate kredytu
            $this->result->result = ($this->form->amount/$this->form->duration + ($this->form->amount/$this->form->duration * $this->form->duration/100))*($this->form->currency + $this->form->currency * $this->form->duration/100);
            $this->result->result = number_format($this->result->result, 2, '.', '');

            $this->messages->addInfo('Your loan payment has been calculated');
        }
        $this->generateView();
    }
    
    public function getCurrencies(){
        
        $url = file_get_contents("http://api.nbp.pl/api/exchangerates/tables/A?format=json");
        $url2 = file_get_contents("http://api.nbp.pl/api/exchangerates/tables/B?format=json");
        
        $currencyJSON = json_decode($url);
        $currencyJSON = (array) $currencyJSON[0];

        $currencyJSON = (array) $currencyJSON["rates"];
        $currencyJSON2 = json_decode($url2);
        $currencyJSON2 = (array) $currencyJSON2[0];
        $currencyJSON2 = (array) $currencyJSON2["rates"];

        $currencyJSON = array_merge($currencyJSON, $currencyJSON2);


        $pln = (object) array("currency"=>"Złotówka Polska", "code"=>"PLN", "mid"=>1);
        array_unshift($currencyJSON, $pln);
        return $currencyJSON;
    }
    

    public function generateView(){
        global $conf;

        $smarty = new Smarty();
        $smarty->assign('conf',$conf);
        $smarty->assign('p_title','Currency Calc by G');
        $smarty->assign('p_desc','Calculate loan payment');
        $smarty->assign('messages', $this->messages);
        $smarty->assign('form', $this->form);
        $smarty->assign('result', $this->result);
        $smarty->assign('currencyMap', $this->getCurrencies());
        $smarty->display($conf->root_path.'/app/CalcView.tpl');

    }
}


?>