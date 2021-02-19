const listaProductos = document.querySelector('#productos');
const contenedor= document.querySelector('#carrito tbody');
const boton = document.querySelector('#agregar');
let CarritoProductos=[];
// const CaritoProductos = document.querySelector;


cargarEventListeners();

function cargarEventListeners() {
    // Dispara cuando se presiona "Agregar Carrito"
    listaProductos.addEventListener('click',agregarProducto);

}


function agregarProducto(e){
    e.preventDefault();
    // Delegation para agregar-carrito
    if(e.target.classList.contains('agregar-carrito')){
        const elemntoS=e.target.parentElement;
        leerProducto(elemntoS);

    }
}


function leerProducto(elemntoS){
    console.log(elemntoS);
    var a=elemntoS.querySelector('#Cantidad').textContent;
    var b=elemntoS.querySelector('#Precio').textContent;
    parseFloat(a);
    parseFloat(b);
    var Total=a*b;
   
    const infoP={
        producto:elemntoS.querySelector('#Pro').textContent,
        Tipo:elemntoS.querySelector('#Tip').textContent,
        Precio:elemntoS.querySelector('#Precio').textContent,
        Cantidad:elemntoS.querySelector('#Cantidad').textContent,
        Total:Total,
        

    }
    CarritoProductos=[...CarritoProductos, infoP];
    console.log(CarritoProductos);
    

}