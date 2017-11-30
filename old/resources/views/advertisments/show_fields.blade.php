<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $advertisment->id !!}</p>
</div>

<!-- Ad Image Field -->
<div class="form-group">
    {!! Form::label('ad_image', 'Ad Image:') !!}
    <p>{!! $advertisment->ad_image !!}</p>
</div>

<!-- Ad Name Field -->
<div class="form-group">
    {!! Form::label('ad_name', 'Ad Name:') !!}
    <p>{!! $advertisment->ad_name !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $advertisment->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $advertisment->updated_at !!}</p>
</div>

