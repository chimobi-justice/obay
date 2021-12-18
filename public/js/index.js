const res = document.querySelector(".res");
const nav = document.querySelector("#nav");
const hamburger = document.querySelector(".hamburger");
const leftNav = document.querySelector(".left-nav");
const mainBody = document.querySelector(".main-body");
const divImg = document.querySelector("#div-img");

const clickMeal = document.getElementById("clickMeal");
const mealListBox = document.querySelector(".mealListBox");

if (res) {
    setTimeout(() => {
        res.remove();
    }, 4000);
}

const handleClick = () => {
    if (hamburger) {
        leftNav.classList.toggle("toggle");
        mainBody.classList.toggle("toggleBodyWidth");
        nav.classList.toggle("toggleNavWidth");
        divImg.classList.toggle("div-img");
    }
};

hamburger.addEventListener("click", handleClick);

const handleClickMealLink = (e) => {
    e.preventDefault();

    if (clickMeal) {
        mealListBox.classList.toggle("showMealBox");
    }
};

clickMeal.addEventListener("click", handleClickMealLink);
