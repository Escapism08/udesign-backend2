<!-- Promotions Type Field -->
<div class="form-group col-sm-6">
    {!! Form::label('promotions_type', 'Promotions Type:') !!}
    {!! Form::select('promotions_type', ['promo_code' => 'promo_code', 'sale' => 'sale', 'package' => 'package', 'promotion' => 'promotion'], null, ['class' => 'form-control']) !!}
</div>

<!-- Promotion Code Field -->
<div class="form-group col-sm-6">
    {!! Form::label('promotion_code', 'Promotion Code:') !!}
    {!! Form::text('promotion_code', null, ['class' => 'form-control']) !!}
</div>

<!-- Promotion Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('promotion_name', 'Promotion Name:') !!}
    {!! Form::text('promotion_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Promotion Start Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('promotion_start_date', 'Promotion Start Date:') !!}
    {!! Form::text('promotion_start_date', null, ['class' => 'form-control']) !!}
</div>

<!-- Promotion End Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('promotion_end_date', 'Promotion End Date:') !!}
    {!! Form::text('promotion_end_date', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('promotions.index') !!}" class="btn btn-default">Cancel</a>
</div>
