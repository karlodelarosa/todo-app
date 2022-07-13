@extends('layouts.client_guest')
@section('content')
    <div class="w-1/2 mx-auto  py-12 px-5">
        <div class="text-right mb-5">
            <a href="#" class="underline hover:opacity-50">Logout</a>
        </div>
        <img src="{{ asset('images/k_logo.PNG') }}" class="mx-auto w-28" alt="App logo">
        <br>
        <task></task>
    </div>
@endsection
