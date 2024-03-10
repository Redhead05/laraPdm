@extends('layouts.app')

@section('title', 'blog')

@push('style')
    <link rel="stylesheet"
{{--      href="{{ asset('admin/library/datatables/media/css/jquery.dataTables.min.css') }}">--}}
      href="{{ asset('admin/library/datatables/media/css/jquery.dataTables.css') }}">
{{--    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.1/css/dataTables.dataTables.css" />--}}
{{--  button add  --}}
    <link rel="stylesheet"
          href="{{ asset('admin/library/summernote/dist/summernote-bs4.css') }}">
    <link rel="stylesheet"
          href="{{ asset('admin/library/codemirror/lib/codemirror.css') }}">
    <link rel="stylesheet"
          href="{{ asset('admin/library/codemirror/theme/duotone-dark.css') }}">
    <link rel="stylesheet"
          href="{{ asset('admin/library/selectric/public/selectric.css') }}">
@endpush
@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Blog</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Modules</a></div>
                    <div class="breadcrumb-item">DataTables</div>
                </div>
            </div>
            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-body">
                                    <button class="btn btn-primary btnAdd"
                                            data-toggle="modal"
                                            data-target="#exampleModal">Add</button>
                                </div>
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table-striped table"
                                           id="table-1">
                                        <thead>
                                        <tr>
                                            <th class="text-center">
                                                #
                                            </th>
                                            <th>Judul</th>
                                            <th>Deskripsi</th>
                                            <th>Category</th>
                                            <th>Foto</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($blogs as $blog)
                                            <tr>
                                                <td>{{$loop->iteration}}</td>
                                                <td>{{$blog->title}}</td>
                                                <td>{{$blog->description}}</td>
                                                <td>{{$blog->category->name}}</td>
                                                <td>
                                                    <img alt="image"
                                                         src="{{ asset($blog->image) }}"
                                                         class="rounded-circle"
                                                         width="35"
                                                         data-toggle="tooltip"
                                                         title="{{$blog->title}}">
                                                </td>
                                                <td>
                                                    <div class="card-body">
                                                        <a href="{{ route('admin.blog.edit', $blog->id) }}" class="btnEdit"
                                                           data-toggle="modal"
                                                           data-target="#editBlog">Edit</a>
                                                        <form action="{{ route('admin.blog.destroy', $blog->id) }}" method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-icon btn-danger">
                                                                <i class="fas fa-times"></i>
                                                            </button>
                                                        </form>
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
            </div>
        </section>
    </div>
@endsection

    @include('pages.blog.createBlog')

    @include('pages.blog.editBlog')


@push('scripts')
        <!-- JS Libraies -->
{{--        <script src="{{ asset('admin/assets/modules/datatables/Select-1.2.4/js/dataTables.select.min.js')}}"></script> --}}--}}
        {{--<script src="{{ asset('admin/library/datatables/media/js/jquery.dataTables.min.js') }}"></script>--}}
        <script src="https://cdn.datatables.net/2.0.1/js/dataTables.js"></script>

        <script src="{{ asset('admin/library/jquery-ui-dist/jquery-ui.min.js') }}"></script>
        {{--    create Blog--}}
        <script src="{{ asset('admin/library/summernote/dist/summernote-bs4.js') }}"></script>
        <script src="{{ asset('admin/library/codemirror/lib/codemirror.js') }}"></script>
        <script src="{{ asset('admin/library/codemirror/mode/javascript/javascript.js') }}"></script>
        <script src="{{ asset('admin/library/selectric/public/jquery.selectric.min.js') }}"></script>

        <!-- Page Specific JS File -->
        <script src="{{ asset('admin/js/page/modules-datatables.js') }}"></script>

        {{--    jquery trigger modal--}}
        <script>
            $(".btnAdd").click(function (){
                $("#addBlog").modal('show');
            })
            // $(".btnEdit").click(function (){
            //     $("#editBlog").modal('show');
            // })
            </script>
        <script>
            $(document).on('click', '.btnEdit', function(event) {
                event.preventDefault();

                var url = $(this).attr('href');

                $.get(url, function(data) {
                    $('#editBlog #title').val(data.title);
                    $('#editBlog select[name="category_id"]').val(data.category_id);
                    $('#editBlog textarea[name="description"]').val(data.description);
                    $('#editBlog #blogImage').attr('src', data.image);

                    $('#editBlog form').attr('action', '/admin/blog/' + data.id);
                });

                $("#editBlog").modal('show');
            });
        </script>

@endpush
