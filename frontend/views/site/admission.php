<?php

?>

    <!--=========== BEGIN COURSE BANNER SECTION ================-->
    <section id="imgBanner">
      <h2>Admission info</h2>
    </section>
    <!--=========== END COURSE BANNER SECTION ================-->
    
    <!--=========== BEGIN COURSE BANNER SECTION ================-->
    <section id="courseArchive">
      <div class="container">
        <div class="row">
          <!-- start course content -->
          <div class="col-lg-10 col-md-10 col-sm-10">
            <div class="courseArchive_content">
              <!-- start blog archive  -->
              <div class="row">
                <!-- start single blog -->
                <div class="col-lg-12 col-12 col-sm-12">
                  <div class="single_blog">
                    <!-- <div class="blogimg_container">
                      <a href="#" class="blog_img">
                        <img alt="img" src="img/blog.jpg">
                      </a>
                    </div> -->
                    <h2 class="blog_title"><?php echo $admission->title; ?></h2>
                    <div class="blog_commentbox">
                      <p><i class="fa fa-calendar"></i> Published Date : <?php echo $admission->date; ?></p>
                    </div>
                    <p><?php echo $admission->description; ?></p>
                  </div>
                </div>
                <!-- End single blog -->                
              </div>
              <!-- end blog archive  -->                       
            </div>
          </div>
          <!-- End course content -->


        </div>
      </div>
    </section>
    <!--=========== END COURSE BANNER SECTION ================-->