<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Socialite;
use App\Services\SocialGoogleAccountService;
use App\User;
class SocialAuthGoogleController extends Controller
{
  /**
   * Create a redirect method to google api.
   *
   * @return void
   */
    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }
/**
     * Return a callback method from google api.
     *
     * @return callback URL from google
     */
    public function callback(SocialGoogleAccountService $service)
    {
            $user = Socialite::driver('google')->user();
        // check if they're an existing user
        $existingUser = User::where('email', $user->email)->first();
        if($existingUser){
            // log them in
            auth()->login($existingUser, true);
        } else {
            // create a new user
            $newUser                  = new User;
            $newUser->name            = $user->name;
            $newUser->email           = $user->email;
            $newUser->google_id       = $user->id;
            $newUser->avatar          = $user->avatar;
            $newUser->avatar_original = $user->avatar_original;
            $newUser->save();
            auth()->login($newUser, true);
        }
        return redirect()->to('/home');
    }
}
