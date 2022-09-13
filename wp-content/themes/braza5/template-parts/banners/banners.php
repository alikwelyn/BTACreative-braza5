    <header>
      <video id="vid" playsinline="playsinline" controls="" autoplay="" loop="" muted="" style="max-width:100%; height:auto">
        <?php
          $theme_options_code = 435;
          $video_banner = get_field('video_banner', $theme_options_code);
        ?>
        <source src="<?php echo $video_banner; ?>" type="video/mp4">
      </video>
      <div class="container-fluid h-100">
        <div class="d-flex h-100 text-center align-items-end">
            <a href="#" id="playPauseBtn" class="speaker">
                <p><img id="imageOne" alt="Ativar som" src="<?php bloginfo('template_url'); ?>/assets/imgs/mute.png" style="height: 50px; width: 50px" onclick="changeColor()"></p>
            </a>
        </div>
      </div>
    </header>