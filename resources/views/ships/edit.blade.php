@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            ship
        </h1>
    </section>
    <div class="content">
       @include('basic-template::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($ship, ['route' => ['ships.update', $ship->ship_id], 'method' => 'patch']) !!}

                        @include('ships.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
    </div>
@endsection