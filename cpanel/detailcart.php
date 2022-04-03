<div class="row">
        <div class="col-12">
          <div class="card my-4">
         
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
              
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Product ID</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Số lượng</th>  
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Thành tiền</th>
            
                      

                    </tr>
                  </thead>
                  <tbody>
                  <?php 
   
  
   foreach ($DetailCart as $key => $value) {
       echo '
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm"> <a href="'.$ROOT.'/?detail='.$value['product_id'].'">Mã sản phẩm : '.$value['product_id'].' => Click vào để xem chi tiết sản phẩm</a></h6>
                            
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">'.$value['quantity'].'</p>
                     
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-success">'.number_format($value['price']).' VNĐ</span>
                      </td>
                     
                    
                   
                    
                    </tr>
                
                    ';
                  }
                  ?>
                 
                    
                 
                  </tbody>
                    
                  <tfoot>
                  <tr>
                          <td>Tổng tiền</td>
                          <td><?=number_format($infocart[0]['total'])?> VNĐ</td>
                      </tr>
                      <tr>
                          <th>THÔNG TIN NGƯỜI NHẬN:</th>
                      </tr>
                      <tr>
                          <th><?=$infocart[0]['address']?> </th>
                          <th><?=$infocart[0]['phone']?></th>
                          <th><?=$infocart[0]['name']?></th>
                      </tr>
                    
                  </tfoot>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>