@extends('layouts.app')

@section('title', 'Team')

@push('style')
<!-- CSS Libraries -->

<link rel="stylesheet"
      href="{{ asset('admin/library/datatables/media/css/jquery.dataTables.min.css') }}">
@endpush

@section('main')
<div class="main-content">
<section class="section">
    <div class="section-header">
        <h1>DataTables</h1>
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
                        <h4>Basic DataTables</h4>
                        <div class="card-body">
                            <button class="btn btn-primary"
                                    data-toggle="modal"
                                    data-target="#exampleModal">Add</button>
                        </div>
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
                                    <th>Komisi</th>
                                    <th>Nama Lengkap</th>
                                    <th>Foto</th>
                                    <th>Periode</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        1
                                    </td>
                                    <td>Create a mobile app</td>
                                    <td class="align-middle">
                                        <div class="progress"
                                             data-height="4"
                                             data-toggle="tooltip"
                                             title="100%">
                                            <div class="progress-bar bg-success"
                                                 data-width="100%"></div>
                                        </div>
                                    </td>
                                    <td>
                                        <img alt="image"
                                             src="{{ asset('admin/img/avatar/avatar-5.png') }}"
                                             class="rounded-circle"
                                             width="35"
                                             data-toggle="tooltip"
                                             title="Wildan Ahdian">
                                    </td>
                                    <td>2018-01-20</td>
                                    <td>
                                        <div class="badge badge-success">Completed</div>
                                    </td>
                                    <td><a href="#"
                                           class="btn btn-secondary">Detail</a></td>
                                </tr>
                                <tr>
                                    <td>
                                        2
                                    </td>
                                    <td>Redesign homepage</td>
                                    <td class="align-middle">
                                        <div class="progress"
                                             data-height="4"
                                             data-toggle="tooltip"
                                             title="0%">
                                            <div class="progress-bar"
                                                 data-width="0"></div>
                                        </div>
                                    </td>
                                    <td>
                                        <img alt="image"
                                             src="{{ asset('admin/img/avatar/avatar-1.png') }}"
                                             class="rounded-circle"
                                             width="35"
                                             data-toggle="tooltip"
                                             title="Nur Alpiana">
                                        <img alt="image"
                                             src="{{ asset('admin/img/avatar/avatar-3.png') }}"
                                             class="rounded-circle"
                                             width="35"
                                             data-toggle="tooltip"
                                             title="Hariono Yusup">
                                        <img alt="image"
                                             src="{{ asset('admin/img/avatar/avatar-4.png') }}"
                                             class="rounded-circle"
                                             width="35"
                                             data-toggle="tooltip"
                                             title="Bagus Dwi Cahya">
                                    </td>
                                    <td>2018-04-10</td>
                                    <td>
                                        <div class="badge badge-info">Todo</div>
                                    </td>
                                    <td><a href="#"
                                           class="btn btn-secondary">Detail</a></td>
                                </tr>
                                <tr>
                                    <td>
                                        3
                                    </td>
                                    <td>Backup database</td>
                                    <td class="align-middle">
                                        <div class="progress"
                                             data-height="4"
                                             data-toggle="tooltip"
                                             title="70%">
                                            <div class="progress-bar bg-warning"
                                                 data-width="70%"></div>
                                        </div>
                                    </td>
                                    <td>
                                        <img alt="image"
                                             src="{{ asset('admin/img/avatar/avatar-1.png') }}"
                                             class="rounded-circle"
                                             width="35"
                                             data-toggle="tooltip"
                                             title="Rizal Fakhri">
                                        <img alt="image"
                                             src="{{ asset('admin/img/avatar/avatar-2.png') }}"
                                             class="rounded-circle"
                                             width="35"
                                             data-toggle="tooltip"
                                             title="Hasan Basri">
                                    </td>
                                    <td>2018-01-29</td>
                                    <td>
                                        <div class="badge badge-warning">In Progress</div>
                                    </td>
                                    <td><a href="#"
                                           class="btn btn-secondary">Detail</a></td>
                                </tr>
                                <tr>
                                    <td>
                                        4
                                    </td>
                                    <td>Input data</td>
                                    <td class="align-middle">
                                        <div class="progress"
                                             data-height="4"
                                             data-toggle="tooltip"
                                             title="100%">
                                            <div class="progress-bar bg-success"
                                                 data-width="100%"></div>
                                        </div>
                                    </td>
                                    <td>
                                        <img alt="image"
                                             src="{{ asset('admin/img/avatar/avatar-2.png') }}"
                                             class="rounded-circle"
                                             width="35"
                                             data-toggle="tooltip"
                                             title="Rizal Fakhri">
                                        <img alt="image"
                                             src="{{ asset('admin/img/avatar/avatar-5.png') }}"
                                             class="rounded-circle"
                                             width="35"
                                             data-toggle="tooltip"
                                             title="Isnap Kiswandi">
                                        <img alt="image"
                                             src="{{ asset('admin/img/avatar/avatar-4.png') }}"
                                             class="rounded-circle"
                                             width="35"
                                             data-toggle="tooltip"
                                             title="Yudi Nawawi">
                                        <img alt="image"
                                             src="{{ asset('admin/img/avatar/avatar-1.png') }}"
                                             class="rounded-circle"
                                             width="35"
                                             data-toggle="tooltip"
                                             title="Khaerul Anwar">
                                    </td>
                                    <td>2018-01-16</td>
                                    <td>
                                        <div class="badge badge-success">Completed</div>
                                    </td>
                                    <td><a href="#"
                                           class="btn btn-secondary">Detail</a></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    <div class="modal fade"
         tabindex="-1"
         role="dialog"
         id="exampleModal">
        <div class="modal-dialog"
             role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Modal title</h5>
                    <button type="button"
                            class="close"
                            data-dismiss="modal"
                            aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Modal body text goes here.</p>
                </div>
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
</div>
@endsection

@push('scripts')
<!-- JS Libraies -->
<script src="{{ asset('admin/assets/modules/datatables/Select-1.2.4/js/dataTables.select.min.js')}}"></script> --}}
<script src="{{ asset('admin/library/datatables/media/js/jquery.dataTables.min.js') }}"></script>

<script src="{{ asset('admin/library/jquery-ui-dist/jquery-ui.min.js') }}"></script>

<!-- Page Specific JS File -->
<script src="{{ asset('admin/js/page/modules-datatables.js') }}"></script>
@endpush
