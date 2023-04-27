@extends('layout')
@section('title', 'Computers')
@section('content')
<div class="max-w-7xl mx-auto p-6 lg:p-8">
    <div class="flex justify-center">
        <h1>Computers</h1>
    </div>

    <div>
        @if(count($computers) > 0)
        <ul>
            @foreach ($computers as $computer)
            <a href="{{ route('computers.show', ['computer' => $computer['id']]) }}">
           
                <li>{{ $computer['name'] }} ({{ $computer['origin'] }}) - <strong>{{ $computer['price'] }}$</strong></li>
            </a>
            @endforeach
        </ul>
        @else
        <p>There is no Computers to display</p>
        @endif
    </div>

</div>
@endsection