<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        //$this->sendTestEmail();
        if(session('magicLogin')){
            return redirect()->to('set-password')->with('message', 'please update your password');
        }
        
        return view("Home/index.php");
    }

    private function sendTestEmail(){
        $email = \Config\Services::email();

        $email->setTo("preda.matteo.98@gmail.com");
        $email->setSubject("Test Email");
        $email->setMessage("Hello from <i>CodeIgniter</i>");

        if($email->send()){
            echo "email sent";
        }else{
            echo "email not sent";
        }
    }
}
