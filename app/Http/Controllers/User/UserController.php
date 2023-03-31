<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\CustomerBill;
use Illuminate\Http\Request;
use Auth;
use Toastr;
use PDF;
use App\Models\User;
use Illuminate\Support\Carbon;
use Hash;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $data['BillList'] = [];
        return view('dashboard',$data);
    }
    
    public function profile(User $User)
    {
        $data['User'] = User::where('id', Auth::user()->id)->first();
        return view('profile', $data);
    }

    public function update(Request $request){

        $this->validate($request, [
            'first_name'    => ['required', 'string', 'max:255'],
            'last_name'     => ['required', 'string', 'max:255'],
            'customer_id'   => ['required', 'string', 'max:255','unique:users,customer_id,'.Auth::user()->id],
            'address'       => ['required', 'string', 'max:255'],
            'start_date'    => ['required', 'date', 'max:255'],
            'email'         => ['required', 'string', 'email', 'max:255', 'unique:users,email,'.Auth::user()->id],
            'mobile'        => ['required', 'string', 'max:255', 'unique:users,mobile,'.Auth::user()->id],
            'password'      => ['sometimes', 'nullable' , 'min:6', 'confirmed']
        ]);

        User::find(Auth::user()->id)->update([
            'first_name'    => $request['first_name'],
            'last_name'     => $request['last_name'],
            'customer_id'   => $request['customer_id'],
            'address'       => $request['address'],
            'email'         => $request['email'],
            'mobile'        => $request['mobile'],
            'start_date'    => Carbon::parse($request['start_date'])->format('Y-m-d'),
            'status'        => $request['status']
        ]);

        if($request['password']){
            User::find(Auth::user()->id)->update([
                'password'      => Hash::make($request['password']),
            ]);
        }

        Toastr::success('Profile has been updated succesfully!', 'Title', ["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }

}
