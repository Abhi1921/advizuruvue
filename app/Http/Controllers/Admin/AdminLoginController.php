<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Utility\ValidationUtil;
use App\Notifications\TestNotification;
use App\Events\NewMessage;
use App\User;
use Notification;
use Session;

class AdminLoginController extends Controller
{
    use ValidationUtil;
    public function loginForm(){
        return view('admin.auth.login');
    }

    /**
     * For logging in
     *
     * @param Request $request request body from client
     * @return Json responce data with http responce code
     */
    public function login(Request $request)
    {
        $valid = $this->loginRegistrationValidAdmin($request);
        if ($valid) {
            return $valid;
        }

        if (\Auth::attempt(['email' => $request->username, 'password' => $request->password], isset($request->remember) ? true : false)) {
            \Session::put('riders_admin_timezone', $request->tz);
            // Authentication passed...
            if(\Auth::user()->authorizeRole('Admin')){           
                return response()->json([
                    'success' => true,
                    'message' => 'Login Successful',
                    'redirect' => route('admin.dashboard')
                ]);
            }else {
                \Auth::logout();
                return response()->json([
                    'success' => false,
                    'message' => 'Wrong Credentials',
                    'redirect' => 'javascript:void(0)',
                ]);
            }
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Wrong Credentials',
                'redirect' => 'javascript:void(0)',
            ]);
        }
    }
    public function logout(Request $request)
    {
        if (LoginTrack::where('user_id', \Auth::id())->first()) {
            LoginTrack::where('user_id', \Auth::id())->delete();
        }

        $accessToken = $request->user()->token();

        DB::table('oauth_refresh_tokens')
            ->where('access_token_id', $accessToken->id)
            ->update([
                'revoked' => true,
            ]);

        $accessToken->revoke();

        return response()->json([
            'message' => 'Logged out',
        ], 200);
    }

}
