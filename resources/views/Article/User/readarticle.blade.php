@extends('components.User.master')
@section('title')
{{ $article->title }}
@endsection
@section('content')

<!-- Start Work Sigle -->
<section class="container py-5">
    <div class="row">

        <!-- Content -->
        <div class="col-lg-9">

            <!-- Article -->
            <div class="pt-4">
                <div class="worksingle-content col-lg-12 m-auto text-left justify-content-center">
                    <h2 class="worksingle-heading h3 pb-3 light-300">
                        <strong>{{ $article->title }}</strong>
                        <p class="typo-space-line"></p>
                    </h2>
                    <p class="fs-10">{{ $article->created_at->format('D, d M Y') }}</p>
                    <a type="button" href="/explore_tag/{{ $article->tag_id }}">
                        <span
                            class="btn btn-outline-primary rounded-pill mb-lg-3 px-lg-4 light-300 text-dark">{{ $article->tag->tag }}</span>
                    </a>
                    <br>
                    <img src="/ArticleImage/{{ $article->image }}" class="col-lg-12">
                    <p class="typo-space-line"></p>
                    <p class="worksingle-footer py-3 text-dark fs-5">
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $article->content }}
                    </p>
                </div>
            </div>
            <!-- End Article -->

            <!-- SubContent -->
            @foreach ( $subcontents as $subcontent )
            <div class="pt-4">
                <div class="worksingle-content col-lg-12 m-auto text-left justify-content-center">
                    @if ( $subcontent->title )
                    <h2 class="worksingle-heading h4 pb-3 light-300">
                        <strong class="typo-space-line">{{ $subcontent->title }}</strong>
                    </h2>
                    @endif
                    <br>
                    @if ( $subcontent->image )
                    <img src="/SubContentImage/{{ $subcontent->image }}" class="col-lg-12">
                    @endif
                    <p class="typo-space-line"></p>
                    <p class="worksingle-footer py-3 text-dark fs-5">
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $subcontent->content }}
                    </p>
                </div>
            </div>
            @endforeach
            <!-- End SubContent -->

            <!-- Author -->
            <div class="pt-4">
                <div class="worksingle-content col-lg-12 m-auto text-left justify-content-center">
                    <h8 class="worksingle-heading pb-3">
                        Writen by : <strong>{{ $article->author }}</strong>
                    </h8>
                </div>
            </div>
            <!-- End Author -->
        </div>
        <!-- End Content -->

        <!-- SideBar -->
        <div class="col-lg-3 bg-dark">
            <!-- Recent Articles -->
            <div class="pt-4">
                <div class="row gx-5 gx-sm-3 gx-lg-5 gy-lg-5 gy-3 projects">
                    <table class="table">
                        <thead>
                            <h2 class="worksingle-heading h3 light-300">
                                <strong class="text-light">Recent Articles</strong>
                                <p class="typo-space-line"></p>
                            </h2>
                        </thead>
                        <tbody>
                            @foreach ( $articles->take(3) as $article )
                            <div class="col-xl-12 col-md-4 col-sm-6 project ui branding">
                                <a href="/read_article/{{ $article->id }}"
                                    class="service-work card border-0 text-white shadow-sm overflow-hidden mx-5 m-sm-0">
                                    <img class="service card-img" src="/ArticleImage/{{ $article->image }}"
                                        alt="Card image">
                                    <div class="service-work-vertical card-img-overlay d-flex align-items-end">
                                        <div class="service-work-content text-left text-light">
                                            <p class="card-text">{{ $article->title }}</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- End Recent Article -->

            <!-- Categories -->
            <div class="pt-4">
                <div class="worksingle-content col-lg- m-auto text-left justify-content-center">
                    <table class="table">
                        <thead>
                            <h2 class="worksingle-heading h3 pb-3 light-300">
                                <strong class="text-light">Categories</strong>
                                <p class="typo-space-line"></p>
                            </h2>
                        </thead>
                        <tbody>
                            @foreach ( $categories->take(8) as $category )
                            <div class="row">
                                <div class="col-lg-12 pb-2">
                                    <i class='bx-fw bx bxs-chevron-right bx-xs text-light'></i><a
                                        class="text-decoration-none btn-outline-secondary rounded text-light py-1"
                                        href="/explore/{{ $category->id }}">{{ $category->category_name }}</a>
                                </div>
                            </div>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- End Categories -->
        </div>
        <!-- End SideBar -->
    </div>
</section>

@endsection