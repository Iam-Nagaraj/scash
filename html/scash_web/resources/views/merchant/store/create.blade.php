@extends('layout/main')

@section('title', 'Store Create')

@section('content')

<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0">Store Create</h1>
            <!-- <a
                href="#"
                class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"
                ><i class="fas fa-download fa-sm text-white-50"></i> Generate
                Report</a
              > -->
    </div>

    <!-- Content Row -->
    <div class="form_card merchant_form card shadow mb-4 p-5">
        <div class="row">
            <div class="col-md-12">
                <h3>Store</h3>
                <form id="cashback-form" method="POST" action="{{route('merchant.store.store')}}" enctype="multipart/form-data">
					@csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group input-group-outline mt-3" id="imageInput">
                                <label for="image" class="form-label">Branch ID</label>
                                <input class="form-control" name="branch_id" type="text" value="">
                                <strong class="text-danger is-invalid" id="branch_id"></strong>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group input-group-outline mt-3" id="imageInput">
                                <label for="image" class="form-label">Branch Name</label>
                                <input class="form-control" name="name" type="text" value="" >
                                <strong class="text-danger is-invalid" id="name"></strong>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group input-group-outline mt-3" id="imageInput">
                                <label for="image" class="form-label">Email</label>
                                <input class="form-control" name="email" type="text" value="">
                                <strong class="text-danger is-invalid" id="email"></strong>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group input-group-outline mt-3" id="imageInput">
                                <label for="image" class="form-label">Phone</label>
                                <input name="country_code" type="hidden" value="+1" >
                                <input class="form-control" name="phone" type="text" value="" >
                                <strong class="text-danger is-invalid" id="phone"></strong>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group input-group-outline mt-3" id="imageInput">
                                <label for="image" class="form-label">City</label>
                                <input class="form-control" name="city" id="city" readonly type="text" value="" >
                                <strong class="text-danger is-invalid" id="city"></strong>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group input-group-outline mt-3" id="imageInput">
                                <label for="image" class="form-label">State</label>
                                <input class="form-control" name="state" type="text" readonly id="state_long_name" >
                                <strong class="text-danger is-invalid" id="state"></strong>
                            </div>
                        </div>

                        <input name="country" id="country" readonly type="hidden" >
                        <input name="latitude" id="latitude" readonly type="hidden" >
                        <input name="longitude" id="longitude" readonly type="hidden" >
                        
                        <div class="col-md-6">
                            <div class="form-group input-group-outline mt-3" id="imageInput">
                                <label for="image" class="form-label">Address</label>
                                <input class="form-control" name="address" type="text" id="myAddress" value="" >
                                <strong class="text-danger is-invalid" id="address"></strong>
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <button type="submit">Save Changes</button>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection

@push('style')

@endpush

@push('js')
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&key=AIzaSyC63pR8Sg_IqtWOjBHE-G-ZXs-xTCdihjc"></script>
<script src="{{ asset('assets') }}/js/admin/store.js"></script>
<script>
	var cashback_datatable_url = "{{ route('merchant.store.table') }}";
	var cashback_status_change_url = "{{ route('merchant.store.status.change') }}";

</script>
<script src="{{ asset('assets') }}/js/auth/register-address-google-location.js"></script>

@endpush