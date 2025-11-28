function readMore(btn){
    let post = btn.parentElement;
    post.querySelector(".more").classList.toggle("hide");
    btn.textContent == "Leer más" ? btn.textContent = "Leer menos" : btn.textContent = "Leer más";
}