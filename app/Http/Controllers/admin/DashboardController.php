<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Modals\User;
use App\Modals\member;
class DashboardController extends Controller
{
     function index()
    {
      // $data = member::all();
        return DB::select(" select * from users");     //view('admin.register' ['members'=>$data]);
    }
}
