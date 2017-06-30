@extends('main')

@section('title', '| BLOG POST')

@section('contents')
<i class="fa fa-2x fa-pencil edit-toggle" aria-hidden="true" data-aos="fade-left"></i>
<div class="options">
  {!! Html::linkRoute('blog.edit', 'Edit post', [$blog->id], ['class' => 'btn btn-block btn-primary']) !!}
  <button class="btn btn-danger btn-block" data-toggle="modal" data-target="#myModal">Delete</button>
</div>
<div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-2 col-lg-8 col-md-8 col-sm-8 posts" data-aos="fade">
  <h1 class="text-center">{{ $blog->title }}</h1>
  <br><br>
  <div class="media">
    <div class="media-left">
      <img class="media-object img-circle" src="../../img/carl-santos.JPG" alt="Carl Santos">
    </div>
    <div class="media-body">
      <hr>
      <p class="media-heading posted">by Carl Santos /
      Posted: {{ date('M j, Y h:ia', strtotime($blog->created_at)) }} / Last Update: {{ date('M j, Y h:ia', strtotime($blog->updated_at)) }}</p>
    </div>
  </div>
  <br><br>
  <p>{{ $blog->content }}</p>
</div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
  @include('../partials/_footer')
</div>
@include('../partials/_modal')
@endsection
