<?php

namespace App\Http\Controllers\Admin\User;

use App\Models\c;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth as FacadesAuth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Admin.User.login',[
            'title' => 'Hệ thống đăng nhập'
        ]);
    }
    public function store(Request $request)
    {
        

        $request->validate([
            'email' => 'required|email:filter',
            'password' => 'required'
        ]);
        if(FacadesAuth::attempt([
            'email' => $request->input('email'),
            'password' => $request->input('password')
        ],$request->input('remember'))){
            return redirect()->route('admin');
        }
        Session::flash('error','Email hoặc Password không chính xác');
        return redirect()->back();
    }

}
