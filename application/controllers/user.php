<?php

class User_Controller extends Base_Controller {    
	public $restful = true;

	public function get_login()
    {
    	dd($user_data);
    	return 'action_login';
    }

    public function get_register(){
    	$user_data = Session::get('oneauth');
    	$userExist = DB::table('users')->where('uid', '=', $user_data['info']['uid'])->select('*')->first();
    	 // dd($userExist);
    	if(is_null($userExist)){
	    	$user = new User;
	    	$user->uid = $user_data['info']['uid'];
	    	$user->name = $user_data['info']['name'];
	    	$user->image = $user_data['info']['image'];
	    	$user->facebooklink = "http://www.facebook.com/" . $user_data['info']['nickname'];
	    	$user->save();
	    	return Redirect::to('home/rate')->with('status', 'Welcome Back!');
    	}else{   
            // dd($user_data);
            return Redirect::to('home/rate')->with('user_data', $user_data);
        }

    }

}