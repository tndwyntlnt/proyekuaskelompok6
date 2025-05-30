const hamburger = document.querySelector(".ri-menu-line");
const menu = document.querySelector(".menu");


hamburger.addEventListener("click", () => {
    menu.classList.toggle("menu-active");
});

window.onscroll = () => {
    menu.classList.remove("menu-active");
};

const btnFilter = document.querySelectorAll(".produk-box ul li");
const imgItem = document.querySelectorAll(".produk-list img");

btnFilter.forEach((data) => {
    data.onclick = () => {
        btnFilter.forEach((data) => {
            data.className = "";
        });

        data.className = "active";

        // Filter produk
        const btnText = data.textContent;
        imgItem.forEach((img) => {
            img.style.display = "none";
            if (img.getAttribute("data-filter") == btnText.toLowerCase() || btnText ==  "Semua Produk"){
                img.style.display = "block";
            }
        });
        
        // imgItem.forEach((img) => {
        //     img.style.display = "none";
        //     if (img.getAttribute("data-filter") == btnText.toLowerCase()) {
        //         img.style.display = "block";
        //     }
        // });
    };
});