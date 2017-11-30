<table class="table table-responsive" id="newProducts-table">
    <thead>
        <th>Product Name</th>
        <th>Product Brand</th>
        <th>Product Image</th>
        <th>Product Category</th>
        <th>Product Image 2</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($newProducts as $newProduct)
        <tr>
            <td>{!! $newProduct->product_name !!}</td>
            <td>{!! $newProduct->product_brand !!}</td>
            <td>{!! $newProduct->product_image !!}</td>
            <td>{!! $newProduct->product_category !!}</td>
            <td>{!! $newProduct->product_image_2 !!}</td>
            <td>
                {!! Form::open(['route' => ['newProducts.destroy', $newProduct->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('newProducts.show', [$newProduct->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('newProducts.edit', [$newProduct->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>