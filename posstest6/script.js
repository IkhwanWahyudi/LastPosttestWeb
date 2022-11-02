const button = document.querySelector("button");
const html = document.querySelector("html");
const beli = document.getElementById("beli");
const tema = document.getElementById("tema");

button.addEventListener("click", function( ) {
    if(html.dataset.colorMode == " ") {
        html.dataset.colorMode = "dark";
        this.textContent = "Light Mode";
    } else {
        html.dataset.colorMode = " ";
        this.textContent = "Dark Mode";
    }
})

beli.addEventListener("click", function( ) {
    alert("Selamat Berbelanja!")
})

tema.style.color = 'rgb(184, 31, 61)';