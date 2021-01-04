@extends('layouts.app')

@section('content')
        <div>
              <h1>add new pizza</h1>
              <form action="/resto" method="POST">
                @csrf
                  <label for="name">Your Name</label>
                  <input type="text" name="name" id="name">
                  <label for="type">Choose pizza type</label>
                  <select name="type" id="type">
                      <option value="west">West</option>
                      <option value="center">Center</option>
                      <option value="east">East</option>
                  </select>
                  <label for="base">Choose pizza base</label>
                  <select name="base" id="base">
                    <option value="cheese">Cheese</option>
                    <option value="meat">Meat</option>
                    <option value="milky">Milky</option>
                </select>
                <fieldset>
                    <label>Extra Topping</label>
                    <input type="checkbox" name="toppings[]" value="jamur">Jamur <br/>
                    <input type="checkbox" name="toppings[]" value="keju">Keju <br/>
                    <input type="checkbox" name="toppings[]" value="daging">Daging <br/>
                    <input type="checkbox" name="toppings[]" value="sosis">Sosis <br/>
                </fieldset>
                <input type="submit" value="order pizza">
              </form>
        </div>
    </body> 
@endsection 

