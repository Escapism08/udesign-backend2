<!-- Vendor Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('vendor_name', 'Vendor Name:') !!}
    {!! Form::text('vendor_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Vendor Brand Field -->
<div class="form-group col-sm-6">
    {!! Form::label('vendor_brand', 'Vendor Brand:') !!}
    {!! Form::text('vendor_brand', null, ['class' => 'form-control']) !!}
</div>

<!-- Vendor Password Field -->
<div class="form-group col-sm-6">
    {!! Form::label('vendor_password', 'Vendor Password:') !!}
    {!! Form::text('vendor_password', null, ['class' => 'form-control']) !!}
</div>

<!-- Vendor Sales Field -->
<div class="form-group col-sm-6">
    {!! Form::label('vendor_sales', 'Vendor Sales:') !!}
    {!! Form::text('vendor_sales', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('vendorGuys.index') !!}" class="btn btn-default">Cancel</a>
</div>
