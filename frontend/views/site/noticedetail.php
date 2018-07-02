<?php

?>
<section id="courseArchive" class="margin-80">
      <div class="container">
          <h2 class="text-uppercase"> News & Events</h2>
         
        <div class="row">
            

            <ol class="breadcrumb breadcrumb-arrow">
                <!-- <li><a href="#">Home</a></li> -->
                <li><a href="events-archive.html">News & Events</a></li>
                <li class="active"><span><?php echo $model->title; ?></span></li>
              </ol>
          <!-- start course content -->
          <div class="col-lg-8 col-md-8 col-sm-8">
            <div class="courseArchive_content">
              <!-- start blog archive  -->
              <div class="row">
                <!-- start single blog -->
                <div class="col-lg-12 col-12 col-sm-12">
                  <div class="single_blog">

                      <h2 class="blog_title"><a href="#"><?php echo $model->title; ?></a></h2>
                      <div class="blog_commentbox">
                        <p><i class="fa fa-clock-o"></i>Date: <?php echo $model->date; ?></p>
                      </div>
                    <!-- start events slider -->
                    <div class="events_slider_area">
                      <div class="events_slider">
                        <div><img src="<?= Yii::$app->request->baseUrl . '/img/' . $model->image?>" alt="img"></div>
                      </div>
                    </div>
                    <!-- End events slider -->
                    
                    <p><?php echo $model->description; ?></p>

                    
                  </div>
                 
                </div>
                <!-- End single blog -->                
              </div>
              <!-- end blog archive  -->
                         
            </div>
          </div>
          <!-- End course content -->

          <!-- start course archive sidebar -->
                    <!-- start course archive sidebar -->
        </div>
      </div>
    </section>