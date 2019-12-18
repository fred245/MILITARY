@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Grade
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($grade, ['route' => ['grades.update', $grade->id], 'method' => 'patch']) !!}

                        @include('grades.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection