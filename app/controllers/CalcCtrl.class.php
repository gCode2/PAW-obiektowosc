<?php
namespace app\controllers;

use app\forms\CalcForm;
use app\transfer\CalcResult;

class CalcCtrl {
    private $form;
    private $result;
    private $currencyJSON;

    public function __construct(){
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
            getMessages()->addError("You didnt provide how much money you want to lend");
        }
        if(!getMessages()->isError()){
            if(! is_numeric($this->form->amount)){
                getMessages()->addError("The amount you provided is not a number");
            }
        }
        return !getMessages()->isError();
    }

    public function process(){
        $this->getParams();
        if($this->validate()){
            $this->form->amount = intval($this->form->amount);
            $this->form->duration = intval($this->form->duration);
            $this->form->currency = floatval($this->form->currency);
            $this->form->currency = number_format($this->form->currency, 2, '.','');
            getMessages()->addInfo("Correct parameters");

            //wzor na rate kredytu
            $this->result->result = ($this->form->amount/$this->form->duration + ($this->form->amount/$this->form->duration * $this->form->duration/100))*($this->form->currency + $this->form->currency * $this->form->duration/100);
            $this->result->result = number_format($this->result->result, 2, '.', '');

            getMessages()->addInfo('Your loan payment has been calculated');
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
        
        getSmarty()->assign('p_title','Currency Calc by G');
        getSmarty()->assign('p_desc','Calculate loan payment');
        getSmarty()->assign('form', $this->form);
        getSmarty()->assign('result', $this->result);
        getSmarty()->assign('currencyMap', $this->getCurrencies());
        getSmarty()->display('CalcView.tpl');

    }
}


?>