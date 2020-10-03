@extends('layouts.app')

@section('content')
  <div class="flex">
    <div class="flex-1">
      @include ('sidebar')
    </div>
    <div class="flex-1">
      @include ('cheeps')
    </div> 
    <div class="flex-1">
      @include ('friends')
    </div>
  </div> 
@endsection
