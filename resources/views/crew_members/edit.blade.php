@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            crew_member
        </h1>
    </section>
    <div class="content">
       @include('basic-template::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($crewMember, ['route' => ['crew_members.update', $crewMember->crew_id], 'method' => 'patch']) !!}

                        @include('crew_members.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
    </div>
@endsection