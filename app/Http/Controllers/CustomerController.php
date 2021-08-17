<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function home(){
        return view('index');
    }
    public function create(){
        return view('customer.create');
    }
    public function add_customer(Request $request){
        $data = $request->all();
        $validated = $request->validate([
            'email' => 'required|email',
            'customer_name' => 'required',
            'phone' => 'required|max:10',
            'gender' => 'required'
        ],
        [
            'admin_email.dns' => 'Vui lòng nhập đúng dịnh dạng!',
            'admin_email.required' => 'Vui lòng diền email!',
            'admin_password.required' => 'Vui lòng diền mật khẩu!',
            'password.min' => 'Mật khẩu ít nhất 8 kí tự!',
            'password.max' => 'Mật khẩu nhiều nhất 20 kí tự!'
        ] 
        );

             $customer = new Customer();
             $customer->customer_name = $data['customer_name'];
             $customer->gender = $data['gender'];
             $customer->phone = $data['phone'];
             $customer->email = $data['email'];
             $customer->save();
             return redirect()->back()->with('message','Thêm thành thành công');
    }
    public function list(){
        $all_customer = DB::table('tbl_customer')->paginate(1);
        return view('customer.list')->with('all_customer',$all_customer);
    }
    public function search(Request $request){

       
       $keywords = $request->keywords_submit;

       $search_customer = DB::table('tbl_customer')->where('customer_name','like','%'.$keywords.'%')->get();


       return view('customer.list')->with('all_customer',$search_customer);

   }
}
