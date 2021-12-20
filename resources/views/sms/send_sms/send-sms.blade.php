@extends('layouts.sms')
@section('title', 'Send SMS')
@section('contents')
    <div class="dashboard-content-one">
        <!-- Breadcubs Area Start Here -->
        <div class="breadcrumbs-area">
            <h3>Library</h3>
            <ul>
                <li>
                    <a href="/dashboard">Home</a>
                </li>
                <li>Send SMS</li>
            </ul>
        </div>
        <!-- Breadcubs Area End Here -->
        <!-- Add New Book Area Start Here -->
        <div class="card height-auto">
            <div class="card-body">
                <div class="heading-layout1">
                    <div class="item-title">
                        <h3>Send SMS</h3>
                    </div>
                </div>
                {!! Form::open(['route' => 'send_sms.store']) !!}
                <div class="new-added-form">
                    <div class="row">
                        <div class="col-xl-12 col-lg-6 col-12 form-group">
                            <label>Customer Name *</label>
                            <input type="text" placeholder="" name="customer_name" required class="form-control">
                        </div>
                        <div class="col-xl-12 col-lg-6 col-12 form-group">
                            <label>Mobile Number *</label>
                            <input type="text" placeholder="" name="mobile_number" required class="form-control">
                        </div>
                        <div class="col-12 form-group mg-t-8 pd-0">
                            <button type="submit" id="send-button" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark float-right">Send</button>
                        </div>
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
@push('footer_scripts')
<script>

    {{--$('#send-button').click(function (){--}}
    {{--    $.ajax({--}}
    {{--        url: '{{ route('send_sms.store') }}',--}}
    {{--        type: 'post',--}}
    {{--        data: {_token:_token},--}}
    {{--        dataType: 'json',--}}
    {{--        loadSpinner: true,--}}
    {{--        success: function (response) {--}}

    {{--        }--}}
    {{--    });--}}
    {{--})--}}
</script>
@endpush
