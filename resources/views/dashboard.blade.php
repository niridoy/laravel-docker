@extends('layouts.master')

@section('content')

  <!-- START PAGE CONTENT-->
  <div class="page-content fade-in-up">
    <div class="row">
        <div class="col-lg-3 col-md-6">
            <div class="ibox bg-success color-white widget-stat">
                <div class="ibox-body">
                    <h2 class="m-b-5 font-strong">0</h2>
                    <div class="m-b-5">TOTAL INVOICE</div><i class="ti-shopping-cart widget-stat-icon"></i>
                    {{-- <div><i class="fa fa-level-up m-r-5"></i><small>25% higher</small></div> --}}
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="ibox bg-info color-white widget-stat">
                <div class="ibox-body">
                    <h2 class="m-b-5 font-strong">0</h2>
                    <div class="m-b-5">TOTAL PAID</div><i class="ti-bar-chart widget-stat-icon"></i>
                    {{-- <div><i class="fa fa-level-up m-r-5"></i><small>17% higher</small></div> --}}
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="ibox bg-warning color-white widget-stat">
                <div class="ibox-body">
                    <h2 class="m-b-5 font-strong">0</h2>
                    <div class="m-b-5">TOTAL UNPAID</div><i class="fa fa-money widget-stat-icon"></i>
                    {{-- <div><i class="fa fa-level-up m-r-5"></i><small>22% higher</small></div> --}}
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="ibox bg-danger color-white widget-stat">
                <div class="ibox-body">
                    <h2 class="m-b-5 font-strong">0</h2>
                    <div class="m-b-5">USERS</div><i class="ti-user widget-stat-icon"></i>
                    {{-- <div><i class="fa fa-level-down m-r-5"></i><small>-12% Lower</small></div> --}}
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END PAGE CONTENT-->

@stop

