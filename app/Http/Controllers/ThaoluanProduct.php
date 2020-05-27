<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();

class ThaoluanProduct extends Controller
{
      public function add_thaoluan_product()
    {
    	return view('admin.add_thaoluan_product');
    }
    public function all_thaoluan_product()
    {
    	$all_thaoluan_product=DB::table('tbl_thaoluan')->get();
    	$manager_thaoluan_product=view ('admin.all_thaoluan_product')->with('all_thaoluan_product',$all_thaoluan_product);
    	return view('admin_layout')->with('admin.all_thaoluan_product',$manager_thaoluan_product);
    }
     public function save_thaoluan_product(Request $request)
     {
        $data=array();
        $dulieu = DB::table('tbl_thaoluan')->where('thaoluan_name',$request->thaoluan_product_name)->get();
        $data['thaoluan_name']=$request->thaoluan_product_name;
        $new = $data['thaoluan_name'];
        $data['thaoluan_status']=$request->thaoluan_product_status;
         $dulieu = DB::table('tbl_thaoluan')->where('thaoluan_name',$request->thaoluan_product_name)->value('thaoluan_name');
        if($new==$dulieu){
                Session::put('message','Khu vực đã tồn tại');
                return Redirect::to('add-thaoluan-product');
        }
            else{
                DB::table('tbl_thaoluan')->insert($data);
                Session::put('message','Thêm danh mục sản phẩm thành công');
                return Redirect::to('add-thaoluan-product');
        }  
     }
     public function unactive_thaoluan_product($thaoluan_product_id)
     {
        DB::table('tbl_thaoluan')->where('thaoluan_id',$thaoluan_product_id)->update(['thaoluan_status'=>1]);
        Session::put('message','Tắt thành công!!!');
        return Redirect::to('all-thaoluan-product');
     }
    public function active_thaoluan_product($thaoluan_product_id)
    {
        DB::table('tbl_thaoluan')->where('thaoluan_id',$thaoluan_product_id)->update(['thaoluan_status'=>0]);
        Session::put('message','Bật thành công!!!');
        return Redirect::to('all-thaoluan-product');
    }
    
    public function edit_thaoluan_product($thaoluan_product_id)
    {
       $edit_thaoluan_product=DB::table('tbl_thaoluan')->where('thaoluan_id',$thaoluan_product_id)->get();
       $manager_thaoluan_product=view('admin.edit_thaoluan_product')->with('edit_thaoluan_product',$edit_thaoluan_product);
       return view('admin_layout')->with('admin.edit_thaoluan_product',$manager_thaoluan_product);
    
    }
    public function update_thaoluan_product(Request $request,$thaoluan_product_id)
    {
       $data=array();
        $data['thaoluan_name']=$request->thaoluan_product_name;
        DB::table('tbl_thaoluan')->where('thaoluan_id',$thaoluan_product_id)->update($data);
        Session::put('message','Cập nhật danh mục sản phẩm thành công!!!');
        return Redirect::to('all-thaoluan-product');
    }
     public function delete_thaoluan_product(Request $request,$thaoluan_product_id)
    {

        DB::table('tbl_thaoluan')->where('thaoluan_id',$thaoluan_product_id)->delete();
        Session::put('message','Xóa danh mục sản phẩm thành công!!!');
        return Redirect::to('all-thaoluan-product');
    }
}
