<h3 class="title">HÀNG MỚI VỀ</h3>
<div class="products">
    <?php
    $listProductsabc = showProductNew();
    foreach ($listProductsabc as $key => $value) {
       echo '
        <div class="product">
            <div class="img-order">
                <div class="img-product">
                    <img src="'.$ROOT.'/assets/images/'.$value['images'].'" alt="">
                </div>
                <div class="order">
                    <button><a href="">XEM CHI TIẾT</a></button>
                </div>
            </div>
            <h3>'.$value['name'].'</h3>
            <h2>'.number_format($value['price']).' ₫</h2>

        </div>
       ';
    }
    ?>

</div>