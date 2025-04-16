@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            port
        </h1>
    </section>
    <div class="content">
       @include('basic-template::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($port, ['route' => ['ports.update', $port->port_id], 'method' => 'patch']) !!}

                        @include('ports.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
    </div>
@endsection