// função mascara do login
function mascara(i){
   
    var v = i.value;
    
    if(isNaN(v[v.length-1])){ // impede entrar outro caractere que não seja número
       i.value = v.substring(0, v.length-1);
       return;
    }
    
    i.setAttribute("maxlength", "14");
    if (v.length == 3 || v.length == 7) i.value += ".";
    if (v.length == 11) i.value += "-";
 
 }
 

 document.addEventListener("DOMContentLoaded", () => {
   // Escuchamos el click del botón
   const $boton = document.querySelector("#btnCrearPdf");
   $boton.addEventListener("click", () => {
       const $elementoParaConvertir = document.body; // <-- Aquí puedes elegir cualquier elemento del DOM
       html2pdf()
           .set({
               margin: 1,
               filename: 'ficha.pdf',
               image: {
                   type: 'jpeg',
                   quality: 0.98
               },
               html2canvas: {
                   scale: 3, // A mayor escala, mejores gráficos, pero más peso
                   letterRendering: true,
               },
               jsPDF: {
                   unit: "in",
                   format: "a3",
                   orientation: 'portrait' // landscape o portrait
               }
           })
           .from($elementoParaConvertir)
           .save()
           .catch(err => console.log(err));
   });
});