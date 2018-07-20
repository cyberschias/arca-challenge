<table class="m-table table table-bordered table-hover table-responsive ">
    <thead>
        <th>Name</th>
        <th>Email</th>
        <th>Username</th>
        <th colspan="3">Actions</th>
    </thead>
    <tbody>
    @foreach($users as $user)
        <tr>
            <td>{!! $user->name !!}</td>
            <td>{!! $user->email !!}</td>
            <td>{!! $user->username !!}</td>
            <td>
                {!! Form::open(['route' => ['users.destroy', $user->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('users.edit', [$user->id]) !!}" class='btn btn-primary btn-xs' data-toggle="tooltip" title="Edit">
                        <i class="fa fa-edit"></i>
                    </a>
                    {!! Form::button('<i class="fa fa-trash"></i>', ['data-toggle' => 'tooltip', 'title' => 'Destroy', 'type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Do you really want to destroy?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
