<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    /**
     * Login as Demo User
     *
     * @return \Illuminate\Http\Response
     */
    public function login()
    {
        $demoUser = User::where(['name' => config('app.demo_user_name')])->first();
        // create if doesn't exist
        if (!$demoUser) {
            $demoUser = User::factory()->create(['name' => config('app.demo_user_name')]);
        }
        auth()->login($demoUser);
        return back();
    }

    /**
     * Logout as Demo User
     *
     * @return \Illuminate\Http\Response
     */
    public function logout()
    {
        auth()->logout();
        return back();
    }
}
