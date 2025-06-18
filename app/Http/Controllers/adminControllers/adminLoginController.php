<?php

namespace App\Http\Controllers\adminControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class adminLoginController extends Controller
{
    public function adminLogin(Request $request)
    {   
        return view('admin.adminLogin');
    }

    public function checkCredential(Request $request)
    {
        $validator = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        session_start();
        if ($validator['email'] == 'prabhat@gmail.com' && $validator['password'] == 'hello123') {
            session([
                'admin_email' => $validator['email'],
                'is_admin_logged_in' => true,
            ]);
            return redirect()->to('adminDashboard');
        } else {
            return redirect()->back()->with('error', 'Invalid credentials');
        }
    }


    public function adminLogout(){

        session()->flush();
        return redirect()->to('adminLogin');
    }

}
