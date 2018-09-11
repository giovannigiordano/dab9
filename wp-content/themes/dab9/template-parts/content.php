<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package dab9
 */

	$agenzia = get_field('agenzia');
	$anno = get_field('anno');
	$cliente = get_field('cliente');
 	$ruolo = get_field('ruolo');
 	$url_video = get_field('url_video');
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="container">
		<div class="column">
			<?php dab9_post_thumbnail(); ?>
		</div>

		<div class="column">
			<header class="entry-header">
				<?php
					the_title( '<h1 class="entry-title">', '</h1>' );
				?>
			</header><!-- .entry-header -->

			<div class="entry-content">
				<?php 
					if (!empty($anno)): ?>
						<p class="anno"><span class="info-label">Anno:</span> <b><?php echo $anno; ?></b></p>
					<?php endif; 
					if (!empty($cliente)): ?>
						<p class="cliente"><span class="info-label">Cliente:</span> <b><?php echo $cliente; ?></b></p>
					<?php endif; 
					if (!empty($agenzia)): ?>
						<p class="agenzia"><span class="info-label">Agenzia:</span> <b><?php echo $agenzia; ?></b></p>
					<?php endif; 
					if (!empty($ruolo)): ?>
						<p class="ruolo"><span class="info-label">Ruolo:</span> <b><?php echo $ruolo; ?></b></p>
					<?php endif;
					if (!empty($url_video)): ?>

					<p>
						<a class="video-link" href="<?php echo $url_video; ?>">Visualizza video ></a>
					</p>
					<?php endif; ?>

					<div class="description">
						<?php echo get_the_content(); ?>
					</div>
				</div><!-- .entry-content -->
		</div>
	</div>
</article><!-- #post-<?php the_ID(); ?> -->
