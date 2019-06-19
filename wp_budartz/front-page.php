<?php get_header(); ?>
<div id="intro">
        <div class="hi container">
            <h1> <?php echo get_theme_mod('intro_heading', "Hello, I'm Daniel") ?></h1>
            <h3> <?php echo get_theme_mod('intro_text') ?></h3>
                <div class="intro">
                    <div class="intro_icons"><?php echo get_theme_mod('intro_icons') ?></div>
                </div>
            <div class="overlay"></div>
        </div>     
      </div>
  <!--Gallery-->
      <main>
        <div id="gallery">
          <div class="overlay_1"></div>
          <div class="album py-5">
            <div class="container projects">
              <div class="row">
                  <?php
                        if (get_field('xp_xp')){  ?>
                            <h2> <?php the_field('xp_xp')?> </h2>
                  <?php } ?>
              </div>
              <div class="row justify-content-center" style="display: -webkit-inline-box;">
                <div class="col-md-6">
                  <div class="card mb-6 shadow-sm">
                    <?php $gallery_image_1 = get_field('gallery_1')['sizes']['medium']; ?>
                    <img src="<?php echo $gallery_image_1; ?>" class="Thumbnail" >
                    <div class="card-body">
                      <h5 class="card-title">Kodo Sawaki</h5>
                      <p class="card-text">Page made with Bootstrap for FCC.</p>
                      <div class="d-flex">
                        <div class="btn-group">
                          <button class="btn"><a href="#"><i class="fab fa-github-square"></i>GITHUB</a></button>
                          <button class="btn"><a href="https://codepen.io/Budartz/pen/jYpooj"><i class="fab fa-codepen"></i>CODEPEN</a></button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="card mb-6 shadow-sm">
                    <?php $gallery_image_2 = get_field('gallery_2')['sizes']['medium']; ?>
                    <img src="<?php echo $gallery_image_2; ?>" class="Thumbnail" >
                    <div class="card-body">
                      <h5 class="card-title">Carrousel</h5>
                      <p class="card-text">Carrousel made with jQuery.</p>
                      <div class="d-flex">
                        <div class="btn-group">
                          <button class="btn"><a href="#"><i class="fab fa-github-square"></i>GITHUB</a></button>
                          <button class="btn"><a href="https://codepen.io/Budartz/pen/MrBMoe"><i class="fab fa-codepen"></i>CODEPEN</a></button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row justify-content-center" style="display: -webkit-inline-box;">
                <div class="col-md-6">
                  <div class="card mb-6 shadow-sm">
                    <?php $gallery_image_3 = get_field('gallery_3')['sizes']['medium']; ?>
                    <img src="<?php echo $gallery_image_3; ?>" class="Thumbnail" >
                    <div class="card-body">
                      <h5 class="card-title">Portfolio</h5>
                      <p class="card-text">Portfolio made with Bootstrap.</p>
                      <div class="d-flex">
                        <div class="btn-group">
                          <button class="btn"><a href="#"><i class="fab fa-github-square"></i>GITHUB</a></button>
                          <button class="btn"><a href="https://codepen.io/Budartz/pen/jYvKPz"><i class="fab fa-codepen"></i>CODEPEN</a></button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="card mb-6 shadow-sm">
                    <?php $gallery_image_4 = get_field('gallery_4')['sizes']['medium']; ?>
                    <img src="<?php echo $gallery_image_4; ?>" class="Thumbnail" >
                    <div class="card-body">
                      <h5 class="card-title">Team maker</h5>
                      <p class="card-text">App made with jQuery.</p>
                      <div class="d-flex">
                        <div class="btn-group">
                          <button class="btn"><a href="#"><i class="fab fa-github-square"></i>GITHUB</a></button>
                          <button class="btn"><a href="https://codepen.io/Budartz/pen/rprgLE"><i class="fab fa-codepen"></i>CODEPEN</a></button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                
              </div>
            </div>

      </div>
      </main>   

<?php get_footer(); ?>