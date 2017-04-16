<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;

class UserController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function registrationPage() {
        $user = new User();
        return view('register', ['user' => $user]);
    }

	public function registerUser(Request $request) {
		$this->validate($request, $this->rules());
		dd($request->all());
	}

	public function rules() {
		return [
			'first_name' => 'required|max:60',
			'last_name' => 'required|max:60',
			'user_type' => 'required|in:student,business',
			'email' => 'required|unique:users,email|email',
			'password' => 'required|max:60|confirmed',
		];
	}
}
