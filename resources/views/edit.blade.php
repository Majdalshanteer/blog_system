
@extends('pages.layout.master')


@section('content')
<hr>
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-7 align-self-center container">
                <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Edit Categories</h4>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb m-0 p-0">
                            <li class="breadcrumb-item"><a href="index.html" class="text-muted">Categories</a></li>
                            <li class="breadcrumb-item text-muted active" aria-current="page">Edit</li>
                        </ol>
                    </nav>
                </div>
            </div>

        </div>
    </div>
    <br>
    @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div   class="container-fluid">
<div class="row">
    <div class="col-3"></div>
    <div class="col-6">
        <div class="card">
            <div class="card-body">

                <form action="{{ route('manage_blogs.update', $category->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
    @method('PUT')
                    <div class="form-body">


                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" class="form-control"  name="category_name" value="{{ $category->category_name }}">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea type="text" class="form-control"  name="description" value="{{ $category->description }}">
                                        {{ $category->description }}</textarea></div>
                            </div>
                        </div>

<hr>
                        <label>Upload image</label>
                        {{-- <h6 class="card-subtitle">Choose a photo
                        </h6> --}}

                            <fieldset class="form-group">
                                <input type="file" name="image" class="form-control-file" id="exampleInputFile">
                            </fieldset>

<img src="/categoryImages/{{ $category->image }}" width="150px">


                    </div>
                    <hr>
                      




                    </div><br>
                    <div class="form-actions">
                        <div class="text-right m-3">
                            <button type="submit" class="btn btn-info">Update</button>
                            {{-- <button type="reset" class="btn btn-dark">Reset</button> --}}
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

</div>
</div>
@endsection
