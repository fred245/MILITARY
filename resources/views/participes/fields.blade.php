<!-- Soldiers Id Field -->
<div class="form-group col-sm-6">
      {!! Form::label('soldiers_id', 'Soldiers Id:') !!}
      {!! Form::select('soldiers_id', $sil, null , ['class' => 'form-control']) !!}
</div>
<!-- Mission Id Field-->
<div class="form-group col-sm-6">
    {!! Form::label('', '') !!}
    {!! Form::hidden('mission_id',  $_GET['mission'], ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-12">
    <button class="btn btn-success" onclick=" add_formulae()">add soldier</button>
</div>
<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('participes.index') }}" class="btn btn-default">Cancel</a>
</div>
