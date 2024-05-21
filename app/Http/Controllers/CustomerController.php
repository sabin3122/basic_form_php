<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customers;

class CustomerController extends Controller
{
    public function index(){
        return view('customers');
    }

    public function register(request $request){
        //form validation
        $validatedData = $request->validate([
            'name' => 'required|string',
            'email'=> 'required|email',
            'password'=>'required|confirmed',
            'password_confirmation'=>'required',
            'state'=>'required',
            'city'=>'required',
            'gender'=>'required',
            'dob'=>'required',
        ]);

       

        //insert query
        $customers = new Customers;
        $customers->name = $request['name'];
        $customers->email = $request['email'];
        $customers->password = md5($request['password']);
        $customers->state = $request['state'];
        $customers->city = $request['city'];
        $customers->gender = $request['gender'];
        $customers->dob = $request['dob'];
        $customers->save();

        return redirect('/customer/view');

    }

    public function view(){
        $cust= Customers::all();
        $data= compact('cust');
        return view('customer-view')->with($data);


    }

    public function delete($id){
       $customer= Customers::find($id);
       if(!is_null($customer)){
        $customer->delete();
       }
        return redirect('customer/view');
        
    }public function edit($id){

        $customer = Customers::find($id);
        if(is_null($customer)){
            return redirect('customer/view');
        }
        else{
            $url=()l
            $data= compact('customer');
            return view('customer/view')->with($data);
        }
    }


}

