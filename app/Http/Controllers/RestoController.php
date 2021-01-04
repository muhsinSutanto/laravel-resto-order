<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;

class RestoController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
    //   $pizzas = Menu::all();
        // $pizzas = Menu::orderBy('name','desc')->get();
        // $pizzas = Menu::where('type','center')->get();
        $pizzas = Menu::latest()->get();
    
        $name = request('name');
    
        return view('pizza.index', [
            "pizzas" => $pizzas, 
            "name" => $name,
            "age" => request('age')
            ]);
    }

    public function show($id){
        $pizza = Menu::find($id);

        return view('pizza.show', ['id' => $id, 'pizza' => $pizza ]);
    }

    public function create(){
        return view('pizza.create');
    }

    public function store(){
        $pizza = new Menu;
        $pizza->name = request('name');
        $pizza->type = request('type');
        $pizza->base = request('base');
        $pizza->toppings = request('toppings');

        // error_log($pizza);
        $pizza->save();

        return redirect('/')->with('msg','thaks for the order');
    }

    public function destroy($id){
        $pizza = Menu::findOrFail($id);
        $pizza->delete();

        return redirect('/resto');
    }
}
