// menu
const burger = document.querySelector('.burger');
const iconBurger = document.querySelector('.fa-bars');
const iconX = document.querySelector('.fa-times');
const column = document.querySelector('aside');

burger.addEventListener('click', function() {
    iconBurger.classList.toggle('show');
    iconX.classList.toggle('show');
    column.classList.toggle('show');
})


// slider
var slides = document.querySelectorAll('.slide');
var btns = document.querySelectorAll('.btn');
let currentSlide = 1;

var manualNav = function(manual){
    slides.forEach((slide) => {
        slide.classList.remove('active');

        btns.forEach((btn) => {
            btn.classList.remove('active');
        })
    })


    slides[manual].classList.add('active');
    btns[manual].classList.add('active');
}

btns.forEach((btn, i) => {
    btn.addEventListener("click", () => {
        manualNav(i);
        currentSlide = 1;
    });
});

// autoplay
var repeat = function(activeClass){
    let active = document.getElementsByClassName('active');
    let i = 1;

    var repeater = () => {
        setTimeout(function(){

            [...active].forEach((activeSlide) => {
                activeSlide.classList.remove('active');
            });

            slides[i].classList.add('active');
            btns[i].classList.add('active');
            i++;
            
            if(slides.length == i){
                i = 0;
            }
            if(i>= slides.length) {
                return;
            }
            repeater();
        }, 4000);
    }
    repeater();
}
repeat();


// wersja kontrastowa

const btn = document.querySelector(".fa-eye");

const bodyContrast = document.querySelector(".no-contrast");

function changeColor() {
         bodyContrast.classList.toggle('contrast');
     }

     btn.addEventListener('click', changeColor);


 // faq
 var question = document.querySelectorAll('.question');
 var questionText = document.querySelectorAll('.faq-text');
 var questionButton = document.querySelectorAll('.fa-plus');

function removeActiveStatus(activeId) {
    for(var j = 0; j < question.length; j++){
        if(question[j].id != activeId){

            question[j].classList.remove('active_faq');
            questionText[j].classList.remove('active_txt');            
        }
    }
}

 function getFaqId(faq)
 {
    faq.classList.toggle("active_faq");
    questionText[faq.id].classList.add("active_txt");

    removeActiveStatus(faq.id);
 }


 
// button on-top
window.onscroll = function () {
    scrollFunction()
};

function scrollFunction() {
    if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}

function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}








 