<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('home');
    }

    public function contactSendMail()
    {
        $email = \Config\Services::email();

        $email->setFrom('webservice@akuonline.my.id', 'AkuOnline Web Service');
        $email->setTo('fm@akuonline.my.id');
        $email->setReplyTo($_POST['email'], $_POST['name']);
        $email->setSubject('AkuOnline Visitor - ' . $_POST['name']);
        $email->setMessage($_POST['message']);

        if ($email->send()) {
            return "berhasil";
        } else {
            return "gagal";
        }
    }
}
