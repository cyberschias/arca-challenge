<table class="m-table table table-bordered table-hover table-responsive ">
    <thead>
        <th>Title</th>
        <th colspan="3">Actions</th>
    </thead>
    <tbody>
    @foreach($categories as $category)
        <tr>
            <td>{!! $category->title !!}</td>
            <td>
                {!! Form::open(['route' => ['categories.destroy', $category->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('categories.edit', [$category->id]) !!}" class='btn btn-primary btn-xs' data-toggle="tooltip" title="Edit">
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
