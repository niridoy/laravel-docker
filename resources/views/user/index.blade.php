@extends('layouts.master')

@push('styles')

@endpush

@section('content')

<div class="page-heading">
    <h1 class="page-title">User</h1>
<a class="btn btn-info float-right" href="{{ route('admin.users.create') }}" > <i class="fa fa-plus"></i> Create</a>
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
                    <div class="ibox-title">Create</div>
                    <div class="ibox-tools">
                        <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                        <a class="fullscreen-link"><i class="fa fa-expand"></i></a>
                    </div>
                </div>
                <div class="ibox-body">

                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Mobile</th>
                                    <th>Customer ID</th>
                                    <th>Start Date</th>
                                    <th>BuildingNo</th>
                                    <th class="text-center">Reg Status</th>
                                    <th class="text-center">Status</th>
                                    <th class="text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($UserList as $User)
                                <tr>
                                    <td>{{ $User->id }}</td>
                                    <td >{{ $User->first_name  }} {{ $User->last_name  }}</td>
                                    <td >{{ $User->email  }}</td>
                                    <td >{{ $User->mobile  }}</td>
                                    <td >{{ $User->customer_id  }}</td>
                                    <td >{{ Carbon\Carbon::parse($User->start_date)->format("m-d-Y")  }}</td>
                                    <td >{{ $User->building_no  }}</td>
                                    <td >{{ $User->mobile  }}</td>
                                    <td class="text-center" >{{ $User->is_self_reg ? "Self" : "Admin" }}</td>
                                    <td class="text-center">
                                        @if ($User->status)
                                            <span class="badge badge-success">Active</span>
                                        @else
                                            <span class="badge badge-danger">Deactive</span>
                                        @endif
                                    </td>
                                    <td class="text-center">
                                    <a href="{{ route('admin.users.edit', $User->id)}}" class="btn btn-default btn-xs m-r-5" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-pencil font-14"></i></a>
                                    <form action="{{ route('admin.users.destroy',$User->id) }}" method="post" class="d-inline-block">
                                        <button class="btn btn-default btn-xs" data-toggle="tooltip" type="submit" data-original-title="Delete"><i class="fa fa-trash font-14"></i></button>
                                        <input type="hidden" name="_method" value="delete" />
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    </form>
                                    </td>
                                </tr>

                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>



        </div>
    </div>
</div>

@stop

@push('scripts')
@endpush
