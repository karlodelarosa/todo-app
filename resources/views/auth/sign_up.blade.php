@extends('layouts.client_guest')
@section('content')
    <div class="min-h-full flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-md w-full space-y-8">
            <div class="mt-20">
                <img src="{{ asset('images/k_logo.PNG') }}" class="mx-auto w-28" alt="App logo">
                <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">Create your account</h2>
            </div>
            <sign-up></sign-up>
        </div>
    </div>
@endsection
