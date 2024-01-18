<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        // Validate the request data
        $this->validate($request, [
            'username' => 'required|string|min:5|max:15',
            'password' => 'required'
        ]);

        // Attempt to log the user in
        if (Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
            // If successful, redirect to the intended page
            return redirect()->intended(route('marketplace'))->with('success', 'You are logged in');
        }

        // If unsuccessful, redirect back to the login page with an error message
        return redirect()->back()
            ->withInput($request->only('username', 'remember'))
            ->withErrors([  
                'login' => 'These credentials do not match our records.',
            ]);
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('marketplace')->with('success', 'You have been logged out');
    }

    public function reset_password(Request $request)
    {
        // Validate the request data
        $this->validate($request, [
            'new_password' => 'required|string|min:8',
            'new_password_confirmation' => 'required|string|same:new_password',
        ]);

        // Update the user's password
        $user = Auth::user();
        $user->password = bcrypt($request->new_password);
        if ($user instanceof \Illuminate\Database\Eloquent\Model) {
            $user->save();
            return redirect()->route('login')->with('success', 'Your password has been updated');
        }
        else {
            return redirect()->back()->withErrors(['password' => 'An error occurred while updating your password']);
        }
    }

}
