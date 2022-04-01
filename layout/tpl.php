<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="<?= $ROOT?>/assets/css/homepage.css">
    <link rel="stylesheet" href="<?= $ROOT?>/assets/css/account.css">
    <link rel="stylesheet" href="<?= $ROOT?>/assets/css/detail.css">
    <link rel="stylesheet" href="<?= $ROOT?>/assets/css/detail-category.css">
</head>
<body>
    <header>
        <div class="header-top">
            <div class="header-contact">
                   <img src="./assets/icon/phone.png" width="20px" alt=""> 
                   <h3>Hỗ trợ khách hàng: <a href="tel:0982641483">1900 6666</a></p>
            </div>
        </div>
        <div class="header-menu">
            <div class="logo">
                <a href="<?=$ROOT?>"><img src="./assets/logo/image 2.png" alt=""></a>
            </div>
            <nav class="menu">
                <ul>
                    <li class="hot-ne"><a href="">SẢN PHẨM HOT</a>
                    
                   <ul class="logo-hot">
                       <li><img src="./assets/icon/image 7.png" alt=""> </li>
                   </ul>
                    </li>
                    <li><a href="">Sản phẩm</a>
                     <ul class="subnav">
                        <?php 
                        $listCategorys = showCategoryHome();
                        foreach ($listCategorys as $key => $value) {
                            echo ' <li><a href="?category='.$value['id'].'">'.$value['name'].'</a></li>
                           ';
                        }
                        ?>
                     </ul>
                    </li>
                    <li><a href="">Sale</a></li>
                    <li><a href="">Liên hệ</a></li>
                   
                </ul>
            </nav>
            <div class="left">
                <form action="?search=">
                    <div class="input">
                        <input type="text" placeholder="Bạn cần gì..." name="key" id="key">
                    </div>
                    <div class="icon">
                        <img src="./assets/icon/search.png" width="18px" alt="">
                    </div>
                </form>
                <div class="users">
                    <div class="logo">
                        <?php 
                        
                        if(isset($_SESSION['email'])){
                            echo ' <h3>Chào, '.$_SESSION['fullname'].' </h3> <br>
                            <a href="?logout">Đăng xuất</a>';
                        }else{
                            echo '  <a href="?login#loginform"><img src="./assets/icon/user.png" width="30px" alt=""></a>';
                        }
                        ?>
                        
                    </div>
                    
                </div>
                <div class="cart">
                    <a href=""><img src="./assets/icon/bags.png" width="30px" alt=""></a>
                </div>
            </div>

        </div>
    </header>
    <div class="brooch">
        <h3>NẮNG LÊN PHỐ, CHÀNG LÊN ĐỒ</h3>
    </div>
    <section class="banner">
        <img src="./assets/banner/banner_product_noibat.webp" alt="">
    </section>
    <main>
       <?php include $view; ?>
    </main>
    <section class="footer-banner">
        <img src="./assets/banner/lambanner-thiet-ke-banner-nhu-nike.jpg" alt="">
    </section>
    <div class="customer-reviews">
        <div class="logo">
            <img src="./assets/banner/2.jpg" alt="">
        </div>
        <div class="input-reviews">
            <div class="reviews">
                <h3>Contact Us</h3>
                <form action="">
                    <p>Your name *</p> <br>
                    <input type="text" name="" placeholder="Full name" id=""> <br>
                    <p>Email *</p> <br>
                    <input type="text" name="" placeholder="Full name" id=""> <br>
                    <p>Message *</p> <br>
                    <textarea name="" id="" cols="43" rows="5"></textarea> <br>
                    <button>Submit *</button>
                </form>
            </div>
        </div>
    </div>
    <footer>
       <div class="footer-m">
            <div class="address">
                <img src="./assets/logo/image 2.png" alt="">
                <h5 class="name-company">
                    CÔNG TY CỔ PHẦN THỜI TRANG KOWIL VIỆT NAM
Hotline: 1900 8079
                </h5>
                <p><span class="vitri">VP Phía Bắc</span>: Tầng 17 tòa nhà Viwaseen, 48 Phố Tố Hữu,
                    Trung Văn, Nam Từ Liêm, Hà Nội.
                    </p>
            </div>
            <div class="f-right">
                <div class="connect">
                    <h5>
                        KẾT NỐI
                    </h5>
                    <div class="iconf">
                       <a href=""> <img src="./assets/icon/fb.png" alt=""></a>
                        <a href=""><img src="./assets/icon/insta.png" alt=""></a>
                        <a href=""><img src="./assets/icon/ytb.png" alt=""></a>
                    </div>
                </div>
                <div class="connect">
                    <h5>
                        PHƯƠNG THỨC THANH TOÁN
                    </h5>
                    <div class="iconf">
                       <a href=""> <img src="./assets/icon/paypal.png" alt=""></a>
                        <a href=""><img src="./assets/icon/visa.png" alt=""></a>
                        <a href=""><img src="./assets/icon/349237.png" alt=""></a>
                        <a href=""><img src="./assets/icon/money.png" alt=""></a>
                    </div>
                </div>
                <div class="logo">
                    <img src="./assets/icon/image 16.png" alt="">
                </div>

            </div>
       </div>
    </footer>
</body>
</html>