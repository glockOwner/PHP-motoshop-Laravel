<?php
namespace App\Services\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Mockery\Exception;

class Service
{
    public function updatePersonalData($user, $data)
    {
        try
        {
            DB::beginTransaction();
            $data['password'] = Hash::make($data['password']);
            $user->update($data);
            DB::commit();
        }catch (Exception $exception)
        {
            DB::rollBack();
            return $exception->getMessage();
        }
        return $user;
    }
}
