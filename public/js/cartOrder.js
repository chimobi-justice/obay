const clickModalCartOpen = document.getElementById("clickModalCartOpen");
const cartModal = document.getElementById("cartModal");
const closeCartModal = document.getElementById("closeCartModal");

clickModalCartOpen.onclick = (e) => {
    e.preventDefault();
    cartModal.style.display = "block";
};

closeCartModal.onclick = (e) => {
    e.preventDefault();
    cartModal.style.display = "none";
};
