@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">Crew Members</h1>
        <h1 class="pull-right">
            <!-- Add New button -->
            <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('crew_members.create') !!}">Add New</a>
        </h1>
    </section>
    <div class="content">
        @include('basic-template::common.errors')

        <!-- The form has been removed -->

        <div class="box box-primary">
            <div class="box-body">
                <!-- Include table of crew members -->
                @include('crew_members.table', ['crewMembers' => $crewMembers])
            </div>
        </div>
    </div>
@endsection
