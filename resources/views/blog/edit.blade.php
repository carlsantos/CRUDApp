@extends('main')

@section('title', '| EDIT BLOG POST')

@section('contents')
<div class="col-lg-offset-2 col-md-offset-2 col-lg-8 col-md-8 edit" data-aos="fade">
  <h1>Edit Blog Post</h1>
  <p class="posted">Posted: {{ date('M j, Y h:ia', strtotime($blog->created_at)) }} / Last Update: {{ date('M j, Y h:ia', strtotime($blog->updated_at)) }}</p>
  <hr>
  {!! Form::model($blog, ['route' => ['blog.update', $blog->id], 'method' => 'PUT']) !!}
    {{ Form::text('title', null, ['class' => 'form-control input-lg input']) }}<br><br>
    {{ Form::textarea('content', null, ['class' => 'form-control input']) }}
    <br>
    {!! Html::linkRoute('blog.show', 'Cancel', [$blog->id], ['class' => 'btn btn-danger']) !!}
    {{ Form::submit('Save Changes', ['class' => 'btn btn-primary'] ) }}
  {!! Form::close() !!}
</div>


<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
  @include('../partials/_footer')
</div>
@endsection
