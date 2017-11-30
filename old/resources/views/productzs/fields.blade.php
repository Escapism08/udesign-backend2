<!-- Product Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('product_name', 'Product Name:') !!}
    {!! Form::text('product_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Product Type Field -->
<div class="form-group col-sm-6">
    {!! Form::label('product_type', 'Product Type:') !!}
    {!! Form::text('product_type', null, ['class' => 'form-control']) !!}
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

<!-- Product Price Field -->
<div class="form-group col-sm-6">
    {!! Form::label('product_price', 'Product Price:') !!}
    {!! Form::number('product_price', null, ['class' => 'form-control']) !!}
</div>

<!-- Product Old Price Field -->
<div class="form-group col-sm-6">
    {!! Form::label('product_old_price', 'Product Old Price:') !!}
    {!! Form::number('product_old_price', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('productzs.index') !!}" class="btn btn-default">Cancel</a>
</div>
