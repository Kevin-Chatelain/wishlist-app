window.addEventListener("load", () => {
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
});