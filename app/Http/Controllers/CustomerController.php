<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Customer;


class CustomerController extends Controller
{
 
    
   public function create(){
      return view('form');
      // $customer=new Customer();
      // $customer->name='mayar';
      // $customer->email='mayar@gmail.com';
      // $customer->save();
      // return response('New Customer Added Succ');
   }
   public function store(Request $request){
      $customer=new Customer();
      $customer->name=$request->name;
      $customer->email=$request->email;
      $customer->save();
      return redirect()->route('home')->with('success','customer Added');
   }
   public function edit(string $id){
      $customer = Customer::findOrFail($id);
      return view('customers.update',['customer'=>$customer]);
   }
   public function update(Request $request, string $id){
      Customer::where('id',$id)->update([
         'name'=>$request->name,
         'email'=>$request->email
      ]);
      return redirect('home');
   }
   public function home(){
      $cust=Customer::all();
      return view('table',['customers' => $cust]);
      }
   public function show(string $id){
      $cust=Customer::findOrFail($id);
      return view('show',compact('cust'));
   }
   public function delete(string $id){
      Customer::findOrFail($id)->delete();
      return redirect('home');
   }
   public function deletecust(Request $request){
      $id=$request->id;
      Customer::where('id',$id)->delete();
      return redirect('home');
   }
}
