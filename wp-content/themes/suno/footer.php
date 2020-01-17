<?php
/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since 1.0.0
 */

?>
			<footer id="footer">

				<div class="section-menu">
					<div class="container">
						<div class="row">
							<div class="col-12 col-lg-3 mb-5">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/suno-rodape.jpg" alt="">
							</div>
							<div class="col-6 col-sm-3 col-lg-2 menu-footer">
								<h1>assinaturas</h1>

								<li>
									<a href="#"><i class="fas fa-arrow-right"></i> Suno Black</a>
								</li>
								<li>
									<a href="#"><i class="fas fa-arrow-right"></i> Suno Premium</a>
								</li>
								<li>
									<a href="#"><i class="fas fa-arrow-right"></i> Suno Small Caps</a>
								</li>
								<li>
									<a href="#"><i class="fas fa-arrow-right"></i> Suno Flls</a>
								</li>
								<li>
									<a href="#"><i class="fas fa-arrow-right"></i> Suno Ações</a>
								</li>
								<li>
									<a href="#"><i class="fas fa-arrow-right"></i> Suno Fundos</a>
								</li>
							</div>
							<div class="col-6 col-sm-3 col-lg-2 menu-footer">
								<h1>conteúdos grátis</h1>

								<li>
									<a href="#"><i class="fas fa-arrow-right"></i> Ebooks</a>
								</li>
								<li>
									<a href="#"><i class="fas fa-arrow-right"></i> Minicursos</a>
								</li>
								<li>
									<a href="#"><i class="fas fa-arrow-right"></i> Renda Variável</a>
								</li>
								<li>
									<a href="#"><i class="fas fa-arrow-right"></i> Renda Fixa</a>
								</li>
								<li>
									<a href="#"><i class="fas fa-arrow-right"></i> Extras</a>
								</li>
							</div>
							<div class="col-6 col-sm-3 col-lg-2 menu-footer">
								<h1>artigos</h1>

								<li>
									<a href="#"><i class="fas fa-arrow-right"></i> Todos artigos</a>
								</li>
								<li>
									<a href="#"><i class="fas fa-arrow-right"></i> Radar do Mercado</a>
								</li>
								<li>
									<a href="#"><i class="fas fa-arrow-right"></i> Fiikipedia</a>
								</li>
								<li>
									<a href="#"><i class="fas fa-arrow-right"></i> Morning Call</a>
								</li>
								<li>
									<a href="#"><i class="fas fa-arrow-right"></i> O que fazer?</a>
								</li>
							</div>
							<div class="col-6 col-sm-3 col-lg-2 menu-footer">
								<h1>extras</h1>

								<li>
									<a href="#"><i class="fas fa-arrow-right"></i> Suno Black</a>
								</li>
								<li>
									<a href="#"><i class="fas fa-arrow-right"></i> Suno Premium</a>
								</li>
								<li>
									<a href="#"><i class="fas fa-arrow-right"></i> Suno Small Caps</a>
								</li>
								<li>
									<a href="#"><i class="fas fa-arrow-right"></i> Suno Flls</a>
								</li>
								<li>
									<a href="#"><i class="fas fa-arrow-right"></i> Suno Ações</a>
								</li>
								<li>
									<a href="#"><i class="fas fa-arrow-right"></i> Suno Fundos</a>
								</li>
							</div>
						</div>
					</div>
				</div>

				<div class="footer-suno text-center">					
					<div class="redes-sociais">
						<a href="https://www.facebook.com/sunoresearch/" target="_blank"><i class="fab fa-facebook-f"></i></a>
						<a href="https://twitter.com/sunoresearchcom" target="_blank"><i class="fab fa-twitter"></i></a>
						<a href="https://www.instagram.com/sunoresearch/?hl=pt-br" target="_blank"><i class="fab fa-instagram"></i></a>
						<a href="https://www.youtube.com/channel/UCWDeEIDAIi_oYKDiqwfGyRg" target="_blank"><i class="fab fa-youtube"></i></a>
					</div>

					<div class="endereco">
						Suno Research | Avenida Presidente Juscelino Kubitschek, 2041 Torre D, 13º Andar, São Paulo - SP, 04543-011 <br>
						Copyright 2020 © Suno Research
					</div>
				</div>
			</footer><!-- #footer -->

		<?php wp_footer(); ?>

		<script>
			$('.main-carousel').flickity({
			  // options
			  cellAlign: 'left',
			  contain: true,
			  prevNextButtons: false,
			  draggable: false
			});
		</script>

	</body>
</html>
