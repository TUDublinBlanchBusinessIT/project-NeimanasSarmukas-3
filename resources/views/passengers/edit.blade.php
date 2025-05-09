@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Passenger
        </h1>
    </section>
    <div class="content">
       @include('basic-template::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($passenger, ['route' => ['passengers.update', $passenger->pass_id], 'method' => 'patch']) !!}

                        @include('passengers.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
    </div>
@endsection