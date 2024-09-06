window.onload = function(){
    let fecha=document.querySelector('#fecha');
    //el atributo min de html, YYYY-MM-DD
    let hoy=new Date();
    let year=hoy.getFullYear();
    let month=String(hoy.getMonth()+1).padStart(2,'0'); //comenzar por 0 en caso de 1 al 9
    let day=String(hoy.getDate()).padStart(2, '0');
    let fechaMinima=year+'-'+month+'-'+day;
    console.log(fechaMinima)
    //a el input de fecha le agregamos el atributo de fecha minima
    fecha.setAttribute("min",fechaMinima);

    check=document.querySelector("#casilla");
    boton=document.querySelector("#enviar");
    check.addEventListener("change",function(){
        if (check.checked){
            boton.disabled=false;
            boton.style.background="#000"
            boton.style.color="#fff"
        }else{
            boton.disabled=true;
            boton.style.background="#504f4f"
            boton.style.color="#000"
        }
})
    let hora=document.querySelector("#hora");
    hora.addEventListener("click",function(){
          for (let i = 9; i < 20;i++) {
              if (i == 14 || i == 15) {
                  continue;
              } else {
                  let opcion = document.createElement("option")
                  opcion.value = i;
                  opcion.textContent = i + ":00";
                  hora.appendChild(opcion);
                  let opcion2 = document.createElement("option")
                  opcion2.value = i;
                  opcion2.textContent = i + ":30";
                  hora.appendChild(opcion2);
              }
          }
    })
}