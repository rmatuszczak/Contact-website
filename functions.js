$(window).scroll(function(){
  var scrollUnit = $(this).scrollTop();
  console.log(scrollUnit/2);
// parallax effects

  $('#landing-page').css({
    'transform' : 'translate(0px, '+ scrollUnit/6 +'%)'
  });

  $('#periscope').css({
    'background-position' : '0px ' + scrollUnit/20 + '%'
  });

  $('#skills').css({
    'transform' : 'translate(0px, '+ scrollUnit/60 +'%)'
  });

  $('#education').css({
    'transform' : 'translate(0px, '+ scrollUnit/160 +'%)'
  });



//parallax effects end

// landing elements
  if(scrollUnit > ($('#about').offset().top)-($(window).height() / 2)){
      $('#periscope').css({
        'opacity' : ''+ 1 +''
        });

        $('#description').css({
          'opacity' : ''+ 1 +''

          });

          $('#description').css({

            'transform' : 'translateY('+ 0+ 'px)'
            });

            $('#header-skills').css({

              'color' : 'rgb('+ (scrollUnit/7 - 50) + ', '+ (scrollUnit/7+ 60) +  ','+ (scrollUnit/7 + 60) + ')'

              });
  }

  if(scrollUnit > ($('#skills').offset().top)-($(window).height() / 4)){
      $('.col').css({
        'opacity' : ''+ 1 +''
        });

        $('.col').css({

          'transform' : 'translateY('+ 0+ 'px)'
          });


  }



  if(scrollUnit > ($('#skills').offset().top)-($(window).height() / 2)){

        $('#header-skills').css({


        'display' : 'block'
          });

        $('#header-skills').css({

          'transform' : 'translateY('+ -100 + 'px)'

          });

  }

  if(scrollUnit > ($('#education').offset().top)-($(window).height() / 1.5)){

        $('#education-header').css({


        'transform' : 'translateX('+ 0 + 'px)'
          });

          $('#education-header').css({


          'opacity' : ''+ 1 +''
            });

        $('#education-content').css({

          'transform' : 'translateX('+ 0 + 'px)'

          });

          $('#education-content').css({

            'opacity' : ''+ 1 +''
              });


  }
  if(scrollUnit > ($('#activities').offset().top)-($(window).height() / 1.5)){

    $('#activities-runner').css({

      'opacity' : ''+ 1 +''
        });

    if(scrollUnit > ($('#activities-content-wrapper').offset().top)-($(window).height() / 2)){

      $('.list-one').each(function(i){

        setTimeout(function(){
          $('.list-one').eq(i).addClass('show');
        }, 150 * (i+1));
      });

      $('.list-two').each(function(i){

        setTimeout(function(){
          $('.list-two').eq(i).addClass('show');
        }, 150 * (i+1));
      });

      }
  }



});

//landing elements end

//navigation scrolling functions
jQuery(function($){
  $.scrollTo(0);

  $('#aboutNav').click(function() {
    $.scrollTo($('#about'), 1000)
  });

  $('#educationNav').click(function() {
    $.scrollTo($('#education-header'), 1000)
  });

  $('#activitiesNav').click(function() {
    $.scrollTo($('#activities'), 1000)
  });

  $('#contactNav').click(function() {
    $.scrollTo($('#contact'), 1000)
  });

  $('#resumeNav').click(function() {
    $.scrollTo($('#transparent'), 2000)
  });


});
