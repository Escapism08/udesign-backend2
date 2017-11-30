<table class="table table-responsive" id="productzs-table">
    <thead>
        <th>Product Name</th>
        <th>Product Type</th>
        <th>Product Brand</th>
        <th>Product Category</th>
        <th>Product Image</th>
        <th>Product Image2</th>
        <th>Product Price</th>
        <th>Product Old Price</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($productzs as $productz)
        <tr>
            <td>{!! $productz->product_name !!}</td>
            <td>{!! $productz->product_type !!}</td>
            <td>{!! $productz->product_brand !!}</td>
            <td>{!! $productz->product_category !!}</td>
            <td>{!! $productz->product_image !!}</td>
            <td>{!! $productz->product_image2 !!}</td>
            <td>{!! $productz->product_price !!}</td>
            <td>{!! $productz->product_old_price !!}</td>
            <td>
                {!! Form::open(['route' => ['productzs.destroy', $productz->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('productzs.show', [$productz->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('productzs.edit', [$productz->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>