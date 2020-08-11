var button = document.querySelectorAll('#collapsDemo');
var formContainer = document.querySelectorAll('.Areply');

$(button).click(function(){
  $(this).parent().parent().find('.child').toggleClass('child_show')
});

for (var i = 0; i < button.length; i++) {
  button[i].innerHTML = $(button[i]).parent().parent().find('.child').length + ' replice';
}

$(formContainer).click(function(){
    $(this).parent().parent().find('#formCont textarea').first().toggleClass('disInline reply_texta');
})
