 <input type="text" id="myInput"  placeholder="Tìm kiếm..." title="Type in a name" style="float: right; margin-top: 20px; margin-bottom: 10px; width: 400px; height: 40px; ">
 <table width="100%" class="table table-bordered table-hover" id="myTable">
                        <thead>
                            <tr>
                                <th>Mã loại</th>
                                <th>Tên sản phẩm</th>
                                <th>Thuộc loại</th>
                                <th>Tổng số lượng bán ra</th>
                            </tr>
                        </thead>
                        <tbody class="content">
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
                            


                        </tbody>
</table>
<nav aria-label="Page navigation example">
                      <ul class="pagination">
                        <?php
                        if($loaisanpham->currentPage()!=1)
                        {
                          ?>
                         <li class="page-item">
                            <a class="page-link" href="{!!$loaisanpham->url($loaisanpham->currentPage()-1)!!}" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                            <span class="sr-only">Previous</span>
                            </a>
                        </li>
                        <?php
                        }
                        ?>
                        <?php
                          for($i=1; $i<=$loaisanpham->lastPage(); $i = $i + 1) 
                          {
                            ?>
                            <li class="page-item">
                              <a class="page-link" href="{!!$loaisanpham->url($i)!!}">{!!$i!!}</a>
                            </li>
                            <?php
                          }
                          if($loaisanpham->currentPage()!=$loaisanpham->lastPage())
                          {
                        ?>
                         <li class="page-item">
                         <a class="page-link" href="{!!$loaisanpham->url($loaisanpham->currentPage()+1)!!}" aria-label="Next">
                          <span aria-hidden="true">&raquo;</span>
                          <span class="sr-only">Next</span>
                         </a>
                        </li>
                        <?php
                        }
                      ?>
                    </ul>
                  </nav>