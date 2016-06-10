
$(window).load(function(){
  $('body').delay(600).fadeIn("slow");
})




$(function(){
  $(window).scroll(function(){
    $('#interval').text('スクロール値:' + $(this).scrollTop());
  });
});



// $(function(){
//   $(window).scroll(function(){
//     // var top = $(this).scrollTop();
//     // var box = "<div class ="box"></div>";
//     // if(top > 60) {
//       // $('.box2').fadeIn('slow');
//       $(".box").append("<div>").fadeIn(this);
//     // }

//   });
// });


$(window).scroll(function(e){

var $window = $(e.currentTarget);
var height=$window.height();
var scrollTop = $window.scrollTop();
var documentHeight = $(document).height();

  if(documentHeight === height + scrollTop){

  $("<div>").appendTo(".box").hide().fadeIn(1000);

};
});
