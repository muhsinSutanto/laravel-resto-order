@extends('layouts.app')

@section('content')
        <div>
                {{$pizza->name}} - {{$pizza->type}} - {{$pizza->base}}
        </div>
        <form action="/resto/{{$pizza->id}}" method="POST">
            @csrf
            @method('DELETE')
           <button>Complete order</button>
        </form>
        <a href="/resto">back to home</a>
    </body> 
@endsection 

