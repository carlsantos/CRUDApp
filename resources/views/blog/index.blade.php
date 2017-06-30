@extends('main')

@section('title', '| BLOG')

@section('contents')
  <a href="{{ route('blog.create') }}"><i class="fa fa-3x fa-plus createpost img-circle" aria-hidden="true" data-aos="fade-left"></i></a>
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 blogs" data-aos="fade-up">
    @foreach ($blog as $blogs)
      <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 blogpost">
        <div>
          <h3>{{ $blogs->title }}</h3>
          <p class="posted">Posted: {{ date('M j, Y h:ia', strtotime($blogs->created_at)) }}</p>
          <hr>
          <p>{{ substr($blogs->content, 0, 150) }}{{ strlen($blogs->content) > 150? "..." : ""}}</p>
          <a class="btn btn-default" href="{{ route('blog.show', $blogs->id) }}">See more</a>
        </div>
      </div>
    @endforeach
  </div>
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 blogs">
    @include('../partials/_footer')
  </div>
@endsection
