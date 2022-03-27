<?php 
if($_GET['show'] == 'showproducts') {
    ?>
    <?php 
    $listproduct = showproducts();
    foreach ($listproduct as $key => $value) {
        echo '<div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Authors table</h6>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Price</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Sale</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">View</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Description</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Time</th>
                      <th class="text-secondary opacity-7">Edit</th>
                      <th class="text-secondary opacity-7">Delete</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="../assets/images/'.$value['images'].'" class="avatar avatar-sm me-3 border-radius-lg" alt="user1">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">'.$value['name'].'</h6>
                            
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">'.number_format($value['price']).' VNĐ</p>
                     
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-success">'.$value['sale'].'</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">'.$value['view'].'</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">'.$value['description'].'</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">'.$value['time'].'</span>
                      </td>
                      <td class="align-middle text-center">
                        <a href="'.$ROOT_ADMIN.'?edit=editproduct&btn_sp='.$value['id'].'" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                          Edit
                        </a>
                      </td>
                      <td class="align-middle text-center">
                        <a href="'.$ROOT_ADMIN.'//delete?id='.$value['id'].'" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                          Delete
                        </a>
                      </td>
                    </tr>
                
                  
                 
                    
                 
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>';
    }
    ?>
<?php 

}else{
    ?>
    <div class="row">
    <div class="col-12">
      <div class="card my-4">
        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
          <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
            <h6 class="text-white text-capitalize ps-3">Authors table</h6>
          </div>
        </div>
        <div class="card-body px-0 pb-2">
          <div class="table-responsive p-0">
            <table class="table align-items-center mb-0">
              <thead>
                <tr>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name</th>
                  <th class="text-secondary opacity-7">Edit</th>
                  <th class="text-secondary opacity-7">Delete</th>
                </tr>
              </thead>
              <tbody>
                <tr>
               
               
               
                  <td class="align-middle">
                    <span class="text-secondary text-xs font-weight-bold">23/04/18</span>
                  </td>
               
                  <td class="align-middle">
                    <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                      Edit
                    </a>
                  </td>
                  <td class="align-middle ">
                    <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                      Delete
                    </a>
                  </td>
                </tr>
            
              
             
                
             
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  
<?php }

?>