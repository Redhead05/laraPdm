{{--    modal tambah blog--}}
<div class="modal fade"
     tabindex="-1"
     role="dialog"
     id="editTeamModal">
    <div class="modal-dialog"
         role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Blog</h5>
                <button type="button"
                        class="close"
                        data-dismiss="modal"
                        aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('admin.blog.update', $blog->id ?? '') }}" method="POST" enctype="multipart/form-data">
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
                                                <input type="text"
                                                       class="form-control" id="title" name="title" value="{{ $blog->title ?? '' }}">
                                            </div>
                                        </div>
                                        <div class="form-group row mb-4">
                                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Category</label>
                                            <div class="col-sm-12 col-md-7">
                                                <select class="form-control selectric" name="category_id">
                                                    <option value="">Pilih Category</option>
{{--                                                    @foreach($categories as $category)--}}
{{--                                                        <option value="{{ $category->id }}" {{ ($blog->category_id ?? null) == $category->id ? 'selected' : '' }}>--}}
{{--                                                            {{ $category->name }}--}}
{{--                                                        </option>--}}
{{--                                                    @endforeach--}}
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row mb-4">
                                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Deskripsi</label>
                                            <div class="col-sm-12 col-md-7">
                                                <textarea class="summernote" name="description">{{ $blog->description ?? '' }}</textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>File</label>
                                            <input type="file" class="form-control" name="image">
                                            <input type="hidden" name="old_image" value="{{ $blog->image ?? '' }}">
                                            @if($blog->image ?? false)
                                                <img src="{{ asset($blog->image) }}" alt="Blog Image" width="200">
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <div class="modal-footer bg-whitesmoke br">
                    <button type="button"
                            class="btn btn-secondary"
                            data-dismiss="modal">Close</button>
                    <button type="submit"
                            class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>
