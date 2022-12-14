    <section id="easychopp"> 
      <div class="container">
        <div class="row d-flex justify-content-center">
          <div class="col-md-12" data-aos="fade-up" data-aos-once="false" data-aos-easing="ease-in-out" data-aos-offset="100" data-aos-delay="10" data-aos-duration="1000">
            <h2>Easy Chopp</h2>
            <p class="sub">Aqui contamos com o sistema Easy Chopp que funciona junto da sua<br>comanda! Escolha seu chopp, aproxime a comanda e sirva-se a vontade</p>
          </div>

          <?php 
          $posts = get_posts(array('posts_per_page'	=> -1,'post_type'			=> 'easy-chopp','order' => 'ASC'));
          if( $posts ): ?>

          
          <?php foreach( $posts as $post ): setup_postdata( $post ); ?>
          <div class="col-md-4" data-aos="fade-right" data-aos-once="false" data-aos-easing="ease-in-out" data-aos-offset="100" data-aos-delay="10" data-aos-duration="1000">
            <div class="card">
                <img class="card-img-top mx-auto" src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>" alt="<?php the_title(); ?>"/>
              <div class="card-body">
                <h4><?php the_title(); ?></h4>
                <p><?php the_content(); ?></p>
              </div>
            </div>
          </div>
          <?php endforeach; ?>

          <?php wp_reset_postdata(); ?>
          <?php endif; ?>

          <div class="col-md-12 text-center">
            <?php $theme_options_code = 435; ?>
            <?php if( have_rows('services_section', $theme_options_code) ): ?>
            <?php while( have_rows('services_section', $theme_options_code) ): the_row();?>
            <a href="<?php the_sub_field('services_section_link_button', $theme_options_code); ?>" class="btn btn_default"><?php the_sub_field('services_section_text_button', $theme_options_code); ?></a>
            <?php endwhile; ?>
            <?php endif; ?>
          </div>
        </div>
      </div>

    </section>