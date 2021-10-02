@extends('admin.layouts.app')

@push('plugin-styles')
  <link href="{{ asset('admin-assets/assets/plugins/datatables-net/dataTables.bootstrap4.css') }}" rel="stylesheet" />
@endpush

@section('content')
<nav class="page-breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#">Products</a></li>
      <li class="breadcrumb-item active" aria-current="page">all products</li>
    </ol>
  </nav>

  <div class="row">
    <div class="col-md-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <div class="table-responsive">
            <table id="dataTableExample" class="table">
              <thead>
                <tr>
                  <th>Prod image</th>
                  <th>Product Name</th>
                  <th>Product Details</th>
                  <th>Price</th>
                  <th>Status</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                @forelse ($products as $product )
                    <tr>
                        <td><img src="{{ $product->product_image }}" alt="food" height="100" width="100" class="rounded"></td>
                        <td>{{ $product->product_name }}</td>
                        <td>{{ $product->product_details }}</td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->status }}</td>
                        <td>
                            <a href="#" class="btn btn-outline-primary btn-sm">Edit</a>
                            <a href="#" class="inline-block btn btn-outline-success btn-sm">view</a>
                            <a href="#" class="inline-block btn btn-outline-danger btn-sm">dalete</a>
                        </td>
                    </tr>
                @empty
                    <p>no product now</p>
                @endforelse
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
@push('plugin-scripts')
  <script src="{{ asset('admin-assets/assets/plugins/datatables-net/jquery.dataTables.js') }}"></script>
  <script src="{{ asset('admin-assets/assets/plugins/datatables-net-bs4/dataTables.bootstrap4.js') }}"></script>
@endpush

@push('custom-scripts')
  <script src="{{ asset('admin-assets/assets/js/data-table.js') }}"></script>
@endpush
