<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Auth\BaseController;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\EditPersonalDataRequest;
use App\Models\User;

class PersonalOrderHistoryController extends BaseController
{
    public function __invoke()
    {


        return view('auth.order_history');
    }
}
