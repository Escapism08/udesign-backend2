<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $vendors->id !!}</p>
</div>

<!-- Vendor Total Sales Field -->
<div class="form-group">
    {!! Form::label('vendor_total_sales', 'Vendor Total Sales:') !!}
    <p>{!! $vendors->vendor_total_sales !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $vendors->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $vendors->updated_at !!}</p>
</div>

