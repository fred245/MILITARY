<div class="table-responsive">
    <table class="table" id="participes-table">
        <thead>
            <tr>
                <th>Soldiers Id</th>
        <th>Mission Id</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($participes as $participes)
            <tr>
                <td>{{ $participes->soldiers_id }}</td>
            <td>{{ $participes->mission_id }}</td>
                <td>
                    {!! Form::open(['route' => ['participes.destroy', $participes->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('participes.show', [$participes->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('participes.edit', [$participes->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
