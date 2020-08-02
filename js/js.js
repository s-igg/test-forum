$(document).ready(function(){
  $("#demo").click(function(){
    var totalCount=$("#mainDiv div").length;
    $("#show").html(totalCount);
    if (totalCount != 10) {
      console.log($("#mainDiv div"));
    }
  });
});


var button = document.querySelectorAll('#collapsDemo');
var commentBorder = document.getElementsByClassName('comment-border');
var totalCount=$("#mainDiv .child").length

$(button).click(function(){

  if (totalCount >= 5) {
    $(this).parent().find('#mainDiv .child').toggleClass('child_show')
  }else {
    $(this).children().find('#mainDiv .child').toggleClass('child_show')
    console.log('to many');
  }
  
});

for (var i = 0; i < button.length; i++) {
  button[i].value = $(button[i]).parent().find('#mainDiv .child').length;
}
