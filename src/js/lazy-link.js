$(".lazy-link").on("click", function (event) {
  event.preventDefault();
  let id = $(this).attr('href'),
  top = $(id).offset().top - 125;
  $('body,html').animate({scrollTop: top}, 500);
  });

