<?php
namespace App\Services\Business;

use App\Models\UserModel;

class UserBusinessService
{
    function resigter(UserModel $UserModel)
    {
        //Assign the string value to find in the model
        $value = "CST-256";
        //Checking if the string value is found in the model
        if(($UserModel->getFirstname() == $value) || ($UserModel->getLastname() == $value)
            || ($UserModel->getUsername() == $value) || ($UserModel->getPassword() == $value)){
            //return true if found
            return true;
        }else{
            //return false if not found
            return false;
        }

    }
}

