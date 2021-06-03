// const Checkbox = document.getElementById('checkbox');
// const inhi = document.querySelector('.inhi');
// Checkbox.addEventListener('change', ()=>{
//   document.body.classList.toggle("darkmode");
//   inhi.classList.toggle("black-search");
// });

const hembergur = document.querySelector('.navimg img');
const hemClose = document.querySelector('.closebar img');
const navDisplay = document.querySelector('.nav-screen');
const PopOpen = document.querySelector(".popup1");
const PopOpener = document.querySelector(".popup2");
const whatsapp = document.querySelector(".bi-whatsapp");
const contact = document.querySelector(".bi-telephone-fill");
hembergur.addEventListener("click", ()=>{
    navDisplay.style.display = 'block';
});

hemClose.addEventListener("click", ()=>{
    navDisplay.style.display = 'none';
});

whatsapp.addEventListener('click',()=>{
    PopOpen.classList.toggle("show");
    PopOpener.classList.remove("show1");
});

contact.addEventListener('click',()=>{
    PopOpener.classList.toggle("show1");
    PopOpen.classList.remove("show");
});

