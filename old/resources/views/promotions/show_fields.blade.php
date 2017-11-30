<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $promotions->id !!}</p>
</div>

<!-- Promotions Type Field -->
<div class="form-group">
    {!! Form::label('promotions_type', 'Promotions Type:') !!}
    <p>{!! $promotions->promotions_type !!}</p>
</div>

<!-- Promotion Code Field -->
<div class="form-group">
    {!! Form::label('promotion_code', 'Promotion Code:') !!}
    <p>{!! $promotions->promotion_code !!}</p>
</div>

<!-- Promotion Name Field -->
<div class="form-group">
    {!! Form::label('promotion_name', 'Promotion Name:') !!}
    <p>{!! $promotions->promotion_name !!}</p>
</div>

<!-- Promotion Start Date Field -->
<div class="form-group">
    {!! Form::label('promotion_start_date', 'Promotion Start Date:') !!}
    <p>{!! $promotions->promotion_start_date !!}</p>
</div>

<!-- Promotion End Date Field -->
<div class="form-group">
    {!! Form::label('promotion_end_date', 'Promotion End Date:') !!}
    <p>{!! $promotions->promotion_end_date !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $promotions->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $promotions->updated_at !!}</p>
</div>

