<?php
/**
 * User: prakash
 * Date: 12/16/15
 * Time: 10:07 AM
 */

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Auth;

class AuthController extends Controller {

    public function index()
    {
       return view('auth.login');
    }

    public function postLogin(Request $request)
    {
        try {
            //Retrieving users data
            $email = $request->get('email');
            $password = $request->get('password');

            if (Auth::attempt(['email' => $email, 'password' => $password, 'status' => 1])) {
                return redirect('dashboard');
            }

            return redirect()->back()
                ->withInput($request->only('email', 'remember'))
                ->withErrors([
                    'email' => 'The email or password you’ve entered doesn’t match any account.',
                ]);
        }
        catch(\Exception $e)
        {
            return $e->getMessage();
        }
    }

    public function getLogout()
    {
            Auth::logout();
            return redirect('/');
    }

}