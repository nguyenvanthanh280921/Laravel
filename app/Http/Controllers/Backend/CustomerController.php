<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

class CustomerController extends Controller
{
    public $customerModel;

    public function __construct(){ 
        $this->customerModel = new Customer();
    }

    public function validateEmail(Request $request){
        $request->validate([
            'cust_name' => 'required|min:20',
            'cust_age' => 'required|integer',
            'cust_birthday' => 'required|min:20',
            'cust_address' => 'required|min:20',
            'cust_phone' => 'required|min:20',
        ]);

    }

    public function index(){
        // $customer = new Customer();
        $data = $this->customerModel->all();
        return view('backend.customer.index', compact('data'));
    }
    public function add(){
        $data = [];
        return view('backend.customer.add',compact('data'));
    }
    public function edit($id){
        $customer = Customer::find($id);
        return view('backend.customer.edit',compact('customer'));
    }
    public function delete($id){
        $customer = User::findOrFail($id);
        $customer -> delete();
        return redirect('/customer');
    }

    public function save(Request $request){
        $id = $request->input('id');
        $cust_name = $request->input('cust_name');
        $cust_age = $request->input('cust_age');
        $cust_birthday = $request->input('cust_birthday');
        $cust_address = $request->input('cust_address');
        $cust_phone = $request->input('cust_phone');
        $customer = new Customer();
        if (!empty($id)){
            $customer = $customer->find($id);
            $customer->cust_name = $cust_name;
            $customer->cust_age = $cust_age;
            $customer->cust_birthday = $cust_birthday;
            $customer->cust_address = $cust_address;
            $customer->cust_phone = $cust_phone;
            $customer->id = $id;
            $customer->update();
        }else {
            $customer->cust_name = $cust_name;
            $customer->cust_age = $cust_age;
            $customer->cust_birthday = $cust_birthday;
            $customer->cust_address = $cust_address;
            $customer->cust_phone = $cust_phone;
            $customer->save();
        }
        return redirect('/customer');
    }
}
