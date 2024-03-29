@push('style')
    <link rel="stylesheet"
          href="{{ asset('admin/library/bootstrap-daterangepicker/daterangepicker.css') }}">
    <link rel="stylesheet"
          href="{{ asset('admin/library/bootstrap-timepicker/css/bootstrap-timepicker.min.css') }}">
    <link rel="stylesheet"
          href="{{ asset('admin/library/bootstrap-tagsinput/dist/bootstrap-tagsinput.css') }}">
    <link rel="stylesheet"
          href="{{ asset('admin/library/select2/dist/css/select2.min.css') }}">
    <link rel="stylesheet"
          href="{{ asset('admin/library/selectric/public/selectric.css') }}">

@endpush

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
            <form action="{{ route('admin.team.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <section class="section">
                    <div class="section-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="form-group row mb-4">
                                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama</label>
                                            <div class="col-sm-12 col-md-7">
                                                <input type="text" class="form-control" id="name" name="name" required>
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
                                                       class="form-control" id="fb" name="fb" required>
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
                                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Mulai Jabatan</label>
                                            <div class="col-sm-12 col-md-7">
                                                <input type="date" class="form-control datepicker" id="start_date" name="start_date" required>
                                            </div>
                                        </div>
                                        <div class="form-group row mb-4">
                                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Akhir Jabatan</label>
                                            <div class="col-sm-12 col-md-7">
                                                <input type="date" class="form-control datepicker" id="end_date" name="end_date" required>
                                            </div>
                                        </div>
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
    <script src="{{ asset('admin/js/page/forms-advanced-forms.js') }}"></script>
{{--    <script src="{{ asset('admin/library/bootstrap-daterangepicker/daterangepicker.js') }}"></script>--}}
    <script src="{{ asset('admin/library/select2/diquest/js/select2.full.min.js') }}"></script>
    <script src="{{ asset('admin/library/selectric/public/jry.selectric.min.js') }}"></script>
    <script src="{{ asset('admin/library/selectric/public/jquery.selectric.min.js') }}"></script>
    <script src="{{ asset('admin/library/jquery-ui-dist/jquery-ui.min.js') }}"></script>

    <script>
        // To enable the tooltip
        $("#summertext").tooltip("enable");
    </script>
@endpush
