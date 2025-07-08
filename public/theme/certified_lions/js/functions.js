
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

$('.matches-count-2').slick({
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


const matches = [
  {
    time: "2025-01-11T19:30:00",
    teams: [
      { name: "Certified Lions FC", logo: "public/theme/certified_lions/images/logo-4.png" },
      { name: "Springfield Demize", logo: "public/theme/certified_lions/images/demize.png" },
    ],
    venue: "Lake Country Soccer Complex",
  },
  {
    time: "2025-01-18T20:00:00",
    teams: [
      { name: "Wichita Selection", logo: "public/theme/certified_lions/images/wichita.png" },
      { name: "Certified Lions FC", logo: "public/theme/certified_lions/images/logo-4.png" },
    ],
    venue: "Lets Play Inc",
  },
  {
    time: "2025-01-25T16:00:00",
    teams: [
      { name: "Certified Lions FC", logo: "public/theme/certified_lions/images/logo-4.png" },
      { name: "Kansas City Barilleros", logo: "public/theme/certified_lions/images/kansas.png" },
    ],
    venue: "All American Indoor Sports",
  },
  {
    time: "2025-02-01T20:00:00",
    teams: [
      { name: "Kansas City Barilleros", logo: "public/theme/certified_lions/images/kansas.png" },
      { name: "Certified Lions FC", logo: "public/theme/certified_lions/images/logo-4.png" },
    ],
    venue: "Lets Play inc",
  },
  {
    time: "2025-02-02T14:00:00",
    teams: [
      { name: "Chihuahua Savage 2", logo: "public/theme/certified_lions/images/chihuahua.png" },
      { name: "Certified Lions FC", logo: "public/theme/certified_lions/images/logo-4.png" },
    ],
    venue: "Lets Play inc",
  },
  {
    time: "2025-02-07T20:00:00",
    teams: [
      { name: "Certified Lions FC", logo: "public/theme/certified_lions/images/logo-4.png" },
      { name: "Chihuahua Savage 2", logo: "public/theme/certified_lions/images/chihuahua.png" },
    ],
    venue: "Corner Sport Arena",
  },
  {
    time: "2025-02-08T20:00:00",
    teams: [
      { name: "Certified Lions FC", logo: "public/theme/certified_lions/images/logo-4.png" },
      { name: "Chihuahua Savage 2", logo: "public/theme/certified_lions/images/chihuahua.png" },
    ],
    venue: "Corner Sport Arena",
  },
  {
    time: "2025-02-15T20:00:00",
    teams: [
      { name: "Wichita Wings", logo: "public/theme/certified_lions/images/wichita-wings.png" },
      { name: "Certified Lions FC", logo: "public/theme/certified_lions/images/logo-4.png" },
    ],
    venue: "Lets Play inc",
  },
  {
    time: "2025-02-22T20:00:00",
    teams: [
      { name: "Wichita Selection", logo: "public/theme/certified_lions/images/wichita.png" },
      { name: "Certified Lions FC", logo: "public/theme/certified_lions/images/logo-4.png" },
    ],
    venue: "Lets Play inc",
  },
  {
    time: "2025-03-01T20:00:00",
    teams: [
      { name: "New Mexico Runners", logo: "public/theme/certified_lions/images/mexico.png" },
      { name: "Certified Lions FC", logo: "public/theme/certified_lions/images/logo-4.png" },
    ],
    venue: "Lets Play inc",
  },
  {
    time: "2025-03-02T14:00:00",
    teams: [
      { name: "Springfield Demize", logo: "public/theme/certified_lions/images/demize.png" },
      { name: "Certified Lions FC", logo: "public/theme/certified_lions/images/logo-4.png" },
    ],
    venue: "Lets Play inc",
  },
  {
    time: "2025-03-08T16:00:00",
    teams: [
      { name: "Certified Lions FC", logo: "public/theme/certified_lions/images/logo-4.png" },
      { name: "Kansas City Barilleros", logo: "public/theme/certified_lions/images/kansas.png" },
    ],
    venue: "All American Indoor Sports",
  },
  {
    time: "2025-03-09T15:05:00",
    teams: [
      { name: "Certified Lions FC", logo: "public/theme/certified_lions/images/logo-4.png" },
      { name: "New Mexico Runners", logo: "public/theme/certified_lions/images/mexico.png" },
    ],
    venue: "Rio Rancho Events Center",
  },
  {
    time: "2025-03-21T19:30:00",
    teams: [
      { name: "Certified Lions FC", logo: "public/theme/certified_lions/images/logo-4.png" },
      { name: "Wichita Wings", logo: "public/theme/certified_lions/images/wichita-wings.png" },
    ],
    venue: "Park City Arena",
  },
];


let currentMatchIndex = 0;
let timerInterval; // To store the interval ID for the timer

function displayMatch(match) {
  const matchTitle = document.getElementById("match-title");
  const matchTime = document.getElementById("match-time");
  const matchVenue = document.getElementById("match-venue");
  const matchTimer = document.getElementById("match-timer");

  // Update match details
  const matchDate = new Date(match.time);
  matchTitle.textContent = "UPCOMING MATCH";
  matchTime.textContent = matchDate.toLocaleString();
  document.getElementById("team1-logo").src = match.teams[0].logo;
  document.getElementById("team1-name").textContent = match.teams[0].name;
  document.getElementById("team2-logo").src = match.teams[1].logo;
  document.getElementById("team2-name").textContent = match.teams[1].name;
  matchVenue.textContent = match.venue;

  // Clear any existing timer interval
  clearInterval(timerInterval);

  // Start a new timer interval
  timerInterval = setInterval(() => updateTimer(matchDate, matchTimer), 1000);
}

function updateTimer(matchDate, matchTimer) {
  const now = new Date();
  const timeDiff = matchDate - now;

  if (timeDiff <= 0) {
    matchTimer.textContent = "MATCH IS LIVE";
    clearInterval(timerInterval); // Stop updating the timer once the match starts
  } else {
    const days = Math.floor(timeDiff / (1000 * 60 * 60 * 24));
    const hours = Math.floor((timeDiff % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    const minutes = Math.floor((timeDiff % (1000 * 60 * 60)) / (1000 * 60));
    const seconds = Math.floor((timeDiff % (1000 * 60)) / 1000);

    matchTimer.textContent = `${days}d:${hours}h:${minutes}m:${seconds}s`;
  }
}

// Automatically switch matches every 5 seconds
function rotateMatches() {
  setInterval(() => {
    currentMatchIndex = (currentMatchIndex + 1) % matches.length;
    displayMatch(matches[currentMatchIndex]);
  }, 5000); // Switch every 5 seconds
}

// Start displaying matches
displayMatch(matches[currentMatchIndex]);
rotateMatches();


