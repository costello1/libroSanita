var swiper = new Swiper('.swiper-container', {
    effect: 'coverflow',
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: 'auto',
    coverflowEffect: {
      rotate: 00,
      stretch: 0,
      depth: 100,
      modifier: 2,
      slideShadows: true,
    },
    loop: true,
  });

function clickCapitolo(cap){
    document.getElementById("section").scrollIntoView();
    setTimeout(function(){  swiper.slideTo(cap); }, 500);   
}

function toggleForm(){
  descrizione = document.querySelector('.descrizione');
  container = document.querySelector('.container');
  container.classList.toggle('active-desc');
  descrizione.classList.toggle('active-desc');
}
