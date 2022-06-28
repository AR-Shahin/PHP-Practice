<?php

namespace App\helper;

use App\helper\Session;

class Auth extends Session
{
    public function isAuthenticate() :bool
    {
        if($this->get('auth')){
            return true;
        }

        return false;
    }
   
    public function setAuth($data) :void
    {
        $this->set('auth',true);
        $this->set('authName',$data['name']);
        $this->set('authEmail',$data['email']);
    }

    public function removeAuth() :void
    {
        $this->forgot('auth');
        $this->forgot('authName');
        $this->forgot('authEmail');
    }
}
