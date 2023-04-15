let notSignedUp = false;

const accueil = document.querySelector(".accueil");

accueil.addEventListener("scroll", () => {
    if (!notSignedUp) {
        setTimeout(() => {
            document.querySelector(".overlay-popup").style.display = "flex";
        }, 2000);
        notSignedUp = true;
    }
});

document.querySelector(".close-popup").addEventListener("click", () => {
    document.querySelector(".overlay-popup").style.display = "none";
});

document.querySelector(".go-sign-up").addEventListener("click", () => {
    
});
