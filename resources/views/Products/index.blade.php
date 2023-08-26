@extends('Layouts.app')
@section('main')
    <div class="container-fluid d-inline justify-content-center align-items-center p-1">
        <div class="container d-flex justify-content-end">
            <a href="products/create"><button class="btn btn-dark shadow mt-2">Add New Product</button></a>
        </div>
        <div class="container w-50 justify-content-center align-items-center mt-2">
            <h2 class="text-light text-center bg-dark rounded-2 p-2">All Products</h2>
        </div>
        <div class="container d-flex justify-content-start align-items-center mt-2" >
            <table class="table table-hover " style="border-top: #1a202c solid 1px">
                <thead>
                    <tr>
                        <th>Product No</th>
                        <th>Product Name</th>
                        <th>Product Image</th>
                        <th>Product Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $product)
                        <tr>
                            <td class="p-2">{{ $loop->index+1 }}</td>
                            <td class="p-2">{{ $product-> Product_Name }}</td><!-- Note: $product-> same as database column name -->
                            <td class="p-2">
                                <img src="products/{{ $product-> Product_Image }}" class="rounded-circle" width="60" height="60" alt="image">
                            </td>
                            <td class="p-4">
                                <a href="products/{{ $product->id}}/update" class="m-1 p-1"><button class="btn btn-primary w-auto"><i class="fa-solid fa-pen-nib fa-sm mx-1" style="color: white;"></i></button></a>
                                <a href="products/{{ $product->id}}/show" class="m-1 p-1"><button class="btn btn-success w-auto"><i class="fa-solid fa-eye fa-sm mx-1" style="color: white;"></i></button></a>
                                <form action="products/{{ $product->id}}/delete" class="m-1 p-1 d-inline" method="POST" >
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger w-auto" ><i class="fa-solid fa-trash fa-sm mx-1" style="color: white;"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="container d-flex">
            {{ $products->links() }}
        </div>
    </div>
@endsection
