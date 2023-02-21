
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
                          @if (Auth::check())
                          <a class="button" href="/manage_blogs">ADD BLOGS <i class="ti-arrow-right"></i></a>
                          @else
                          
      
                                  <a class="button" href="{{ route('login') }}">
                                    <strong>Please Login!</strong> to add blogs.
                                  </a>
                          
                          @endif
            
          </div>
        </div>
      </div>
    </section>
    <!--================Hero Banner end =================-->  

    <!--================ Blog slider start =================-->  

        </div>
      </div>
    </section>


  </main>

  @endsection
