@include('component.header')
<main class="app-main"> <!--begin::App Content Header-->
    <div class="app-content-header"> <!--begin::Container-->
        <div class="container-fluid"> <!--begin::Row-->
                    <div class="row">
                        <div class="col-sm-6">
                            <h3 class="mb-0">Products Details</h3>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-end">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Products Details
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
                <img src="{{ $item->image }}" alt="Product Image" width="400">
                <h2 class="mt-3">{{ $item->name }}</h2>
                <h5>Product ID: {{ $item->product_id }}</h5>
                <div class="d-flex gap-2"><h4>Price: ${{ $item->price }}</h4><h4>Stock: {{ $item->stock }}</h4></div>
                <p>{{ $item->description }}</p>
            </div> <!--end::Row--> <!--begin::Row-->
        </div> <!--end::Container-->
    </div> <!--end::App Content-->
</main>
@include('component.footer')
