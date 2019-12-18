<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $missions->name }}</p>
</div>

<!-- Place Field -->
<div class="form-group">
    {!! Form::label('place', 'Place:') !!}
    <p>{{ $missions->place }}</p>
</div>

<!-- Start Date Field -->
<div class="form-group">
    {!! Form::label('start_date', 'Start Date:') !!}
    <p>{{ $missions->start_date }}</p>
</div>

<!-- End Date Field -->
<div class="form-group">
    {!! Form::label('end_date', 'End Date:') !!}
    <p>{{ $missions->end_date }}</p>
</div>

<!-- Priority Id Field -->
<div class="form-group">
    {!! Form::label('priority_id', 'Priority Id:') !!}
    <p>{{ $missions->priority_id }}</p>
</div>

<!-- Objective Id Field -->
<div class="form-group">
    {!! Form::label('objective_id', 'Objective Id:') !!}
    <p>{{ $missions->objective_id }}</p>
</div>

<!-- Description Field -->
<div class="form-group">
    {!! Form::label('description', 'Description:') !!}
    <p>{{ $missions->description }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $missions->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $missions->updated_at }}</p>
</div>
<!-- Evolution level of mission  -->

      {!! Form::label('evolution', 'Evolution:') !!} </br>
<div class="progress">
  <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 5%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">5%</div>
</div>
