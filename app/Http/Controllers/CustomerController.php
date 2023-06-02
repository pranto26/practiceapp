<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Product;

class CustomerController extends Controller
{
    function getone(){
      return Customer:: find(1)->getSeller;
    }

    function getmany(){
        return Customer::find(1)->getProducts;
      }
}
