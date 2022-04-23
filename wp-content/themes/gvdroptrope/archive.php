<?php get_header() ?>
<!-- Main -->
<section id="main">
    <div class="container">
        <div class="row">
            <div class="col-8 col-12-medium">
                <?php
                    if(have_posts()){
                        while(have_posts()){
                            the_post(); ?>
                            <div class="col-4 col-6-medium col-12-small">
                                <section class="box">
                                    <a href="<?php the_permalink() ?>" class="image featured">
                                        <?php the_post_thumbnail('home-featured') ?>
                                    </a>
                                    <header>
                                        <h3><?php the_title() ?></h3>
                                    </header>
                                    <?php the_excerpt() ?>
                                    <footer>
                                        <ul class="actions">
                                            <li><a href="<?php the_permalink() ?>" class="button alt">Read more</a></li>
                                        </ul>
                                    </footer>
                                </section>
								</div>
                        <?php }
                    }
                ?>
            </div>
           <?php get_sidebar() ?>
        </div>
    </div>
</section>

<?php get_footer() ?>