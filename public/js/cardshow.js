const Card = document.querySelector(".sket-card");
const Text = document.querySelector("h1.skatchitm");
const Cashcards = document.querySelectorAll(".reward-card");
const Showcard = document.querySelector(".model");
const InstroText = document.querySelector(".instructor");
const MoneyInfo = document.querySelector(".money-info");
const pointChecknox = document.querySelector(".product-accepted");
const textPoint = document.querySelector(".point-id");
const pointstatus = document.querySelector("input.point-staus");
const TextCard = document.querySelector(".text-card");

Card.addEventListener("click", e => {
    Card.classList.add("effection");
    setTimeout(() => {
        Text.classList.add("addbody");
    }, 1500);
    InstroText.style.display = "none";
    MoneyInfo.style.display = "block";
});

// window.addEventListener("DOMContentLoaded", checkpoint);

// function checkpoint(e) {
//     if (document.querySelector("input.point-staus").checked == 1) {
//         console.log("hello bgh");
//         TextCard.classList.add("text-show");
//         textPoint.classList.add("point-id-done");
//         textPoint.classList.remove("point-id");
//     }
// }
