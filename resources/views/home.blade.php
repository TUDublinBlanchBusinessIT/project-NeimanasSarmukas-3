@extends('layouts.app')

@section('content')
<div class="container text-center mt-5">
    <h1 class="mb-4">Welcome to the Cruise Management System</h1>

    <div class="d-grid gap-3 col-6 mx-auto">
        <a href="{{ route('ships.index') }}" class="btn btn-info btn-lg">View Ships</a>
        <a href="{{ route('crew_members.index') }}" class="btn btn-info btn-lg">View Crew Members</a>
        <a href="{{ route('cruises.index') }}" class="btn btn-info btn-lg">View Cruises</a>
        <a href="{{ route('ports.index') }}" class="btn btn-info btn-lg">View Ports</a>
        <a href="{{ route('passengers.index') }}" class="btn btn-info btn-lg">View Passengers</a>

        <!-- Logoff Button -->
        <a href="{{ route('logout') }}" 
           onclick="event.preventDefault(); document.getElementById('logout-form').submit();" 
           class="btn btn-danger btn-lg">Logoff</a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </div>
</div>
@endsection
