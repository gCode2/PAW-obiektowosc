<?php

namespace app\controllers;

use app\transfer\User;
use app\forms\loginForm;

class LoginCtrl{
    private $form;

    public function __construct(){
        $this->form = new LoginForm();
    }

    public function getParams(){
        $this->form->login = getFromRequest('login');
        $this->form->password = getFromRequest('password');
    }

    public function validate(){
        if(!(isset($this->form->login)&&isset($this->form->password))){
            return false;
        }
    
        if(getMessages()->isError()){
            if($this->form->login==""){
                getMessages()->addError("No login provided!");
            }
            
            if($this->form->password==""){
                getMessages()->addError("No password provided!");
            }
        }
        if(!getMessages()->isError()){
            if($this->form->login == "admin" && $this->form->password == "admin"){
            
            $user = new User($this->form->login, 'admin');
            $_SESSION['user'] = serialize($user);
            addRole($user->role);

        }else if($this->form->login == "user" && $this->form->password == "user"){

            $user = new User($this->form->login, 'user');
            $_SESSION['user'] = serialize($user);
            addRole($user->role);
        }else{
            getMessages()->addError("Wrong login or password");
        }
    }
        return ! getMessages()->isError();
    }
    public function action_login(){
        $this->getParams();
        if($this->validate()){
            header("Location: ".getConf()->app_url."/");
        }else{
            $this->generateView();
        }

    }
    public function action_logout(){
        session_destroy();
        getMessages()->addInfo('Logged out successfully');
        $this->generateView();
    }
    public function generateView(){
        getSmarty()->assign("p_title", "Login");
        getSmarty()->assign('form',$this->form);
        getSmarty()->display('LoginView.tpl'); 
    }

}




?>