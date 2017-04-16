<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class DashboardController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function show() {
		$user = Auth::user();
		if ($user->user_type == 'student') {
			return view('student.dashboard', ['user' => $user]);
		} elseif ($user->user_type == 'business') {
			return view('business.dashboard', ['user' => $user]);
		}
    }
}
