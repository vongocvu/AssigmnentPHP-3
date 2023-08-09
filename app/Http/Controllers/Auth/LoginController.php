<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function redirectToGoogle()
    {
        try {
            return Socialite::driver('google')->redirect();
        } catch (\Exception $exception) {
            return $exception;
        }
    }

    public function handleGoogleCallback(Request $request)
    {
        try {
            $user = Socialite::driver('google')->user();
        } catch (\Exception $e) {
            // Handle the exception if user data retrieval fails.
            return redirect('/login')->with('error', 'Google login failed!');
        }

        // Check if the user exists in your database based on the email or any other criteria.
        // If the user exists, log them in; otherwise, create a new user account.

        $existingUser = User::where('email', $user->email)->first();

        if ($existingUser) {
            Auth::login($existingUser);
        } else {
            $newUser = User::create([
                'name' => $user->name,
                'email' => $user->email,
                'profile_photo_path' => $user->avatar,
                'password' => "1213",
                'google_id' => $user->id,
            ]);

            Auth::login($newUser);
        }

        return redirect('/');
    }


    public function logout()
    {
        Auth::logout();
        // Nếu bạn muốn chuyển hướng người dùng đến một trang cụ thể sau khi logout,
        // hãy sử dụng hàm redirect()
        return redirect('/'); // Thay đổi '/home' bằng trang mong muốn
    }
}
