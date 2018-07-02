<?php

use yii\helpers\Url;


?>
<section id="courseArchive" class="margin-80">
      <div class="container">
          <h2 class="title text-uppercase"> News & Events</h2>
          <br>

         
        <div class="row">
          <!-- start course content -->
<?php foreach ($notices as $notice){ ?>
            <div class="col-md-6">
            <div class="">
                    <div class="">
                      <div class="blogimg_container">
                        <a href="events-single.html" class="blog_img">
                          <img alt="img" src="../img/blog.jpg">
                        </a>
                      </div>
                      <h2 class="blog_title"><a href="events-single.html"> <?php echo $notice->title; ?></a></h2>
                      <div class="blog_commentbox">
                        <p><i class="fa fa-clock-o"></i>Time: 7pm,15 March 2015</p>
                        <p><i class="fa fa-map-marker"></i>Location: London,UK</p>                      
                      </div>
                      <p class="blog_summary"><?php 
//                      echo $notice->description;
                      echo strlen($notice->description) >= 200 ?
                      substr($notice->description, 0, 190) :
                      $notice->description;
                      ?></p>
                      <a class="blog_readmore" href="events-single.html">Read More</a>
                    </div>
              </div> 
            </div>
            <?php } ?>
            
            <div class="col-md-6">
            <div class="">
                    <div class="">
                      <div class="blogimg_container">
                        <a href="events-single.html" class="blog_img">
                          <img alt="img" src="../img/blog.jpg">
                        </a>
                      </div>
                      <h2 class="blog_title"><a href="events-single.html"> Lorem ipsum dolor sit amet consecteturrr.</a></h2>
                      <div class="blog_commentbox">
                        <p><i class="fa fa-clock-o"></i>Time: 7pm,15 March 2015</p>
                        <p><i class="fa fa-map-marker"></i>Location: London,UK</p>                      
                      </div>
                      <p class="blog_summary">Duis erat purus, tincidunt vel ullamcorper ut, consequat tempus nibh. Proin condimentum risus ligula, dignissim mollis tortor hendrerit vel. Aliquam...</p>
                      <a class="blog_readmore" href="events-single.html">Read More</a>
                    </div>
              </div> 
            </div>
            
                      <div class="col-md-6">
            <div class="">
                    <div class="">
                      <div class="blogimg_container">
                        <a href="events-single.html" class="blog_img">
                          <img alt="img" src="../img/blog.jpg">
                        </a>
                      </div>
                      <h2 class="blog_title"><a href="events-single.html"> Lorem ipsum dolor sit amet consectetur.</a></h2>
                      <div class="blog_commentbox">
                        <p><i class="fa fa-clock-o"></i>Time: 7pm,15 March 2015</p>
                        <p><i class="fa fa-map-marker"></i>Location: London,UK</p>                      
                      </div>
                      <p class="blog_summary">Duis erat purus, tincidunt vel ullamcorper ut, consequat tempus nibh. Proin condimentum risus ligula, dignissim mollis tortor hendrerit vel. Aliquam...</p>
                      <a class="blog_readmore" href="events-single.html">Read More</a>
                    </div>
            </div>
            </div>
            
            
            <div class="col-md-6">
            <div class="">
                    <div class="">
                      <div class="blogimg_container">
                        <a href="events-single.html" class="blog_img">
                          <img alt="img" src="../img/blog.jpg">
                        </a>
                      </div>
                      <h2 class="blog_title"><a href="events-single.html"> Lorem ipsum dolor sit amet consectetur.</a></h2>
                      <div class="blog_commentbox">
                        <p><i class="fa fa-clock-o"></i>Time: 7pm,15 March 2015</p>
                        <p><i class="fa fa-map-marker"></i>Location: London,UK</p>                      
                      </div>
                      <p class="blog_summary">Duis erat purus, tincidunt vel ullamcorper ut, consequat tempus nibh. Proin condimentum risus ligula, dignissim mollis tortor hendrerit vel. Aliquam...</p>
                      <a class="blog_readmore" href="events-single.html">Read More</a>
                    </div>
              </div> 
            </div>
            
          </div>
          <!-- End course content -->

          <!-- start course archive sidebar -->
         
          
        </div>
    </section>