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
}
