let formulario = document.getElementById("formulario");
formulario.addEventListener("submit", function(event) {
    console.log("ok");
    event.preventDefault();
});


let paisOrigen = document.getElementById("paisOrigen");
let paisDestino = document.getElementById("paisDestino");
let mensaje=document.getElementById("mensaje");
paisDestino.addEventListener("change", function(){
    if(paisOrigen.value==paisDestino.value){
        paisDestino.value=null;
        mensaje.innerHTML=" <p> El pais de destino no puede ser igual al pais de origen</p>";
        mensaje.style.color="red";
    }
});
let fechaRegreso = document.getElementById("fechaRegreso");
let tipo2 = document.getElementById("tipo2");
tipo2.addEventListener("click",function(){
    fechaRegreso.style.display = "none";   
});

let tipo1 = document.getElementById("tipo1");
tipo1.addEventListener("click",function(){
    fechaRegreso.style.display = "block";   
});







