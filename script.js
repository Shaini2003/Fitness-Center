//code for video navigation
const btns=document.querySelectorAll(".slide-btn");
const slides=document.querySelectorAll(".slide");

var sliderNav =function(manual){
    btns.forEach((btn) =>{
        btn.classList.remove("active");
    });

    slides.forEach((slides) =>{
        slides.classList.remove("active");
    });

  

    btns[manual].classList.add("active");
    slides[manual].classList.add("active");
}
btns.forEach((btn,i) =>{
    btn.addEventListener("click", () =>{
        sliderNav(i);
    })
})

const swiper = new Swiper(".mySwiper", {
    slidesPerView:3,
    spaceBetween:30,
    grabCursor:true,
    autoplay:{
        delay:2500,
        disableOnInteraction:false,
        pauseOnmouseEnter:true,
    },
    slidesPerGroup:1,
    loop:true,
    loopFillGroupWithBlank:true,
    pagination:{
        el:".swiper-paganation",
        clickable:true,
    },
  
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  });