
@extends('pages.layout.master')


@section('content')

<section class="mb-30px">
    <div class="container">
      <div class="hero-banner">
        <div class="hero-banner__content">
          <h3>Tours & Travels</h3>
          <h1>Amazing Places on earth</h1>
          <h4>December 12, 2018</h4>
          
        </div>
      </div>
    </div>
  </section>
  <div class="container">
  <a class="button" href="{{route('manage_blogs.create')}}">ADD BLOG <i class="ti-arrow-right"></i></a>
  </div>
<table class="container table table-striped ">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
     
        <th scope="col">Image</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($categories as $category)
     <tr>

      <td>{{$category->id  }}</td>
      <td> {{$category->category_name  }}</td>
      
     

     
      
      <td><img src="categoryImages/{{$category->image}}" style="height:80px; width:100px"></td> 
      <td>
        <!-- edit button -->
        <a href="" class="ms-3 "></a>
        <form style="display: inline-block" method="POST"
            action="{{ route('manage_blogs.destroy',$category->id) }}">
            <a   href="{{ route('manage_blogs.edit', $category->id) }}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="green" class="bi bi-pencil-square" viewBox="0 0 16 16">
                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
              </svg></a>

          <!-- Delete button -->
          @csrf
          @method('DELETE')
<!-- Button trigger modal -->
<button type="button" class="btn text-danger" data-toggle="modal" data-target="#exampleModal{{$category->id}}">
<i class="far fa-trash-alt"></i>
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal{{$category->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="exampleModalLabel">Delete Category</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">
Are you sure ?
</div>
<div class="modal-footer">
<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
<button type="submit" class="btn btn-primary">Delete</button>
</div>
</div>
</div>
</div>




        </form>
    </td>
    
    
    
    </tr>
@endforeach
    
   
    </tbody>
  </table>


@endsection
