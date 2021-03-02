var glider = new Glider(document.querySelector('.glider'), {
  slidesToShow: 1,
  dots: '#dots',
  draggable: true,
  scrollLock: true,
  arrows: {
    prev: '.glider-prev',
    next: '.glider-next'
  },
  responsive: [
    {
      breakpoint: 900,
      settings: {
        slidesToShow: 1
      }
    }
  ]
});

glider.refresh(true);

function sliderAuto(slider, miliseconds) {
  const slidesCount = slider.track.childElementCount;
  let slideTimeout = null;
  let nextIndex = 1;
 
  function slide () {
    slideTimeout = setTimeout(
      function () {
        if (nextIndex >= slidesCount ) {
          nextIndex = 0;
        }
        slider.scrollItem(nextIndex++);
      },
      miliseconds
    );
  }
 
  slider.ele.addEventListener('glider-animated', function() {
    window.clearInterval(slideTimeout);
    slide();
  });
 
  slide();
}
 
sliderAuto(glider, 4000) //auto slide functionality in milliseconds 1000ms = 1s
 

// Get Modal
var modal1 = document.getElementById("homeModal1");
var modal2 = document.getElementById("homeModal2");
var modal3 = document.getElementById("homeModal3");
// Get button
var btn1 = document.getElementById("modalBtn1");
var btn2 = document.getElementById("modalBtn2");
var btn3 = document.getElementById("modalBtn3");
// Modal On Click Function
btn1.onclick = function () { modal1.style.display = "block"; }
btn2.onclick = function () { modal2.style.display = "block"; }
btn3.onclick = function () { modal3.style.display = "block"; }

var closeBtns = [...document.querySelectorAll(".close")];
closeBtns.forEach(function(btn){
  btn.onclick = function() {
    var modal = btn.closest('.modal');
    modal.style.display = "none";
  }
});

window.onclick = function(event) {
  if (event.target.className == 'modal-background'){
    modal1.style.display = "none";
    modal2.style.display = "none";
    modal3.style.display = "none";
  }
}