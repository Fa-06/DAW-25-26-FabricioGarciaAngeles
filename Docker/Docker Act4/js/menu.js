var condicion = true;
function desplegar(){
    if(condicion){
        const elementos = document.getElementsByTagName("li");
        /*const nav = document.getElementsByTagName("nav");
        nav.classList.add("col-small-12");
        nav.classList.remove("hidden-small");*/
    for (let i = 0; i < elementos.length; i++) {
        elementos[i].classList.add("col-small-12");
        elementos[i].classList.remove("hidden-small");
        condicion = false;
    }}else{
        const elementos = document.getElementsByTagName("li");
        /*const nav = document.getElementsByTagName("nav");
        nav.classList.add("hidden-small");
        nav.classList.remove("col-small-12");*/
    for (let i = 0; i < elementos.length; i++) {
        elementos[i].classList.remove("col-small-12");

        elementos[i].classList.add("hidden-small");
        condicion = true;
    }}
}