<div class="table-responsive">
    <table class="table" id="missions-table">
        <thead>
            <tr>
                <th>Name</th>
        <th>Place</th>
        <th>Start Date</th>
        <th>End Date</th>
        <th>Priority Id</th>
        <th>Description</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($missions as $missions)
            <tr>
                <td>{{ $missions->name }}</td>
            <td>{{ $missions->place }}</td>
            <td>{{ $missions->start_date }}</td>
            <td>{{ $missions->end_date }}</td>
            <td>{{ $missions->priority_id }}</td>
            <td>{{ $missions->description }}</td>
                <td>
                    {!! Form::open(['route' => ['missions.destroy', $missions->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('missions.show', [$missions->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('missions.edit', [$missions->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        <a href="{{ route('participes.create',["mission"=>$missions->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-user"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
