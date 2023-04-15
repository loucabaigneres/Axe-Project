// // Récupération du modal de suppression
const deleteModal = document.querySelector(".overlay-delete");
// // Récupération du bouton d'ouverture du modal de suppression
const openDeleteModal = document.querySelector(".poubelle");
// // Récupération du bouton de fermeture du modal de suppression
const closeDeleteModal = document.querySelector(".non");

openDeleteModal.addEventListener("click", () => {
    deleteModal.classList.remove("delete-hidden");
});

closeDeleteModal.addEventListener("click", () => {
    deleteModal.classList.add("delete-hidden");
});

openDeleteModal.addEventListener("click", () => {
    console.log("Salut");
});
