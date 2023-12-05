<?php
headerTienda($data);
$banner = $data['page']['portada'];
$idpagina = $data['page']['idpost'];

?>
<script>
	document.querySelector('header').classList.add('header-v4');
</script>
<!-- Title page -->
<section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url(<?= $banner ?>);">
	<h2 class="ltext-105 cl0 txt-center">
		Contacto
	</h2>
</section>

<?php
if (viewPage($idpagina)) {
	?>
	<!-- Content page -->
	<section class="bg0 p-t-50 p-b-116">
		<div class="container">
			<div class="flex-w flex-tr">
				<div class="size-210 bor10 p-lr-70 p-t-50 p-b-40 p-lr-15-lg w-full-md">
					<form id="frmContacto">
						<h4 class="mtext-105 cl2 txt-center p-b-30">
							Enviar un mensaje
						</h4>

						<div class="bor8 m-b-20 how-pos4-parent">
							<input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" id="nombreContacto"
								name="nombreContacto" placeholder="Nombre completo">
							<img class="how-pos4 pointer-none" src="<?= media() ?>/tienda/images/icons/icon-name.png"
								alt="ICON" style="width: 28px;">
						</div>

						<div class="bor8 m-b-20 how-pos4-parent">
							<input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" id="emailContacto"
								name="emailContacto" placeholder="Correo electrónico">
							<img class="how-pos4 pointer-none" src="<?= media() ?>/tienda/images/icons/icon-email.png"
								alt="ICON">
						</div>

						<div class="bor8 m-b-20 how-pos4-parent">
							<input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" id="numeroTelefono"
								name="numeroTelefono" placeholder="Numero Telefono">
							<img class="how-pos4 pointer-none" style="width:25px; height:25px;"
								src="<?= media() ?>/tienda/images/icons/icon-phone.png" alt="ICON">
						</div>

						<div class="bor8 m-b-30">
							<textarea class="stext-111 cl2 plh3 size-120 p-lr-28 p-tb-25" id="mensaje" name="mensaje"
								placeholder="Cual es tu pregunta o mensaje?"></textarea>
						</div>

						<button class="flex-c-m stext-101 cl0 size-121 bg3 bor1 hov-btn3 p-lr-15 trans-04 pointer">
							Enviar
						</button>
					</form>
				</div>

				<div class="size-210 bor10 flex-w flex-col-m p-lr-93 p-tb-30 p-lr-15-lg w-full-md">
					<div class="flex-w w-full p-b-20">
						<span class="fs-18 cl5 txt-center size-211">
						<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
  <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6"/>
</svg>
						</span>

						<div class="size-212 p-t-2">
							<span class="mtext-110 cl2">
								Dirección
							</span>

							<p class="stext-115 cl6 size-213 p-t-18">
								<?= DIRECCION2 . "<br>" . DIRECCION3 . "<br>" . DIRECCION ?>
							</p>
						</div>
					</div>

					<div class="flex-w w-full p-b-20">
						<span class="fs-18 cl5 txt-center size-211">
						<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
</svg>
						</span>

						<div class="size-212 p-t-2">
							<span class="mtext-110 cl2">
								Teléfono
							</span>

							<p class="stext-115 cl1 size-213 p-t-18">

								<a class="" href="tel:<?= TELEMPRESA ?>">
									<?= TELEMPRESA ?>
								</a>
							</p>
						</div>
					</div>

					<div class="flex-w w-full p-b-20">
						<span class="fs-18 cl5 txt-center size-211">
						<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
  <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z"/>
</svg>
						</span>

						<div class="size-212 p-t-2">
							<span class="mtext-110 cl2">
								E-mail
							</span>

							<p class="stext-115 cl1 size-213 p-t-18">
								<a class="" href="mailto:<?= EMAIL_EMPRESA ?>">
									<?= EMAIL_EMPRESA ?>
								</a>
							</p>
						</div>
					</div>

					<div class="flex-w w-full p-b-20">
						<span class="fs-18 cl5 txt-center size-211">
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
								class="bi bi-whatsapp" viewBox="0 0 16 16">
								<path
									d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
							</svg>
						</span>

						<div class="size-212 p-t-2">
							<span class="mtext-110 cl2">
								Whatsapp
							</span>

							<p class="stext-115 cl6 size-213 p-t-18">
								<a href="https://wa.me/<?= WHATSAPP ?>"> <?= WHATSAPP ?> </a>
							</p>
						</div>
					</div>

					<i class="bi bi-facebook" style="color:black"></i>
					<div class="flex-w w-full">
						<span class="fs-18 cl5 txt-center size-211">
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
								class="bi bi-facebook" viewBox="0 0 16 16">
								<path
									d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951" />
							</svg>
						</span>

						<div class="size-212 p-t-2">
							<span class="mtext-110 cl2">
								Facebook
							</span>

							<p class="stext-115 cl6 size-213 p-t-18">
								<a href="<?= FACEBOOK ?>">
									<?= NOMFACEBOOK ?>
								</a>
							</p>
						</div>
					</div>


				</div>
			</div>
		</div>
	</section>
	<?php
	echo $data['page']['contenido'];
} else {
	?>
	<div>
		<div class="container-fluid py-5 text-center">
			<img src="<?= media() ?>/images/construction.png" alt="En construcción">
			<h3>Estamos trabajando para usted.</h3>
		</div>
	</div>
<?php
}
footerTienda($data);
?>