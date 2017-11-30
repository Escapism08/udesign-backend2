<table class="table table-responsive" id="packages-table">
    <thead>
        <th>Package Name</th>
        <th>Package Category</th>
        <th>Package Description</th>
        <th>Package Offer</th>
        <th>Package Items From Existing Products</th>
        <th>Package Featured Images</th>
        <th>Package Image1</th>
        <th>Package Image2</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($packages as $packages)
        <tr>
            <td>{!! $packages->package_name !!}</td>
            <td>{!! $packages->package_category !!}</td>
            <td>{!! $packages->package_description !!}</td>
            <td>{!! $packages->package_offer !!}</td>
            <td>{!! $packages->package_items_from_existing_products !!}</td>
            <td>{!! $packages->package_featured_images !!}</td>
            <td>{!! $packages->package_image1 !!}</td>
            <td>{!! $packages->package_image2 !!}</td>
            <td>
                {!! Form::open(['route' => ['packages.destroy', $packages->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('packages.show', [$packages->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('packages.edit', [$packages->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>