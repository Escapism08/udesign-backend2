<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $post->id !!}</p>
</div>

<!-- Post Title Field -->
<div class="form-group">
    {!! Form::label('post_title', 'Post Title:') !!}
    <p>{!! $post->post_title !!}</p>
</div>

<!-- Post Body Field -->
<div class="form-group">
    {!! Form::label('post_body', 'Post Body:') !!}
    <p>{!! $post->post_body !!}</p>
</div>

<!-- Post User Id Field -->
<div class="form-group">
    {!! Form::label('post_user_id', 'Post User Id:') !!}
    <p>{!! $post->post_user_id !!}</p>
</div>

<!-- Post Image Field -->
<div class="form-group">
    {!! Form::label('post_image', 'Post Image:') !!}
    <p>{!! $post->post_image !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $post->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $post->updated_at !!}</p>
</div>

