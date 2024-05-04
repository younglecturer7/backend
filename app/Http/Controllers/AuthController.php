<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //declare private variables
    private $phoneNumber;

    public function verifyAuth()
    {
        //check if user is authenticated
        if (Auth::check()) {
            return response()->json([
                "id" => Auth::id()
            ]);
        }
    }

    public function verifyPhone(Request $request)
    {
        // get user phone
        $userPhone = User::where("phone", $request->phone)->value('phone');

        //verify phone number in the database
        if ($request->phone === $userPhone) {
            //return true if phone number exist
            return response()->json(["data" => false]);
        } else {
            //return false if phone number is not exist
            return response()->json(["data" => true]);
        }
    }

    public function verifyEmail(Request $request)
    {
        // get user email
        $userEmail = User::where("email", $request->email)->value('email');

        //verify email in the database
        if ($request->email === $userEmail) {
            //return true if email address exist
            return response()->json(["data" => false]);
        } else {
            //return false if email address is not exist
            return response()->json(["data" => true]);
        }
    }

    public function verifyUsername(Request $request)
    {
        // get username
        $userUsername = User::where("username", $request->username)->value('username');

        //verify username in the database
        if ($request->username === $userUsername) {
            //return true if username exist
            return response()->json(["data" => false]);
        } else {
            //return false if username is not exist
            return response()->json(["data" => true]);
        }
    }
}
