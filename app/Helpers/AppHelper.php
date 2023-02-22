<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Config;

class AppHelper
{
    public function admin_route() {
        return Config::get("app.admin");
    }
}
