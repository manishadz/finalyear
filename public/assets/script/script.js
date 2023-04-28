
$(".four-card-slider").slick({
  infinite: false,
  dots: false,
  arrows: true,
  slidesToShow: 4,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
      },
    },
    {
      breakpoint: 730,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2,
      },
    },
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true,
      },
    },
  ],
});
$(".three-card-slider").slick({
  infinite: true,
  dots: false,
  arrows: true,
  autoplay: true,
  autoplaySpeed: 3000,
  slidesToShow: 3,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
      },
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
      },
    },
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        infinite: true,
        dots: true,
      },
    },
  ],
});
$(".five-card-slider").slick({
  infinite: true,
  dots: true,
  arrows: false,
  autoplay: true,
  autoplaySpeed: 3000,
  slidesToShow: 5,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 532,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
      },
    },
    {
      breakpoint: 992,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
      },
    },
    {
      breakpoint: 1200,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 4,
        infinite: true,
        dots: true,
      },
    },
  ],
});
$(".six-card-slider").slick({
  infinite: true,
  dots: true,
  arrows: false,
  autoplay: true,
  autoplaySpeed: 3000,
  slidesToShow: 5,
  slidesToScroll: 5,
  centerMode:true,
  responsive: [
    {
      breakpoint: 490,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        
      },
    },

    {
      breakpoint: 768,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2,
      },
    },
    {
      breakpoint: 992,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
      },
    },
    {
      breakpoint: 1200,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 4,
        infinite: true,
        dots: true,
      },
    },
  ],
});
$(".seven-card-slider").slick({
  infinite: false,
  dots: true,
  arrows: false,
  // autoplay: true,
  // autoplaySpeed: 3000,
  slidesToShow: 7,
  slidesToScroll: 7,
  responsive: [
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2,
      },
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
      },
    },
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 5,
        slidesToScroll: 5,
        infinite: true,
        dots: true,
      },
    },
  ],
});
// testimonials
$(".testimonial-slider").slick({
  infinite: true,
  dots: true,
  arrows: false,
  slidesToShow: 1,
  slidesToScroll: 1,
});
$(".single-slider").slick({
  infinite: true,
  dots: false,
  arrows: true,
  slidesToShow: 1,
  slidesToScroll: 1,
  asNavFor: ".thumbnail-images",
});
$(".main-slider-image").slick({
  infinite: true,
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: true,
  fade: true,
});

// scroll to top
$(window).scroll(function () {
  if ($(this).scrollTop() > 500) {
    $("#scroll-to-top-button").addClass("d-block");
    // $("nav").addClass("top-fixed");
  } else {
    $("#scroll-to-top-button").removeClass("d-block");
    // $("nav").removeClass("top-fixed");
  }
});

$("#scroll-to-top-button").click(function () {
  window.scrollTo(0, 0);
});

//detail image preview
$(".slider-single").slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: false,
  dots: false,
});

$(".slider-nav")
  .on("init", function (event, slick) {
    $(".slider-nav .slick-slide.slick-current").addClass("is-active");
  })
  .slick({
    slidesToShow: 7,
    slidesToScroll: 7,
    dots: false,
    focusOnSelect: false,
    infinite: false,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 5,
          slidesToScroll: 5,
        },
      },
      {
        breakpoint: 640,
        settings: {
          slidesToShow: 4,
          slidesToScroll: 4,
        },
      },
      {
        breakpoint: 420,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
        },
      },
    ],
  });

$(".slider-single").on("afterChange", function (event, slick, currentSlide) {
  $(".slider-nav").slick("slickGoTo", currentSlide);
  var currrentNavSlideElem =
    '.slider-nav .slick-slide[data-slick-index="' + currentSlide + '"]';
  $(".slider-nav .slick-slide.is-active").removeClass("is-active");
  $(currrentNavSlideElem).addClass("is-active");
});

$(".slider-nav").on("click", ".slick-slide", function (event) {
  event.preventDefault();
  var goToSingleSlide = $(this).data("slick-index");

  $(".slider-single").slick("slickGoTo", goToSingleSlide);
});

// promocode

$("#promo-input-toggler").click(() => {
  $("#promo-input").slideToggle();
});

// prices slider

const rangeInput = document.querySelectorAll(".range-input input"),
  priceInput = document.querySelectorAll(".price-input input"),
  range = document.querySelector(".slider .progress");
let priceGap = 1000;

priceInput.forEach((input) => {
  input.addEventListener("input", (e) => {
    let minPrice = parseInt(priceInput[0].value),
      maxPrice = parseInt(priceInput[1].value);

    if (maxPrice - minPrice >= priceGap && maxPrice <= rangeInput[1].max) {
      if (e.target.className === "input-min") {
        rangeInput[0].value = minPrice;
        range.style.left = (minPrice / rangeInput[0].max) * 100 + "%";
      } else {
        rangeInput[1].value = maxPrice;
        range.style.right = 100 - (maxPrice / rangeInput[1].max) * 100 + "%";
      }
    }
  });
});

rangeInput.forEach((input) => {
  input.addEventListener("input", (e) => {
    let minVal = parseInt(rangeInput[0].value),
      maxVal = parseInt(rangeInput[1].value);

    if (maxVal - minVal < priceGap) {
      if (e.target.className === "range-min") {
        rangeInput[0].value = maxVal - priceGap;
      } else {
        rangeInput[1].value = minVal + priceGap;
      }
    } else {
      priceInput[0].value = minVal;
      priceInput[1].value = maxVal;
      range.style.left = (minVal / rangeInput[0].max) * 100 + "%";
      range.style.right = 100 - (maxVal / rangeInput[1].max) * 100 + "%";
    }
  });
});

// filter by
const chevron = $(".filter-by").find(".bi-chevron-down");
chevron.each(function () {
  $(this).click(function () {
    $(this).toggleClass("bi-chevron-up");
    $(this).closest(".mix-filter").find(".input-wrapper").slideToggle();
  });
});

// show/hide more facilities
$("#filter-facilities-btn").click(function () {
  $("#filter_facilities_list li:nth-child(n+7)").slideToggle();
});
