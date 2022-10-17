<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
class CategoryController extends Controller
{
    public function index(){
        return view('category.create');
    }
    public function store(Request $request){
         $request->validate([
             'title' =>'required',
         ]);
         $data=new Category();
         $data->title=$request->title;
         $data->save();
    return redirect()->route('admin.category.table')->with('msg',"Data  Added successfully!");
        }
        public function table(){
            $data=Category::paginate(3);
            return view ('category.table',compact('data'));
        }
        public function edit($id){
            $data=Category::find($id);
            return view('category.edit',compact('data'));

        }
        public function update(Request $request,$id){
            $request->validate([
                'title' =>'required',
            ]);
            $data=Category::find($id);
            $data->title=$request->title;
            $data->save();
            return redirect()->route('admin.category.table')->with('msg',"Data  Updated successfully!");;
        }
        public function delete($id){
        $data=Category::find($id);
        $data->delete();
        return redirect()->route('admin.category.table')->with('msg',"Data  Deleted successfully!");;

        }

}
