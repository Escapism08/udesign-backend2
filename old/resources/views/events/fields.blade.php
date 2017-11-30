<!-- Event Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('event_name', 'Event Name:') !!}
    {!! Form::text('event_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Event Start Of Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('event_start_of_date', 'Event Start Of Date:') !!}
    {!! Form::date('event_start_of_date', null, ['class' => 'form-control']) !!}
</div>

<!-- Event End Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('event_end_date', 'Event End Date:') !!}
    {!! Form::date('event_end_date', null, ['class' => 'form-control']) !!}
</div>

<!-- Event Belongs To What Brand Field -->
<div class="form-group col-sm-6">
    {!! Form::label('event_belongs_to_what_brand', 'Event Belongs To What Brand:') !!}
    {!! Form::text('event_belongs_to_what_brand', null, ['class' => 'form-control']) !!}
</div>

<!-- Event Place Field -->
<div class="form-group col-sm-6">
    {!! Form::label('event_place', 'Event Place:') !!}
    {!! Form::text('event_place', null, ['class' => 'form-control']) !!}
</div>

<!-- Event Owner Field -->
<div class="form-group col-sm-6">
    {!! Form::label('event_owner', 'Event Owner:') !!}
    {!! Form::text('event_owner', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('events.index') !!}" class="btn btn-default">Cancel</a>
</div>
