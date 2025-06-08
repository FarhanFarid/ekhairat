<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Carbon\Carbon;

use App\Models\User;


class AuthenticationController extends Controller
{
    public function loginIndex(Request $request)
    {
        return view('auth.login');
    }

    public function registerIndex(Request $request)
    {
        return view('auth.register');
    }

    public function login(Request $request)
    {

        try{

            $user = User::where('email', $request->email)->first();

            if (!$user || !Hash::check($request->password, $user->password)) {
                return response()->json([
                    'status' => 'failed',
                    'message' => 'Invalid credentials.',
                ], 200);
            }

            // Log the user in
            Auth::login($user);

            return response()->json([
                'status' => 'success',
                'message' => 'Login successful',
            ], 200);

        } catch (\Exception $e) {
            Log::error($e->getMessage(), [
                'file' => $e->getFile(),
                'line' => $e->getLine(),
            ]);

            return response()->json([
                'status' => 'failed',
                'message' => 'Internal error happened. Try again.',
            ], 200);
        }

    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('auth.login.index');
    }

    public function register(Request $request)
    {
        try {
            $user = User::where('email', $request->email)->first();

            if (!$user) {

                $storeuser = new User();
                $storeuser->name       = $request->name;
                $storeuser->email      = $request->email;
                $storeuser->password   = Hash::make($request->password);
                $storeuser->address    = $request->address;
                $storeuser->phase      = $request->phase;
                $storeuser->dob        = $request->dob;
                $storeuser->status_id  = 2;
                $storeuser->payment_id = 1;
                $storeuser->created_at = Carbon::now();
                $storeuser->updated_at = Carbon::now();
                $storeuser->save();

                // Automatically log in the new user
                Auth::login($storeuser);

                return response()->json([
                    'status' => 'success',
                    'response' => 'Successfully registered and logged in.',
                ], 200);
            } else {
                return response()->json([
                    'status' => 'failed',
                    'response' => 'User already exists! Please login to your existing account.',
                ], 200);
            }
        } catch (\Exception $e) {
            Log::error($e->getMessage(), [
                'file' => $e->getFile(),
                'line' => $e->getLine(),
            ]);

            return response()->json([
                'status' => 'failed',
                'message' => 'Internal error happened. Try again.',
            ], 200);
        }
    }
}
