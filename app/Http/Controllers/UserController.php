<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;
use App\Services\Business\UserBusinessService;

/*
 * @author viennguyen
 * Vien Nguyen
 * CST-256
 * Assessment assigment
 * This is the user controller which is used for user register process
 * Feb/26th/2021
 */
class UserController extends Controller
{
    public function index(Request $request)
    {
        //Get the data from the form
        $firstname = $request->input('firstname');
        $lastname = $request->input('lastname');
        $username = $request->input('username');
        $password = $request->input('password');
        
        //Create an object instance for a user
        $userModel = new UserModel($firstname, $lastname, $username, $password);
        
        //Create an instance of UserBusinessService
        $userBusinessService = new UserBusinessService();
        
        //Calling register service in UserBusinessService
        $isFound = null;
        if($userBusinessService->resigter($userModel)){
            $isFound = "true";
        }else{
            $isFound = "false";
        }
        
        return redirect('register')->with('isFound',$isFound)
        ->with('firstname', $request->input('firstname'))
        ->with('lastname', $request->input('lastname'))
        ->with('username', $request->input('username'))
        ->with('password', $request->input('password'));
    }

}
