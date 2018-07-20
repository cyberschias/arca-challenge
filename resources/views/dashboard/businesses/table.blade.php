<table class="m-table table table-bordered table-hover table-responsive ">
    <thead>
    <th>Title</th>
    <th>Phone</th>
    <th>Address</th>
    <th>City</th>
    <th>State</th>
    <th>Zip Code</th>
    <th colspan="3">Actions</th>
    </thead>
    <tbody>
    @if(isset($businesses) and $businesses and count($businesses) > 0)
        @foreach($businesses as $business)
            <tr>
                <td>{!! $business->title !!}</td>
                <td>{!! $business->phone !!}</td>
                <td>{!! $business->address !!}</td>
                <td>{!! $business->city !!}</td>
                <td>{!! $business->state !!}</td>
                <td>{!! $business->zipcode !!}</td>
                <td>
                    {!! Form::open(['route' => ['businesses.destroy', $business->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('businesses.edit', [$business->id]) !!}" class='btn btn-primary btn-xs' data-toggle="tooltip" title="Edit">
                            <i class="fa fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['data-toggle' => 'tooltip', 'title' => 'Destroy', 'type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Do you really want to destroy?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
    @else
        <tr>
            <td colspan="100" class="text-center"><strong>No records yet</strong></td>

        </tr>
    @endif
    </tbody>
</table>
