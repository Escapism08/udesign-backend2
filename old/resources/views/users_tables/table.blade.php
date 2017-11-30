<table class="table table-responsive" id="usersTables-table">
    <thead>
        <th>User Name</th>
        <th>User Password</th>
        <th>User Image</th>
        <th>User Subscription Type</th>
        <th>User Age</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($usersTables as $usersTable)
        <tr>
            <td>{!! $usersTable->user_name !!}</td>
            <td>{!! $usersTable->user_password !!}</td>
            <td>{!! $usersTable->user_image !!}</td>
            <td>{!! $usersTable->user_subscription_type !!}</td>
            <td>{!! $usersTable->user_age !!}</td>
            <td>
                {!! Form::open(['route' => ['usersTables.destroy', $usersTable->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('usersTables.show', [$usersTable->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('usersTables.edit', [$usersTable->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>