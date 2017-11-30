<!-- Product Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('product_name', 'Product Name:') !!}
    {!! Form::text('product_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Product Brand Field -->
<div class="form-group col-sm-6">
    {!! Form::label('product_brand', 'Product Brand:') !!}
    {!! Form::text('product_brand', null, ['class' => 'form-control']) !!}
</div>

<!-- Product Category Field -->
<div class="form-group col-sm-6">
    {!! Form::label('product_category', 'Product Category:') !!}
    {!! Form::text('product_category', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('newProducts.index') !!}" class="btn btn-default">Cancel</a>
</div>
