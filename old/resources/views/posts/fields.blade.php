<!-- Post Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('post_title', 'Post Title:') !!}
    {!! Form::text('post_title', null, ['class' => 'form-control']) !!}
</div>

<!-- Post Body Field -->
<div class="form-group col-sm-6">
    {!! Form::label('post_body', 'Post Body:') !!}
    {!! Form::text('post_body', null, ['class' => 'form-control']) !!}
</div>

<!-- Post User Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('post_user_id', 'Post User Id:') !!}
    {!! Form::number('post_user_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Post Image Field -->
<div class="form-group col-sm-6">
    {!! Form::label('post_image', 'Post Image:') !!}
    {!! Form::text('post_image', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('posts.index') !!}" class="btn btn-default">Cancel</a>
</div>
