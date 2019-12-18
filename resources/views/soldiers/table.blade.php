<div class="table-responsive">
    <table class="table" id="soldiers-table">
        <thead>
            <tr>
                <th>Name</th>
        <th>Email</th>
        <th>Birthday</th>
        <th>Phone</th>
        <th>Department </th>
        <th>Grade </th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($soldiers as $soldier)
            <tr>
                <td>{{ $soldier->name }}</td>
            <td>{{ $soldier->email }}</td>
            <td>{{ $soldier->birthday }}</td>
            <td>{{ $soldier->phone }}</td>
            <td>{{ $soldier->department_id }}</td>
            <td>{{ $soldier->grade_id }}</td>
                <td>
                    {!! Form::open(['route' => ['soldiers.destroy', $soldier->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('soldiers.show', [$soldier->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('soldiers.edit', [$soldier->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
