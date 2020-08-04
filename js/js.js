var k = document.querySelectorAll('#k');
var mainDiv = document.querySelectorAll('#mainDiv');
var child = document.querySelectorAll('#childID');
var button = document.querySelectorAll('#collapsDemo');

$(button).click(function(){
  //console.log($(this).parent().parent().find('.child').toggleClass('child_show'));

  $(this).parent().parent().find('.child').toggleClass('child_show')
});

for (var i = 0; i < button.length; i++) {
  button[i].innerHTML = $(button[i]).parent().parent().find('#mainDiv .child').length + ' replice';
}
