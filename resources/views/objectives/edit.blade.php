@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Objective
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($objective, ['route' => ['objectives.update', $objective->id], 'method' => 'patch']) !!}

                        @include('objectives.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection