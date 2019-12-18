<div class="table-responsive">
    <table class="table" id="priorities-table">
        <thead>
            <tr>
                <th>Name</th>
        <th>Description</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($priorities as $priority)
            <tr>
                <td>{{ $priority->name }}</td>
            <td>{{ $priority->description }}</td>
                <td>
                    {!! Form::open(['route' => ['priorities.destroy', $priority->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('priorities.show', [$priority->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('priorities.edit', [$priority->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
