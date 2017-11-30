<table class="table table-responsive" id="promotions-table">
    <thead>
        <th>Promotions Type</th>
        <th>Promotion Code</th>
        <th>Promotion Name</th>
        <th>Promotion Start Date</th>
        <th>Promotion End Date</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($promotions as $promotions)
        <tr>
            <td>{!! $promotions->promotions_type !!}</td>
            <td>{!! $promotions->promotion_code !!}</td>
            <td>{!! $promotions->promotion_name !!}</td>
            <td>{!! $promotions->promotion_start_date !!}</td>
            <td>{!! $promotions->promotion_end_date !!}</td>
            <td>
                {!! Form::open(['route' => ['promotions.destroy', $promotions->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('promotions.show', [$promotions->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('promotions.edit', [$promotions->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>