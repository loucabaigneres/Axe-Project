let tags = document.querySelectorAll(".accueil > .tags > .tag");

const publications = document.querySelector(".all-publications");

const replaceAllFilters = (filter) => {
    for (let i = 1; i < tags.length; i++) {
        publications.style.setProperty("--tag-" + i, filter);
    }
};

for (let i = 0; i < tags.length; i++) {
    const tag = tags[i];
    tag.addEventListener("click", () => {
        if (i == 0) {
            replaceAllFilters("flex");
        } else {
            replaceAllFilters("none");
            publications.style.setProperty("--tag-" + i, "flex");
        }
    });
}

replaceAllFilters("flex");
