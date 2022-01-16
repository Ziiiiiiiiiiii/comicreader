@extends('components.Admin.master')
@section('title', 'Edit Article')
@section('content')

<section class="section">
    <div class="container-fluid">
        <!-- ========== title-wrapper start ========== -->
        <div class="title-wrapper pt-30">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="title mb-30">
                        <h2>Edit Article</h2>
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
                                    <a href="/article_table">Article Table</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    <a href="/edit_article/{{ $article->id }}">@yield('title')</a>
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <!-- end col -->
            </div>
        </div>
        <div class="card-style mb-30">
            <form action="{{ route('storearticle', $article->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="select-style-2">
                    <div class="select-position">
                        <select name="inputcategoryid">
                            <option value="">Select Category</option>
                            @foreach ( $categories as $category )
                            <option value="{{ $category->id }}"
                                {{ ($article->category_id == $category->id) ? 'selected' : '' }}>
                                {{ $category->category_name }}
                            </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="select-style-2">
                    <div class="select-position">
                        <select name="inputtagid">
                            <option value="">Select Tag</option>
                            @foreach ( $tags as $tag )
                            <option value="{{ $tag->id }}" {{ ($article->tag_id == $tag->id) ? 'selected' : '' }}>
                                {{ $tag->tag }}
                            </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="input-style-1 col-lg-12" for="image">
                    <label class="text-danger">*Recomended image size : 800 x 800</label>
                    <input class="col-sm-8" type="file" id="image" name="inputimage" />
                </div>
                <div class="input-style-1 col-lg-12" for="title">
                    <input class="col-sm-8" type="text" id="title" name="inputtitle" value="{{ $article->title }}" />
                </div>
                <div class="input-style-1 col-lg-12" for="content">
                    <div class="input-style-3">
                        <textarea id="content" name="inputcontent" placeholder="Content"
                            rows="7">{{ $article->content }}</textarea>
                        <span class="icon"><i class="lni lni-text-format"></i></span>
                    </div>
                </div>
                <div class="input-style-1 col-lg-12" for="author">
                    <input class="col-sm-8" type="text" id="author" name="inputauthor" value="{{ $article->author }}" />
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</section>

@endsection