$(document).ready(function () {
  $(".cardslider").slick({
    dots: false,
    slidesToShow: 6,
    slidesToScroll: 6,
    infinite: false,
    prevArrow:
      "<button type='button' class='slick-prev pull-left'><i class='fa fa-angle-left' aria-hidden='true'>&#8672;</i></button>",
    nextArrow:
      "<button type='button' class='slick-next pull-right'><i class='fa fa-angle-right' aria-hidden='true'>&#8674;</i></button>",
    responsive: [
      {
        breakpoint: 1025,
        settings: {
          slidesToShow: 5,
          slidesToScroll: 5,
          infinite: false,
          dots: false,
        },
      },
      {
        breakpoint: 900,
        settings: {
          slidesToShow: 4,
          slidesToScroll: 4,
          arrows: false,
          infinite: false,
        },
      },
      {
        breakpoint: 577,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2,
          arrows: false,
          infinite: false,
        },
      },
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ],
  });
  $(".cardslider-kindof").slick({
    dots: false,
    slidesToShow: 6,
    slidesToScroll: 6,
    infinite: false,
    prevArrow: false,
    nextArrow: false,
    responsive: [
      {
        breakpoint: 1025,
        settings: {
          slidesToShow: 5,
          slidesToScroll: 5,
          infinite: false,
          arrows: false,
          dots: false,
        },
      },
      {
        breakpoint: 900,
        settings: {
          slidesToShow: 4,
          slidesToScroll: 4,
          infinite: false,
          arrows: false,
        },
      },
      {
        breakpoint: 577,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 2,
          arrows: false,
          infinite: false,
        },
      },
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ],
  });
  $(".cardslider4book").slick({
    dots: false,
    slidesToShow: 3,
    autoplay: true,
    autoplaySpeed: 1500,
    arrows: false,
    prevArrow:
      "<button type='button' class='slick-prev pull-left'><i class='fa fa-angle-left' aria-hidden='true'>&#8672;</i></button>",
    nextArrow:
      "<button type='button' class='slick-next pull-right'><i class='fa fa-angle-right' aria-hidden='true'>&#8674;</i></button>",
    responsive: [
      {
        breakpoint: 1025,
        settings: {
          slidesToShow: 2,
        },
      },
      {
        breakpoint: 577,
        settings: {
          slidesToShow: 1,
          arrows: false,
          autoplay: true,
          infinite: true,
        },
      },
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ],
  });
  $(".cardslider_bannner").slick({
    dots: false,
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 1100,
    infinite: true,
    prevArrow: false,
    nextArrow: false,
  });

  $(".cardslide_ImgDiv_Top").slick({
    // centerMode: true,
    dots: false,
    slidesToShow: 2,
    slidesToScroll: 1,
    infinite: true,
    arrows: false,
    asNavFor: ".cardslide_ImgDiv_Bot",
  });

  $(".cardslide_ImgDiv_Bot").slick({
    centerMode: true,
    dots: false,
    slidesToShow: 9,
    slidesToScroll: 1,
    infinite: true,
    focusOnSelect: true,
    arrows: false,
    prevArrow:
      "<button type='button' class='slick-prev pull-left'><i class='fa fa-angle-left' aria-hidden='true'>&#8672;</i></button>",
    nextArrow:
      "<button type='button' class='slick-next pull-right'><i class='fa fa-angle-right' aria-hidden='true'>&#8674;</i></button>",
    asNavFor: ".cardslide_ImgDiv_Top",
  });
});

// _------
const rangeInput = document.querySelectorAll(".range-input input"),
  priceInput = document.querySelectorAll(".price-input input"),
  range = document.querySelector(".sliderL1 .progress");
let priceGap = 10;

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
