<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Item;


class HomeController extends Controller
{

    protected $item;

    public function __construct(){
        $this->item = new item();
    }

    public function index()
    {

        if(Auth::id())
        {
            $position=Auth()->user()->position;

            $response['items']= $this->item->all();
            return view('dashboard')->with($response);

            // if($position=='Owner')
            // {
            //     $response['items']= $this->item->all();
            //     return view('dashboard')->with($response);
            // }
            // else
            // {
            //     $response['items']= $this->item->all();
            //     return view('components.editItem')->with($response);

            //     //return view('components.editItem');
            // }
        }
    }
}
