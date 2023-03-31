@extends('layouts.master')

@push('styles')

@endpush

@section('content')

<div class="page-heading">
    <h1 class="page-title">User</h1>
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="index.html"><i class="la la-home font-20"></i></a>
        </li>
        <li class="breadcrumb-item">User Manage</li>
    </ol>
</div>

<div class="page-content fade-in-up">
    <div class="row">
        <div class="col-md-12">

            <div class="ibox">
                <div class="ibox-head">
                    <div class="ibox-title">Update</div>
                    <div class="ibox-tools">
                        <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                        <a class="fullscreen-link"><i class="fa fa-expand"></i></a>
                    </div>
                </div>
                <div class="ibox-body">
                    <form class="form-horizontal" action="{{ route('admin.users.update',$User->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                        <div class="row">

                            <div class="form-group col-md-6 row  @error('first_name') has-error @enderror ">
                                <label class="col-sm-4 col-form-label">First Name</label>
                                <div class="col-sm-8">
                                    <input class="form-control" type="text" name="first_name" value="{{ old('first_name',$User->first_name) }}"  placeholder="Enter First Name" >
                                    @error('first_name')
                                    <span class="help-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror

                                </div>
                            </div>


                            <div class="form-group col-md-6 row  @error('last_name') has-error @enderror ">
                                <label class="col-sm-4 col-form-label">Last Name</label>
                                <div class="col-sm-8">
                                    <input class="form-control" type="text" name="last_name" value="{{ old('last_name',$User->last_name) }}"  placeholder="Enter Last Name" >
                                    @error('last_name')
                                    <span class="help-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror

                                </div>
                            </div>


                            <div class="form-group col-md-6 row  @error('email') has-error @enderror ">
                                <label class="col-sm-4 col-form-label">Email </label>
                                <div class="col-sm-8">
                                    <input class="form-control" type="text" name="email" value="{{ old('email',$User->email) }}" placeholder="Enter Email">
                                    @error('email')
                                    <span class="help-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror

                                </div>
                            </div>


                            <div class="form-group col-md-6 row  @error('mobile') has-error @enderror ">
                                <label class="col-sm-4 col-form-label">Mobile </label>
                                <div class="col-sm-8">
                                    <input class="form-control" type="text" name="mobile" value="{{ old('mobile',$User->mobile) }}" placeholder="Enter Mobile">
                                    @error('mobile')
                                    <span class="help-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror

                                </div>
                            </div>

                            <div class="form-group col-md-6 row  @error('address') has-error @enderror ">
                                <label class="col-sm-4 col-form-label">Address </label>
                                <div class="col-sm-8">
                                    <input class="form-control" type="text" name="address" value="{{ old('address',$User->address) }}" placeholder="Enter Address">
                                    @error('address')
                                    <span class="help-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror

                                </div>
                            </div>

                            <div class="col-md-6"></div>

                            <div class="form-group col-md-6 row  @error('start_date') has-error @enderror ">
                                <label class="col-sm-4 col-form-label">Start Date </label>
                                <div class="col-sm-8">
                                    <input class="form-control date" type="text" name="start_date" value="{{ old('start_date',Carbon\Carbon::parse($User->start_date)->format('m/d/Y')) }}" placeholder="Enter Start Date">
                                    @error('start_date')
                                    <span class="help-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror

                                </div>
                            </div>

                            <div class="form-group col-md-6 row  @error('building_no') has-error @enderror ">
                                <label class="col-sm-4 col-form-label">Building Number </label>
                                <div class="col-sm-8">
                                    <input class="form-control" type="text" name="building_no" value="{{ old('building_no',$User->building_no) }}" placeholder="Enter Building Number">
                                    @error('building_no')
                                    <span class="help-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror

                                </div>
                            </div>

                            <div class="form-group col-md-6 row  @error('customer_id') has-error @enderror ">
                                <label class="col-sm-4 col-form-label">Customer ID </label>
                                <div class="col-sm-8">
                                    <input class="form-control" type="text" name="customer_id" value="{{ old('customer_id',$User->customer_id) }}" placeholder="Enter Customer ID">
                                    @error('customer_id')
                                    <span class="help-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror

                                </div>
                            </div>

                            <div class="form-group col-md-6 row  @error('status') has-error @enderror">
                                <label class="col-sm-4 col-form-label">Status</label>
                                <div class="col-sm-8">
                                        @if ($User->status == 1)
                                            <label class="ui-radio ui-radio-inline">
                                            <input type="radio" name="status" checked="true" value="1">
                                            <span class="input-span"></span>Active</label>
                                            <label class="ui-radio ui-radio-inline">
                                            <input type="radio" name="status" value="0">
                                            <span class="input-span"></span>Deactivate</label>
                                        @else
                                            <label class="ui-radio ui-radio-inline">
                                            <input type="radio" name="status" value="1">
                                            <span class="input-span"></span>Active</label>
                                            <label class="ui-radio ui-radio-inline">
                                            <input type="radio" name="status" checked="true" value="0">
                                            <span class="input-span"></span>Deactivate</label>
                                        @endif


                                        @error('status')
                                        <span class="help-block" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                </div>
                            </div>


                            <div class="form-group col-md-6 row  @error('password') has-error @enderror ">
                                <label class="col-sm-4 col-form-label">Password</label>
                                <div class="col-sm-8">
                                    <input class="form-control" type="text" name="password">
                                    @error('password')
                                    <span class="help-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror

                                </div>
                            </div>

                            <div class="form-group col-md-6 row  @error('password_confirmation') has-error @enderror ">
                                <label class="col-sm-4 col-form-label">Confirm Password</label>
                                <div class="col-sm-8">
                                    <input class="form-control " type="text" name="password_confirmation">
                                    @error('password_confirmation')
                                    <span class="help-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror

                                </div>
                            </div>

                        </div>

                        <div class="form-group row justify-content-md-center">
                            <div class="col-sm-2">
                                <button class="btn btn-warning btn-block pointer" type="submit">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>



        </div>
    </div>
</div>

@stop

@push('scripts')
    <script>
        $('.date').datepicker({ autoclose: true });
    </script>
@endpush
