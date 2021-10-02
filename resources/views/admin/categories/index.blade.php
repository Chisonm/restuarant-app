@extends('admin.layouts.app')

@push('plugin-styles')
  <link href="{{ asset('admin-assets/assets/plugins/datatables-net/dataTables.bootstrap4.css') }}" rel="stylesheet" />
@endpush

@section('content')
<div>
    @livewire('categories')
</div>
@endsection
@push('plugin-scripts')
  <script src="{{ asset('admin-assets/assets/plugins/datatables-net/jquery.dataTables.js') }}"></script>
  <script src="{{ asset('admin-assets/assets/plugins/datatables-net-bs4/dataTables.bootstrap4.js') }}"></script>
@endpush

@push('custom-scripts')
  <script src="{{ asset('admin-assets/assets/js/data-table.js') }}"></script>
@endpush
