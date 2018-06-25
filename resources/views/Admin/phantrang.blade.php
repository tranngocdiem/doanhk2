<?php
                          if(isset($loaisanpham))
                          {  foreach ($loaisanpham as $row) {
                                ?>
                                <tr>
                                    <td><?php echo $row->maloai ?></td>
                                    <td><?php echo $row->tenloai?></td>
                                    <td><?php echo $row->gia-$row->gia*($row->discount/100)?></td>
                                    <td><img style="width: 30px; height:30px" src="{{ url('/') }}/image/sanpham/<?php echo $row->url?>" ></td>
                                    <td><?php echo $row->tensp ?></td>
                                    <td><?php echo $row->tencd ?></td>
                                   

                                </tr>
                                <?php
                            }
                         }
                         if(isset($dondathang))
                         {
                            foreach ($dondathang as $row) {
                                ?>
                                <tr>
                                    <td><?php echo $row->maddh ?></td>
                                    <td><?php echo $row->ngaydat?></td>
                                    <td> Mã tài khoản: <?php echo $row->matk ?> <br> Tên người dùng:<?php echo $row->hoten ?> <br> Số điện thoại: <?php echo $row->sdt ?></td>
                                    <?php $chitiet = DB::table('chitietdonhang')
                                                     ->join('loaisanpham','loaisanpham.maloai','=','chitietdonhang.maloai')
                                                     ->where('chitietdonhang.maddh',$row->maddh)
                                                     ->get(); ?>
                                    <td>
                                        <?php foreach ($chitiet as $key) {
                                            echo $key->tenloai;
                                            echo $key->tenloai;
                                            echo '<span style = "margin-left:10px"> - </span>';
                                            echo '<span style = "margin-left:10px"> Số lượng: '.$key->soluong.' </span>';
                                            echo '<br>';
                                        } ?>
                                    </td>
                                    <td>Người nhận:<?php echo $row->nguoinhan; ?><br> Địa chỉ:<?php echo $row->diachi; ?><br>Số điện thoại:<?php echo $row->sdt; ?>
                                    </td>
                                    <?php
                                     $tongtien = DB::table('chitietdonhang')
                                                 ->where('chitietdonhang.maddh',$row->maddh)
                                                 ->sum('gia');
                                    ?>
                                    <td><?php echo $tongtien  ?> </td>
                                    <td><?php if($row->trangthai == '-1')
                                              echo 'Đã hủy';
                                              else if($row->trangthai=='0')
                                              echo 'Đang trong giỏ hàng';
                                              else if($row->trangthai=='1')
                                              echo 'Đã đặt hàng';
                                              else if($row->trangthai=='2')
                                              echo 'Đã giao';?>
                                              <span><br>
                                                <button style="margin-left:10px " class="btn-primary myBtn" value="<?php echo $row->maddh ?>"> Thay đổi</button></span>
                                    <!-- <select>
                                        <option value="-1">Đã hủy</option>
                                        <option value="0">Đang trong giỏ hàng</option>
                                        <option value="1">Đã đặt hàng</option>
                                        <option value="2">Đã giao</option>
                                        </select> -->
                                    </td>

                                </tr>
                                <?php
                            }}
                            if(isset($taikhoan))
                            {

                                foreach ($taikhoan as $row) {
                                ?>
                                <tr>
                                    <td><?php echo $row->matk ?></td>
                                    <td><?php echo $row->tentk?></td>
                                    <td>Họ tên: <?php echo $row->hoten?>
                                        <br>
                                        Số điện thoại: <?php echo $row->sdt?>
                                        <br>
                                        Địa chỉ: <?php echo $row->diachi?>
                                        <br>

                                    </td>
                                    <td><?php if($row->loaitk==1)
                                        echo 'Khách hàng'; 
                                        else echo 'Admin';?>
                                    </td>

                                </tr>
                                <?php
                            }}
                            ?>
                            

                            
                            
                            
                         
                        
                            
                         
                            
                            