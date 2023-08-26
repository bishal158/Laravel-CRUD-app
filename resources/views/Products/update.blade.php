@extends('Layouts.app')
@section('main')
    <div class="container d-flex p-2 justify-content-center align-items-center gy-0 ">
        <h3 class="text-center p-2 bg-dark rounded-1 shadow  text-light">Update Product</h3>
    </div>

    <div class="container gy-0">
        <div class="row d-flex justify-content-center align-items-center mt-5 p-3">
            <div class="col-md-12">
                <div class="container p-3 w-75 shadow rounded-2" style="border: 1px solid white">
                    <!--Add Product Form -->
                    <h3 class="text-center text-dark">Product Update #{{ $products->Product_Name }}</h3>
                    <form method="POST" action="/products/{{ $products->id }}/updated" enctype="multipart/form-data" multiple="">
                        @csrf
                        @method('PUT')
                        <!--Name of Product -->
                        <div class="mb-3">
                            <label for="product_name" class="form-label">Product Name</label>
                            <input type="text" class="form-control" id="product_name" name="product_name" placeholder="Name of the Product" value="{{ old('product_name',$products->Product_Name) }}">
                            @if($errors->has('product_name'))
                                <div class="alert alert-danger mt-2"  role="alert">
                                    <span>
                                        <i class="fa-solid fa-circle-exclamation fa-fade mx-1"></i>{{$errors->first('product_name')}}
                                    </span>
                                </div>
                            @endif
                        </div>
                        <!--Details of Product -->
                        <div class="mb-3">
                            <label for="product_description" class="form-label">Description</label>
                            <textarea  class="form-control" id="product_description" name="product_description" placeholder="Product Details" rows="10" >{{ old('product_description',$products->Product_Description) }}</textarea>
                            @if($errors->has('product_description'))
                                <div class="alert alert-danger mt-2" role="alert">
                                    <span>
                                        <i class="fa-solid fa-circle-exclamation fa-fade mx-1"></i>{{$errors->first('product_description')}}
                                    </span>
                                </div>
                            @endif
                        </div>
                        <!--Upload Image -->
                        <div class="mb-3">
                            <label for="product_image" class="form-label">Product Image</label>
                            <input class="form-control" type="file" id="product_image" name="product_image" placeholder="Upload Product Image" value="{{ old('product_image') }}">
                            @if($errors->has('product_image'))
                                <div class="alert alert-danger mt-2 " role="alert">
                                    <span>
                                        <i class="fa-solid fa-circle-exclamation fa-fade mx-1"></i>{{ $errors->first('product_image') }}
                                    </span>
                                </div>
                            @endif
                        </div>
                        <!--Button-->
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary shadow m-1 p-2">
                                <span class="g-1"><i class="fa-solid fa-pen fa-sm mx-2" style="color: #e4e7ee;"></i>Update Product</span>
                            </button>
                        </div>
                    </form>
                    @if( $message = Session::get('success') )
                        <div class="alert alert-success mt-2 alert-dismissible " role="alert"  >
                            <span>
                                <i class="fa-solid fa-circle-check fa-flip fa-lg mx-2" style="color: #128224;"></i><strong>{{ $message }}</strong>
                            </span>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
