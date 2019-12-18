@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Participes
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($participes, ['route' => ['participes.update', $participes->id], 'method' => 'patch']) !!}

                        @include('participes.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection