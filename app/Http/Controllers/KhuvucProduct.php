<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();

class KhuvucProduct extends Controller
{
     public function add_khuvuc_product()
    {
    	return view('admin.add_khuvuc_product');
    }
    public function all_khuvuc_product()
    {
    	$all_khuvuc_product=DB::table('tbl_khuvuc')->get();
    	$manager_khuvuc_product=view ('admin.all_khuvuc_product')->with('all_khuvuc_product',$all_khuvuc_product);
    	return view('admin_layout')->with('admin.all_khuvuc_product',$manager_khuvuc_product);
    }
     public function save_khuvuc_product(Request $request)
     {
        $data=array();
        $dulieu = DB::table('tbl_khuvuc')->where('khuvuc_name',$request->khuvuc_product_name)->get();
        $data['khuvuc_name']=$request->khuvuc_product_name;
        $new = $data['khuvuc_name'];
        $data['khuvuc_status']=$request->khuvuc_product_status;
         $dulieu = DB::table('tbl_khuvuc')->where('khuvuc_name',$request->khuvuc_product_name)->value('khuvuc_name');
        if($new==$dulieu){
                Session::put('message','Khu vực đã tồn tại');
                return Redirect::to('add-khuvuc-product');
        }
            else{
                DB::table('tbl_khuvuc')->insert($data);
                Session::put('message','Thêm danh mục sản phẩm thành công');
                return Redirect::to('add-khuvuc-product');
        }  
     }
     public function unactive_khuvuc_product($khuvuc_product_id)
     {
        DB::table('tbl_khuvuc')->where('khuvuc_id',$khuvuc_product_id)->update(['khuvuc_status'=>1]);
        Session::put('message','Tắt thành công!!!');
        return Redirect::to('all-khuvuc-product');
     }
    public function active_khuvuc_product($khuvuc_product_id)
    {
        DB::table('tbl_khuvuc')->where('khuvuc_id',$khuvuc_product_id)->update(['khuvuc_status'=>0]);
        Session::put('message','Bật thành công!!!');
        return Redirect::to('all-khuvuc-product');
    }
    
    public function edit_khuvuc_product($khuvuc_product_id)
    {
       $edit_khuvuc_product=DB::table('tbl_khuvuc')->where('khuvuc_id',$khuvuc_product_id)->get();
       $manager_khuvuc_product=view('admin.edit_khuvuc_product')->with('edit_khuvuc_product',$edit_khuvuc_product);
       return view('admin_layout')->with('admin.edit_khuvuc_product',$manager_khuvuc_product);
    
    }
    public function update_khuvuc_product(Request $request,$khuvuc_product_id)
    {
       $data=array();
        $data['khuvuc_name']=$request->khuvuc_product_name;
        DB::table('tbl_khuvuc')->where('khuvuc_id',$khuvuc_product_id)->update($data);
        Session::put('message','Cập nhật danh mục sản phẩm thành công!!!');
        return Redirect::to('all-khuvuc-product');
    }
     public function delete_khuvuc_product(Request $request,$khuvuc_product_id)
    {

        DB::table('tbl_khuvuc')->where('khuvuc_id',$khuvuc_product_id)->delete();
        Session::put('message','Xóa danh mục sản phẩm thành công!!!');
        return Redirect::to('all-khuvuc-product');
    }
}
