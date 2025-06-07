//-- ANIMATION -----------------------------------------------------------
$(document).ready(function() {
  new WOW().init();
});







   
 

//-- FLECHA IR ARRIBA -----------------------------------------------------------


$(document).ready(function(){ //Hacia arriba
  irArriba();
});

function irArriba(){
  $('.ir-arriba').click(function(){ $('body,html').animate({ scrollTop:'0px' },1000); });
  $(window).scroll(function(){
    if($(this).scrollTop() > 0){ $('.ir-arriba').slideDown(600); }else{ $('.ir-arriba').slideUp(600); }
  });
  $('.ir-abajo').click(function(){ $('body,html').animate({ scrollTop:'1000px' },1000); });
}





//-- PRELOADER -----------------------------------------------------------

$(window).on('load', function () {
    $(".loader-page").css({visibility:"hidden",opacity:"0"})
          
});




 



//-- MODALS -----------------------------------------------------------


function openModal() {
  document.getElementById("myModal").style.display = "block";
}

function closeModal() {
  document.getElementById("myModal").style.display = "none";
}

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}




 



//-- COTIZADOR COTIZADOR COTIZADOR ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------


	
function calcularValoresRespuesta(e) {
  var valorSelect1 = document.getElementById("sel1").value;
  var valorSelect2 = document.getElementById("sel2").value;
  var elemRespuesta = document.getElementById("res");
  if(valorSelect1 == 'max_rs_150' && valorSelect2 == 'epromo') {
    elemRespuesta.innerHTML = ' <div class="row d-flex align-items-center justify-content-center text-center">'+
	'<div class="col-10 col-md-3 cuadrores wow fadeIn">'+
		'<p class="mb-1"><strong>Enganche de Promoción:</strong> $0,000</p>'+
   		'<p class="mb-1"><strong>48 Pagos semanales:</strong> $000</p>'+
   		'<p class="mb-1"><strong>Precio Final:</strong> $00,000</p>'+
   	'</div>'+
   	
   	'<div class="col-10 col-md-3 cuadrores wow fadeIn">'+
   		'<p class="mb-1"><strong>Enganche de Promoción:</strong> $0,000</p>'+
   		'<p class="mb-1"><strong>72 Pagos semanales:</strong> $000</p>'+
   		'<p class="mb-1"><strong>Precio Final:</strong> $00,000</p>'+
   	'</div>'+
   	 
   	'<div class="col-10 col-md-3 cuadrores wow fadeIn">'+
   		'<p class="mb-1"><strong>Enganche de Promoción:</strong> $0,000</p>'+
   		'<p class="mb-1"><strong>120 Pagos semanales:</strong> $000</p>'+
   		'<p class="mb-1"><strong>Precio Final:</strong> $00,000</p>'+
   	'</div>'+
	'</div> '+
	'<div class="row d-flex align-items-center justify-content-center text-center"> <div class="col-5 col-md-2 wow fadeIn">'+
		'<img src="umw/img/modelos/logos/logo-maxrs150-b.png" class="img-fluid">'+
	'</div> </div>'	
	;
  }
  if(valorSelect1 == 'max_rs_150' && valorSelect2 == 'e15') {
    elemRespuesta.innerHTML = ' <div class="row d-flex align-items-center justify-content-center text-center">'+
	'<div class="col-10 col-md-3 cuadrores wow fadeIn">'+
		'<p class="mb-1"><strong>Enganche de Promoción:</strong> $15,000</p>'+
   		'<p class="mb-1"><strong>48 Pagos semanales:</strong> $000</p>'+
   		'<p class="mb-1"><strong>Precio Final:</strong> $00,000</p>'+
   	'</div>'+
   	
   	'<div class="col-10 col-md-3 cuadrores wow fadeIn">'+
   		'<p class="mb-1"><strong>Enganche de Promoción:</strong> $0,000</p>'+
   		'<p class="mb-1"><strong>72 Pagos semanales:</strong> $000</p>'+
   		'<p class="mb-1"><strong>Precio Final:</strong> $00,000</p>'+
   	'</div>'+
   	
   	'<div class="col-10 col-md-3 cuadrores wow fadeIn">'+
   		'<p class="mb-1"><strong>Enganche de Promoción:</strong> $0,000</p>'+
   		'<p class="mb-1"><strong>120 Pagos semanales:</strong> $000</p>'+
   		'<p class="mb-1"><strong>Precio Final:</strong> $00,000</p>'+
   	'</div>'+
	'</div> '+
	'<div class="row d-flex align-items-center justify-content-center text-center"> <div class="col-5 col-md-2 wow fadeIn">'+
		'<img src="umw/img/modelos/logos/logo-maxrs150-b.png" class="img-fluid">'+
	'</div> </div>'	
	;
  }
  if(valorSelect1 == 'max_rs_150' && valorSelect2 == 'e20') {
    elemRespuesta.innerHTML = ' <div class="row d-flex align-items-center justify-content-center text-center">'+
	'<div class="col-10 col-md-3 cuadrores wow fadeIn">'+
		'<p class="mb-1"><strong>Enganche de Promoción:</strong> $20,000</p>'+
   		'<p class="mb-1"><strong>48 Pagos semanales:</strong> $000</p>'+
   		'<p class="mb-1"><strong>Precio Final:</strong> $00,000</p>'+
   	'</div>'+
   	
   	'<div class="col-10 col-md-3 cuadrores wow fadeIn">'+
   		'<p class="mb-1"><strong>Enganche de Promoción:</strong> $0,000</p>'+
   		'<p class="mb-1"><strong>72 Pagos semanales:</strong> $000</p>'+
   		'<p class="mb-1"><strong>Precio Final:</strong> $00,000</p>'+
   	'</div>'+
   	 
   	'<div class="col-10 col-md-3 cuadrores wow fadeIn">'+
   		'<p class="mb-1"><strong>Enganche de Promoción:</strong> $0,000</p>'+
   		'<p class="mb-1"><strong>120 Pagos semanales:</strong> $000</p>'+
   		'<p class="mb-1"><strong>Precio Final:</strong> $00,000</p>'+
   	'</div>'+
	'</div> '+
	'<div class="row d-flex align-items-center justify-content-center text-center"> <div class="col-5 col-md-2 wow fadeIn">'+
		'<img src="umw/img/modelos/logos/logo-maxrs150-b.png" class="img-fluid">'+
	'</div> </div>'	
	;
  }
  
    if(valorSelect1 == 'scrambler_z_200' && valorSelect2 == 'epromo') {
    elemRespuesta.innerHTML = ' <div class="row d-flex align-items-center justify-content-center text-center">'+
	'<div class="col-10 col-md-3 cuadrores wow fadeIn">'+
		'<p class="mb-1"><strong>Enganche de Promoción:</strong> $0,000</p>'+
   		'<p class="mb-1"><strong>48 Pagos semanales:</strong> $000</p>'+
   		'<p class="mb-1"><strong>Precio Final:</strong> $00,000</p>'+
   	'</div>'+
   	
   	'<div class="col-10 col-md-3 cuadrores wow fadeIn">'+
   		'<p class="mb-1"><strong>Enganche de Promoción:</strong> $0,000</p>'+
   		'<p class="mb-1"><strong>72 Pagos semanales:</strong> $000</p>'+
   		'<p class="mb-1"><strong>Precio Final:</strong> $00,000</p>'+
   	'</div>'+
   	
   	'<div class="col-10 col-md-3 cuadrores wow fadeIn">'+
   		'<p class="mb-1"><strong>Enganche de Promoción:</strong> $0,000</p>'+
   		'<p class="mb-1"><strong>120 Pagos semanales:</strong> $000</p>'+
   		'<p class="mb-1"><strong>Precio Final:</strong> $00,000</p>'+
   	'</div>'+
	'</div> '+
	'<div class="row d-flex align-items-center justify-content-center text-center"> <div class="col-5 col-md-2 wow fadeIn">'+
		'<img src="umw/img/modelos/logos/logo-scrambler-b.png" class="img-fluid">'+
	'</div> </div>'	
	;
  }
  if(valorSelect1 == 'scrambler_z_200' && valorSelect2 == 'e15') {
    elemRespuesta.innerHTML = ' <div class="row d-flex align-items-center justify-content-center text-center">'+
	'<div class="col-10 col-md-3 cuadrores wow fadeIn">'+
		'<p class="mb-1"><strong>Enganche de Promoción:</strong> $15,000</p>'+
   		'<p class="mb-1"><strong>48 Pagos semanales:</strong> $000</p>'+
   		'<p class="mb-1"><strong>Precio Final:</strong> $00,000</p>'+
   	'</div>'+
   	
   	'<div class="col-10 col-md-3 cuadrores wow fadeIn">'+
   		'<p class="mb-1"><strong>Enganche de Promoción:</strong> $0,000</p>'+
   		'<p class="mb-1"><strong>72 Pagos semanales:</strong> $000</p>'+
   		'<p class="mb-1"><strong>Precio Final:</strong> $00,000</p>'+
   	'</div>'+
   	
   	'<div class="col-10 col-md-3 cuadrores wow fadeIn">'+
   		'<p class="mb-1"><strong>Enganche de Promoción:</strong> $0,000</p>'+
   		'<p class="mb-1"><strong>120 Pagos semanales:</strong> $000</p>'+
   		'<p class="mb-1"><strong>Precio Final:</strong> $00,000</p>'+
   	'</div>'+
	'</div> '+
	'<div class="row d-flex align-items-center justify-content-center text-center"> <div class="col-5 col-md-2 wow fadeIn">'+
		'<img src="umw/img/modelos/logos/logo-scrambler-b.png" class="img-fluid">'+
	'</div> </div>'	
	;
  }
  if(valorSelect1 == 'scrambler_z_200' && valorSelect2 == 'e20') {
    elemRespuesta.innerHTML = ' <div class="row d-flex align-items-center justify-content-center text-center">'+
	'<div class="col-10 col-md-3 cuadrores wow fadeIn">'+
		'<p class="mb-1"><strong>Enganche de Promoción:</strong> $20,000</p>'+
   		'<p class="mb-1"><strong>48 Pagos semanales:</strong> $000</p>'+
   		'<p class="mb-1"><strong>Precio Final:</strong> $00,000</p>'+
   	'</div>'+
   	
   	'<div class="col-10 col-md-3 cuadrores wow fadeIn">'+
   		'<p class="mb-1"><strong>Enganche de Promoción:</strong> $0,000</p>'+
   		'<p class="mb-1"><strong>72 Pagos semanales:</strong> $000</p>'+
   		'<p class="mb-1"><strong>Precio Final:</strong> $00,000</p>'+
   	'</div>'+
   	
   	'<div class="col-10 col-md-3 cuadrores wow fadeIn">'+
   		'<p class="mb-1"><strong>Enganche de Promoción:</strong> $0,000</p>'+
   		'<p class="mb-1"><strong>120 Pagos semanales:</strong> $000</p>'+
   		'<p class="mb-1"><strong>Precio Final:</strong> $00,000</p>'+
   	'</div>'+
	'</div> '+
	'<div class="row d-flex align-items-center justify-content-center text-center"> <div class="col-5 col-md-2 wow fadeIn">'+
		'<img src="umw/img/modelos/logos/logo-scrambler-b.png" class="img-fluid">'+
	'</div> </div>'	
	;
  }
  
    if(valorSelect1 == 'liberty_250' && valorSelect2 == 'epromo') {
    elemRespuesta.innerHTML = ' <div class="row d-flex align-items-center justify-content-center text-center">'+
	'<div class="col-10 col-md-3 cuadrores wow fadeIn">'+
		'<p class="mb-1"><strong>Enganche de Promoción:</strong> $0,000</p>'+
   		'<p class="mb-1"><strong>48 Pagos semanales:</strong> $000</p>'+
   		'<p class="mb-1"><strong>Precio Final:</strong> $00,000</p>'+
   	'</div>'+
   	
   	'<div class="col-10 col-md-3 cuadrores wow fadeIn">'+
   		'<p class="mb-1"><strong>Enganche de Promoción:</strong> $0,000</p>'+
   		'<p class="mb-1"><strong>72 Pagos semanales:</strong> $000</p>'+
   		'<p class="mb-1"><strong>Precio Final:</strong> $00,000</p>'+
   	'</div>'+
   	
   	'<div class="col-10 col-md-3 cuadrores wow fadeIn">'+
   		'<p class="mb-1"><strong>Enganche de Promoción:</strong> $0,000</p>'+
   		'<p class="mb-1"><strong>120 Pagos semanales:</strong> $000</p>'+
   		'<p class="mb-1"><strong>Precio Final:</strong> $00,000</p>'+
   	'</div>'+
	'</div> '+
	'<div class="row d-flex align-items-center justify-content-center text-center"> <div class="col-5 col-md-2 wow fadeIn">'+
		'<img src="umw/img/modelos/logos/logo-commando-b.png" class="img-fluid">'+
	'</div> </div>'	
	;
  }
  if(valorSelect1 == 'liberty_250' && valorSelect2 == 'e15') {
    elemRespuesta.innerHTML = ' <div class="row d-flex align-items-center justify-content-center text-center">'+
	'<div class="col-10 col-md-3 cuadrores wow fadeIn">'+
		'<p class="mb-1"><strong>Enganche de Promoción:</strong> $15,000</p>'+
   		'<p class="mb-1"><strong>48 Pagos semanales:</strong> $000</p>'+
   		'<p class="mb-1"><strong>Precio Final:</strong> $00,000</p>'+
   	'</div>'+
   	
   	'<div class="col-10 col-md-3 cuadrores wow fadeIn">'+
   		'<p class="mb-1"><strong>Enganche de Promoción:</strong> $0,000</p>'+
   		'<p class="mb-1"><strong>72 Pagos semanales:</strong> $000</p>'+
   		'<p class="mb-1"><strong>Precio Final:</strong> $00,000</p>'+
   	'</div>'+
   	
   	'<div class="col-10 col-md-3 cuadrores wow fadeIn">'+
   		'<p class="mb-1"><strong>Enganche de Promoción:</strong> $0,000</p>'+
   		'<p class="mb-1"><strong>120 Pagos semanales:</strong> $000</p>'+
   		'<p class="mb-1"><strong>Precio Final:</strong> $00,000</p>'+
   	'</div>'+
	'</div> '+
	'<div class="row d-flex align-items-center justify-content-center text-center"> <div class="col-5 col-md-2 wow fadeIn">'+
		'<img src="umw/img/modelos/logos/logo-commando-b.png" class="img-fluid">'+
	'</div> </div>'	
	;
  }
  if(valorSelect1 == 'liberty_250' && valorSelect2 == 'e20') {
    elemRespuesta.innerHTML = ' <div class="row d-flex align-items-center justify-content-center text-center">'+
	'<div class="col-10 col-md-3 cuadrores wow fadeIn">'+
		'<p class="mb-1"><strong>Enganche de Promoción:</strong> $20,000</p>'+
   		'<p class="mb-1"><strong>48 Pagos semanales:</strong> $000</p>'+
   		'<p class="mb-1"><strong>Precio Final:</strong> $00,000</p>'+
   	'</div>'+
   	
   	'<div class="col-10 col-md-3 cuadrores wow fadeIn">'+
   		'<p class="mb-1"><strong>Enganche de Promoción:</strong> $0,000</p>'+
   		'<p class="mb-1"><strong>72 Pagos semanales:</strong> $000</p>'+
   		'<p class="mb-1"><strong>Precio Final:</strong> $00,000</p>'+
   	'</div>'+
   	
   	'<div class="col-10 col-md-3 cuadrores wow fadeIn">'+
   		'<p class="mb-1"><strong>Enganche de Promoción:</strong> $0,000</p>'+
   		'<p class="mb-1"><strong>120 Pagos semanales:</strong> $000</p>'+
   		'<p class="mb-1"><strong>Precio Final:</strong> $00,000</p>'+
   	'</div>'+
	'</div> '+
	'<div class="row d-flex align-items-center justify-content-center text-center"> <div class="col-5 col-md-2 wow fadeIn">'+
		'<img src="umw/img/modelos/logos/logo-commando-b.png" class="img-fluid">'+
	'</div> </div>'	
	;
  }


}

document.getElementById("sel1").addEventListener("change", calcularValoresRespuesta);

document.getElementById("sel2").addEventListener("change", calcularValoresRespuesta);









