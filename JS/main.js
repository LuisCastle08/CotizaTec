function capturar() {
    function Elemento(nombre,cantidad,precio,total) {
    this.nombre=nombre;
    this.cantidad=cantidad;
    this.precio=precio;   
    this.total=total;
    }
    
    let nombre = document.getElementById('nombre').value;
    let cantidad = document.getElementById('cantidad').value;
    let precio = document.getElementById('precio').value;
    let total=0;
    
        if (nombre=="" || cantidad=="" || precio =='') {
            alert("No puedes dejar elementos vacios")
        }else{
            total=cantidad*precio;
            nuevoElemento = new Elemento(nombre,cantidad,precio,total);
            console.log(nuevoElemento);
            agregar();
        }
        
}

var BD=[];
let nombre=[], cantidades=[], precios=[],totales=[];
function agregar() {
    let CABEZA = document.getElementById('titulo').value;
    console.log(CABEZA)
    BD.push(nuevoElemento);

    /*ALMACENAMIENTO DE ELEMENTOS EN CADA OPCION PARA ENVIARLA A PHP ATRAVES DEL FORMULARIO */
    nombre.push(nuevoElemento.nombre);
    cantidades.push(nuevoElemento.cantidad);
    precios.push(nuevoElemento.precio);
    totales.push(nuevoElemento.total);
    /*IMPRESIONES DE PRUEBA */
/*     console.log("ARRAY DE NOMBRES: "+nombre);
    console.log("ARRAY DE CANTIDADES: "+cantidades);
    console.log("ARRAY DE PRECIOS: "+precios);
    console.log("ARRAY DE TOTAL: "+totales);
 */
    /* IMPRESION EN PANTALLA DE LOS ELEMENTOS INGRESADOS */
    document.getElementById('tabla').innerHTML += '<tbody><tr><td>'+nuevoElemento.nombre+'</td><td>'+nuevoElemento.cantidad+'</td><td>'+nuevoElemento.precio+'</td><td>'+nuevoElemento.total+'</td></tr></tbody>'

    /*CAMBIAMOS LOS ARRAYS A ELEMENTOS TIPO TEXTO PARA ENVIAR POR HIDDEN EN FORMULARIO */
    
    let ArrayNombre = nombre.toLocaleString()
    let ArrayCantidad = cantidades.toLocaleString()
    let ArrayPrecio = precios.toLocaleString()
    
    /* ASIGNAMOS LOS ARRAYS TIPO STRING A LOS INPUTS OCULTOS DEL FORMULARIO */
    document.getElementById('head').value = CABEZA;
    document.getElementById('nombres').value = ArrayNombre;
    document.getElementById('cantidades').value = ArrayCantidad;
    document.getElementById('precios').value = ArrayPrecio;
    document.getElementById('totales').value = totales;
    limpieza();
}

function limpieza() {
    document.getElementById('nombre').value = " ";
    document.getElementById('cantidad').value = "1";
    document.getElementById('precio').value = " ";
    
}

