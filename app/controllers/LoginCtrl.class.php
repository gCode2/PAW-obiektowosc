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
            getMessages()->addError("Wrong app call");
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
            echo $this->form->login;
            echo $this->form->password;
            if($this->form->login == "admin" && $this->form->password == "admin"){
            if(session_status() == PHP_SESSION_NONE){
                session_start();
            }
            $user = new User($this->form->login, 'admin');
            $_SESSION['user'] = serialize($user);

        }else if($this->form->login == "user" && $this->form->password == "user"){
            if(session_status() == PHP_SESSION_NONE){
                session_start();
            }
            $user = new User($this->form->login, 'user');
            $_SESSION['user'] = serialize($user);
        }else{
            getMessages()->addError("Wrong login or password");
        }
    }
        return ! getMessages()->isError();
    }
    public function doLogin(){
        $this->getParams();
        if($this->validate()){
            header("Location: ".getConf()->app_url."/");
        }else{
            $this->generateView();
        }

    }
    public function doLogout(){
        if(session_status()==PHP_SESSION_NONE){
            session_start();
        }
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