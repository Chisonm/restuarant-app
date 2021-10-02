@extends('admin.layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
            <div class="card-title">Add Food</div>
                <form action="{{ route('store') }}" method="POST" class="forms-sample" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="product_name">Product Name</label>
                        <input type="text" class="form-control @error('product_name') is-invalid @enderror" value="{{ old('product_name') }}"  id="product_name" autocomplete="off"
                            placeholder="food name" name="product_name">
                            @error('product_name')
                              <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                    </div>
                    <div class="form-group">
                        <label for="product_details">Product Details</label>
                        <input type="text" class="form-control @error('product_details') is-invalid @enderror" value="{{ old('product_details') }}" id="product_details" autocomplete="off"
                            placeholder="food Details" name="product_details">
                            @error('product_details')
                              <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                    </div>
                    <div class="form-group">
                        <label for="product_description">Product Description</label>
                        <textarea name="product_description" id="product_description" cols="5" rows="5" class="form-control @error('product_description') is-invalid @enderror">
                            {{ old('product_description') }}
                        </textarea>
                        @error('product_description')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="price">Product Price</label>
                        <input type="text" name="price"  class="form-control @error('price') is-invalid @enderror"  value="{{ old('price') }}" id="price" autocomplete="off"
                            placeholder="food Price">
                            @error('price')
                              <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                    </div>
                    <div class="form-group">
                        <label for="category_id">Product Category</label>
                        <select class="form-control" name="category_id" id="category_id">
                            @foreach ($productCategory as $category)
                                <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="product_image">Product Image</label>
                        <input type="file" name="product_image"  class="form-control @error('product_image') is-invalid @enderror" id="product_image" autocomplete="off">
                            @error('product_image')
                              <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                    </div>
                    <button type="submit" class="float-right mr-2 btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
