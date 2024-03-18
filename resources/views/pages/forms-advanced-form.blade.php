@extends('layouts.app')

@section('title', 'Advanced Forms')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet"
        href="{{ asset('admin/library/bootstrap-daterangepicker/daterangepicker.css') }}">
    <link rel="stylesheet"
        href="{{ asset('admin/library/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('admin/library/select2/dist/css/select2.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('admin/library/selectric/public/selectric.css') }}">
    <link rel="stylesheet"
        href="{{ asset('admin/library/bootstrap-timepicker/css/bootstrap-timepicker.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('admin/library/bootstrap-tagsinput/dist/bootstrap-tagsinput.css') }}">
@endpush
@push('scripts')
    <!-- JS Libraies -->
    <script src="{{ asset('admin/library/cleave.js/dist/cleave.min.js') }}"></script>
    <script src="{{ asset('admin/library/cleave.js/dist/addons/cleave-phone.us.js') }}"></script>
    <script src="{{ asset('admin/library/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
    <script src="{{ asset('admin/library/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js') }}"></script>
    <script src="{{ asset('admin/library/bootstrap-timepicker/js/bootstrap-timepicker.min.js') }}"></script>
    <script src="{{ asset('admin/library/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js') }}"></script>
    <script src="{{ asset('admin/library/select2/diquest/js/select2.full.min.js') }}"></script>
    <script src="{{ asset('admin/library/selectric/public/jry.selectric.min.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('admin/js/page/forms-advanced-forms.js') }}"></script>
@endpush
<script src="{{ asset('admin/js/page/forms-advanced-forms.js') }}"></script>
<script src="{{ asset('admin/library/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
