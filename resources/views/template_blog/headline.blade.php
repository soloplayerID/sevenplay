<!-- heading-news-section
  ================================================== -->
<section class="heading-news3">

  <div class="heading-news-box">
    <div class="container">
      <h1>Popular Out Now</h1>
    </div>
    <div class="owl-wrapper">
      <div class="owl-carousel" data-num="4">

        @foreach ($recents as $post)
        <div class="item">
          <div class="news-post image-post">
            <div class="post-gallery">
              <img src="{{asset($post->image)}}" style="height:400px; weight:430px;" alt="">
              <div class="hover-box">
                <div class="inner-hover">
                  <a class="category-post">{{$post->category->name}}</a>
                  <h2><a href="{{route('blog.post', $post->slug)}}">{{$post->judul}}</a></h2>
                  <ul class="post-tags">
                    <li><i class="fa fa-clock-o"></i>{{$post->created_date}}</li>
                    <li><i class="fa fa-user"></i>by <a href="#">{{$post->user->name}}</a></li>
                    <!-- <li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li> -->
                    <!-- <li><i class="fa fa-eye"></i>872</li> -->
                  </ul>
                  <p>{!! substr($post->content,0,150) !!}</p>
                  <!-- <div class="rate-level">
                    <p><span>9.2</span> Amazing</p>
                  </div> -->
                </div>
              </div>
            </div>
          </div>
        </div>
        @endforeach


      </div>
    </div>

  </div>

</section>
<!-- End heading-news-section -->

<!-- feature-video-section
  ================================================== -->
<section class="feature-video">
  <div class="container">
    <div class="title-section white">
      <h1><span>Latest Reviews</span></h1>
    </div>

    <div class="features-video-box owl-wrapper">
      <div class="owl-carousel" data-num="4">

        @foreach ($reviews as $review)
        <div class="item news-post image-post3">
          <img alt="" src="{{asset($review->image)}}" style="height:200px; weight: 270px;">
          <!-- <div class="rate-level">
            <p><span>9.2</span> Amazing</p>
          </div> -->
          <div class="hover-box">
            <h2><a href="single-post.html">{{$review->judul}}</a></h2>
            <ul class="post-tags">
              <li><i class="fa fa-clock-o"></i>{{$review->created_date}}</li>
            </ul>
          </div>
        </div>
        @endforeach


      </div>
    </div>
  </div>
</section>
<!-- End feature-video-section -->

<!-- block-wrapper-section
  ================================================== -->
<section class="block-wrapper">
  <div class="container">
    <div class="row">
      <div class="col-sm-8">

        <!-- block content -->
        <div class="block-content">

          <!-- grid box -->
          <div class="grid-box">

            <div class="title-section">
              <h1><span>Entertainment</span></h1>
            </div>

            <!-- <ul class="category-filter-posts">
              <li><a class="active" href="#">All</a></li>
              <li><a href="#">Xbox one</a></li>
              <li><a href="#">PS4</a></li>
              <li><a href="#">WII U</a></li>
              <li><a href="#">PC</a></li>
            </ul> -->

            <div class="news-post standard-post2">
              <div class="post-gallery">
                <img src="upload/news-posts/1.jpg" alt="">
                <div class="rate-level">
                  <p><span>9.5</span> Amazing</p>
                </div>
              </div>
              <div class="post-title">
                <h2><a href="single-post.html">Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. </a></h2>
                <ul class="post-tags">
                  <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                  <li><i class="fa fa-user"></i>by <a href="#">John Doe</a></li>
                  <li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
                </ul>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <ul class="list-posts">
                  @foreach ($entertainments as $entertains)
                  <li>
                    <img src="{{asset($entertains->image)}}" alt="">
                    <div class="post-content">
                      <h2><a href="single-post.html">{{$entertains->judul}}</a></h2>
                      <ul class="post-tags">
                        <li><i class="fa fa-clock-o"></i>{{$entertains->created_date}}</li>
                      </ul>
                    </div>
                  </li>
                  @endforeach

                </ul>
              </div>
              <div class="col-md-6">
                <ul class="list-posts">
                  @foreach ($animes as $anime)
                  <li>
                    <img src="{{asset($anime->image)}}" alt="">
                    <div class="post-content">
                      <h2><a href="single-post.html">{{$anime->judul}}</a></h2>
                      <ul class="post-tags">
                        <li><i class="fa fa-clock-o"></i>{{$anime->created_date}}</li>
                      </ul>
                    </div>
                  </li>
                  @endforeach


                </ul>
              </div>
            </div>

          </div>
          <!-- End grid box -->

          <!-- carousel box -->
          <div class="carousel-box owl-wrapper">
            <div class="title-section">
              <h1><span>Hardware</span></h1>
            </div>
            <div class="owl-carousel" data-num="4">

              @foreach ($hardwares as $hardware)
              <div class="item news-post image-post3">
                <img src="{{asset($hardware->image)}}" alt="">
                <div class="hover-box">
                  <h2><a href="single-post.html">{{$hardware->judul}}</a></h2>
                  <ul class="post-tags">
                    <li><i class="fa fa-clock-o"></i>2{{$hardware->created_date}}</li>
                  </ul>
                </div>
              </div>
              @endforeach



            </div>
          </div>
          <!-- End carousel box -->
