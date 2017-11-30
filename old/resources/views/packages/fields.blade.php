<!-- Package Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('package_name', 'Package Name:') !!}
    {!! Form::text('package_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Package Category Field -->
<div class="form-group col-sm-6">
    {!! Form::label('package_category', 'Package Category:') !!}
    {!! Form::text('package_category', null, ['class' => 'form-control']) !!}
</div>

<!-- Package Description Field -->
<div class="form-group col-sm-6">
    {!! Form::label('package_description', 'Package Description:') !!}
    {!! Form::text('package_description', null, ['class' => 'form-control']) !!}
</div>

<!-- Package Offer Field -->
<div class="form-group col-sm-6">
    {!! Form::label('package_offer', 'Package Offer:') !!}
    {!! Form::text('package_offer', null, ['class' => 'form-control']) !!}
</div>

<!-- Package Items From Existing Products Field -->
<div class="form-group col-sm-6">
    {!! Form::label('package_items_from_existing_products', 'Package Items From Existing Products:') !!}
    {!! Form::text('package_items_from_existing_products', null, ['class' => 'form-control']) !!}
</div>

<!-- Package Featured Images Field -->
<div class="form-group col-sm-6">
    {!! Form::label('package_featured_images', 'Package Featured Images:') !!}
    {!! Form::text('package_featured_images', null, ['class' => 'form-control']) !!}
</div>

<!-- Package Image1 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('package_image1', 'Package Image1:') !!}
    {!! Form::file('package_image1') !!}
</div>
<div class="clearfix"></div>

<!-- Package Image2 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('package_image2', 'Package Image2:') !!}
    {!! Form::file('package_image2') !!}
</div>
<div class="clearfix"></div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('packages.index') !!}" class="btn btn-default">Cancel</a>
</div>
