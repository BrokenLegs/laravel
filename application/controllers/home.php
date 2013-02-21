<?php

class Home_Controller extends Base_Controller {

    public $restful = true;    

    public function get_index()
    {
        $weeklymenu = weeklymenu::order_by('created_at', 'desc')->take(2)->get();
        return View::make('home.index')->with('weeklymenu', $weeklymenu);
    }    

    public function get_menu()
    {
        $weeklymenu = weeklymenu::order_by('created_at', 'desc')->take(4)->get();
        return View::make('home.menu')->with('weeklymenu', $weeklymenu);
    }    

    public function get_about()
    {
        return View::make('home.about');
    }    

    public function get_catering(){
        return View::make('home.catering');
    }

    public function get_new()
    {
       return View::make('home.new');
    }
    public function post_new()
    {
        $week = Input::get('week');
        $name1 = Input::get('name1');
        $description1 = Input::get('description1');
        $name2 = Input::get('name2');
        $description2 = Input::get('description2');


        weeklymenu::create(array(
            'week' => $week, 'description1' => $description1, 'name1' => $name1, 'description2' => $description2, 'name2' => $name2
        ));
        return Redirect::to('home/menu');
    }
    public function delete_destroy()
    {
         $id = Input::get('id');
         weeklymenu::find($id)->delete();
         return Redirect::to('home/menu');
    }

    public function get_edit($id)
    {
        return View::make('home.edit')->with('weekly' ,weeklymenu::find($id));
    }

    public function put_update()
    {
        $id = Input::get('id');
        weeklymenu::update($id, array(
                'week' => Input::get('week'),
                'name1' => Input::get('name1'),
                'description1' => Input::get('description1'),
                'name2' => Input::get('name2'),
                'description2' => Input::get('description2')
        ));
        return Redirect::to('home/menu');
    }

    public function post_search()
    {
        $searchword = Input::get('searchword');

        $result = weeklymenu::where('name', 'LIKE', '%'.$searchword.'%')
        ->or_where('description', 'LIKE', '%'.$searchword.'%')
        ->select('*')->get();

        return View::make('home.search')
            ->with('results', $result)
            ->with('word', $searchword);

    }
    public function get_rate(){
        $user_data = Session::get('oneauth');
     
       $user = DB::table('users')
            ->join('comments', 'users.uid', '=', 'comments.user_uid')
            ->order_by('created_at', 'desc')
            ->take(2)->get();
            // dd($user_data);
        
        // $orders = DB::->paginate(2);

        $ratings = Rating::all();

        return View::make('home.rate')
        ->with('user_data', $user_data)
        ->with('comments', $user)
        ->with('ratings', $ratings);
        
    }

  public function get_test()
    {
        $user = DB::table('users')
            ->join('comments', 'users.uid', '=', 'comments.user_uid')
            ->get();

            $commentlist = '';

           foreach($user as $comment)
            {
                $commentlist .= '<li><div class="commentContent">
                            <div class="fbimgContainer span1">
                                <img src="'.$comment->image.'" class="fbimg">
                            </div>
                            <div class="span6">
                                <a href="'.$comment->facebooklink.'" class="fblink" target="_blank">'.$comment->name.'</a>
                            </div>
                            <div class="span6">

                                <p>'.$comment->body.'</p>
                            </div>
                        </div>
                        <div class="span7"><hr></div></li>';
            }

            return View::make('home.test')
            ->with('comments',$commentlist);

    }

    public function post_comment(){
        $user_data = Session::get('oneauth');
        $body = Input::get('body');
         // dd($user_data['info']['uid']);
        // dd($body);
        if(!is_null($user_data)){
            Comment::create(array(
                'user_uid' => $user_data['info']['uid'], 'body' => $body
            ));
            return Redirect::to('home/rate');    
        }else{
            $errormsg = '<br>Du måste vara inloggad för att kunna kommentera<br><br>Logga in genom din <a href="http://laravel.dev/connect/session/facebook">facebook</a>';
            return Redirect::to('home/rate')->with('errormsg', $errormsg);
        }


    }

    public function post_rating(){
        $user_data = Session::get('oneauth');
         // dd($user_data['info']['uid']);
        // dd($body);
        if(!is_null($user_data)){
            Comment::create(array(
                'facebook_id' => $user_data['info']['uid'], 'value' => $value
            ));
            return Redirect::to('home/rate');    
        }else{
            $errormsg = '<br>Du måste vara inloggad för att kunna betygssätta<br><br>Logga in genom din <a href="http://laravel.dev/connect/session/facebook">facebook</a>';
            return Redirect::to('home/rate')->with('errormsg', $errormsg);
        }
    }

    public function is_logged_in($user_data){
        // $user_data = Session::get('oneauth');
        if(!is_null($user_data)){
            return true;
        }else{
            return false;
        }
    }



}
