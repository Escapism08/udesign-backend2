<!-- Vendor Total Sales Field -->
<div class="form-group col-sm-6">
    {!! Form::label('vendor_total_sales', 'Vendor Total Sales:') !!}
    {!! Form::number('vendor_total_sales', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('vendors.index') !!}" class="btn btn-default">Cancel</a>
</div>
