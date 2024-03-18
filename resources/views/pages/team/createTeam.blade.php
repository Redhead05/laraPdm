<div class="modal fade"
     tabindex="-1"
     role="dialog"
     id="addTeam">
    <div class="modal-dialog"
         role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Team</h5>
                <button type="button"
                        class="close"
                        data-dismiss="modal"
                        aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="#" method="POST" enctype="multipart/form-data">
                @csrf
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
                                                       class="form-control" id="title" name="title" required>
                                            </div>
                                        </div>
                                        <div class="form-group row mb-4">
                                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Jabatan</label>
                                            <div class="col-sm-12 col-md-7">
                                                <input type="text"
                                                       class="form-control" id="jabatan" name="jabatan" required>
                                            </div>
                                        </div>
                                        <div class="form-group row mb-4">
                                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Facebook</label>
                                            <div class="col-sm-12 col-md-7">
                                                <input type="text"
                                                       class="form-control" id="facebook" name="facebook" required>
                                            </div>
                                        </div>
                                        <div class="form-group row mb-4">
                                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Twitter</label>
                                            <div class="col-sm-12 col-md-7">
                                                <input type="text"
                                                       class="form-control" id="twitter" name="twitter" required>
                                            </div>
                                        </div>
                                        <div class="form-group row mb-4">
                                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Instagram</label>
                                            <div class="col-sm-12 col-md-7">
                                                <input type="text"
                                                       class="form-control" id="instagram" name="instagram" required>
                                            </div>
                                        </div>
                                        <div class="form-group row mb-4">
                                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Start</label>
                                            <div class="col-sm-12 col-md-7">
                                                <input type="text"
                                                       class="form-control datepicker">
                                            </div>
                                        </div>
{{--                                        <div class="form-group row mb-4">--}}
{{--                                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">End</label>--}}
{{--                                            <div class="col-sm-12 col-md-7">--}}
{{--                                                <input type="text"--}}
{{--                                                       class="form-control datepicker">--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
                                        <div class="form-group">
                                            <label>File</label>
                                            <input type="file"
                                                   class="form-control" name="image">
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
@push('scripts')
    <script src="{{ asset('admin/library/selectric/public/jquery.selectric.min.js') }}"></script>
    <script src="{{ asset('admin/library/jquery-ui-dist/jquery-ui.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            if ($('.datepicker').length > 0) {
                $(".datepicker").datepicker();
            } else {
                console.log("cek piker di dom.");
            }
        });
    </script>
    <script>
        // To enable the tooltip
        $("#summertext").tooltip("enable");
    </script>
@endpush
