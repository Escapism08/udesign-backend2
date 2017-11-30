<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $usersTable->id !!}</p>
</div>

<!-- User Name Field -->
<div class="form-group">
    {!! Form::label('user_name', 'User Name:') !!}
    <p>{!! $usersTable->user_name !!}</p>
</div>

<!-- User Password Field -->
<div class="form-group">
    {!! Form::label('user_password', 'User Password:') !!}
    <p>{!! $usersTable->user_password !!}</p>
</div>

<!-- User Image Field -->
<div class="form-group">
    {!! Form::label('user_image', 'User Image:') !!}
    <p>{!! $usersTable->user_image !!}</p>
</div>

<!-- User Subscription Type Field -->
<div class="form-group">
    {!! Form::label('user_subscription_type', 'User Subscription Type:') !!}
    <p>{!! $usersTable->user_subscription_type !!}</p>
</div>

<!-- User Age Field -->
<div class="form-group">
    {!! Form::label('user_age', 'User Age:') !!}
    <p>{!! $usersTable->user_age !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $usersTable->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $usersTable->updated_at !!}</p>
</div>

