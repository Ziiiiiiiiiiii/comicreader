@extends('components.Admin.master')
@section('title', 'SubContent Table')
@section('content')

<!-- ========== section start ========== -->
<section class="section">
    <div class="container-fluid">
        <!-- ========== title-wrapper start ========== -->
        <div class="title-wrapper pt-30">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="title mb-30">
                        <h2>SubContent Table</h2>
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
                                    <a href="/subcontent_table">@yield('title')</a>
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <!-- end col -->
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="card-style mb-30">
                    <div class="title d-flex flex-wrap align-items-center justify-content-between">
                        <div class="left">
                            <a type="button" href="/create_subcontent" class="btn btn-primary"><i
                                    class="lni lni-plus"></i>&nbsp;Add SubContent</a>
                        </div>
                    </div>
                    <!-- End Title -->
                    <div class="table-responsive">
                        <table class="table top-selling-table">
                            <thead>
                                <tr>
                                    <th>
                                        <h6 class="text-sm text-medium">#</h6>
                                    </th>
                                    <th>
                                        <h6 class="text-sm text-medium">Article</h6>
                                    </th>
                                    <th>
                                        <h6 class="text-sm text-medium">Title</h6>
                                    </th>
                                    <th>
                                        <h6 class="text-sm text-medium">Image</h6>
                                    </th>
                                    <th>
                                        <h6 class="text-sm text-medium">Content</h6>
                                    </th>
                                    <th>
                                        <h6 class="text-sm text-medium">Action</h6>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ( $subcontents as $subcontent )
                                <tr>
                                    <td>
                                        <p class="text-sm">{{ $loop->iteration }}</p>
                                    </td>
                                    <td>
                                        <p class="text-sm">{{ Str::limit( $subcontent->article->title, 20) }}</p>
                                    </td>
                                    <td>
                                        <p class="text-sm">{{ $subcontent->title }}</p>
                                    </td>
                                    <td>
                                        @if ( $subcontent->image )
                                        <p class="text-sm"><img class="img-thumbnail"
                                                src="/SubContentImage/{{ $subcontent->image }}" width="125px"></p>
                                        @endif
                                    </td>
                                    <td>
                                        <p class="text-sm">{{ Str::limit( $subcontent->content, 50 ) }}</p>
                                    </td>
                                    <td>
                                        <div class="action justify-content">
                                            <a type="button" class="edit" href="/edit_subcontent/{{ $subcontent->id }}"
                                                title="Edit">
                                                <i class="lni lni-pencil-alt"></i>
                                            </a>
                                            <a class="more-btn ml-10" href="/delete_subcontent/{{ $subcontent->id }}"
                                                title="Delete">
                                                <i class="lni lni-trash-can"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection