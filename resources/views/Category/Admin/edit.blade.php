@extends('components.Admin.master')
@section('title', 'Edit Category')
@section('content')

<section class="section">
    <div class="container-fluid">
        <!-- ========== title-wrapper start ========== -->
        <div class="title-wrapper pt-30">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="title mb-30">
                        <h2>Edit Category</h2>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="breadcrumb-wrapper mb-30">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="/">Home</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    <a href="/category_table">Category Table</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    <a href="/edit_category/{{ $category->id }}">@yield('title')</a>
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <!-- end col -->
            </div>
        </div>
        <div class="card-style mb-30">
            <form action="{{ route('storecategory', $category->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="input-style-1 col-lg-12" for="image">
                    <label class="text-danger">*Recomended image size : 800 x 800</label>
                    <input class="col-sm-8" type="file" id="image" name="inputimage" />
                </div>
                <div class="input-style-1 col-lg-12" for="category_name">
                    <input class="col-sm-8" type="text" id="category_name" name="inputcategoryname"
                        value="{{ $category->category_name }}" />
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</section>

@endsection