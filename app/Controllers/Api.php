<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Api extends BaseController
{
    public function getSecret()
    {
        return APP_DEV_PASSWORD;
    }
}
