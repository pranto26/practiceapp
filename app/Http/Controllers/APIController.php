<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Customer;

class APIController extends Controller
{
    function booklist(){

        $data = Book::all();
         return response()->json($data);
    }

    function create (Request $req){
        $book = new Book;
        $book-> name = $req->name;
        $book-> price = $req->price;
        $book ->save();
    }

    function update(Request $req,$id){
        $data = Book::where('id',$id)->first();
        $data-> name = $req->name;
        $data-> price = $req->price;
        $data->update();

        return response()->json(
            [
                "msg"=>"Updated Successfully"
                       
            ]
        );
    }

    function search($id){
        $data = Book::where('id',$id)->first();
        return response()->json($data);
    }

        function delete($id){

        $book = Book:: find($id);
        $result=$book-> delete();

        if($result)
        {
            return ["result"=>"result has been deleted"];
        }

        else{
            return ["result"=>"delete operation has failed"];
        }
        return ["msg"=> "deleted"];
    }

    function file(Request $req){
        if($req->hasfile('file')){
            $orgName = $req->file->getClientOriginalName();
            $req->file->storeAs('public/pics',$orgName);
            return response()->json(["msg"=>$req->file->getClientOriginalName()]);
        }
        return response()->json(["msg"=>"No file"]);
    }
        
        
}

