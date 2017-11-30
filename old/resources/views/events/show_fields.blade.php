<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $events->id !!}</p>
</div>

<!-- Event Name Field -->
<div class="form-group">
    {!! Form::label('event_name', 'Event Name:') !!}
    <p>{!! $events->event_name !!}</p>
</div>

<!-- Event Start Of Date Field -->
<div class="form-group">
    {!! Form::label('event_start_of_date', 'Event Start Of Date:') !!}
    <p>{!! $events->event_start_of_date !!}</p>
</div>

<!-- Event End Date Field -->
<div class="form-group">
    {!! Form::label('event_end_date', 'Event End Date:') !!}
    <p>{!! $events->event_end_date !!}</p>
</div>

<!-- Event Belongs To What Brand Field -->
<div class="form-group">
    {!! Form::label('event_belongs_to_what_brand', 'Event Belongs To What Brand:') !!}
    <p>{!! $events->event_belongs_to_what_brand !!}</p>
</div>

<!-- Event Place Field -->
<div class="form-group">
    {!! Form::label('event_place', 'Event Place:') !!}
    <p>{!! $events->event_place !!}</p>
</div>

<!-- Event Owner Field -->
<div class="form-group">
    {!! Form::label('event_owner', 'Event Owner:') !!}
    <p>{!! $events->event_owner !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $events->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $events->updated_at !!}</p>
</div>

