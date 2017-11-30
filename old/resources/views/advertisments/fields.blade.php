<!-- Ad Image Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ad_image', 'Ad Image:') !!}
    {!! Form::text('ad_image', null, ['class' => 'form-control']) !!}
</div>

<!-- Ad Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ad_name', 'Ad Name:') !!}
    {!! Form::text('ad_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('advertisments.index') !!}" class="btn btn-default">Cancel</a>
</div>
