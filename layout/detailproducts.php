<div class="d-category">
         <a class="d-homepage" href="<?=$ROOT?>">Trang chủ</a>
         <a class="d-title" href="">Danh mục sản phẩm</a>
      </div>
      <div class="c-products">
         <?php 
         foreach ($detailProduct2 as $key => $value) {
                echo '  <div class="c-product">
                <img src="'.$ROOT.'/assets/images/'.$value['images'].'" alt="">
                    <h4 class="name-product">'.$value['name'].'</h4>
                    <h3 class="price">'.number_format($value['price']).' ₫</h3>
            </div>';
         }
         ?>
      </div>