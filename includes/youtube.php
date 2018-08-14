<h2>Serveloja no Youtube</h2>
<div class="link">
    <a href="<?php echo home_url('/serveloja-no-youtube'); ?>">Mais vídeos >></a>
</div>

<!-- Últimos posts cadastrados no site -->
<?php echo do_shortcode('[chr-youtube-gallery order="DESC" orderby="date" posts="3" category="canal-da-serveloja"]'); ?>