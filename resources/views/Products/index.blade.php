<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel CRUD Operation</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
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
    <div class="container-fluid d-inline justify-content-center align-items-center p-3">
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
                            <td class="p-2">
                                <a href="products/{{ $product->id}}/update" class="m-1 p-1"><button class="btn btn-primary w-auto">Update</button></a>
                                <a href="products/{{ $product->id}}/delete" class="m-1 p-1"><button class="btn btn-danger w-auto">Delete</button></a>
                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
</body>
</html>
