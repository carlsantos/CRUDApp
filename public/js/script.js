$(document).ready(function(){
  $(".edit-toggle").click(function(){
    $(".options").slideToggle();
  });
  $("#myBtn").click(function(){
    $("#myModal").modal();
  });
  $(".blogpost div").mouseenter(function(){
    $(this).css("box-shadow", "0 2px 12px #A9A9A9");
  })
  $(".blogpost div").mouseleave(function(){
    $(this).css("box-shadow", "0 2px 4px #A9A9A9");
  })
});
