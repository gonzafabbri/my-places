window.onload = function(){

var preg = document.getElementsByClassName("pregunta");

  console.log(preg[0]);
  for (var i = 0; i <= preg.length; i++) {
    console.log(preg[i]);

    preg[i].onclick = function(){
     respuesta = this.nextElementSibling;
     console.log(respuesta);
    //  respuesta.style.display = "none"
      if (respuesta.style.display == "block"){
        respuesta.style.display ="none";
      }else{
        respuesta.style.display ="block";
      }
    }
}



}




// window.onload = function(){
//
// var pregunta= document.querySelector(".preg");
// var resp= document.querySelector(".resp");
//
// pregunta.onclick= function (){
//   resp.style.display= "block";
// }
// }
