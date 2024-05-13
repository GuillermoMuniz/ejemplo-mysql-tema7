const urlObtenerEmpleados = "http:/192.168.50.55/backend/conexionBBDD.php";

async function obtenerEmpleados(){
    try{
        //Obtener la lista de enpleados del backend
        const listaEmpleados = await fetch(urlObtenerEmpleados)
        .then(respuesta => respuesta.json())

        console.log(respuesta)
    }catch(error){
        console.log(error)
    }

}