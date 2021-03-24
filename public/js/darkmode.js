const Checkbox = document.getElementById('checkbox');
const inhi = document.querySelector('.inhi');
Checkbox.addEventListener('change', ()=>{
  document.body.classList.toggle("darkmode");
  inhi.classList.toggle("black-search");
});

console.log("hrt")