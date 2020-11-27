@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="wrapper create-steak">
            <h1>Create a New Steak Order</h1>
            <form action="{{ route('steaks.store') }}" method="POST">
              @csrf
              <label for="customername">Your name:</label>
              <input type="text" name="customername" id="customername" required>
              <label for="beeftype">Choose type of beef:</label>
              <select name="beeftype" id="beeftype">
                <option value="black angus">Black Angus</option>
                <option value="charolais">Charolais</option>
                <option value="hereford">Hereford</option>
                <option value="simmental">Simmental</option>
              </select>
              <label for="doneness">Choose Doneness:</label>
              <select name="doneness" id="doneness">
                <option value="rare">Rare</option>
                <option value="medium rare">Medium Rare</option>
                <option value="medium">Medium</option>
                <option value="medium well">Medium Well</option>
              </select>
              <label for="sidedish">Choose Sidedish:</label>
              <select name="sidedish" id="sidedish">
                <option value="sweet potato">Sweet potato</option>
                <option value="mashed potato">Mashed Potato</option>
                <option value="coleslaw">Coleslaw</option>
              </select>              
              <fieldset>
                <label>Sauces:</label>
                <input type="checkbox" name="sauces[]" value="mayo">Mayo<br />
                <input type="checkbox" name="sauces[]" value="chili mayo">Chili Mayo<br />
                <input type="checkbox" name="sauces[]" value="bbq">BBQ<br />
              </fieldset>
              <input type="submit" value="Order Steak">
            </form>
          </div>
        </div>
    </div>
</div>  
@endsection