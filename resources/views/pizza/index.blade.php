@extends('layouts.app')

@section('content')
        <div>
                @foreach($pizzas as $pizza)
                <div>
                  {{$pizza->name}} - {{$pizza->base}} - {{$pizza->type}}
                </div>
                <div>
                @foreach ($pizza->toppings as $topping)
                        <ul>
                                <li>
                                        {{$topping}}
                                </li>
                        </ul>
                    
                @endforeach
                </div>
                @endforeach
        </div>
    </body> 
@endsection 

