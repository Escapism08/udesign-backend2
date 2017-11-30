<table class="table table-responsive" id="events-table">
    <thead>
        <th>Event Name</th>
        <th>Event Start Of Date</th>
        <th>Event End Date</th>
        <th>Event Belongs To What Brand</th>
        <th>Event Place</th>
        <th>Event Owner</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($events as $events)
        <tr>
            <td>{!! $events->event_name !!}</td>
            <td>{!! $events->event_start_of_date !!}</td>
            <td>{!! $events->event_end_date !!}</td>
            <td>{!! $events->event_belongs_to_what_brand !!}</td>
            <td>{!! $events->event_place !!}</td>
            <td>{!! $events->event_owner !!}</td>
            <td>
                {!! Form::open(['route' => ['events.destroy', $events->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('events.show', [$events->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('events.edit', [$events->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>