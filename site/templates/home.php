<?php snippet('html-header') ?>

<main class="wrapper">
	<div class="hero">
		<?php snippet('header') ?>
        <div class="margin-container">
            <meta class="adjectives" data-adjectives="<?= $page->adjectives() ?>">
            <h2 class="banner-txt">Websites with <span id="typed-txt"></span><span id="typed-cursor"></span></h2>
            <p><?= $site->description() ?></p>
        </div>
	</div>

	<section class="services">
        <?php $services = $pages->find('home/services-1') ?>
        <h1><?= $services->header() ?></h1>
        <p><?= html( $services->subheader() ) ?></p>
        <ul class="services-list">
            <?php $services = $services->children()  ?>
            <?php foreach( $services as $service ): ?>
                <li class="service" itemscope itemtype="https://schema.org/Service">
                    <h2 itemprop="name"><?= html( $service->title() ) ?></h2>
                    <p itemprop="description"><?= html( $service->blurb() ) ?></p>
                </li>
            <?php endforeach ?>
        </ul>
    </section>

    <section class="instagram-section">
        <div class="instagram-wrapper">
            <div id="instagram"></div>
            <div class="overlay"></div>
        </div>  
    </section>
</main>

<script src="assets/js/vendors/typed.js"></script>
<script src="assets/js/vendors/instafeed.min.js"></script>
<script src="assets/js/home.js"></script>

<?php snippet('footer') ?>
<?php snippet('html-footer') ?>

Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore nobis quibusdam nemo perferendis nulla illo.