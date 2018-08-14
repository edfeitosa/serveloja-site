<h2>Serveloja na Mídia</h2>
<div class="link">
    <a href="<?php echo esc_url(get_category_link(get_cat_ID('noticias'))); ?>">Mais notícias >></a>
</div>

<!-- Últimos posts cadastrados no site -->
<?php query_posts('category_name=noticias&showposts=3&order=DESC');
if (have_posts()) {
    while (have_posts()) {
        the_post();
        $imagem = wp_get_attachment_image_src(get_post_thumbnail_id(), ''); ?>
        <div class="midia">
            <img src="<?php echo $imagem[0]; ?>" alt="" />
            <div class="baseTexto">
                <div class="titulo">
                    <a href="<?php the_permalink(); ?>">
                        <?php the_title(); ?>
                    </a>
                </div>
                <div class="data">
                    <?php the_time('d'); ?> <?php substr(the_time('M'), 0, 2); ?><br />
                    <?php the_time('Y'); ?>
                </div>
            </div>
        </div>
        <div class="clearSmart"></div>
    <?php }
} else { ?>
    <div class="alerta">Ainda não existe nenhuma informação cadastrada</div>
<?php } ?>