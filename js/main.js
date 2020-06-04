// =========================== SLIDER ========================================= //

const slides = document.querySelectorAll('.slide');
const slidesNav = document.querySelectorAll('.slide-circle');
const auto = true;
const intervalTime = 3000;
let slideInterval;

const autoslide = () => {
    // Get the div with the current class
    const current = document.querySelector('.current');
    const active = document.querySelector('.active');

    // Remove current class
    current.classList.remove('current');
    active.classList.remove('active');

    // Check for next element
    if(current.nextElementSibling){
        current.nextElementSibling.classList.add('current');
        active.nextElementSibling.classList.add('active');
    }
    else{
        slides[0].classList.add('current');
        slidesNav[0].classList.add('active');
    }

    setTimeout(() => {
        current.classList.remove('current');   
        active.classList.remove('active');   
    });
}

if(auto){
    slideInterval = setInterval(autoslide,intervalTime);
}

// ========================== REQUEST FORM MODAL ====================================== //

document.getElementById('request-button').addEventListener('click',function(){

    if(document.getElementById('request-modal').style.display = "none"){
        document.getElementById('request-modal').style.display = "block";
    }
});
document.getElementById('close-btn').addEventListener('click',function(){

    if(document.getElementById('request-modal').style.display = "block"){
        document.getElementById('request-modal').style.display = "none";
    }
});

document.querySelectorAll('.tab-item').forEach(item => {
    item.addEventListener('click', function (){
      //handle click
      ID = this.id;
      document.getElementById('\''+ID+'-section').style.display = "none";
      
      /*if(document.getElementById('\''+ID+'-section').style.display = "flex"){
        document.getElementById('\''+ID+'-section').style.display = "none";*/
    })
  });