    <section id="cardapio">
        <div class="container">
            <div class="row">
                <?php $theme_options_code = 435; ?>
                <?php if( have_rows('menu_section', $theme_options_code) ): ?>
                <?php while( have_rows('menu_section', $theme_options_code) ): the_row();?>
                <div class="col-md-6 d-flex justify-content-center align-items-center" data-aos="fade-up" data-aos-once="false" data-aos-easing="ease-in-out"
                    data-aos-offset="100" data-aos-delay="10" data-aos-duration="1000">
                    <div class="txt">
                        <h2>Cardápio</h2>
                        <p><?php the_sub_field('text_menu', $theme_options_code); ?></p>
                        <a href="<?php the_sub_field('link_menu', $theme_options_code); ?>" class="btn btn_default">VER CARDÁPIO</a>
                    </div>
                </div>
                <div class="col-md-6 d-flex justify-content-center align-items-center">
                    <img src="<?php the_sub_field('img_menu', $theme_options_code); ?>" alt="">
                </div>
                <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </section>