@extends('layouts.app')

@section('title', 'blog')

@push('style')
    <link rel="stylesheet"
      href="{{ asset('admin/library/datatables/media/css/jquery.dataTables.css') }}">
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
                                            data-target="#addBlog">Add</button>
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
                                    <table class="table-hover table"
                                           id="crudDataTable">
                                        <thead>
                                        <tr>
                                            <th class="text-center">
                                                #
                                            </th>
                                            <th>Judul</th>
                                            <th>Deskripsi</th>
                                            <th>Foto</th>
                                            <th>Category</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody></tbody>
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
        <script src="https://cdn.datatables.net/2.0.1/js/dataTables.js"></script>
        <script src="{{ asset('admin/library/selectric/public/jquery.selectric.min.js') }}"></script>
        <script src="{{ asset('admin/library/jquery-ui-dist/jquery-ui.min.js') }}"></script>
        {{--    create Blog--}}
        <script src="{{ asset('admin/library/summernote/dist/summernote-bs4.js') }}"></script>
        <script src="{{ asset('admin/library/codemirror/lib/codemirror.js') }}"></script>
        <script src="{{ asset('admin/library/codemirror/mode/javascript/javascript.js') }}"></script>
        <!-- Page Specific JS File -->
        <script src="{{ asset('admin/js/page/modules-datatables.js') }}"></script>
        <script src="{{ asset('admin/library/prismjs/prism.js') }}"></script>
        <script src="{{ asset('admin/js/page/bootstrap-modal.js') }}"></script>
        {{--    jquery trigger modal--}}
        <script>
            $(document).ready(function() {
                var dataTable = $('#crudDataTable').DataTable({
                    processing: true,
                    serverSide: true,
                    // stateSave: true,
                    ajax: {
                        url: "{{ route('admin.blog.index') }}",
                        data: function(d) {
                            d.searching = $('input[type="search"]').val();
                        }
                    },
                    order: [[0, 'desc']],
                    lengthMenu: [[10, 25, 50, -1], [10, 25, 50, "All"]],
                    paging: true,
                    pageLength:10,
                    searching: true,
                    columns: [
                        {
                            data: null, searchable: false, orderable: false,
                            render: function (data, type, row, meta) {
                                return meta.row + meta.settings._iDisplayStart + 1;
                            }
                        },
                        {data: 'title', name: 'title', orderable: true},
                        {data: 'description', name: 'description', orderable: true},
                        {
                            data: 'image', name: 'image', orderable: false, searchable: false,
                            render: function (data, type, full, meta) {
                                return "<img src=\"" + data + "\" height=\"50\"/>";
                            },
                        },
                        {data: 'category.name', name: 'category.name', orderable: true},
                        {data: 'action', name: 'action', orderable: false, searchable: false},
                    ],
                });
            });
        </script>
        <script>
        {{--    delete    --}}
        $(document).ready(function() {
            // Attach a click event handler to the delete buttons
            $(document).on('click', '.delete', function(e) {
                e.preventDefault();

                var id = $(this).data('id');
                var url = $(this).data('url');

                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    url: url,
                    type: 'DELETE',
                    data: { id: id },
                    success: function(response) {
                        // Handle success here
                        alert('Blog post deleted successfully');
                        location.reload();
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        // Handle error here
                        alert('An error occurred while deleting the blog post');
                    }
                });
            });
        });
        </script>

        <script>
            //modal add
            $(document).ready(function() {
                $('.btnAdd').click(function() {
                    $('#addBlog').modal('show');
                });
            });
        </script>
        <script>
            $(document).ready(function() {
                $(document).on('click', '.read-more', function() {
                    var fullDescription = $(this).next('.full-description');
                    var content = $(this).prev('.content');
                    if (fullDescription.is(':hidden')) {
                        fullDescription.show();
                        content.hide();
                        $(this).text('Read Less');
                    } else {
                        fullDescription.hide();
                        content.show();
                        $(this).text('Read More');
                    }
                });
            });
        </script>
@endpush
