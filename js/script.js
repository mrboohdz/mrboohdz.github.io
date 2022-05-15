function actualizarTabla() {
    let tabla = document.getElementById("tablaTrabajadores");
    tabla.innerHTML = "";
    
    let trabajadores = [
        {
            "idTrabajador": 1,
            "nombreTrabajador": "Tony Stark",
            "fechaTrabajador":1963,
            "fotoTrabajador":"./img/person-circle.svg"
        },
        {
            "idTrabajador": 2,
            "nombreTrabajador": "Steve Rogers",
            "fechaTrabajador":1936,
            "fotoTrabajador":"./img/person-circle.svg"
        },
        {
            "idTrabajador": 3,
            "nombreTrabajador": "Matt Murdock",
            "fechaTrabajador":1978,
            "fotoTrabajador":"./img/person-circle.svg"
        },
        {
            "idTrabajador": 4,
            "nombreTrabajador": "Peter Parker",
            "fechaTrabajador":1996,
            "fotoTrabajador":"./img/person-circle.svg"
        }
    ];
    console.log(trabajadores);
    for(let i=0; i<trabajadores.length; i++){
        tabla.innerHTML += "<div class='row border-top border-bottom border-dark border-2'><div class='col-md-3 align-middle'><img src='"+trabajadores[i].fotoTrabajador+"' alt='prof-pic' height='100px' class='p-1 mx-5'></div><div class='col-md-6'><div class='row m-3'><div class='col-md-12'><div class='form-check'><input class='form-check-input' type='radio' name='trabajadores' id='trabajador1'><label class='form-check-label' for='trabajador1'>"+trabajadores[i].nombreTrabajador+"</label></div></div></div><div class='row m-3'><div class='col-md-6'>"+trabajadores[i].fechaTrabajador+"</div><div class='col-md-6'>"+trabajadores[i].idTrabajador+"</div></div></div><div class='col-md-3 align-middle'><a class='btn btn-primary btn-guardar m-4' href='./expediente.html'>Ver Datos</a></div></div>";
    }
}