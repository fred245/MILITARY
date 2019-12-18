<div class="table-responsive">
    <table class="table" id="grades-table">
        <thead>
            <tr>
                <th>Name</th>
        <th>Description</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($grades as $grade)
            <tr>
                <td>{{ $grade->name }}</td>
            <td>{{ $grade->description }}</td>
                <td>
                    {!! Form::open(['route' => ['grades.destroy', $grade->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('grades.show', [$grade->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('grades.edit', [$grade->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
