

<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::text('email', null, ['class' => 'form-control']) !!}
</div>

<!-- Birthday Field -->
<div class="form-group col-sm-6">
    {!! Form::label('birthday', 'Birthday:') !!}
    {!! Form::date('birthday', null, ['class' => 'form-control','id'=>'birthday']) !!}
</div>

@section('scripts')
    <script type="text/javascript">
        $('#birthday').datetimepicker({
            format: 'YYYY-MM-DD',
            useCurrent: false
        })
    </script>
@endsection

<!-- Phone Field -->
<div class="form-group col-sm-6">
    {!! Form::label('phone', 'Phone:') !!}
    {!! Form::text('phone', null, ['class' => 'form-control','minlength' => 5]) !!}
</div>

<!-- Department Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('department_id', 'Select the Department:') !!}
    {!! Form::select('department_id', $departments , null, ['class' => 'form-control']) !!}
</div>

<!-- Grade Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('grade_id', 'Select the Grade :') !!}
    {!! Form::select('grade_id', $grades, null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('soldiers.index') }}" class="btn btn-default">Cancel</a>
</div>
