<table class="table table-responsive" id="vendorGuys-table">
    <thead>
        <th>Vendor Name</th>
        <th>Vendor Brand</th>
        <th>Vendor Password</th>
        <th>Vendor Sales</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($vendorGuys as $vendorGuy)
        <tr>
            <td>{!! $vendorGuy->vendor_name !!}</td>
            <td>{!! $vendorGuy->vendor_brand !!}</td>
            <td>{!! $vendorGuy->vendor_password !!}</td>
            <td>{!! $vendorGuy->vendor_sales !!}</td>
            <td>
                {!! Form::open(['route' => ['vendorGuys.destroy', $vendorGuy->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('vendorGuys.show', [$vendorGuy->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('vendorGuys.edit', [$vendorGuy->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>