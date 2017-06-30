<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Delete Blog Post</h4>
      </div>
      <div class="modal-body">
        <p>Are you sure you want to delete this post?</p>
      </div>
      <div class="modal-footer">
        <div class="col-lg-offset-4 col-md-offset-4 col-sm-offset-4 col-lg-4 col-md-4 col-sm-4 col-xs-6">
          {!! Form::open(['route' => ['blog.destroy', $blog->id], 'method' => 'DELETE']) !!}
          {{ Form::submit('Yes', ['class' => 'btn btn-block btn-danger']) }}
          {!! Form::close() !!}
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
          <button class="btn btn-block btn-primary" data-dismiss="modal">No</button>
        </div>
      </div>
    </div>

  </div>
</div>
