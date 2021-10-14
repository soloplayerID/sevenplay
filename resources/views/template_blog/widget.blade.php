<div class="col-sm-4">

  <!-- sidebar -->
  <div class="sidebar">

    <!-- <div class="widget social-widget">
      <div class="title-section">
        <h1><span>Stay Connected</span></h1>
      </div>
      <ul class="social-share">
        <li>
          <a href="#" class="rss"><i class="fa fa-rss"></i></a>
          <span class="number">9,455</span>
          <span>Subscribers</span>
        </li>
        <li>
          <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
          <span class="number">56,743</span>
          <span>Fans</span>
        </li>
        <li>
          <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
          <span class="number">43,501</span>
          <span>Followers</span>
        </li>
        <li>
          <a href="#" class="google"><i class="fa fa-google-plus"></i></a>
          <span class="number">35,003</span>
          <span>Followers</span>
        </li>
      </ul>
    </div> -->

    <div class="widget tab-posts-widget">

      <ul class="nav nav-tabs" id="myTab">
        <li class="active">
          <a href="#option1" data-toggle="tab">Pojok Anime</a>
        </li>
        <!-- <li>
          <a href="#option2" data-toggle="tab">Pojok Movie</a>
        </li> -->
        <!-- <li>
          <a href="#option3" data-toggle="tab">Top Reviews</a>
        </li> -->
      </ul>

      <div class="tab-content">
        <div class="tab-pane active" id="option1">
          <ul class="list-posts">

            @foreach ($entertainments as $entertain)
            <li>
              <img src="{{asset($entertain->image)}}" alt="">
              <div class="post-content">
                <h2><a href="single-post.html">{{$entertain->judul}}</a></h2>
                <ul class="post-tags">
                  <li><i class="fa fa-clock-o"></i>{{$entertain->created_date}}</li>
                </ul>
              </div>
            </li>
            @endforeach

          </ul>
        </div>
        <!-- <div class="tab-pane" id="option2">
          <ul class="list-posts">
            @foreach ($movies as $movie)
            <li>
              <img src="{{asset($entertain->image)}}" alt="">
              <div class="post-content">
                <h2><a href="single-post.html">{{$movie->judul}}</a></h2>
                <ul class="post-tags">
                  <li><i class="fa fa-clock-o"></i>{{$movie->created_date}}</li>
                </ul>
              </div>
            </li>
            @endforeach

          </ul>
        </div> -->
        <!-- <div class="tab-pane" id="option3">
          <ul class="list-posts">

            <li>
              <img src="upload/news-posts/listw4.jpg" alt="">
              <div class="post-content">
                <h2><a href="single-post.html">Donec consectetuer ligula vulputate sem tristique cursus. </a></h2>
                <ul class="post-tags">
                  <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                </ul>
              </div>
            </li>

            <li>
              <img src="upload/news-posts/listw1.jpg" alt="">
              <div class="post-content">
                <h2><a href="single-post.html">Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. </a></h2>
                <ul class="post-tags">
                  <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                </ul>
              </div>
            </li>

            <li>
              <img src="upload/news-posts/listw3.jpg" alt="">
              <div class="post-content">
                <h2><a href="single-post.html">Phasellus ultrices nulla quis nibh. Quisque a lectus.  </a></h2>
                <ul class="post-tags">
                  <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                </ul>
              </div>
            </li>

            <li>
              <img src="upload/news-posts/listw2.jpg" alt="">
              <div class="post-content">
                <h2><a href="single-post.html">Sed arcu. Cras consequat.</a></h2>
                <ul class="post-tags">
                  <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                </ul>
              </div>
            </li>

            <li>
              <img src="upload/news-posts/listw5.jpg" alt="">
              <div class="post-content">
                <h2><a href="single-post.html">Nam nulla quam, gravida non, commodo a, sodales sit amet, nisi.</a></h2>
                <ul class="post-tags">
                  <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                </ul>
              </div>
            </li>
          </ul>
        </div> -->
      </div>
    </div>

  </div>

  <div class="sidebar">



    <div class="widget tab-posts-widget">

      <ul class="nav nav-tabs" id="myTab">
        <li class="active">
          <a href="#option1" data-toggle="tab">Pojok Movie</a>
        </li>

      </ul>

      <div class="tab-content">
        <div class="tab-pane active" id="option1">
          <ul class="list-posts">

            @foreach ($movies as $movie)
            <li>
              <img src="{{asset($movie->image)}}" alt="">
              <div class="post-content">
                <h2><a href="single-post.html">{{$movie->judul}}</a></h2>
                <ul class="post-tags">
                  <li><i class="fa fa-clock-o"></i>{{$movie->created_date}}</li>
                </ul>
              </div>
            </li>
            @endforeach

          </ul>
        </div>
      </div>
    </div>

  </div>
    <!-- <div class="widget post-widget">
      <div class="title-section">
        <h1><span>Most Commented</span></h1>
      </div>
      <ul class="list-posts">
        <li>
          <img src="upload/news-posts/listw4.jpg" alt="">
          <div class="post-content">
            <h2><a href="single-post.html">Donec consectetuer ligula vulputate sem tristique cursus. </a></h2>
            <ul class="post-tags">
              <li><i class="fa fa-clock-o"></i>27 may 2013</li>
            </ul>
          </div>
        </li>

        <li>
          <img src="upload/news-posts/listw1.jpg" alt="">
          <div class="post-content">
            <h2><a href="single-post.html">Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. </a></h2>
            <ul class="post-tags">
              <li><i class="fa fa-clock-o"></i>27 may 2013</li>
            </ul>
          </div>
        </li>

        <li>
          <img src="upload/news-posts/listw3.jpg" alt="">
          <div class="post-content">
            <h2><a href="single-post.html">Phasellus ultrices nulla quis nibh. Quisque a lectus.  </a></h2>
            <ul class="post-tags">
              <li><i class="fa fa-clock-o"></i>27 may 2013</li>
            </ul>
          </div>
        </li>

        <li>
          <img src="upload/news-posts/listw2.jpg" alt="">
          <div class="post-content">
            <h2><a href="single-post.html">Sed arcu. Cras consequat.</a></h2>
            <ul class="post-tags">
              <li><i class="fa fa-clock-o"></i>27 may 2013</li>
            </ul>
          </div>
        </li>

        <li>
          <img src="upload/news-posts/listw5.jpg" alt="">
          <div class="post-content">
            <h2><a href="single-post.html">Nam nulla quam, gravida non, commodo a, sodales sit amet, nisi.</a></h2>
            <ul class="post-tags">
              <li><i class="fa fa-clock-o"></i>27 may 2013</li>
            </ul>
          </div>
        </li>
      </ul>
    </div> -->

    <!-- <div class="advertisement">
      <div class="desktop-advert">
        <span>Advertisement</span>
        <img src="upload/addsense/300x250.jpg" alt="">
      </div>
      <div class="tablet-advert">
        <span>Advertisement</span>
        <img src="upload/addsense/200x200.jpg" alt="">
      </div>
      <div class="mobile-advert">
        <span>Advertisement</span>
        <img src="upload/addsense/300x250.jpg" alt="">
      </div>
    </div> -->

  </div>
  <!-- End sidebar -->

</div>

</div>

</div>
</section>
<!-- End block-wrapper-section -->
