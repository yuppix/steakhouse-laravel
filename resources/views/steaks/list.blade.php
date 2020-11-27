@extends('layouts.app')

@section('content')
<div class="wrapper steak-index">
  <h1>Steak Orders</h1>
  @foreach($steaks as $steak)
    <div class="steak-item">
      <img src="/img/steak.jpg" alt="steak icon">
      <h4><a href="{{ route('steaks.show', $steak->id) }}">{{ $steak->customername }}</a></h4>
    </div>
  @endforeach

</div>

@endsection