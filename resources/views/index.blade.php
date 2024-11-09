@include('component.header')
<main class="app-main"> <!--begin::App Content Header-->
    <div class="app-content-header"> <!--begin::Container-->
        <div class="container-fluid"> <!--begin::Row-->
                    <div class="row">
                        <div class="col-sm-6">
                            <h3 class="mb-0">Products</h3>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-end">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Products
                                </li>
                            </ol>
                        </div>
                    </div> <!--end::Row-->
                </div> <!--end::Container-->
            </div> <!--end::App Content Header--> <!--begin::App Content-->
<div class="app-content"> <!--begin::Container-->
    <div class="container-fluid"> <!--begin::Row-->
        <div class="row"> <!--begin::Col-->
            <div class="col-12"> <!--begin::Small Box Widget 1-->
                <div class="card mb-4">
                    <div class="card-header">
                        <h3 class="card-title">All products</h3>
                        <div class="card-tools">
                            <ul class="pagination pagination-sm float-end">
                                <li class="page-item"> <a class="page-link" href="#">&laquo;</a> </li>
                                <li class="page-item"> <a class="page-link" href="#">1</a> </li>
                                <li class="page-item"> <a class="page-link" href="#">2</a> </li>
                                <li class="page-item"> <a class="page-link" href="#">3</a> </li>
                                <li class="page-item"> <a class="page-link" href="#">&raquo;</a> </li>
                            </ul>
                        </div>
                    </div> <!-- /.card-header -->
                    <div class="card-body p-0">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Product ID</th>
                                    <th>Price</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($products as $product)
                                <tr class="align-middle">
                                    <td><img src="{{ $product['image'] }}" width="100"></td>
                                    <td>{{ $product['name'] }}</td>
                                    <td>{{ $product['product_id'] }}</td>
                                    <td>{{ $product['price'] }}</td>
                                    <td>
                                        <a href="#" class="btn btn-info">View</a>
                                        <a href="#" class="btn btn-primary">Edit</a>
                                        <a href="#" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div> <!-- /.card-body -->
                    </div>
                </div> <!--end::Col--> <!--end::Col-->
            </div> <!--end::Row--> <!--begin::Row-->
        </div> <!--end::Container-->
    </div> <!--end::App Content-->
</main>
@include('component.footer')
