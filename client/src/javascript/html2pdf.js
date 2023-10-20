// Script para gerar pdf

function GeneratePdf() {
  console.log("GeneratePdf function called");
  var element = document.getElementById("form-print");
  html2pdf(element);
}
