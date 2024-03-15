
<div class="modal fade" tabindex="-1" role="dialog" id="editBlog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Blog</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="" method="POST" enctype="multipart/form-data" id="editForm">
                @csrf
                @method('PUT')
                <section class="section">
                    <div class="section-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="form-group row mb-4">
                                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Judul</label>
                                            <div class="col-sm-12 col-md-7">
                                                <input type="text" class="form-control" id="title" name="title">
                                            </div>
                                        </div>
                                        <div class="form-group row mb-4">
                                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Category</label>
                                            <div class="col-sm-12 col-md-7">
                                                <select class="form-control selectric" name="category_id" id="category_id">
                                                    @foreach($categories as $category)
                                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row mb-4">
                                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Deskripsi</label>
                                            <div class="col-sm-12 col-md-7">
                                                <textarea class="summernote" name="description" id="description"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>File</label>
                                            <input type="file" class="form-control" name="image" id="image">
                                            <input type="hidden" name="old_image" id="old_image">
                                            <img id="blogImage" src="" alt="Blog Image" width="200" class="rounded-circle">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <div class="modal-footer bg-whitesmoke br">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>
@push('scripts')
    <script src="{{ asset('admin/library/prismjs/prism.js') }}"></script>


    <script src="{{ asset('admin/js/page/bootstrap-modal.js') }}"></script>
    <script>
        $(document).ready(function() {
            // Hide the tooltip
            $(".rounded-circle").on('click', function() {
                $(this).tooltip("close"); // For jQuery UI
                // $(this).tooltip('hide'); // For Bootstrap
            });
        });
    </script>
        <script>
            $(document).ready(function() {
                $(document).on('click', '.edit', function() {
                    var id = $(this).data('id'),
                        url = $(this).data('url');

                    // Make an AJAX request to get the blog data
                    $.ajax({
                        url: url,
                        method: 'GET',
                        success: function(data) {
                            console.log(data);
                            // Populate the form fields with the received data
                            $('#editForm #title').val(data.blog.title);
                            $('#editForm #description').summernote('code', data.blog.description);
                            $('#editForm #image').attr('src', data.blog.image);
                            $('#editForm').attr('action', '/admin/blog/' + id);

                            // Populate the category_id dropdown with the received categories
                            var categoryDropdown = $('#editForm #category_id');
                            categoryDropdown.empty(); // Remove existing options
                            $.each(data.categories, function(index, category) {
                                var option = $('<option></option>').attr('value', category.id).text(category.name);
                                if (category.id === data.blog.category_id) {
                                    option.attr('selected', 'selected');
                                }
                                categoryDropdown.append(option);
                            });
                        },
                        error: function(jqXHR, textStatus, errorThrown) {
                            // Handle any errors
                            console.error(textStatus, errorThrown);
                        }
                    });
                    // Show the modal
                    $('#editBlog').modal('show');
                });
            });
    </script>
@endpush


