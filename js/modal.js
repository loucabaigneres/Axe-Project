// // Récupération du modal
const modal = document.querySelector(".overlay");
// // Récupération du bouton d'ouverture du modal
const openModal = document.getElementById("button-modal");
// // Récupération du bouton de fermeture du modal
const closeModal = document.getElementById("not-distribute");

openModal.addEventListener("click", () => {
    modal.classList.remove("hidden");
});

closeModal.addEventListener("click", () => {
    modal.classList.add("hidden");
});
