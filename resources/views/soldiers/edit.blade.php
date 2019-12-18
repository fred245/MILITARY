@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Soldier
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($soldier, ['route' => ['soldiers.update', $soldier->id], 'method' => 'patch']) !!}

                        @include('soldiers.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection