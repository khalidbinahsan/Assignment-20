@include('component.header')
<main class="app-main"> <!--begin::App Content Header-->
    <div class="app-content-header"> <!--begin::Container-->
        <div class="container-fluid"> <!--begin::Row-->
                    <div class="row">
                        <div class="col-sm-6">
                            <h3 class="mb-0">Create Product</h3>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-end">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Create Product
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
                <div class="card card-primary card-outline mb-4"> <!--begin::Header-->
                    <div class="card-header">
                        <div class="card-title">Insert details</div>
                    </div> <!--end::Header--> <!--begin::Form-->
                    <form> <!--begin::Body-->
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="name" class="form-label">Product Name</label>
                                <input type="text" class="form-control" id="name">
                            </div>
                            <div class="mb-3">
                                <label for="des" class="form-label">Product Description</label>
                                <textarea class="form-control" id="des"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="name" class="form-label">Product Name</label>
                                <input type="text" class="form-control" id="name" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="name" class="form-label">Product Name</label>
                                <input type="text" class="form-control" id="name" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="name" class="form-label">Product Name</label>
                                <input type="text" class="form-control" id="name" aria-describedby="emailHelp">
                            </div>
                        </div> <!--end::Body--> <!--begin::Footer-->
                        <div class="card-footer"> <button type="submit" class="btn btn-primary">Submit</button> </div> <!--end::Footer-->
                    </form> <!--end::Form-->
                </div> <!--end::Quick Example-->
            </div> <!--end::Row--> <!--begin::Row-->
        </div> <!--end::Container-->
    </div> <!--end::App Content-->
</main>
@include('component.footer')
