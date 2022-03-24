<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<div class="checkout-area">
    <div class="container">
        <form action="pay-cart" method="post">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="checkbox-form">
                        <h3>Xin mời hập thông tin</h3>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="checkout-form-list">
                                    <label>Họ và tên <span class="required">*</span></label>
                                    <input required type="text" placeholder="Họ Tên" name="name" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="checkout-form-list">
                                    <label>Địa chỉ<span class="required">*</span></label>
                                    <input required type="text" placeholder="Địa chỉ" name="address" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="checkout-form-list">
                                    <label>Email <span class="required">*</span></label>
                                    <input required type="email" placeholder="Email" name="email" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="checkout-form-list">
                                    <label>Số điện thoại <span class="required">*</span></label>
                                    <input required type="text" placeholder="Phone" name="phone" />
                                </div>
                            </div>
                        </div>
                        <div class="order-notes">
                            <div class="checkout-form-list">
                                <label>Ghi chú</label>
                                <textarea id="checkout-mess" name="note" cols="30" rows="10" placeholder="Ghi chú"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="your-order">
                        <h3>Your order</h3>
                        <div class="your-order-table table-responsive">
                            <table>
                                <thead>
                                    <tr>
                                        <th class="product-name">Product</th>
                                        <th class="product-total">Total</th>
                                    </tr>
                                </thead>
                             
                                    <tbody>
                                        <tr class="cart_item">
                                            <td class="product-name">
                                               <strong class="product-quantity"> </strong>
                                            </td>
                                            <td class="product-total">
                                                <span class="amount">đ</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                <tfoot>
                                    <tr class="order-total">
                                        <th>Order Total</th>
                                        <td><strong><span class="amount"> đ</span></strong>
                                        </td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <div class="payment-method">
                            <div class="order-button-payment">
                                <input type="submit" value="Thanh toán" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>