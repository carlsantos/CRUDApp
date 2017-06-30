@extends('main')

@section('title' | 'CREATE BLOG POST')

@section('contents')
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 create jumbotron">
  <div class="col-lg-offset-3 col-lg-6 create-form" data-aos="fade-up">
    <h2 class="text-center">Create Blog Post</h2><br>
    {!! Form::open(['route' => 'blog.store', 'data-parsley-validate'=>  '']) !!}
      {{ Form::text('title', null, ['class' => 'input form-control create-input',  'autocomplete' => 'off', 'placeholder' => 'Post title', 'required' => '', 'maxlength' => '100']) }}<br><br>
      {{ Form::textarea('content', null, ['class' => 'form-control create-input', 'autocomplete' => 'off', 'placeholder' => 'Post content', 'required' => '']) }}<br>
      {{ Form::submit('Create Blog Post', ['class' => 'btn-success btn btn-lg btn-block', ]) }}
    {!! Form::close() !!}
  </div>
</div>
@endsection
