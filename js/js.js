$(document).ready(function(){
  $("#demo").click(function(){
    var totalCount=$("#mainDiv div").length;
    $("#show").html(totalCount);
    if (totalCount != 10) {
      console.log($("#mainDiv div"));
    }
  });
});


// var collapsButton = document.querySelectorAll('button[class="collapsDemo"]');
// var comText= document.querySelectorAll('#mainDiv h4');
//
// for (var i = 0; i < collapsButton.length; i++) {
//
//     $(collapsButton[i]).click(function(){
//       var buttonID = $(this);
//
//       if (buttonID) {
//         console.log($(this+ comText));
//       }
//     })
//
//   }
$(document).ready(function(){
  $('#collapsDemo').click(function(){
    $(this).next('#mainDiv').slideToggle();
    return false;
  })
})
