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
     id="editTeam">
    <div class="modal-dialog"
         role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Team</h5>
                <button type="button"
                        class="close"
                        data-dismiss="modal"
                        aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="editTeamForm" action="" method="POST">
                @csrf
                @method('PUT')
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
                                            <input type="file" class="form-control" name="image" id="image">
                                            <input type="hidden" name="old_image" id="old_image">
                                            <img id="teamImage" src="" alt="team Image" width="200" class="rounded-circle">
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
    {{--    modal edit--}}
    <script>
        $(document).ready(function() {
            // Attach a click event handler to the edit buttons
            $(document).on('click', '.edit', function(e) {
                e.preventDefault();

                var id = $(this).data('id');
                var url = $(this).data('url');

                // Retrieve the team data from the server
                $.ajax({
                    url: url,
                    type: 'GET',
                    success: function(response) {
                        var imageUrl = "{{ asset('') }}" + response.team.image;
                        // Populate the form fields in the edit modal with the team data
                        $('#editTeamForm #name').val(response.team.name);
                        $('#editTeamForm #jabatan').val(response.team.jabatan);
                        $('#editTeamForm #fb').val(response.team.fb);
                        $('#editTeamForm #twitter').val(response.team.twitter);
                        $('#editTeamForm #instagram').val(response.team.instagram);
                        $('#editTeamForm #start_date').val(response.team.start_date);
                        $('#editTeamForm #end_date').val(response.team.end_date);
                        $('#editTeamForm #image').attr('src', imageUrl);
                        $('#teamImage').attr('src', imageUrl);

                        // Replace the field names and the form action URL with the actual ones used in your project
                        // ...

                        // Update the form action
                        $('#editTeamForm').attr('action', '/admin/team/' + id);

                        // Show the edit modal
                        $('#editTeam').modal('show');
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        // Handle error here
                        alert('An error occurred while retrieving the team data');
                    }
                });
            });
        });
    </script>
    <script>
        //update
        $(document).ready(function() {
            $('#editTeamForm').on('submit', function(event) {
                event.preventDefault();

                var formData = new FormData(this);
                formData.append('_token', $('input[name=_token]').val());
                formData.append('_method', 'PUT');

                $.ajax({
                    url: $(this).attr('action'),
                    method: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        // Handle success
                        $('.alert-success').remove();

                        var alert = $('<div class="alert alert-success" role="alert"></div>');
                        alert.text('Form submitted successfully');
                        $('#editTeamForm').prepend(alert);

                        location.reload();
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        // Handle error
                        console.error(textStatus, errorThrown);
                    }
                });
            });
        });
    </script>
@endpush
