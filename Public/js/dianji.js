//点击a链接，使该链接的点击次数加一
$(function(){
  $('.liulan').click(function(){
    var data={
      id:$(this).attr('id')
    };
    $.post(dj,data,function(data){
    },'json' );
  });
  $('.sqlj').click(function(){
    var data={
      id:$(this).attr('id')
    };
    $.post(sqlj,data,function(data){
    },'json' );
  });
   $('.link1').hover(function() {
        $(this).find(".mask").stop().animate({
            bottom: '0px',
            left: '0px'
        },
        {
            queue: false,
            duration: 400
        })
    },
    function() {
        $(this).find(".mask").stop().animate({
            bottom: '-51px',
            left: '0px'
        },
        {
            queue: false,
            duration: 400
        })
    });
})