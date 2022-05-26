export default {
  init() {
    // JavaScript to be fired on all pagesvar
    var adult = 1;
    var link = '';
    var child = 0;
    var toDate=$('#to').val();
    var fromDate=$('#from').val();
    var cta = document.getElementById('book-cta');
    console.log(cta);

      var header = $('.top-nav');
//      var lastScrollTop = 0;
      $(window).scroll(function() {
        var scroll = $(window).scrollTop();
          if (scroll >= 50) {
              header.addClass('scrolled');
              header.removeClass('transparent');
          } else {
              header.removeClass('scrolled');
              if($('.template-home').length > 0) {
                header.addClass('transparent');
              }
          }


      });


    $('#adult').on('change', function() {
      adult = this.value;
      console.log(adult);
      console.log(fromDate);
      link = 'https://be.synxis.com/?adult='+ adult +'&arrive='+ fromDate +'&chain=5154&child=' + child + '&command=pleasewait&config=SBE_Rastrello_V2&currency=EUR&depart='+ toDate +'&hotel=36552&hotel_id=2849&level=hotel&listing_id=137532&locale=en-US&mode=command&nextcommand=roomsearch&num_babies=0&rooms=1&table=hotels&theme=SBE_Rastrello_V2';
      cta.href=link;
    });

    $('#child').on('change', function() {
      child = this.value;
      console.log(child);
      link = 'https://be.synxis.com/?adult='+ adult +'&arrive'+ fromDate +'&chain=5154&child=' + child + '&command=pleasewait&config=SBE_Rastrello_V2&currency=EUR&depart='+ toDate +'&hotel=36552&hotel_id=2849&level=hotel&listing_id=137532&locale=en-US&mode=command&nextcommand=roomsearch&num_babies=0&rooms=1&table=hotels&theme=SBE_Rastrello_V2';
      cta.href=link;
    });

    var dateFormat = 'mm/dd/yy',
      from = $( '#from' )
      .datepicker({
        defaultDate: '+1w',
        changeMonth: true,
        numberOfMonths: 1,
        onSelect: function(d,i){
          if(d !== i.lastVal){
              $(this).change();
          }
      },
      })
      .on( 'change', function() {
        to.datepicker( 'option', 'minDate', getDate( this ) );
        fromDate = $.datepicker.formatDate('yy-mm-dd', getDate( this ));
        console.log(fromDate);
        link = 'https://be.synxis.com/?adult='+ adult +'&arrive='+ fromDate +'&chain=5154&child=' + child + '&command=pleasewait&config=SBE_Rastrello_V2&currency=EUR&depart='+ toDate +'&hotel=36552&hotel_id=2849&level=hotel&listing_id=137532&locale=en-US&mode=command&nextcommand=roomsearch&num_babies=0&rooms=1&table=hotels&theme=SBE_Rastrello_V2';
        cta.href=link;
      }),
    to = $( '#to' ).datepicker({
      defaultDate: '+1w',
      changeMonth: true,
      numberOfMonths: 1,
    })
    .on( 'change', function() {
      from.datepicker( 'option', 'maxDate', getDate( this ) );
      toDate=$.datepicker.formatDate('yy-mm-dd', getDate( this ));
      console.log(toDate);
      link = 'https://be.synxis.com/?adult='+ adult +'&arrive='+ fromDate +'&chain=5154&child=' + child + '&command=pleasewait&config=SBE_Rastrello_V2&currency=EUR&depart='+ toDate +'&hotel=36552&hotel_id=2849&level=hotel&listing_id=137532&locale=en-US&mode=command&nextcommand=roomsearch&num_babies=0&rooms=1&table=hotels&theme=SBE_Rastrello_V2';
      cta.href=link;
    });

    $('#from').datepicker().datepicker('setDate', 'today');
    $('#to').datepicker().datepicker('setDate', 'today');


  function getDate( element ) {
    var date;
    try {
      date = $.datepicker.parseDate( dateFormat, element.value );
    } catch( error ) {
      date = null;
    }

    return date;
  }



    $('.center').slick({
      centerMode: true,
      centerPadding: '25%',
      slidesToShow: 1,
      prevArrow: '<div class="room-slide-arrow prev"><span class="material-symbols-outlined material-icons">arrow_back_ios</span></div>',
      nextArrow: '<div class="room-slide-arrow next"><span class="material-symbols-outlined material-icons">arrow_forward_ios</span></div>',
      responsive: [
        {
          breakpoint: 768,
          settings: {
            arrows: false,
            centerMode: true,
            centerPadding: '28%',
            slidesToShow: 1,
          },
        },
        {
          breakpoint: 480,
          settings: {
            arrows: false,
            centerMode: true,
            centerPadding: '28%',
            slidesToShow: 1,
          },
        },
      ],
    });

    if($('.single-room').length > 0) {
      $('.room-slide').slick({
        slidesToShow: 1,
        arrows: true,
        adaptiveHeight: true,
        dots: true,
        prevArrow: '<div class="room-slide-arrow prev"><span class="material-symbols-outlined material-icons">arrow_back_ios</span></div>',
        nextArrow: '<div class="room-slide-arrow next"><span class="material-symbols-outlined material-icons">arrow_forward_ios</span></div>',
      })
    }

    if($('.restaurant').length > 0) {
      $('.room-slide').slick({
        slidesToShow: 1,
        arrows: true,
        adaptiveHeight: true,
        dots: true,
        prevArrow: '<div class="room-slide-arrow prev"><span class="material-symbols-outlined material-icons">arrow_back_ios</span></div>',
        nextArrow: '<div class="room-slide-arrow next"><span class="material-symbols-outlined material-icons">arrow_forward_ios</span></div>',
      })
    }

    Cookies.set('name', 'value');

    console.log(Cookies.get('name'));

    $('.selected-lang').on('click', function(){
      $('.lang-options').toggleClass('-selected');
    })

    $('.top-nav .menu').on('click', function(){
      $('.bar1, .bar2, .bar3').toggleClass('change');
      $('.modal').toggleClass('active');
      $('.top-nav .scrolled-icon').toggleClass('hidden');
      $('.right-menu-items').toggleClass('hidden');
      $('.top-nav .btn-3').toggleClass('hidden');
      if($('.top-nav').hasClass('transparent')) {
        $('.top-nav').removeClass('transparent');
        $('.top-nav').addClass('scrolled');
      }
      $('body').toggleClass('no-scroll');
    })

    $('.modal > .actions > div a').on('click', function() {
      $('.bar1, .bar2, .bar3').removeClass('change');
      $('.modal').removeClass('active');
      $('.top-nav .scrolled-icon').removeClass('hidden');
      $('.top-nav .btn-3').removeClass('hidden');
      $('body').removeClass('no-scroll');
    });

    $('.open-booking').on('click', function(e){
      e.preventDefault();
      $('.modal-space').addClass('-selected');
    });

    $('.show-nl').on('click', function(e){
      e.preventDefault();
      $('.modal-nl').addClass('visible');
    });

    $('#hide-nl').on('click', function(e){
      e.preventDefault();
      $('.modal-nl').removeClass('visible');
    });

    $('#close-booking').on('click', function(e){
      e.preventDefault();
      $('.modal-space').removeClass('-selected');
    });



    //let slider = $('.center');
    $('.center').on('afterChange', function(event, slick, currentSlide, nextSlide){
      console.log(event);
      console.log(nextSlide);
      var bg=$('.slick-active').data('bg');
      var link=$('.slick-active').data('href');
      $('.rooms-home').css('background-image',  'url(' + bg + ')');
      $('.view-room-btn a').attr('href',  link);
    });

    $('h3[data-slide]').click(function(e) {
      e.preventDefault();
      var slideno = $(this).data('slide');
      $('.center').slick('slickGoTo', slideno - 1);
    });

    var urlHash = window.location.href.split('#')[1];

      if (urlHash &&  $('#' + urlHash).length) {

          $('html,body').animate({
              scrollTop: $('#' + urlHash).offset().top - 70,
          }, 800);
      }

  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
