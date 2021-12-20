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
                <form class="new-added-form">
                    <div class="row">
                        <div class="col-xl-12 col-lg-6 col-12 form-group">
                            <label>Customer Name *</label>
                            <input type="text" placeholder="" class="form-control">
                        </div>
                        <div class="col-xl-12 col-lg-6 col-12 form-group">
                            <label>Mobile Number *</label>
                            <input type="text" placeholder="" class="form-control">
                        </div>
                        </div>
                        <div class="col-12 form-group mg-t-8 pd-0">
                            <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark float-right">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
