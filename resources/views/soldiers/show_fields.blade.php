<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $soldier->name }}</p>
</div>

<!-- Email Field -->
<div class="form-group">
    {!! Form::label('email', 'Email:') !!}
    <p>{{ $soldier->email }}</p>
</div>

<!-- Birthday Field -->
<div class="form-group">
    {!! Form::label('birthday', 'Birthday:') !!}
    <p>{{ $soldier->birthday }}</p>
</div>

<!-- Phone Field -->
<div class="form-group">
    {!! Form::label('phone', 'Phone:') !!}
    <p>{{ $soldier->phone }}</p>
</div>

<!-- Department Id Field -->
<div class="form-group">
    {!! Form::label('department_id', 'Department Id:') !!}
    <p>{{ $soldier->department_id }}</p>
</div>

<!-- Grade Id Field -->
<div class="form-group">
    {!! Form::label('grade_id', 'Grade Id:') !!}
    <p>{{ $soldier->grade_id }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $soldier->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $soldier->updated_at }}</p>
</div>

