@extends('components.Admin.master')
@section('title', 'Create Tag')
@section('content')

<section class="section">
    <div class="container-fluid">
        <!-- ========== title-wrapper start ========== -->
        <div class="title-wrapper pt-30">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="title mb-30">
                        <h2>Add Tag</h2>
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
                                    <a href="/tag_table">Tag Table</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    <a href="/create_tag">@yield('title')</a>
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <!-- end col -->
            </div>
        </div>
        <div class="card-style mb-30">
            <form action="/store_tag" method="post">
                @csrf
                <div class="select-style-2">
                    <div class="select-position">
                        <select name="inputcategoryid">
                            <option value="">Select Category</option>
                            @foreach ( $categories as $category )
                            <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="input-style-1 col-lg-12" for="tag">
                    <input class="col-sm-8" type="text" id="tag" name="inputtag" placeholder="Tag" />
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</section>

@endsection