<?php

namespace App\Http\Controllers\Main;

use Illuminate\Http\Request;

class AboutController extends BaseController
{
    public function __invoke()
    {
        $num = 1+1;
        return view('welcome');
    }
}
