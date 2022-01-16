@extends('components.User.master')
@section('title', 'Explore')
@section('content')

<!-- Start Our Work -->
@include('components.User.category')

<!-- Start Recent Work -->
<section class="py-5 mb-5">
    <div class="container">
        <div class="row gy-5 g-lg-5 mb-4">
            @foreach ( $articles as $article )
            <!-- Start Recent Work -->
            <div class="col-md-4 mb-3">
                <a href="/read_article/{{ $article->id }}" class="recent-work card border-0 shadow-lg overflow-hidden">
                    <img class="recent-work-img card-img" src="/ArticleImage/{{ $article->image }}" alt="Card image">
                    <div class="recent-work-vertical card-img-overlay d-flex align-items-end">
                        <div class="recent-work-content text-start mb-3 ml-3 text-dark">
                            <h4 class="card-title light-300 fw-bold">{{ $article->title }}</h4>
                            <p class="card-text typo-space-line">{{ $article->category->category_name }}</p>
                            <p class="card-text">{{ $article->created_at->format('D, M, Y') }}</p>
                        </div>
                    </div>
                </a>
            </div>
            <!-- End Recent Work -->
            @endforeach
        </div>
    </div>
</section>
<!-- End Recent Work -->

@endsection