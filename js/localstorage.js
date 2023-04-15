// Variable récupérant l'id du textarea à sauvegarder
const inputMessage = document.getElementById("post_content");

// Écoute de la saisie de l'utilisateur dans un input
inputMessage.addEventListener("input", () => {
    // Enregistrement de la saisie dans le Local Storage
    localStorage.setItem("post_content", inputMessage.value);
    console.log("Hello world");
});

// Vérification de la présence d'une saisie dans le Local Storage
const draftMessage = localStorage.getItem("post_content");
if (draftMessage) {
    // Remplacement du contenu de l'input par la saisie présente dans le Local Storage
    inputMessage.value = draftMessage;
}
