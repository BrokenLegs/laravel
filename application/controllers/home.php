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
        // dd($user_data);
    
        return View::make('home.rate')
        ->with('user_data', $user_data);
        
    }
}
