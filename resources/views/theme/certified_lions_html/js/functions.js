
$('.mega-slider').slick({
  dots: true,
  infinite: true,
  speed: 800,
  slidesToShow: 1,
  slidesToScroll: 1,
  autoplay: false,
  cssEase: 'ease-out',
  arrows:true

});

$('.inner-slides-tab-slide').slick({
  dots: true,
  infinite: true,
  speed: 800,
  slidesToShow: 4,
  slidesToScroll: 1,
  autoplay: false,
  cssEase: 'ease-out',
  arrows:true
});

$('.shades-slides').slick({
  dots: false,
  infinite: true,
  speed: 800,
  slidesToShow: 5,
  slidesToScroll: 1,
  autoplay: false,
  cssEase: 'ease-out',
  arrows:true
});


$('.blurr-frame-slider').slick({
  centerMode: true,
  slidesToShow: 3,
  centerPadding: '60px',
  responsive: [
    {
      breakpoint: 768,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 3
      }
    },
    {
      breakpoint: 480,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 1
      }
    }
  ]
});


$('.matches-count-1').slick({
  dots: true,
  infinite: true,
  speed: 800,
  slidesToShow: 1,
  slidesToScroll: 1,
  autoplay: false,
  cssEase: 'ease-out',
  arrows:true
});



// NEW__PAGE__SLIDER__START


$('.sponsord-company-slider').slick({
  dots: false,
  infinite: true,
  speed: 800,
  slidesToShow: 5,
  slidesToScroll: 1,
  autoplay: false,
  cssEase: 'ease-out',
  arrows:true
});




// NEW__PAGE__SLIDER__END



/************************/

$('.service-slider').slick({
  dots: false,
  //   autoplay: true,
  //   autoplaySpeed: 1500,
  infinite: true,
  slidesToShow: 3,
  slidesToScroll: 1

});


/************************/
function toggleDropdown() {
  var dropdownContent = document.getElementById("dropdownContent1");
  dropdownContent.style.display = (dropdownContent.style.display === "block") ? "none" : "block";
}
// Thumbbnail Slider Start
$(document).ready(function () {
  /*********************
    Thumbnails slider
  *********************/
  // Change the main image whenever a thumbnail button is activated
  $('.thumbnails-slider').on('init', function (e, slider) {
    $(slider.$slides.find('.thumbnail-button')).each(function (index) {
      $(this).on('click', function () {
        // Move aria-current="true" to this button
        $(slider.$slides.find('.thumbnail-button').removeAttr('aria-current'));
        $(this).attr('aria-current', true);

        // Change the main image to match this thumbnail button
        var index = $(this).closest('.slick-slide').data('slick-index');
        $('.main-image-slider').slick('slickGoTo', index);
      });
    });
  });

  // Initialize the slider
  $('.thumbnails-slider').slick({
    vertical: true,
    slidesToShow: 4,
    infinite: false,
    instructionsText: 'This carousel contains a column of small thumbnails. Selecting a thumbnail will change the main image in the carousel that follows. Use the Previous and Next buttons to cycle through all the thumbnails, use Enter to select.',
    regionLabel: 'thumbnails carousel'
  });


  /********************
    Main image slider
  *********************/
  $('.main-image-slider').slick({
    slidesToShow: 1,
    draggable: false,
    instructionsText: 'This carousel shows one large product image at a time. Use the Previous and Next buttons to move between images, or use the preceding thumbnails carousel to select a specific image to display here.',
    regionLabel: 'main image carousel',
  });

  // Update the thumbnail slider when the user changes the main slider directly.
  $('.main-image-slider').on('beforeChange', function (e, slider, currentSlide, nextSlide) {
    // Remove aria-current from the last selected thumbnail image button
    $('.thumbnails-slider .thumbnail-button[aria-current="true"]').removeAttr('aria-current');

    // Select the thumbnail image button that goes with this main image. Most importantly, this updates Slick's internal state to be consistent with the visual change.
    $('.thumbnails-slider').slick('slickGoTo', nextSlide);

    // Add aria-current="true" to the correct thumbnail image button to convey to screen readers that it's active.
    $('.thumbnails-slider .thumbnail-button:eq(' + nextSlide + ')').attr('aria-current', true);
  });
});
// Thumbbnail Slider End

$('.reviews_slider1').slick({
  dots: false,
  arrow: true,
  autoplaySpeed: 1000,
  infinite: true,
  slidesToShow: 3,
  slidesToScroll: 1

});


// Function to check if the input fields are filled
function checkInputs() {
  var email = $('#emailInput').val();
  var password = $('#passwordInput').val();

  // Enable the button if both fields are filled, otherwise disable it
  $('#signInBtn').prop('disabled', !(email && password));
}

// Attach the checkInputs function to the input fields' change events
$('#emailInput, #passwordInput').on('input', checkInputs);



function checkInputsReg() {
  var emailReg = $('#emailInputreg').val();
  var nameReg = $('#nameInputreg').val();
  var passwordReg = $('#passwordInputreg').val();

  // Enable the button if all fields are filled, otherwise disable it
  $('#signInBtnreg').prop('disabled', !(emailReg && nameReg && passwordReg));
}

// Attach the checkInputsReg function to the input fields' change events in the second modal
$('#emailInputreg, #nameInputreg, #passwordInputreg').on('input', checkInputsReg);

$('.sliding-img').slick({
  dots: false,
  infinite: false,
  arrow: true,
  speed: 400,
  slidesToShow: 1,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});

// OWN SLIDER START


$('.user-slider').slick({
  dots: false,
  infinite: false,
  speed: 300,
  slidesToShow: 4,
  slidesToScroll: 4,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});


function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}






// OWN SLIDER END

function toggleContent(targetClass) {
  var additionalContent = document.querySelector("." + targetClass);

  if (additionalContent.style.display === "none") {
    // Show additional content
    additionalContent.style.display = "inline"; // You can use "block" for block-level elements
  } else {
    // Hide additional content
    additionalContent.style.display = "none";
  }
}

////// tabs custom (place nav and tabs anywhere separately)
$('.tabs-custom-nav a').click(function(event){
  $(this).closest('li').siblings('li').children('a').removeClass('current');
  $(this).addClass('current');
  $(this.hash).closest('.general').children('div.tab-content-panel:not(:hidden)').hide();
  $(this.hash).show();
  event.preventDefault();
  $('.sliderxs').slick('setPosition');
  });
  ////// tabs custom end


  



