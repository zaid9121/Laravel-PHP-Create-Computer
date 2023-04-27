@extends('layout')
@section('title', ' Show Computer')
@section('content')
<div class="max-w-7xl mx-auto p-6 lg:p-8">
    <div class="flex justify-center">
        <h1>Computers</h1>
    </div>

    <div class="mt-8">
      <p>{{ $computer['name'] }} ({{ $computer['origin'] }}) - <strong>{{ $computer['price'] }}$</strong></p>
    </div>
    <a class="edit-btn" href="{{route('computers.edit', $computer->id)}}">edit</a>

    <form action="{{route('computers.destroy', $computer->id)}}" method="post">
    @csrf
    @method('DELETE')
    <input class="delete-btn" type="submit" value="delete">
    </form>

</div>
@endsection