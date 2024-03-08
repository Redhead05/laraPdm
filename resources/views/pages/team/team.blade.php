@extends('layouts.app')

@section('title', 'team')

@push('style')
{{--    <link rel="stylesheet"--}}
{{--      href="{{ asset('admin/library/datatables/media/css/jquery.dataTables.min.css') }}">--}}
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.1/css/dataTables.dataTables.css" />
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
        <h1>team</h1>
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
                                    <th class="text-center">No</th>
                                    <th>Judul</th>
                                    <th>Deskripsi</th>
                                    <th>Category</th>
                                    <th>Foto</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($teams as $team)
                                    <tr>
                                        <td class="text-align: center;">{{$loop->iteration }}</td>
                                        <td>{{$team->title}}</td>
                                        <td>{{$team->description}}</td>
                                        <td class="text-align: center;">{{$team->category->name}}</td>
                                        <td>
                                            <img alt="image"
                                                 src="{{ asset($team->image) }}"
                                                 class="rounded-circle"
                                                 width="40"
                                                 data-toggle="tooltip"
                                                 title="{{$team->title}}">
                                        </td>
                                        <td class="card-body">
{{--                                            <a href="{{ route('admin.team.edit', $team->id) }}"--}}
{{--                                               class="btn btn-icon btn-primary btnEdit"><i class="far fa-edit"></i></a>--}}
{{--                                            <button class="btn btn-primary"--}}
{{--                                                    data-toggle="modal"--}}
{{--                                                    data-target="#editteamModal">edit</button>--}}
                                            <form action="{{ route('admin.team.destroy', $team->id) }}" method="POST">
                                                <div class="buttons">
                                                    <a class="btn btn-icon btn-primary"
                                                        data-toggle="modal"
                                                       data-target="#editteamModal"><i class="far fa-edit"></i></a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-icon btn-danger">
                                                        <i class="fas fa-times"></i>
                                                    </button>
                                                </div>
                                            </form>
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
@endsection

    @include('pages.team.createteam')


    @include('pages.team.editteam')

@push('scripts')
        <!-- JS Libraies -->
{{--        <script src="{{ asset('admin/assets/modules/datatables/Select-1.2.4/js/dataTables.select.min.js')}}"></script> --}}--}}
        {{--<script src="{{ asset('admin/library/datatables/media/js/jquery.dataTables.min.js') }}"></script>--}}
        <script src="https://cdn.datatables.net/2.0.1/js/dataTables.js"></script>

        <script src="{{ asset('admin/library/jquery-ui-dist/jquery-ui.min.js') }}"></script>
        {{--    create team--}}
        <script src="{{ asset('admin/library/summernote/dist/summernote-bs4.js') }}"></script>
        <script src="{{ asset('admin/library/codemirror/lib/codemirror.js') }}"></script>
        <script src="{{ asset('admin/library/codemirror/mode/javascript/javascript.js') }}"></script>
        <script src="{{ asset('admin/library/selectric/public/jquery.selectric.min.js') }}"></script>

        <!-- Page Specific JS File -->
        <script src="{{ asset('admin/js/page/modules-datatables.js') }}"></script>
        {{--    jquery trigger modal--}}
        <script>
            $(".btnAdd").click(function (){
                $("#addTeam").modal('show');
            })
            $(".btnEdit").click(function (){
                $("#editTeamModal").modal('show');
            })
        </script>
@endpush
