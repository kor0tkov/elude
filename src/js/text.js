
//<h1 class="presents_title">
//London for
//<span class="presents_title--red">$500</span>,
//because we can
//</h1>

$(document).ready(function () {
  //initialize swiper when document ready
  var mySwiper = new Swiper ('.swiper-container', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
    speed: 500,
    spaceBetween: 0
  })
  setInterval(() => {
    mySwiper.slideNext();
  }, 2500);
});

/*
$('presents').ready(function() {
  const texts = [
    `
    London for
    <span class="presents_title--red">$500</span>,
    because we can`,
    `
    Moscow for
    <span class="presents_title--red">$500</span>,
    because we can
    </h1>`,
    `
    Morocco for
    <span class="presents_title--red">$500</span>,
    because we can
    `,
    `
    Tokio for
    <span class="presents_title--red">$500</span>,
    because we can
    `,
  ];
  texts.forEach((text, idx) => {
    setTimeout(() => {
      document.getElementsByClassName('presents_title')[idx] = text;
    }, 2500);
    console.log(idx, text)
  });
})
*/