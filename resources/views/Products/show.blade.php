@extends('Layouts.app')
    @section('main')
        <div class="container d-flex justify-content-center align-items-center mt-5">
            <div class="row justify-content-center align-items-center">
                <div class="col-md-8">
                    <div class="container">
                        <h1 class="text-center fw-bold">Product Details</h1>
                        <hr>
                    </div>
                    <div class="container mt-2">
                        <h3 class="text-center text-dark">{{ $products->Product_Name }}</h3>
                    </div>
                    <div class="card shadow p-2">
                        <p class="text-dark "><b>Product Name:</b> {{ $products->Product_Name }}</p>
                        <p class="text-dark ">
                            <b>Product Description:</b> {{ $products->Product_Description }}
                        </p>
                        <p class="text-dark "><b>Product Image:</b></p>
                        <img src="/products/{{ $products->Product_Image }}" alt="{{ $products->Product_Name }} " width="100%" height="80%" class="img-fluid rounded">
                    </div>
                </div>
            </div>
        </div>
    @endsection
