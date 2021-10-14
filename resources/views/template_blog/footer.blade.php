<!-- footer
	================================================== -->
<footer>
	<div class="container">
		<div class="footer-widgets-part">
			<div class="row">
				<div class="col-md-3">
					<div class="widget text-widget">
						<h1>About</h1>
						<p>Sevenplay Media is your platform to get your entertainment information. We are provide open platform for your reviews about games, movies and anime.</p>
					</div>

				</div>
				<div class="col-md-3">
					<div class="widget posts-widget">
						<h1>Random Post</h1>
						<ul class="list-posts">
							@foreach ($entertainments as $entertainment)
							<li>
								<img src="{{asset($entertainment->image)}}" alt="">
								<div class="post-content">
									<!-- <a href="game-category.html">x-box</a> -->
									<h2><a href="{{route('blog.post', $entertainment->slug)}}">{{$entertainment->judul}}</a></h2>
									<ul class="post-tags">
										<li><i class="fa fa-clock-o"></i>{{$entertainment->created_date}}</li>
									</ul>
								</div>
							</li>
							@endforeach
						</ul>
					</div>
				</div>
				<div class="col-md-3">
					<div class="widget social-widget">
						<h1>Stay Connected</h1>
						<ul class="social-icons">
							<li><a target="_blank" rel="noopener noreferrer" href="https://www.facebook.com/sevenplaymedia" class="facebook"><i class="fa fa-facebook"></i></a></li>
							<!-- <li><a href="#" class="google"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li> -->
							<li><a target="_blank" rel="noopener noreferrer" href="https://www.youtube.com/sevenplaymedia" class="youtube"><i class="fa fa-youtube"></i></a></li>
							<li><a target="_blank" rel="noopener noreferrer" href="https://www.instagram.com/sevenplaymedia/" class="instagram"><i class="fa fa-instagram"></i></a></li>
							<!-- <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
							<li><a href="#" class="vimeo"><i class="fa fa-vimeo-square"></i></a></li>
							<li><a href="#" class="dribble"><i class="fa fa-dribbble"></i></a></li>
							<li><a href="#" class="pinterest"><i class="fa fa-pinterest"></i></a></li>
							<li><a href="#" class="flickr"><i class="fa fa-flickr"></i></a></li>
							<li><a href="#" class="rss"><i class="fa fa-rss"></i></a></li> -->
						</ul>
					</div>

					<!-- <div class="widget subscribe-widget">
						<form class="subscribe-form">
							<h1>Subscribe to RSS Feeds</h1>
							<input type="text" name="subscribe" id="subscribe" placeholder="Email"/>
							<button type="submit">
								<i class="fa fa-arrow-circle-right"></i>
							</button>
							<p>Get all latest content delivered to your email a few times a month.</p>
						</form>
					</div>
				</div> -->
				<!-- <div class="col-md-3">
					<div class="widget flickr-widget">
						<h1>Flickr Photos</h1>
						<ul class="flickr-list">
							<li><a href="#"><img src="upload/flickr/1.jpg" alt=""></a></li>
							<li><a href="#"><img src="upload/flickr/2.jpg" alt=""></a></li>
							<li><a href="#"><img src="upload/flickr/3.jpg" alt=""></a></li>
							<li><a href="#"><img src="upload/flickr/4.jpg" alt=""></a></li>
							<li><a href="#"><img src="upload/flickr/5.jpg" alt=""></a></li>
							<li><a href="#"><img src="upload/flickr/6.jpg" alt=""></a></li>
						</ul>
						<a href="#">View more photos...</a>
					</div>
				</div> -->
			</div>
		</div>
		<div class="footer-last-line">
			<div class="row">
				<div class="col-md-6">
					<p>&copy; Sevenplay Media</p>
				</div>
				<div class="col-md-6">
					<nav class="footer-nav">
						<ul>
							<li><a href="#">Home</a></li>
							<!-- <li><a href="#">Purchase Theme</a></li> -->
							<li><a href="#">About</a></li>
							<li><a href="#">Contact</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</div>
</footer>
<!-- End footer -->

</div>
<!-- End Container -->
<script type="text/javascript" src="{{asset('frontend/assets/js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/assets/js/jquery.migrate.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/assets/js/jquery.bxslider.min.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/assets/js/jquery.magnific-popup.min.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/assets/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/assets/js/jquery.ticker.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/assets/js/jquery.imagesloaded.min.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/assets/js/jquery.isotope.min.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/assets/js/owl.carousel.min.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/assets/js/retina-1.1.0.min.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/assets/js/script.js')}}"></script>

</body>
</html>
