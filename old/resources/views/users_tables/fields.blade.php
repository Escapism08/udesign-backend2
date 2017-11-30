<!-- User Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_name', 'User Name:') !!}
    {!! Form::text('user_name', null, ['class' => 'form-control']) !!}
</div>

<!-- User Password Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_password', 'User Password:') !!}
    {!! Form::password('user_password', ['class' => 'form-control']) !!}
</div>

<!-- User Image Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_image', 'User Image:') !!}
    {!! Form::file('user_image') !!}
</div>
<div class="clearfix"></div>

<!-- User Subscription Type Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_subscription_type', 'User Subscription Type:') !!}
    {!! Form::select('user_subscription_type', ['free' => 'free', 'premium' => 'premium'], null, ['class' => 'form-control']) !!}
</div>

<!-- User Age Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_age', 'User Age:') !!}
    {!! Form::number('user_age', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('usersTables.index') !!}" class="btn btn-default">Cancel</a>
</div>
