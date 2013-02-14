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

    

    	// $arrayWithData = array(
     //            'uid' => $user_data['uid'],
     //            'name' => $user_data['name'],
     //            'image' => $user_data['image'],
     //            'facebooklink' => "http://www.facebook.com/" . $user_data['nickname']
     //            );
    	// dd($user_data);
    	$user = new User;

    	$user->uid = $user_data['info']['uid'];
    	$user->name = $user_data['info']['name'];
    	$user->image = $user_data['info']['image'];
    	$user->facebooklink = "http://www.facebook.com/" . $user_data['info']['nickname'];
    	$user->save();
    	// User::save(array(
     //            'uid' => $user_data['uid'],
     //            'name' => $user_data['name'],
     //            'image' => $user_data['image'],
     //            'facebooklink' => "http://www.facebook.com/" . $user_data['nickname']
     //            ));

    	//dd($arrayWithData);

    	return ;
    }

}