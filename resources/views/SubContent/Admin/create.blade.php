@extends('components.Admin.master')
@section('title', 'Create SubContent')
@section('content')

<section class="section">
    <div class="container-fluid">
        <!-- ========== title-wrapper start ========== -->
        <div class="title-wrapper pt-30">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="title mb-30">
                        <h2>Add SubContent for Article</h2>
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
                                    <a href="/subcontent_table">SubContent Table</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    <a href="/create_subcontent">@yield('title')</a>
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <!-- end col -->
            </div>
        </div>
        <div class="card-style mb-30">
            <form action="/store_subcontent" method="post" enctype="multipart/form-data">
                @csrf
                <div class="select-style-2">
                    <div class="select-position">
                        <select name="inputarticleid">
                            <option value="">Select Article</option>
                            @foreach ( $articles as $article )
                            <option value="{{ $article->id }}">{{ $article->title }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="input-style-1 col-lg-12" for="title">
                    <input class="col-sm-8" type="text" id="title" name="inputtitle" placeholder="Title - [Nullable]" />
                </div>
                <div class="input-style-1 col-lg-12" for="image">
                    <label class="text-danger">*Recomended image size : 800 x 800 - [Nullable]</label>
                    <input class="col-sm-8" type="file" id="image" name="inputimage" />
                </div>
                <div class="input-style-1 col-lg-12" for="content">
                    <div class="input-style-3">
                        <textarea id="content" name="inputcontent" placeholder="Content" rows="7"></textarea>
                        <span class="icon"><i class="lni lni-text-format"></i></span>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</section>

@endsection