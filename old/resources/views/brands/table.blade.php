<table class="table table-responsive" id="brands-table">
    <thead>
        <th>Brand Name</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($brands as $brand)
        <tr>
            <td>{!! $brand->brand_name !!}</td>
            <td>
                {!! Form::open(['route' => ['brands.destroy', $brand->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('brands.show', [$brand->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('brands.edit', [$brand->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>