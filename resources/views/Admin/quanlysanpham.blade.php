<div class="row">
        <br>
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading" >
                    <div class="row">
                        <div class="col-lg-8">
                            Danh sách sản phẩm
                        </div>   
                        <div class="col-lg-4" style="text-align: right">
                            <button type="button" class="btnaddproduct btn btn-outline btn-success" data-toggle="collapse"  href="#collapseOne">Thêm sản phẩm</button>
                            <button type="button" class=" btnaddproduct btn btn-outline btn-success" data-toggle="collapse"  href="#collapseTwo">Xóa sản phẩm</button>
                        </div>
                    </div>
                </div>
                
                <div id="collapseOne" class="panel-collapse collapse">
                   
                    <h4 style="color: #4b9249; padding-left: 30px;">Thêm sản phẩm</h4>
                    
                    <form action="Changeproduct.php" method="POST" >
                        <div class="panel-body">

                            <div class="form-group col-lg-4">
                                <input class="form-control" placeholder="Tên sản phẩm" name="name"
                                required data-validation-required-message="Please enter your email address.">
                            </div>
                            <div class="form-group col-lg-4" style="display: table">
                                <input class="form-control" placeholder="Giá" name="price"
                                required data-validation-required-message="Please enter your email address."><span class="input-group-addon">.000</span>
                            </div>
                            <div class="form-group col-lg-4">
                                <select class="form-control" name="category">
                                    <option value="">Loại cây</option>
                                    <option value="3">Cây handmade</option>
                                    <option value="2">Cây không khí</option>
                                    <option value="1">Cây mini</option>

                                </select>
                            </div>
                            <div class="form-group col-lg-4" style="display: table">
                                <input class="form-control" placeholder="Khuyến mãi" name="saleoff"
                                required data-validation-required-message="Please enter your email address.">
                                <span class="input-group-addon">%</span>
                            </div>
                            <div class="form-group col-lg-4">
                                <input class="form-control" placeholder="link ảnh" name="imagiUrl"
                                required data-validation-required-message="Please enter your email address.">
                            </div>
                            <div class="form-group col-lg-4">

                                <input type="submit" class=" btn btn-outline btn-success"
                                style="width: 100%" name="btn_submit" value="Xác nhận"  >

                            </div>

                        </div>
                    </form>
                </div>
                <div id="collapseTwo" class="panel-collapse collapse">
                    <h4 style="color: #4b9249; padding-left: 30px;">Xóa sản phẩm</h4>
                    <form action="Changeproduct.php" method="POST" >
                        <div class="panel-body">
                            <div class="form-group col-lg-4">
                                <input class="form-control" placeholder="Mã sản phẩm" name="idDel"
                                required data-validation-required-message="Please enter your email address.">
                            </div>

                            <div class="form-group col-lg-4">

                                <input type="submit" class=" btn btn-outline btn-success"
                                style="width: 100%" name="btn_submitDel" value="Xác nhận"  >

                            </div>

                        </div>
                    </form>
                </div>
                <?php 
                
                ?>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>Mã sản phẩm</th>
                                <th>Tên sản phẩm</th>
                                <th>Giá(s)</th>
                                <th>Ảnh</th>
                                <th>Loại sản phẩm</th>
                                <th>Khuyến mãi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $sql="select * from product";
                            $query=$db->executeQuery($sql);
                            while($row=mysqli_fetch_assoc($query))
                            {

                                ?>
                                <tr class="odd gradeX">
                                    <td><?php echo $row['id'] ?></td>
                                    <td><?php echo $row['name'] ?> </td>

                                    <td ><?php echo 0 ?>.000</td>
                                    <td > <img style="width: 30px; height:30px" src="../../<?php echo $row['imagiUrl'] ?>"></td>
                                    <td ><?php if( $row['category']==1 )
                                    echo "cây mini";
                                    else if($row['category']==2)
                                        echo "cây không khí";
                                    else echo "cây handmande"?></td>
                                    <td ><?php echo $row['saleoff'] ?></td>
                                </tr>
                                <?php
                            }    
                            ?>

                        </tbody>
                    </table>
                    <!-- /.table-responsive -->

                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>