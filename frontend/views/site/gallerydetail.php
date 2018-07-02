<?php



?>

<!--=========== BEGIN GALLERY SECTION ================-->
    
    <section id="gallery" class="margin-80">
      <div class="container">
        <div class="row">
          
          <div class="col-lg-12 col-md-12 col-sm-12">
              <h2 class="gallery-heading"> Photo Gallery</h2>

              <ol class="breadcrumb breadcrumb-arrow">
                  <li><a href="gallery.html">Photo Gallery</a></li>
                  <li class="active"><span>Science Exibition</span></li>
                </ol>
                
            <div id="gallerySLide" class="gallery_area">
                <a href="<?= Yii::$app->request->baseUrl . '/img/gallery/img-large1.jpg'; ?>" >
                  <img class="gallery_img" src="<?= Yii::$app->request->baseUrl . '/img/gallery/img-small1.jpg'; ?>" alt="img" />
                <span class="view_btn">View</span>
                </a>
                <a href="<?= Yii::$app->request->baseUrl . '/img/gallery/img-large2.jpg'; ?>" >
                  <img class="gallery_img" src="<?= Yii::$app->request->baseUrl . '/img/gallery/img-small2.jpg'; ?>" alt="img" />
                  <span class="view_btn">View</span>
                </a>
                <a href="<?= Yii::$app->request->baseUrl . '/img/gallery/img-large3.jpg'; ?>" >
                  <img class="gallery_img" src="<?= Yii::$app->request->baseUrl . '/img/gallery/img-small3.jpg'; ?>" alt="img" />
                  <span class="view_btn">View</span>
                </a>
                <a href="<?= Yii::$app->request->baseUrl . '/img/gallery/img-large4.jpg'; ?>" >
                  <img class="gallery_img" src="<?= Yii::$app->request->baseUrl . '/img/gallery/img-small4.jpg'; ?>" alt="img" />
                  <span class="view_btn">View</span>
                </a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--=========== END GALLERY SECTION ================-->