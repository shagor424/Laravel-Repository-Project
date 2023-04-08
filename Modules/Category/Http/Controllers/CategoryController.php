<?php
namespace Modules\Category\Http\Controllers;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Category\Providers\CategoryServiceProvider;
use Modules\Category\Entities\Category;
use Modules\Category\Repositories\CategoryRepositories;
use Validator;

class CategoryController extends Controller
{
protected $cat;
public function __construct(CategoryRepositories $category){
$this->cat = $category;
}

public function index()
{
$categories= $this->cat->get_all_data();

return view('category::index',compact('categories'));
}
// public function index()
// {
//     $categories= Category::orderBy('category_name','ASC')->get();
//        if($categories->isEmpty()){
//         return response()->json(['message' => 'Data Not Found!!', 'status' => 0]);
//        }else{
//      return response()->json($categories);
// }
// }


public function create()
{
return view('category::create');
}
/**
* Store a newly created resource in storage.
* @param Request $request
* @return Renderable
*/
public function store(Request $request)
{

// $validator=Validator::make($request->all(),[
//         'category_name' =>'required'
//     ]);
// {
//     $category = new Category();
//     $category->description = $request->category_name;
//     $category->category_code = $request->catgory_code;
//     $category->parent_category = $request->parent_category;
//     $category->description = $request->description;
//     $category->save();
//     return redirect()->route('view.category')->with('success','Category Created Successfully');
// }
$request->validate([
'category_name' => 'required',
'description' => 'required',
'parent_category' => 'required',
'category_code' => 'required',
]);
// $category = new Category();
// $category->category_name = $request->category_name;
// $category->category_code = $request->category_code;
// $category->parent_category = $request->parent_category;
// $category->description = $request->description;
// $category->save();
$this->cat->data_store($request->all());
return redirect()->route('view.category')->with('success','Category Created Successfully');
}
/**
* Show the specified resource.
* @param int $id
* @return Renderable
*/
public function show($id)
// {
//     $category= Category::where('id',$id)->first();
//     return view('category::show',compact('category'));
// }
{
$category= Category::where('id',$id)->first();
if($category==false){
return response()->json(['message' => 'Data Not Found!!', 'status' => 0]);
}else{
return view('category::show',compact('category'));
// return response()->json($category);
}
}
/**
* Show the form for editing the specified resource.
* @param int $id
* @return Renderable
*/
public function edit($id)
{
$category= $this->cat->get_single_data($id);
return view('category::edit',compact('category'));
}
/**
* Update the specified resource in storage.
* @param Request $request
* @param int $id
* @return Renderable
*/
public function update($id,Request $request )
// {
//     $category= Category::where('id',$id)->first();
//     $category->description = $request->category_name;
//     $category->category_code = $request->catgory_code;
//     $category->parent_category = $request->parent_category;
//     $category->description = $request->description;
//     $category->save();
//     return redirect()->route('view.category')->with('success','Category Created Successfully');
// }
{
$request->validate([
'category_name' => 'required',
'description' => 'required',
'parent_category' => 'required',
'category_code' => 'required',
]);
// $category= Category::where('id',$id)->first();
// $category->category_name = $request->category_name;
// $category->category_code = $request->category_code;
// $category->parent_category = $request->parent_category;
// $category->description = $request->description;
// $category->save();
$this->cat->data_update($id,$request->all());
return redirect()->route('view.category')->with('success','Category Updated Successfully');
// return response()->json(['message' => 'Category Updated Successfully', 'status' => 1]);
}

// public function destroy($id)
// {
// $category= Category::where('id',$id)->first();
// if($category==true){
// $category->delete();
// return redirect()->route('view.category')->with('success','Category Deleted Successfully');
// }else{
// return response()->json(['message' => 'Data Not Found!!', 'status' => 0]);
// }
// }

public function destroy($id)
{
$this->cat->data_delete($id);
return redirect()->route('view.category')->with('success','Category Deleted Successfully');

}


}