@extends('components.User.master')
@section('title', 'Home')
@section('content')
@include('components.User.slider')
@include('components.User.orderby')
<section class="container overflow-hidden py-5">
    <div class="row gx-5 gx-sm-3 gx-lg-5 gy-lg-5 gy-3 pb-3 projects">
        @foreach ( $articles->take(8) as $article )
        <!-- Start Recent Work -->
        <div class="col-xl-3 col-md-4 col-sm-6 project ui branding">
            <a href="/read_article/{{ $article->id }}"
                class="service-work card border-0 text-white shadow-sm overflow-hidden mx-5 m-sm-0">
                <img class="service card-img" src="/ArticleImage/{{ $article->image }}" alt="Card image">
                <div class="service-work-vertical card-img-overlay d-flex align-items-end">
                    <div class="service-work-content text-left text-light">
                        <span
                            class="btn btn-outline-light rounded-pill mb-lg-3 px-lg-4 light-300">{{ $article->category->category_name }}</span>
                        <p class="card-text">{{ $article->title }}</p>
                    </div>
                </div>
            </a>
        </div>
        <!-- End Recent Work -->
        @endforeach
    </div>
</section>
<!-- End Service -->

@endsection