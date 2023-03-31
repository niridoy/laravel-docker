<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\CustomerBill;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;

class CommonController extends Controller
{
    public function billPay(Request $request)
    {
        CustomerBill::where('id', $request->user_id)->update(['is_paid' => 1 ]);
        Toastr::success('Bill has been paid succesfully!', 'Title', ["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }
}
