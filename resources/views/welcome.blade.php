@extends('layouts.layout')

@section('content')
        <div class="relative">
           <image class='resto-img' src="/images/resto.png" alt="resto-image"/>
           <div class='title'>
                Custom Resto Indonesia
           <p>{{session('msg')}}</p>
           <a href="{{route('resto.create')}}">Order Pizza</a>
        </div>
@endsection
