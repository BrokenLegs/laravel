<?php

class Home_Controller extends Base_Controller {

    public $restful = true;    

    public function get_index()
    {

        $weeklymenu = weeklymenu::order_by('created_at', 'desc')->take(2)->get();
        return View::make('home.index')->with('weeklymenu', $weeklymenu)
        ->with('user_data', Session::get('oneauth'));
    }    

    public function get_menu()
    {
        $menu = Dish::with('categories')->get();

        $weeklymenu = weeklymenu::order_by('created_at', 'desc')->take(4)->get();
        
        if($this->is_admin($user_data))
        {
            $admin = true;
            return View::make('home.menu')

                    ->with('weeklymenu', $weeklymenu)
                    ->with('admin', $admin)
                    ->with('user_data', Session::get('oneauth'));
        }
        else
        {
             $admin = false;
            return View::make('home.menu')
                    ->with('weeklymenu', $weeklymenu)
                    ->with('admin', $admin)
                    ->with('user_data', Session::get('oneauth'));
        }
    }    

    public function get_about()
    {
        return View::make('home.about')
        ->with('user_data', Session::get('oneauth'));
    }    

    public function get_catering(){
        $categories = category::all();
        // dd($categories);
        return View::make('home.catering')
        ->with('categories', $categories)
        ->with('user_data', Session::get('oneauth'));
    }

    public function get_new()
    {
         if($this->is_admin($user_data))
        {
            return View::make('home.new')
            ->with('user_data', Session::get('oneauth'));
        }
        else
        {
            return Redirect::to('/')
            ->with('user_data', Session::get('oneauth'));
        }
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
        if($this->is_admin($user_data))
        {
            return View::make('home.edit')->with('weekly' ,weeklymenu::find($id))
            ->with('user_data', Session::get('oneauth'));
        }
        else
        {
            return Redirect::to('/')
            ->with('user_data', Session::get('oneauth'));;
        }
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
        $searchword = e(Input::get('searchword'));

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
            ->take(5)
            ->get();

        $ratings = User::where('rating', '>', '0')->get();

        $userRows = User::all();

        $yourRating = 0;

        foreach($userRows as $userRow)
        {
            if($user_data['info']['uid'] == $userRow->uid && $userRow->rating > 0){
                $yourRating = $userRow->rating;
            }
        }

        return View::make('home.rate')
        ->with('user_data', $user_data)
        ->with('comments', $user)
        ->with('ratings', $ratings)
        ->with('yourRating', $yourRating);
        
    }

    public function post_rating(){

        $user_data = Session::get('oneauth');
        $rating = Input::get('myvote');
         // dd($user_data['info']['uid']);
        // dd($body);
        if(!is_null($user_data)){
            $affected = DB::table('users')
            ->where('uid', '=', $user_data['info']['uid'])
            ->update(array(
                'rating' => $rating
            ));
            return Redirect::to('home/rate');    
        }else{
            $errormsg = '<br>Du måste vara inloggad för att kunna betygssätta<br><br>Logga in genom din <a href="http://laravel.dev/connect/session/facebook">facebook</a>';
            return Redirect::to('home/rate')->with('errormsg', $errormsg);
        }
    }  

  public function get_test()
    {
        $user = DB::table('users')
            ->join('comments', 'users.uid', '=', 'comments.user_uid')
            ->order_by('created_at', 'desc')
            ->paginate(5);
            // dd($user);


            return View::make('home.test')
            ->with('user',$user);
    }

    

    public function post_comment(){
        if($this->is_logged_in($user_data)){
            $body = e(Input::get('body'));
            Comment::create(array(
                'user_uid' => $user_data['info']['uid'], 'body' => $body
            ));
            return Redirect::to('home/rate');    
        }else{
            $errormsg = '<script>$(\'#myModal\').modal(\'show\')</script>';

            return Redirect::to('home/rate')->with('errormsg', $errormsg);
        }


    }

    private function is_logged_in(&$user_data){
        $user_data = Session::get('oneauth');
        if(!is_null($user_data)){
            return true;
        }else{
            return false;
        }
    }

    public function get_logout() 
    {
        Session::forget('oneauth');
        return Redirect::to('home/rate');
    }

    private function is_admin(&$user_data){
        $user_data = Session::get('oneauth');
        if($user_data['info']['uid'] == '567247458' || $user_data['info']['uid'] == '100002914582171'){
            return true;
        }else{
            return false;
        }
    }



}
