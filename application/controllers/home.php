<?php

class Home_Controller extends Base_Controller {

    public $restful = true;    

    public function get_index()
    {
        return View::make('home.index')->with('weekly', Weekly::all());
    }    

    public function get_menu()
    {
        return View::make('home.menu')->with('weekly', Weekly::all());
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
        $day = Input::get('day');
        $name = Input::get('name');
        $description = Input::get('description');
        $price = Input::get('price');

        Weekly::create(array(
            'day' => $day, 'description' => $description, 'name' => $name, 'price' => $price
        ));
        return Redirect::to('home/menu');
    }
    public function delete_destroy()
    {
         $id = Input::get('id');
         Weekly::find($id)->delete();
         return Redirect::to('home/menu');
    }

    public function get_edit($id)
    {
        return View::make('home.edit')->with('weekly' ,Weekly::find($id));
    }

    public function put_update()
    {
        $id = Input::get('id');
        Weekly::update($id, array(
                'name' => Input::get('name'),
                'day' => Input::get('day'),
                'price' => Input::get('price'),
                'description' => Input::get('description')

        ));
        return Redirect::to('home/menu');
    }

    public function post_search()
    {
        $searchword = Input::get('searchword');

        $result = Weekly::where('name', 'LIKE', '%'.$searchword.'%')
        ->or_where('description', 'LIKE', '%'.$searchword.'%')
        ->select('*')->get();

        return View::make('home.search')
            ->with('results', $result)
            ->with('word', $searchword);

    }
}
