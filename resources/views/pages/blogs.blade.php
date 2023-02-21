
@extends('pages.layout.master')


@section('content')
  <main class="site-main">
    <!--================Hero Banner start =================-->  
    <section class="mb-30px">
      <div class="">
        <div class="hero-banner">
          <div class="hero-banner__content">
            <h3>Different Types</h3>
            <h1>Amazing Blogs</h1>
   <script>
var today = new Date();
var date = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();</script>
            <h4><script>document.write(date);</script></h4>
          </div>
        </div>
      </div>
    </section>
    <!--================Hero Banner end =================-->  


               
              
    <!--================ Start Blog Post Area =================-->
    <section class="blog-post-area section-margin mt-4">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            {{-- @foreach($categories as $cat)
            {{$cat->user->name}}   
            @endforeach    --}}
            
 @foreach($blogs as $blog)

            <div class="single-recent-blog-post">
              <div class="thumb">
                <img class="img-fluid" src="/categoryImages/{{$blog->image}}" style="height:350px; width:100%" alt="">
                <ul class="thumb-info">
                  <li><a href="#"><i class="ti-user"></i>{{$blog->user->name}}</a></li>
                  <li><a href="#"><i class="ti-notepad"></i>{{$blog->created_at}}</a></li>
                  <li><a href="#"><i class="ti-themify-favicon"></i>{{\DB::table('comments')->where('blog_id', $blog->id)->count()}} comments</a></li>
                </ul>
              </div>
              <div class="details mt-20">
                <a href={{ route('blogs.show',$blog->id) }}>
                  <h3>{{ $blog->category_name }}</h3>
                </a>
                {{-- <p class="tag-list-inline">Tag: <a href="#">travel</a>, <a href="#">life style</a>, <a href="#">technology</a>, <a href="#">fashion</a></p> --}}
                {{-- <p>{{ $blog->description }}</p> --}}
                <a class="button" href={{ route('blogs.show',$blog->id) }}>Read More <i class="ti-arrow-right"></i></a>
              </div>
            </div> 
             @endforeach

           
  
            <div class="row">
              <div class="col-lg-12">
                  <nav class="blog-pagination justify-content-center d-flex">
                      <ul class="pagination">
                        @if(request()->get('search'))
                        @else
            <div class="row"style="margin-top: 8%">
                <div  class="col-sm-12 d-md-flex mt-5  justify-content-md-center">
        
                    {{ $blogs->links() }}        </div>
            </div>
            @endif
                         
                      </ul>
                  </nav>
              </div>
            </div>
          </div>

          <!-- Start Blog Post Siddebar -->
          <div class="col-lg-4 sidebar-widgets">
              <div class="widget-wrap">
                <div class="single-sidebar-widget newsletter-widget">

             


                  <h4 class="single-sidebar-widget__title">Search</h4>
                  <form method="GET">
                    <div class="input-group mb-3">
                      <input 
                        type="text" 
                        name="search" 
                        value="{{ request()->get('search') }}" 
                        class="form-control" 
                        placeholder="Search..." 
                        aria-label="Search" 
                        aria-describedby="button-addon2">
                      <button class="bbtns  " type="submit" id="button-addon2">Search</button>
                    </div>
                </form>
                  {{-- <div class="form-group mt-30">
                    <div class="col-autos">
                      <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Enter email" onfocus="this.placeholder = ''"
                        onblur="this.placeholder = 'Enter email'">
                    </div>
                  </div>
                  <button class="bbtns d-block mt-20 w-100">Search</button>--}}
                </div> 


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
  </main>

  @endsection
