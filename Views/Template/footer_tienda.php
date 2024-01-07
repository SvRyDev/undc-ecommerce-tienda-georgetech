<?php
$catFotter = getCatFooter();
?>
<!-- Footer -->
<footer class="bg3 p-t-50 p-b-32" style="background:#01204d">

	<div class="container">
		<div class="row">

			<iframe
				src="
				https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d485.5573545240919!2d-76.35153626490354!3d-13.061711930929931!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x910ffb0f8415deb5%3A0x2d7e4c91417f681f!2sgeorge%20tech!5e0!3m2!1ses!2spe!4v1701793491236!5m2!1ses!2spe
				"
				style="width:100vw; border=0; margin:0;" height="250" allowfullscreen="" loading="lazy"
				referrerpolicy="no-referrer-when-downgrade"></iframe>
		</div>
	</div>

	<div class="container p-t-50">
		<div class="row">
			<div class="col-sm-6 col-lg-4 p-b-50">
				<h4 class="stext-301 cl0 p-b-30">
					Categorías
				</h4>
				<?php if (count($catFotter) > 0) { ?>
					<ul>
						<?php foreach ($catFotter as $cat) { ?>
							<li class="p-b-10">
								<a href="<?= base_url() ?>/tienda/categoria/<?= $cat['idcategoria'] . '/' . $cat['ruta'] ?>"
									class="stext-107 cl7 hov-cl1 trans-04">
									<?= $cat['nombre'] ?>
								</a>
							</li>
						<?php } ?>
					</ul>
				<?php } ?>
			</div>

			<div class="col-sm-6 col-lg-4 p-b-50">
				<h4 class="stext-301 cl0 p-b-30">
					Cotacto
				</h4>

				<p class="stext-107 cl7 size-201">
					<?= DIRECCION2 ." ". DIRECCION3 ." ".  DIRECCION ?> <br>
					Tel: <a class="linkFooter" href="tel:<?= TELEMPRESA ?>">
						<?= TELEMPRESA ?>
					</a><br>
					Email: <a class="linkFooter" href="mailto:<?= EMAIL_EMPRESA ?>">
						<?= EMAIL_EMPRESA ?>
					</a>
				</p>

				<div class="p-t-27">
					<a href="<?= FACEBOOK ?>" target="_blanck" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
						<i class="fa fa-facebook"></i>
					</a>

					<a href="https://wa.me/<?= WHATSAPP ?>" target="_blanck" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
						<i class="fab fa-whatsapp"></i>
					</a>
				</div>
			</div>

			<div class="col-sm-6 col-lg-4 p-b-50">
				<h4 class="stext-301 cl0 p-b-30">
					Suscríbete
				</h4>

				<form id="frmSuscripcion" name="frmSuscripcion">
					<div class="wrap-input1 w-full p-b-4">
						<input class="input1 bg-none plh1 stext-107 cl7" type="text" id="nombreSuscripcion"
							name="nombreSuscripcion" placeholder="Nombre completo" required>
						<div class="focus-input1 trans-04"></div>
					</div>
					<br>
					<div class="wrap-input1 w-full p-b-4">
						<input class="input1 bg-none plh1 stext-107 cl7" type="email" id="emailSuscripcion"
							name="emailSuscripcion" placeholder="email@example.com" required>
						<div class="focus-input1 trans-04"></div>
					</div>

					<div class="p-t-18">
						<button class="flex-c-m stext-101 cl0 size-103 bg1 bor1 hov-btn2 p-lr-15 trans-04">
							Suscribirme
						</button>
					</div>
				</form>


			</div>
		</div>

		<div class="p-t-40">
			<p class="stext-107 cl6 txt-center">
				<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
				<?= NOMBRE_EMPESA; ?> |
				<?= WEB_EMPRESA; ?> | <a href="<?= BASE_URL?>" target="_blank">Web</a>
				<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
			</p>
		</div>
	</div>
</footer>
<!-- Back to top -->
<div class="btn-back-to-top" id="myBtn">
	<span class="symbol-btn-back-to-top">
		<i class="zmdi zmdi-chevron-up"></i>
	</span>
</div>
<script>
	const base_url = "<?= base_url(); ?>";
	const smony = "<?= SMONEY; ?>";
</script>
<!--===============================================================================================-->
<script src="<?= media() ?>/tienda/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="<?= media() ?>/tienda/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script src="<?= media() ?>/tienda/vendor/bootstrap/js/popper.js"></script>
<script src="<?= media() ?>/tienda/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="<?= media() ?>/tienda/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="<?= media() ?>/tienda/vendor/daterangepicker/moment.min.js"></script>
<script src="<?= media() ?>/tienda/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
<script src="<?= media() ?>/tienda/vendor/slick/slick.min.js"></script>
<script src="<?= media() ?>/tienda/js/slick-custom.js"></script>
<!--===============================================================================================-->
<script src="<?= media() ?>/tienda/vendor/parallax100/parallax100.js"></script>
<!--===============================================================================================-->
<script src="<?= media() ?>/tienda/vendor/MagnificPopup/jquery.magnific-popup.min.js"></script>
<!--===============================================================================================-->
<script src="<?= media() ?>/tienda/vendor/isotope/isotope.pkgd.min.js"></script>
<!--===============================================================================================-->
<script src="<?= media() ?>/tienda/vendor/sweetalert/sweetalert.min.js"></script>
<!--===============================================================================================-->
<script src="<?= media() ?>/tienda/vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<!--===============================================================================================-->
<script src="<?= media(); ?>/js/fontawesome.js"></script>
<script src="<?= media() ?>/tienda/js/main.js"></script>
<script src="<?= media(); ?>/js/functions_admin.js"></script>
<script src="<?= media() ?>/js/functions_login.js"></script>
<script src="<?= media() ?>/tienda/js/functions.js"></script>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>

</body>

</html>