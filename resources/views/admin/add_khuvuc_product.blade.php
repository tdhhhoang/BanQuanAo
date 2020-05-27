 @extends('admin_layout')
 @section('admin_content') 

 <div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Thêm Khu Vực
                        </header>
                        <div class="panel-body">
                            <?php
                              $message=Session::get('message');
                              if($message)
                              {
                                 echo $message;
                                 Session::put('message',null);
                              }
                            ?>
                            <div class="position-center">
                                <form role="form" action="{{URL::to('/save-khuvuc-product')}}" method="post">
                                    {{csrf_field()}}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên Khu Vực</label>
                                    <input type="text" name="khuvuc_product_name" class="form-control" id="exampleInputEmail1" placeholder="Tên Danh Mục">
                                </div>
                                
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Tình Trạng</label>
                                         <select name="khuvuc_product_status" class="form-control input-sm m-bot15">
                                                 <option value="0"> Tắt</option>
                                                 <option value="1">Bật</option>
                                                
                                         </select>
                                </div>
                                
                                <button type="submit" name="add_khuvuc_product" onclick="return confirm('Bạn có muốn thêm  ?')" class="btn btn-info">Thêm Khu Vực</button>
                            </form>
                            </div>

                        </div>
                    </section>

            </div>

@endsection