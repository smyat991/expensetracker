<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;


class UserController extends Controller
{
	public function useredit()
	{
		$users=Auth::user(); 
		return view('frontend.useredit', compact('users'));
	}
    public function userupdate($id, Request $request)
    {
    	$users=User::findOrFail($id);

    	$users->name=$request->get('name');

    	$users->email=$request->get('email');

    	$users->save();

    	return redirect()->back();

    }

    public function rules()
    {

    	$users_id = \Route::current()->getParameter('users');

    	return[
    		'name' => 'required',
    		'email' => 'unique:users,email,'.$users_id.'|email|required',
    	];
    }
}
