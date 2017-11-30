<!-- Office Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('office_name', 'Office Name:') !!}
    {!! Form::text('office_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Office Location Field -->
<div class="form-group col-sm-6">
    {!! Form::label('office_location', 'Office Location:') !!}
    {!! Form::text('office_location', null, ['class' => 'form-control']) !!}
</div>

<!-- Office Number Field -->
<div class="form-group col-sm-6">
    {!! Form::label('office_number', 'Office Number:') !!}
    {!! Form::text('office_number', null, ['class' => 'form-control']) !!}
</div>

<!-- Office Services Field -->
<div class="form-group col-sm-6">
    {!! Form::label('office_services', 'Office Services:') !!}
    {!! Form::text('office_services', null, ['class' => 'form-control']) !!}
</div>

<!-- Office Description Field -->
<div class="form-group col-sm-6">
    {!! Form::label('office_description', 'Office Description:') !!}
    {!! Form::text('office_description', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('interiorDesignOffices.index') !!}" class="btn btn-default">Cancel</a>
</div>
