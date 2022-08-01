<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Auth\BaseController;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\EditPersonalDataRequest;
use App\Models\User;

class EditPersonalDataController extends BaseController
{
    public function __invoke(EditPersonalDataRequest $request, User $user)
    {
        $data = $request->validated();
        $this->service->updatePersonalData($user, $data);

        return $user instanceof User ? redirect()->route('home') : redirect('/home?exception=true');
    }
}
