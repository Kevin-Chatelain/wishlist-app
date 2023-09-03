window.addEventListener("load", () => {
    /** FILTERS **/
    document.querySelectorAll(".filters button").forEach(filter => {
        filter.addEventListener("click", function () {
            this.classList.toggle("selected");
            let filter = this.innerText;
            document.querySelectorAll(".card").forEach(card => {
                let category = card.querySelector('.card-category').innerText;
                if(category === filter) {
                    if(this.classList.contains("selected")) {
                        card.classList.remove("hidden");
                    }
                    else {
                        card.classList.add("hidden");
                    }
                }
            });
        });
    });

    /** FORM **/
    document.querySelector(".new-product").addEventListener("click", () => {
        document.querySelector(".register-form").classList.remove("hidden");
        document.querySelector(".body-shadow").classList.remove("hidden");
    });
    document.querySelector(".close-form").addEventListener("click", () => {
        document.querySelector(".register-form").classList.add("hidden");
        document.querySelector(".body-shadow").classList.add("hidden");
    });
});