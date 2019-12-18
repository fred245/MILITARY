<div class="table-responsive">
    <table class="table" id="objectives-table">
        <thead>
            <tr>
                <th>Name</th>
        <th>Completed</th>
        <th>Description</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($objectives as $objective)
            <tr>
                <td>{{ $objective->name }}</td>
            <td>{{ $objective->completed }}</td>
            <td>{{ $objective->description }}</td>
                <td>
                    {!! Form::open(['route' => ['objectives.destroy', $objective->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('objectives.show', [$objective->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('objectives.edit', [$objective->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
