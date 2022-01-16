<section class="service-wrapper">
    <div class="service-tag py-5 bg-dark">
        <div class="col-md-12">
            <ul class="nav d-flex justify-content-center">
                <li class="nav-item mx-lg-4">
                    <a class="filter-btn nav-link btn-outline-danger rounded-pill text-light px-4 light-300"
                        href="/explore" data-filter=".project">All</a>
                </li>
                @foreach ( $categories->take(5) as $category )
                <li class="nav-item mx-lg-4">
                    <a class="filter-btn nav-link btn-outline-danger rounded-pill text-light px-4 light-300"
                        href="/explore/{{ $category->id }}" data-filter=".graphic">{{ $category->category_name }}</a>
                </li>
                @endforeach
                <li class="nav-item mx-lg-4">
                    <a class="filter-btn nav-link btn-outline-danger rounded-pill text-light px-4 light-300"
                        href="/category" data-filter=".graphic">More...</a>
                </li>
            </ul>
        </div>
    </div>
</section>