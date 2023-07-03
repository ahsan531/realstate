<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function showcustomer(){
        $customers = Customer::all();
      
        return view('customers.showcustomer', ['customers' => $customers]);



    }
    public function addcustomer(){

        $member_shio_no = $this->generateCustomerID();
        return view('customers.addcustomers',compact('member_shio_no'));

    }
    public function storecustomer(Request $request){
        $customers = new Customer();

        $customers->membership_no = $request->input('membership_no');
        $customers->husband_father_name = $request->input('f_h_name');
        $customers->cnic_expire = $request->input('cnicexpire');
        $customers->landline_no = $request->input('landline_no');
        $customers->local_address = $request->input('residential_address');
        $customers->email = $request->input('email');
        $customers->name = $request->input('name');
        $customers->cnic = $request->input('cnic');
        $customers->ntn = $request->input('ntn');
        $customers->mobile_no = $request->input('mobile_no');
        $customers->permanent_address = $request->input('permanent_address');
     

        $customers->save();

        if ($request->hasFile('imageUpload1')) {
            $image1 = $request->file('imageUpload1');
            $image1Name = $image1->getClientOriginalName();
            $image1->storeAs('uploads', $image1Name, 'public');
            $customers->customer_img = $image1Name;
        }
    
        if ($request->hasFile('imageUpload2')) {
            $image2 = $request->file('imageUpload2');
            $image2Name = $image2->getClientOriginalName();
            $image2->storeAs('uploads', $image2Name, 'public');
            $customers->customer_cnic_front = $image2Name;
        }
    
        if ($request->hasFile('imageUpload3')) {
            $image3 = $request->file('imageUpload3');
            $image3Name = $image3->getClientOriginalName();
            $image3->storeAs('uploads', $image3Name, 'public');
            $customers->customer_cnic_back = $image3Name;
        }
    
        // Save the updated model to the database
        $customers->save();

        // Optionally, you can redirect to a success page or perform any additional actions here
        return redirect('customers');


    }
    public function deletecustomers(Request $request){
        $customers = Customer::find($request->id);
        $customers->delete();

        return redirect('customers');


    }
    public function editcustomer($id){

        $customer = Customer::find($id);
      
        return view('customers/editcustomers',compact('customer'));

    }
    public function updatecustomer(Request $request){
        $customers = Customer::find($request->id);
        $customers->membership_no = $request->input('membership_no');
        $customers->husband_father_name = $request->input('f_h_name');
        $customers->cnic_expire = $request->input('cnicexpire');
        $customers->landline_no = $request->input('landline_no');
        $customers->local_address = $request->input('residential_address');
        $customers->email = $request->input('email');
        $customers->name = $request->input('name');
        $customers->cnic = $request->input('cnic');
        $customers->ntn = $request->input('ntn');
        $customers->mobile_no = $request->input('mobile_no');
        $customers->permanent_address = $request->input('permanent_address');
     

        $customers->save();

        if ($request->hasFile('imageUpload1')) {
            $image1 = $request->file('imageUpload1');
            $image1Name = $image1->getClientOriginalName();
            $image1->storeAs('uploads', $image1Name, 'public');
            $customers->customer_img = $image1Name;
        }
    
        if ($request->hasFile('imageUpload2')) {
            $image2 = $request->file('imageUpload2');
            $image2Name = $image2->getClientOriginalName();
            $image2->storeAs('uploads', $image2Name, 'public');
            $customers->customer_cnic_front = $image2Name;
        }
    
        if ($request->hasFile('imageUpload3')) {
            $image3 = $request->file('imageUpload3');
            $image3Name = $image3->getClientOriginalName();
            $image3->storeAs('uploads', $image3Name, 'public');
            $customers->customer_cnic_back = $image3Name;
        }
    
        // Save the updated model to the database
        $customers->save();

        // Optionally, you can redirect to a success page or perform any additional actions here
        return redirect('customers');



    }
    public function generateCustomerID()
    {
        $Customer = Customer::orderBY('id','desc')->first();
        if($Customer != null || $Customer != ""){
            $current_id = $Customer->id;
            $next_number = $current_id++;
            if(strlen($next_number) == 1){
                return "CBL-0000{$next_number}";
            }elseif(strlen($next_number) == 2){
                return "CBL-000{$next_number}";
            }elseif(strlen($next_number) == 3){
                return "CBL-00{$next_number}";
            }elseif(strlen($next_number) == 4){
                return "CBL-0{$next_number}";
            }else{
                return "CBL-{$next_number}";
            }
        }else{
            return "CBL-00001";
        }
    }

}
