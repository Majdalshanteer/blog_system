
@extends('pages.layout.master')


@section('content')
<body>
  <!--================Header Menu Area =================-->

  <!--================ Hero sm Banner start =================-->      
  <section class="mb-30px">
    <div class="">
      <div class="hero-banner hero-banner--sm">
        <div class="hero-banner__content">
          <h1>Blog details</h1>
          <nav aria-label="breadcrumb" class="banner-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Blog Details</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <!--================ Hero sm Banner end =================-->    


  

  <!--================ Start Blog Post Area =================-->
  <section class="blog-post-area section-margin">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
            <div class="main_blog_details">
                <img class="img-fluid" src="/categoryImages/{{$blog->image}}" alt="">
                <a href="#"><h4>{{ $blog->category_name }} </h4></a>
                <div class="user_details">
                  {{-- <div class="float-left">
                    <a href="#">Lifestyle</a>
                    <a href="#">Gadget</a>
                  </div> --}}
                  <div class="float-right mt-sm-0 mt-3">
                    <div class="media">
                      <div class="media-body">
                        <h5>{{$blog->user->name}}</h5>
                        <p>{{$blog->created_at}}</p>
                      </div>
                      <div class="d-flex">
                        <img width="42" height="42" src="/categoryImages/{{$blog->user->image}}" alt="">
                      </div>
                    </div>
                  </div>
                </div>
                <p>{{$blog->description}}</p>

                <div class="news_d_footer flex-column flex-sm-row">
           
               </div> 
              </div>
          

                <div class="comments-area">
                    <h4> Comments</h4>
                    @if ($commentsCount == 0)
<h6>No Comments Yet !!</h6>
                    @else
                    @foreach ($comments as $comment)
                    <div class="comment-list">
                        <div class="single-comment justify-content-between d-flex">
                            <div class="user justify-content-between d-flex">
                                <div class="thumb">
                                    <img src="/categoryImages/{{$comment->user->image}}" style="width:80px;height:80px" alt="">
                                </div>
                                <div class="desc">
                                    <h5><a href="#">{{$comment->user->name}}</a></h5>
                                    <p class="date">{{ $comment->created_at }} </p>
                                    <p class="comment">
                                      {{ $comment->message }}
                                    </p>
                                    {{-- @if ($comment->children)
            <div class="replies">
                @include('pages.comment_replies', ['children' => $comment->children])
                  
  @endif --}}
                                </div>
                            </div>
                            <div class="reply-btn">
                                    <a href="" class="btn-reply text-uppercase">reply</a> 
                            </div>

                            {{-- <form method="POST" action="{{ route('blogs.store') }}">
                              @csrf
                          
                              <div class="form-group">
                                  <label for="body">Comment:</label>
                                  <textarea name="message" id="body" class="form-control"></textarea>
                              </div>
                          
                              <div class="form-group">
                                  <label for="parent_id">Reply to:</label>
                                  <select name="parent_id" id="parent_id" class="form-control">
                                      <option value="">Top-level comment</option>
                                      @foreach ($comments as $comment)
                                          <option value="{{ $comment->id }}">{{ $comment->message }}</option>
                                      @endforeach
                                  </select>
                              </div>
                          
                              <button type="submit" class="btn btn-primary">Submit</button>
                          </form> --}}
                        </div>

                    </div>	
                    @endforeach
                    @endif
                    {{-- <div class="comment-list left-padding">
                        <div class="single-comment justify-content-between d-flex">
                            <div class="user justify-content-between d-flex">
                                <div class="thumb">
                                    <img src="img/blog/c2.jpg" alt="">
                                </div>
                                <div class="desc">
                                    <h5><a href="#">Elsie Cunningham</a></h5>
                                    <p class="date">December 4, 2017 at 3:12 pm </p>
                                    <p class="comment">
                                        Never say goodbye till the end comes!
                                    </p>
                                </div>
                            </div>
                            <div class="reply-btn">
                                    <a href="" class="btn-reply text-uppercase">reply</a> 
                            </div>
                        </div>
                    </div>	 --}}
                 
                    
                                                              				
                </div>
                <div class="comment-form">
                    <h4>Leave a Comment</h4>
                    <form class="" method="POST"
                    action="{{route('blogs.store')}}">
                    <input type="hidden" value="{{ $blog->id }}" name="blog_id">

                    @csrf
                    @if (Auth::check())
                        <input type="hidden" value="{{ Auth::user()->id }}" name="user_id">
                    @endif
                    {{-- <form method="post" action="{{ route('comment.add') }}">
                      @csrf --}}
                        <div class="form-group form-inline">
                        									
                        </div>
                        
                        <div class="form-group">
                            <textarea class="form-control mb-10" rows="5" name="message" placeholder="Messege" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'" required=""></textarea>
                            <input type="hidden" name="post_id" value="{{ $blog->id }}" />
                          </div>
                        {{-- <a href="#" class="button submit_btn">Post</a>	 --}}
                        @if (Auth::check())
                        <input type="submit" class="btn btn-warning" value="Add Comment" />
                        @else
                        
    
                                <a class="btn btn-warning" href="{{ route('login') }}">
                                  <strong>Please Login!</strong> to add a comment.
                                </a>
                        
                        @endif
                       
                    </form>
                </div>
        </div>

        <!-- Start Blog Post Siddebar -->
        <div class="col-lg-4 sidebar-widgets">
            <div class="widget-wrap">
           


              <div class="single-sidebar-widget post-category-widget">
                <h4 class="single-sidebar-widget__title">Categories</h4>
                <ul class="cat-list mt-20">
                  @foreach ($mainCategories as $category)
                    
            
                  <li>
                    <a href="{{ route('categories.show',$category->id) }}" class="d-flex justify-content-between">
                      <p>{{ $category->category_name }}</p>
                      <p>{{\DB::table('categories')->where('parent_id', $category->id)->count()}}</p>
                    </a>
                  </li>    @endforeach
                </ul>
              </div>

          

              
              </div>
            </div>
          </div>
        <!-- End Blog Post Siddebar -->
      </div>
  </section>
  <!--================ End Blog Post Area =================-->

  @endsection