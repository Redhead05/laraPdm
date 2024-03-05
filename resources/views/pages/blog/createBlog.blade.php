{{--    modal tambah blog--}}
<div class="modal fade"
     tabindex="-1"
     role="dialog"
     id="addBlog">
    <div class="modal-dialog"
         role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Blog</h5>
                <button type="button"
                        class="close"
                        data-dismiss="modal"
                        aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
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
                                                       class="form-control">
                                            </div>
                                        </div>

                                        <div class="form-group row mb-4">
                                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Category</label>
                                            <div class="col-sm-12 col-md-7">
                                                <select class="form-control selectric">
                                                    <option>Tech</option>
                                                    <option>News</option>
                                                    <option>Political</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row mb-4">
                                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Deskripsi</label>
                                            <div class="col-sm-12 col-md-7">
                                                <textarea class="summernote"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>File</label>
                                            <input type="file"
                                                   class="form-control">
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
                <button type="button"
                        class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
