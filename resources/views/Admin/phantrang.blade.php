<?php
                            foreach ($loaisanpham as $row) {
                                ?>
                                <tr>
                                    <td><?php echo $row->maloai ?></td>
                                    <td><?php echo $row->tenloai?></td>
                                    <td><?php echo $row->gia-$row->gia*$row->discount?></td>
                                    <td><img style="width: 30px; height:30px" src="{{ url('/') }}/image/sanpham/<?php echo $row->url?>" ></td>
                                    <td><?php echo $row->tensp ?></td>
                                    <td><?php echo $row->tencd ?></td>
                                    <td><button class="btn-primary">Sửa</button></td>

                                </tr>
                                <?php
                            }
                            ?>
                            