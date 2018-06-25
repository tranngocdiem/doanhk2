<?php
                            foreach ($loaisanpham as $row) {
                                $chitiet = DB::table('loaisanpham')
                                ->join('sanpham','sanpham.masp','loaisanpham.masp')
                                ->where('loaisanpham.maloai',$row->maloai)
                                ->get();
                                ?>
                                <tr>
                                    <td><?php echo $row->maloai ?></td>
                                    <td><?php echo $chitiet[0]->tenloai?></td>
                                    <td> <?php echo $chitiet[0]->tensp?></td>
                                    <td><?php echo $row->tong?></td>

                                </tr>
                                <?php
                            }
                            ?>