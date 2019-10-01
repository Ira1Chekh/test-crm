@extends('layouts.app')

@section('content')

    <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div style="margin-left: 50px">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                    @endauth
                </div>
            @endif
    </div>
@endsection

