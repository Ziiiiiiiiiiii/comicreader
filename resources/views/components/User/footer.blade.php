<!-- Start Footer -->
<footer class="bg-dark pt-4">
    <div class="container">
        <div class="row py-4">

            <div class="col-lg-3 col-12 align-left">
                <a class="navbar-brand" href="/home">
                    <span class="text-light h4">Comic</span> <span class="text-danger h4 semi-bold-600">Reader</span>
                </a>
                <p class="text-light my-lg-4 my-2">
                    This Website give you almost everything you wanna know about superhero comics. Dc Comics, Marvel
                    Comics, Image Comics, and many more!
                </p>
            </div>

            <div class="col-lg-3 col-md-4 my-sm-0 mt-4">
                <h3 class="h4 pb-lg-3 text-light light-300">Quick Links</h2>
                    <ul class="list-unstyled text-light light-300">
                        <li class="pb-2">
                            <i class='bx-fw bx bxs-chevron-right bx-xs'></i><a class="text-decoration-none text-light"
                                href="/home">Home</a>
                        </li>
                        <li class="pb-2">
                            <i class='bx-fw bx bxs-chevron-right bx-xs'></i><a
                                class="text-decoration-none text-light py-1" href="/explore">Explore</a>
                        </li>
                        <li class="pb-2">
                            <i class='bx-fw bx bxs-chevron-right bx-xs'></i><a
                                class="text-decoration-none text-light py-1" href="/category">Category</a>
                        </li>
                        <li class="pb-2">
                            <i class='bx-fw bx bxs-chevron-right bx-xs'></i><a
                                class="text-decoration-none text-light py-1" href="/about">About</a>
                        </li>
                    </ul>
            </div>

            <div class="col-lg-3 col-md-4 my-sm-0 mt-4">
                <h2 class="h4 pb-lg-3 text-light light-300">Categories</h2>
                <ul class="list-unstyled text-light light-300">
                    @foreach ( $categories->take(4) as $category )
                    <li class="pb-2">
                        <i class='bx-fw bx bxs-chevron-right bx-xs'></i><a class="text-decoration-none text-light py-1"
                            href="/explore/{{ $category->id }}">{{ $category->category_name }}</a>
                    </li>
                    @endforeach
                    <li class="pb-2">
                        <i class='bx-fw bx bxs-chevron-right bx-xs'></i><a class="text-decoration-none text-light py-1"
                            href="/category">More...</a>
                    </li>
                </ul>
            </div>

            <div class="col-lg-3 col-md-4 my-sm-0 mt-4">
                <h2 class="h4 pb-lg-3 text-light light-300">Contact</h2>
                <ul class="list-unstyled text-light light-300">
                    <li class="pb-2">
                        <i class='bx-fw bx bx-phone bx-xs'></i><a class="text-decoration-none text-light py-1"
                            href="tel:081381811266">&nbsp;+62 813-8181-1266</a>
                    </li>
                    <li class="pb-2">
                        <i class='bx-fw bx bx-mail-send bx-xs'></i><a class="text-decoration-none text-light py-1"
                            href="mailto:ray.zidane9@gmail.com">&nbsp;ray.zidane9@gmail.com</a>
                    </li>
                    <li class="pb-2">
                        <i class='bx bxl-instagram'></i><a class="text-decoration-none text-light py-1"
                            href="https://www.instagram.com/zizizizizizizizizizizidane/">&nbsp;@zizizizizizizizizizizidane</a>
                    </li>
                </ul>
            </div>

        </div>
    </div>
</footer>
<!-- End Footer -->