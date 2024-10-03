<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\hello;
class UserController extends Controller
{

  public function create()
  {
      $url = url("/form");
      $title = "user Registration";
      $data = compact('url');
      return view('form')->with($data);
  }



 public function hello(){
  return view('form');
 }

   public function add(Request $request){
     
       $hello  = new  hello;
       $hello->name  = $request['user'];
       $hello->password  = $request['password'];
       $hello->save();
     if($hello){
          echo"data add!";
     }
   }


   public function view()  {
    $hello = hello::all();
    
    $data = compact('hello');
    return view('display')->with($data);
}

public function delete($id)
{
   hello::find($id)->delete();
    return redirect('/form/display');
}


// public function edit($id){

//   return $id;
// }



public function edit($id)
    {
        $hello = hello::find($id);
        if (is_null($hello)) {
            # code...
            return redirect('/form/display');
        } else {
            $title = "Update Customer";
            $url = url('/form/update') . "/" . $id;
            $data = compact('hello', 'url', 'title');
            return view('form')->with($data);
        }
    }



    public function update($id, Request $request)
    {
        $hello = hello::find($id);
        $hello->name = $request['user'];
        $hello->password = $request['password'];
       
        $hello->save();
        return redirect('form'); 
    }

}

