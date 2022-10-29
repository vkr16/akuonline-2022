<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Project extends BaseController
{
    public function washinngarage()
    {
        return view('projects/washinngarage');
    }

    public function colab()
    {
        return view('projects/colab');
    }

    public function mandrapostel()
    {
        return view('projects/mandrapostel');
    }

    public function ptrksn()
    {
        return view('projects/ptrksn');
    }

    public function edubmn()
    {
        return view('projects/edubmn');
    }

    public function inventoman()
    {
        return view('projects/inventoman');
    }

    public function woowprint()
    {
        return view('projects/woowprint');
    }
}
