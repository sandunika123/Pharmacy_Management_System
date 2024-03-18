<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller

    {
        protected $customer;

            public function __construct(){
            $this->customer = new customer();
        }


        public function showcustomerData() {
            // $items = Item::all(); // Retrieve items from the database
            // // return view('components.editItem', ['items' => $items]);
            // return view('components.editItem', compact('items'));

            dd( $this->customer->all());

            $response['customers']= $this->customer->all();
            return view('components.editcustomer')->with($response);
        }

        public function saveData(Request $request){

            $request->validate([
                'fname'=>['required'],
                'lname'=>['required'],
                'address'=>['required'],
                'phone'=>['required', 'numeric', 'digits:10'],
                'email'=>['required', 'email', 'max:255'],
            ]);

            $this->customer->create($request->all());
            return redirect()->back();
        }
    }
