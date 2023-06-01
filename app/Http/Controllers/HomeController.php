<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Book;

class HomeController extends Controller
{
    
    function welcome(){
        return view("public.welcomepage");

}
function booklist(){
    $data = Book::all();
    return view('booklist',['books'=>$data]);
}

function addbook(){
   
    // $book = new Book;
    // $book-> name = $req->name;
    // $book-> price = $req->price;
    // $book ->save();
    return view('addbook');

}

function addbooksubmit(Request $req){
    $book = new Book;
    $book-> name = $req->name;
    $book-> price = $req->price;
    $book ->save();
}

function deletebook ($id){
    $data = Book:: find($id);
    $data-> delete();
    return view ('booklist');
}

}
