@extends('layouts.app')

@section('content')
<div class="wrapper steak-details">
  <h1>Order for {{ $steak->name }}</h1>
  <p class="beeftype">Beef Type - {{ $steak->beeftype }}</p>
  <p class="doneness">Doneness - {{ $steak->doneness }}</p>
  <p class="sidedish">Sidedish - {{ $steak->sidedish }}</p>
  <p class="sauces">Sauces:</p>
  <ul>
    @foreach($steak->sauces as $sauce)
      <li>{{ $sauce }}</li>
    @endforeach
  </ul>
  <form action="{{ route('steaks.destroy', $steak->id) }}" method="POST">
    @csrf
    @method('DELETE')
    <button>Complete Order</button>
  </form>
</div>
<a href="{{ route('steaks.list') }}" class="back"><- Back to all steaks</a>
@endsection