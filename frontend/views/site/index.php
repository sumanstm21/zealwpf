<?php

use yii\helpers\Url;


/* @var $this yii\web\View */
$this->title = 'My Yii Application';
?>

<div class="site-index">
	<section id="slider">
		<div class="row">
			<div class="col-lg-12 col-md-12">
				<div class="slider_area">
					<!-- Start super slider -->
					<div id="slides">
						<ul class="slides-container">
            <?php foreach($slider as $data) { ?>
              <li><img
								src="<?= Yii::$app->request->baseUrl . '/backend/web/images/' . $data->image ?>"
								alt="img">
								<div class="slider_caption">
									<h2><?php echo $data->title; ?></h2>
									<p><?php echo $data->description; ?></p>
									<!-- <a class="slider_btn" href="#">Know More</a> -->
								</div></li>
              <?php } ?>
              
            </ul>
						<nav class="slides-navigation">
							<a href="#" class="next"></a> <a href="#" class="prev"></a>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--=========== END SLIDER SECTION ================-->


	<!--=========== BEGIN ABOUT US SECTION ================-->
	<section id="aboutUs">
		<div class="container">
			<div class="row">
				<!-- Start about us area -->
				<div class="col-md-8 msg-principal">
					<h3>Message from Principal</h3>
					<hr>
					<div class="col-md-5">
						<img src="<?= Yii::$app->request->baseUrl . '/backend/web/images/' . $message->image ?>" class="img-responsive"
							alt="message from principal"> <br>
						<P>
							<i><?php echo $message->name; ?></i>
						</P>

					</div>
					<div class="col-md-7">
					<span><?php
					echo strlen($message->message) >= 500 ?
					substr($message->message, 0, 490) :
					$message->message; ?></span>
						<hr>

						<a href="<?php echo Url::to(['site/message']);?>" class="pull-right text-primary"> View
							More &raquo; </a>
						<div class="spacer"></div>

					</div>
				</div>

				<div class="col-md-4 ">
					<div class="newsfeed_area wow fadeInRight">
						<ul class="nav nav-tabs feed_tabs" id="myTab2">
							<li class="active"><a href="#news" data-toggle="tab">News &
									Events</a></li>
							<li><a href="#notice" data-toggle="tab">Notice</a></li>
							<!-- <li>
                <a href="#events" data-toggle="tab">Events</a>
              </li> -->
						</ul>

						<!-- Tab panes -->
						<div class="tab-content">
							<!-- Start news tab content -->
							<div class="tab-pane fade in active" id="news">
								<ul class="news_tab">
									<li>
										<div class="media">
											<div class="media-left">
												<a class="news_img" href="events-single.html"> <img
													class="media-object" src="img/news.jpg" alt="img">
												</a>
											</div>
											<div class="media-body">
												<a href="events-single.html">Dummy text of the printing and
													typesetting industry</a> <span class="feed_date">27.02.15</span>
											</div>
										</div>
									</li>
									<li>
										<div class="media">
											<div class="media-left">
												<a class="news_img" href="events-single.html"> <img
													class="media-object" src="img/news.jpg" alt="img">
												</a>
											</div>
											<div class="media-body">
												<a href="#">Dummy text of the printing and typesetting
													industry</a> <span class="feed_date">28.02.15</span>
											</div>
										</div>
									</li>
									<li>
										<div class="media">
											<div class="media-left">
												<a class="news_img" href="events-single.html"> <img
													class="media-object" src="img/news.jpg" alt="img">
												</a>
											</div>
											<div class="media-body">
												<a href="events-single.html">Dummy text of the printing and
													typesetting industry</a> <span class="feed_date">28.02.15</span>
											</div>
										</div>
									</li>
								</ul>
								<a class="see_all" href="events-archive.html">See All</a>
							</div>
							<!-- Start notice tab content -->
							<div class="tab-pane fade " id="notice">
								<div class="single_notice_pane">
									<ul class="news_tab">
										<li>
											<div class="media">

												<div class="media-body">
													<a href="" data-toggle="modal" data-target="#myModal">Dummy
														text of the printing and typesetting industry</a> <span
														class="feed_date">27.02.15</span>
												</div>
											</div>
										</li>
										<li>
											<div class="media">

												<div class="media-body">
													<a href="" data-toggle="modal" data-target="#myModal">Dummy
														text of the printing and typesetting industry</a> <span
														class="feed_date">28.02.15</span>
												</div>
											</div>
										</li>
										<li>
											<div class="media">

												<div class="media-body">
													<a href="" data-toggle="modal" data-target="#myModal">Dummy
														text of the printing and typesetting industry</a> <span
														class="feed_date">28.02.15</span>
												</div>
											</div>
										</li>
									</ul>
									<ul class="news_tab">
										<li>
											<div class="media">
												<div class="media-body">
													<a href="#">Contrary to popular belief, Lorem Ipsum is not
														simply random text</a> <span class="feed_date">27.02.15</span>
												</div>
											</div>
										</li>
										<li>
											<div class="media">
												<div class="media-body">
													<a href="" data-toggle="modal" data-target="#myModal">Dummy
														text of the printing and typesetting industry</a> <span
														class="feed_date">28.02.15</span>
												</div>
											</div>
										</li>
										<li>
											<div class="media">
												<div class="media-body">
													<a href="" data-toggle="modal" data-target="#myModal">Dummy
														text of the printing and typesetting industry</a> <span
														class="feed_date">28.02.15</span>
												</div>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--container-->
	</section>
	<!--=========== END ABOUT US SECTION ================-->


	<!---NOTIC POP UP MODAL-->

	<!-- Modal -->
	<div id="myModal" class="modal fade" role="dialog">
		<div class="modal-dialog">

			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">School Closing otice</h4>
				</div>
				<div class="modal-body">
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
						Voluptas optio amet recusandae esse. Repellendus doloremque vitae
						dolore impedit facilis incidunt!</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>

		</div>
	</div>



	<!--=========== BEGIN OUR COURSES SECTION ================-->
	<section id="ourCourses">
		<div class="container">
			<!-- Our courses titile -->
			<div class="row">
				<div class="col-lg-12 col-md-12">
					<div class="title_area">
						<h2 class="title_two">Academics</h2>
						<span></span>
					</div>
				</div>
			</div>
			<!-- End Our courses titile -->
			<!-- Start Our courses content -->
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12">
					<div class="ourCourse_content">
						<ul class="course_nav">
							<?php foreach ($academics as $course){ ?>
							<li>
								<div class="single_course">
									<div class="singCourse_imgarea">
										<img src="<?= Yii::$app->request->baseUrl . '/backend/web/images/' . $course->image ?>" />

									</div>
									<div class="singCourse_content">
										<h3 class="singCourse_title">
											<a><?php echo $course->title; ?></a>
										</h3>
										<!-- <p class="singCourse_price"><span>$20</span> Per One Month</p> -->
										<p><?php echo $course->description; ?></p>
									</div>

								</div>
							</li>
							<?php } ?>
							
						</ul>
					</div>
				</div>
			</div>
			<!-- End Our courses content -->
		</div>
	</section>
	<!--=========== END OUR COURSES SECTION ================-->

</div>
