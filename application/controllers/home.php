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
        $menu = Dish::with('categories')->get();

        $weeklymenu = weeklymenu::order_by('created_at', 'desc')->take(4)->get();
        
        if($this->is_admin($user_data))
        {
            $admin = true;
            return View::make('home.menu')
                    ->with('weeklymenu', $weeklymenu)
                    ->with('admin', $admin);
        }
        else
        {
             $admin = false;
            return View::make('home.menu')
                    ->with('weeklymenu', $weeklymenu)
                    ->with('admin', $admin);
        }
    }    

    public function get_about()
    {
        return View::make('home.about');
    }    

    public function get_catering(){
        $categories = category::all();
        // dd($categories);
        return View::make('home.catering')
        ->with('categories', $categories);
    }

    public function get_new()
    {
         if($this->is_admin($user_data))
        {
            return View::make('home.new');
        }
        else
        {
            return Redirect::to('/');
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
            return View::make('home.edit')->with('weekly' ,weeklymenu::find($id));
        }
        else
        {
            return Redirect::to('/');
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

        return View::make('home.rate')
        ->with('user_data', $user_data)
        ->with('comments', $user);
        
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


    private function is_admin(&$user_data){
        $user_data = Session::get('oneauth');
        if($user_data['info']['uid'] == '567247458'){
            return true;
        }else{
            return false;
        }
    }



}
