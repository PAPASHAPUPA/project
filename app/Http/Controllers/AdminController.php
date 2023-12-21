<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\theatrs;

use App\Models\news;

class AdminController extends Controller
{
    public function admin_afisha() {
        $data=theatrs::all();
        return view ("admin_afisha", ['applications'=>$data]);
    } 
    
    public function create_item_afisha(Request $request) {
        $request->validate([
            'title'=>'required', 
            'date'=>'required', 
            'price'=>'required|numeric',  
            'image'=>'required' 
        ],[
            "title.required"=>"Поле обязательно для заполнения",
            "date.required"=>"Поле обязательно для заполнения",
            "image.required"=>"Поле обязательно для заполнения",
        ]);

        $new = theatrs::create([
            "title"=>$request->title,
            "price"=>$request->price,
            "date"=>$request->date,
            "image"=>$request->image,
        ]);
        
        return redirect("/admin_afisha");
    }

    public function admin_update_afisha($id) {
        $application_info = theatrs::findOrFail($id);

        return view("update_afisha", ["update_afisha"=> $application_info]);
    }

    public function update_afisha(Request $request_update, $id){



        $request_update->validate([
            'title'=>'required', 
            'date'=>'required', 
            'price'=>'required|numeric',  
            'image'=>'required' 
        ], [
            "title.required"=>"Поле обязательно для заполнения",
            "date.required"=>"Поле обязательно для заполнения",
            "price.required"=>"Поле обязательно для заполнения",
            "image.required"=>"Поле обязательно для заполнения",
            "price.numeric"=>"required",
        ]);
        $application_info = theatrs::find($id);
        $application_info ->title = $request_update->input('title');
        $application_info ->date = $request_update->input('date');
        $application_info ->price = $request_update->input('price');
        $application_info ->image = $request_update->input('image');
        $application_info->update();
        return redirect("/admin_afisha");
    }

    public function delete_afisha($id) {
        $application_info = theatrs::find($id);
        $application_info->delete();
        return redirect ("/admin_afisha");
    }




    public function admin_news() {
        $data=news::all();
        return view ("admin_news", ['applications'=>$data]);
    } 
    
    public function create_item_news(Request $request) {
        $request->validate([ 
            'date'=>'required',  
            'image'=>'required',
            'description'=>'required',
        ],[
            "date.required"=>"Поле обязательно для заполнения",
            "image.required"=>"Поле обязательно для заполнения",
            "description.required"=>"Поле обязательно для заполнения",
        ]);

        $new = news::create([
            "date"=>$request->date,
            "image"=>$request->image,
            "description"=>$request->description
        ]);
        
        return redirect("/admin_news");
    }

    public function admin_update_news($id) {
        $application_info = news::findOrFail($id);

        return view("update_news", ["update_news"=> $application_info]);
    }

    public function update_news(Request $request_update, $id){



        $request_update->validate([
            'date'=>'required',   
            'image'=>'required', 
            'description'=>'required', 
        ], [
            "date.required"=>"Поле обязательно для заполнения",
            "price.required"=>"Поле обязательно для заполнения",
            "description.required"=>"Поле обязательно для заполнения",
        ]);
        $application_info = news::find($id);
        $application_info ->date = $request_update->input('date');
        $application_info ->image = $request_update->input('image');
        $application_info ->description = $request_update->input('description');
        $application_info->update();
        return redirect("/admin_news");
    }

    public function delete_news($id) {
        $application_info = news::find($id);
        $application_info->delete();
        return redirect ("/admin_news");
    }
}


