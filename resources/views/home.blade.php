@extends('layouts.app')

@section('content')
<div class="container text-center mt-5">
    <h1 class="mb-4">Welcome to the Dashboard</h1>

    <div class="d-grid gap-3 col-6 mx-auto">
        <a href="{{ route('passengers.index') }}" class="btn btn-primary btn-lg">View Passengers</a>
        <a href="{{ route('cruises.index') }}" class="btn btn-success btn-lg">View Cruises</a>
        <a href="{{ route('logout') }}" 
           onclick="event.preventDefault(); document.getElementById('logout-form').submit();" 
           class="btn btn-danger btn-lg">Logout</a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </div>
</div>
@endsection

