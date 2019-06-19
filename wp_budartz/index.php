<?php get_header(); ?>
<div id="intro">
        <div class="hi container">
            <h1> <?php echo get_theme_mod('intro_heading', "Hello, I'm Daniel") ?></h1>
            <h3> <?php echo get_theme_mod('intro_text') ?></h3>
                <div class="intro_icons">
                    <div class="icons"><?php echo get_theme_mod('intro_icons') ?></div>
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
              <div class="row ">
                <div class="col-md-4">
                  <div class="card mb-4 shadow-sm">
                    <?php $gallery_image_1 = get_field('gallery_1')['sizes']['medium']; ?>
                    <img src="<?php echo $gallery_image_1; ?>" class="Thumbnail" >

                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                          <button class="btn"><a href="#"><i class="fab fa-github-square"></i> GitHub</button>
                          <button class="btn"><a href="#"><i class="fas fa-laptop"></i> Website</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="card mb-4 shadow-sm">
                    <?php $gallery_image_2 = get_field('gallery_2')['sizes']['medium']; ?>
                    <img src="<?php echo $gallery_image_2; ?>" class="thumbnail" >
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                          <button class="btn"><a href="#"><i class="fab fa-github-square"></i> GitHub</button>
                          <button class="btn"><a href="#"><i class="fas fa-laptop"></i> Website</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="card mb-4 shadow-sm">
                    <?php $gallery_image_3 = get_field('gallery_3')['sizes']['medium']; ?>
                    <img src="<?php echo $gallery_image_3; ?>" class="Thumbnail" >
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                          <button class="btn"><a href="#"><i class="fab fa-github-square"></i> GitHub</button>
                          <button class="btn"><a href="#"><i class="fas fa-laptop"></i> Website</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="card mb-4 shadow-sm">
                    <?php $gallery_image_4 = get_field('gallery_4')['sizes']['medium']; ?>
                    <img src="<?php echo $gallery_image_4; ?>" class="Thumbnail" >
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                          <button class="btn"><a href="#"><i class="fab fa-github-square"></i> GitHub</button>
                          <button class="btn"><a href="#"><i class="fas fa-laptop"></i> Website</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="card mb-4 shadow-sm">
                   <?php $gallery_image_5 = get_field('gallery_5')['sizes']['medium']; ?>
                    <img src="<?php echo $gallery_image_5; ?>" class="Thumbnail" >
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                          <button class="btn"><a href="#"><i class="fab fa-github-square"></i> GitHub</button>
                          <button class="btn"><a href="#"><i class="fas fa-laptop"></i> Website</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="card mb-4 shadow-sm">
                    <?php $gallery_image_6 = get_field('gallery_6')['sizes']['medium']; ?>
                    <img src="<?php echo $gallery_image_6; ?>" class="Thumbnail" >

                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                          <button class="btn"><a href="#"><i class="fab fa-github-square"></i> GitHub</button>
                          <button class="btn"><a href="#"><i class="fas fa-laptop"></i> Website</button>
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