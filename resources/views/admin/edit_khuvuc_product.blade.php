 @extends('admin_layout')
 @section('admin_content') 

 <div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                           Sửa Khu Vực
                        </header>
                           <?php
                              $message=Session::get('message');
                              if($message)
                              {
                                 echo $message;
                                 Session::put('message',null);
                              }
                            ?>
                        <div class="panel-body">

                          @foreach($edit_khuvuc_product as $key => $edit_value)
                            <div class="position-center">
                                <form role="form" action="{{URL::to('/update-khuvuc-product/'.$edit_value->khuvuc_id )}}" method="post">
                                    {{csrf_field()}}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên Khu Vực</label>
                                    <input type="text" value={{$edit_value->khuvuc_name}} name="khuvuc_product_name" class="form-control" id="exampleInputEmail1" placeholder="Tên Danh Mục">
                                </div>
                                
                                
                                
                                <button type="submit" name="update_khuvuc_product" class="btn btn-info">Cập Nhật</button>
                            </form>
                            </div>
                          @endforeach
                        </div>
                    </section>

            </div>

@endsection