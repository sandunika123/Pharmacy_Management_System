<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class ItemController extends Controller

{

    protected $item;

            public function __construct()
            {
            $this->item = new item();
        }

        public function showitemData() {
            // $items = Item::all(); // Retrieve items from the database
            // // return view('components.editItem', ['items' => $items]);
            // return view('components.editItem', compact('items'));

            dd( $this->item->all());

            $response['items']= $this->item->all();
            return view('components.editItem')->with($response);
        }


        public function deleteitem($id){
            $item=$this->item->find($id);
            $item->delete();
            return redirect()->back();

        }
        public function updateitem($id){
            $response['item']=$this->item->find($id);
            return view('updateItem')->with($response);

        }

    public function edititem(Request $request,$id){
        $item=$this->item->find($id);
        $item->update(array_merge($item->toArray(),$request->toArray()));
        return redirect('home');
    }

    public function saveItemData(Request $request){

        $request->validate([
            'name'=>['required'],
            'qty'=>['required'],
            'manufacturer'=>['required'],
            'phonei'=>['required', 'numeric', 'digits:10'],
            'description'=>['required'],
        ]);

        $this->item->create($request->all());
        return redirect()->back();

    }
}
