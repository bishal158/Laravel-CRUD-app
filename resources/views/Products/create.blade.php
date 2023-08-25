<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel CRUD Operation</title>
    <!--Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
<!--Navbar-->
    <nav class="navbar navbar-expand-lg bg-dark  ">
        <div class="container-fluid">
            <a class="navbar-brand text-white" href="#"><strong>CRUD</strong> OPERATION</a>
            <button class="navbar-toggler bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon bg-white"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active text-light" aria-current="page" href="/">Products</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container d-flex p-2 justify-content-center align-items-center gy-0 ">
        <h3 class="text-center p-2 bg-dark rounded-1 shadow  text-light">Add New Product</h3>
    </div>
    <div class="container gy-0">
        <div class="row d-flex justify-content-center align-items-center mt-5 p-3">
            <div class="col-md-12">
                <div class="container p-3 w-75 shadow rounded-2" style="border: 1px solid white">
                    <!--Add Product Form -->
                    <form method="POST" action="/products/store" enctype="multipart/form-data" multiple="">
                        @csrf
                        <!--Name of Product -->
                        <div class="mb-3">
                            <label for="product_name" class="form-label">Product Name</label>
                            <input type="text" class="form-control" id="product_name" name="product_name" placeholder="Name of the Product" value="{{ old('product_name') }}">
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
                            <textarea  class="form-control" id="product_description" name="product_description" placeholder="Product Details" >{{ old('product_description') }}</textarea>
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
                            <button type="submit" class="btn btn-dark shadow m-1 p-2">
                                <span class="g-1"><i class="fa-solid fa-plus fa-sm"></i>Add Product</span>
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
    <!-- Font Awesome JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js" integrity="sha512-uKQ39gEGiyUJl4AI6L+ekBdGKpGw4xJ55+xyJG7YFlJokPNYegn9KwQ3P8A7aFQAUtUsAQHep+d/lrGqrbPIDQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
</body>
</html>
