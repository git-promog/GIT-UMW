<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package storefront
 */

?>

		</div><!-- .col-full -->
	</div><!-- #content -->

	<?php do_action( 'storefront_before_footer' ); ?>




 


<!--FOOTER-->
<div class="section font-small pt-3 mt-0 text-center" style="background-color: #11172f;">

<!--Footer Links-->
<div class="container-fluid text-center">
<div class="row d-flex justify-content-center align-items-center">

<!--column-->
<div class="col-md-4 text-center pt-4 pt-md-2">
<div class=" py-2">
<img src="/umw/img/footer/foot-um.png" class="img-fluid" alt="">
</div>
</div>
<!--/.column-->

<!--column-->
<div class="col-md-2 text-center pt-4 pt-md-2">
<div class=" py-2">
<img src="/umw/img/footer/foot-usa.png" class="img-fluid" alt="">
</div>
</div>
<!--/.column-->

<!--column-->
<div class="col-md-2 text-center pt-4 pt-md-2">
<div class=" py-2">
<a href="tel:+5219992513150"><img src="/umw/img/footer/foot-tel.png" class="img-fluid" alt=""></a>
</div>
</div>
<!--/.column-->

<!--column-->
<div class="col-md-2 text-center pt-4 pt-md-2">
<div class=" py-2">
<img src="/umw/img/footer/foot-hashtag.png" class="img-fluid" alt="">
</div>
</div>
<!--/.column-->

<!--column-->
<div class="col-md-2 text-center pt-4 pt-md-2">
<div class=" py-2">
<a href="https://www.facebook.com/ummotosmexico/"><i class="fab fa-facebook-f fa-2x px-1" style="color: #d15235;"></i></a>
<a href="https://www.youtube.com/channel/UCNI5h-CIfkMUSpVaYAooW3A"><i class="fab fa-youtube fa-2x px-1" style="color: #d15235;"></i></a>
<a href="https://www.instagram.com/ummotosmexico/"><i class="fab fa-instagram fa-2x px-1" style="color: #d15235;"></i></a>
</div>
</div>
<!--/.column-->



</div>



<div class="row d-flex justify-content-center align-items-center py-3">
<div class="col-md-2 col-12 text-center">
<a href="http://ummotosmexico.mx/umw/politica_de_privacidad.html" style="color: #838383;">• Política de privacidad</a>
</div>
<div class="col-md-2 col-12 text-center">
<a href="http://ummotosmexico.mx/umw/politica_de_envio.html" style="color: #838383;">• Política de envío</a>
</div>
<div class="col-md-2 col-12 text-center">
<a href="http://ummotosmexico.mx/umw/politica_de_cambios_o_devoluciones.html" style="color: #838383;">• Política de cambios o devoluciones</a>
</div>
<div class="col-md-2 col-12 text-center">
<a href="http://ummotosmexico.mx/umw/terminos_y_condiciones_del_servicio.html" style="color: #838383;">• Términos y condiciones del servicio</a>
</div>
<div class="col-md-2 col-12 text-center">
<a href="http://ummotosmexico.mx/umw/garantias.html" style="color: #838383;">• Garantías</a>
</div>




</div>




</div>
<!--/.Footer Links-->










<!--Copyright-->
<div class="footer-copyright py-3 text-center" style="background-color: #0a0a0a;">
<div class="container-fluid">
© Copyright: <script>document.write( new Date().getUTCFullYear() );</script>.    <a style="font-size: 16px; color: #bfbfbf;">UM MOTOS MÉXICO</a>
</div>
</div>
<!--/.Copyright-->



			<?php
			/**
			 * Functions hooked in to storefront_footer action
			 *
			 * @hooked storefront_footer_widgets - 10
			 * @hooked storefront_credit         - 20
			 */
			do_action( 'storefront_footer' );
			?>

</div>  <!--/.FOOTER-->








	<?php do_action( 'storefront_after_footer' ); ?>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
