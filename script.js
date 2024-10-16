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