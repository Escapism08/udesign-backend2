<table class="table table-responsive" id="interiorDesignOffices-table">
    <thead>
        <th>Office Name</th>
        <th>Office Location</th>
        <th>Office Number</th>
        <th>Office Services</th>
        <th>Office Description</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($interiorDesignOffices as $interiorDesignOffices)
        <tr>
            <td>{!! $interiorDesignOffices->office_name !!}</td>
            <td>{!! $interiorDesignOffices->office_location !!}</td>
            <td>{!! $interiorDesignOffices->office_number !!}</td>
            <td>{!! $interiorDesignOffices->office_services !!}</td>
            <td>{!! $interiorDesignOffices->office_description !!}</td>
            <td>
                {!! Form::open(['route' => ['interiorDesignOffices.destroy', $interiorDesignOffices->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('interiorDesignOffices.show', [$interiorDesignOffices->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('interiorDesignOffices.edit', [$interiorDesignOffices->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>