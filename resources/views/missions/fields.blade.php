<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Place Field -->
<div class="form-group col-sm-6">
    {!! Form::label('place', 'Place:') !!}
    {!! Form::text('place', null, ['class' => 'form-control']) !!}
</div>

<!-- Start Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('start_date', 'Start Date:') !!}
    {!! Form::date('start_date', null, ['class' => 'form-control','id'=>'start_date']) !!}
</div>

@section('scripts')
    <script type="text/javascript">
        $('#start_date').datetimepicker({
            format: 'YYYY-MM-DD',
            useCurrent: false
        })
    </script>
@endsection

<!-- End Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('end_date', 'End Date:') !!}
    {!! Form::date('end_date', null, ['class' => 'form-control','id'=>'end_date']) !!}
</div>

@section('scripts')
    <script type="text/javascript">
        $('#end_date').datetimepicker({
            format: 'YYYY-MM-DD ',
            useCurrent: false
        })
    </script>
@endsection

<!-- Priority Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('priority_id', 'Priority Id:') !!}
    {!! Form::select('priority_id', $prioritys , null, ['class' => 'form-control']) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control','minlength' => 10]) !!}
</div>

<!-- Objective Id Field -->
<div class="form-group col-sm-6">

        {!! Form::label('objective_id', ' Objectve Id:') !!}
        {!! Form::select('objective_id', $objectives , null, ['class' => 'form-control']) !!}


        <input type="button" onclick="add()" value='add'>

</div>

 @section('scripts')
            <script>
            $(document).ready(function(){

              $(document).on('click', '.add', function(){
                 var html= '<tr>';
                 html +='<td><div class="form-group col-sm-6">

                                 <select name="objective_id[]" class="form-control">  <option><?php echo $objectives; ?> </option>
                                 </select>
                                </div></td>';
                html +='<td><button type="button" name="Remove" class=" btn btn-danger"></button></td></tr>';

                $('#item_table').append(html);

              });

              $(document).on('click','.remove', function(){
                    $(this).closest('tr').remove();
              });

            });
      </script>
  @endsection

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('missions.index') }}" class="btn btn-default">Cancel</a>
</div>
