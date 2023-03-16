<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Project extends BaseController
{
    public function washinngarage()
    {
        $data = [
            'nav_pos' => 'projects'
        ];
        return view('projects/washinngarage', $data);
    }

    public function colab()
    {
        $data = [
            'nav_pos' => 'projects'
        ];
        return view('projects/colab', $data);
    }

    public function mandrapostel()
    {
        $data = [
            'nav_pos' => 'projects'
        ];
        return view('projects/mandrapostel', $data);
    }

    public function ptrksn()
    {
        $data = [
            'nav_pos' => 'projects'
        ];
        return view('projects/ptrksn', $data);
    }

    public function edubmn()
    {
        $data = [
            'nav_pos' => 'projects'
        ];
        return view('projects/edubmn', $data);
    }

    public function inventoman()
    {
        $data = [
            'nav_pos' => 'projects'
        ];
        return view('projects/inventoman', $data);
    }

    public function woowprint()
    {
        $data = [
            'nav_pos' => 'projects'
        ];
        return view('projects/woowprint', $data);
    }
}
