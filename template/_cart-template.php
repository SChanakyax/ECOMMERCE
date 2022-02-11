  <!-- shopping cart section -->

  <section id="cart" class="py-3">
            <div class="container-fluid w-75">
                <h5 class="font-roboto font-size-20">Shopping Cart</h5>

                <!-- shopping cart items -->
                <div class="row">
                    <div class="col-sm-9">
                        <?php 
                            $result = $product->getProduct(5);
                            print_r($result);

                            foreach($product->getData('cart') as $item ):
                        ?>
                        <!-- cart item -->
                        <div class="row border-top py-3 mt-3">
                            <div class="col-sm-2">
                                <img src="./assets/products/1.png" style="height: 120px;" alt="cartitem" class="img-fluid">
                            </div>
                            <div class="col-sm-8">
                                <h5 class="font-roboto font-size-20">Samsung Galaxy S10</h5>
                                <small>by Samsung</small>

                                <!-- Product rating -->
                                <div class="d-flex">
                                    <div class="rating text-warning font-size-12">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="far fa-star"></i></span>
                                    </div>
                                    <a href="#" class="px-2 font-size-14 font-raleway">12,123 ratings</a>
                                </div>
                                <!-- end of product rating -->

                                <!-- product quantity -->
                                <div class="qty d-flex pt-2">
                                    <div class="d-flex font-raleway w-25">
                                        <button class="qty-up border bg-light" data-id="product1">
                                            <i class="fas fa-angle-up"> </i>
                                        </button>

                                        <input type="text" data-id="product1" class="qty_input border px-2 w-100 bg-light"  disabled value="1" placeholder="1">

                                        <button class="qty-up border bg-light" data-id="product1">
                                            <i class="fas fa-angle-down"> </i>
                                        </button>
                                    </div>

                                    <button class="btn font-roboto text-danger font-size-14  px-3 border-right">Delete</button>
                                    <button class="btn font-roboto font-size-14 text-danger ">Save for Later</button>
                                </div>
                                <!-- end of product quantity -->

                            </div>

                            <div class="col-sm-2 text-right">
                                <div class="font-size-20 text-danger font-roboto">
                                    $ <span class="product_price">150</span>
                                </div>
                            </div>
                        </div>
                        <!-- end of cart item -->

                        <?php
                           endforeach;

                        ?>
                        
                    </div>

                    <!-- Subtotal section -->
                    <div class="col-sm-3 py-1">
                        <div class="sub-total border text-center mt-2 p-2">
                            <h6 class="font-size-12 font-raleway text-success "> <i class="fas fa-check"> </i> Your order is ready for FREE Delivery </h6>
                            <div class="border-top py-4">
                                <h5 class="font-roboto font-size-20">Subtotal (2&nbsp;items)  : &nbsp;<span class="text-danger">$ <span class="text-danger" id="deal-price">150.00</span></span></h5>
                                <button type="submit" class="btn btn-warning mt-3 font-rubik">Proceed to Buy</button>
                            </div>
                        </div>
                    </div> 
                    <!-- sub total section -->

                </div>
                <!-- end of shopping cart items -->
            </div>
        </section>
        <!-- end of shopping cart section -->