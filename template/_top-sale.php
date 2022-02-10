<?php
    $product_shuffle = $product->getData();

?>
    
    <!-- Top sales -->
    <section id="top-sale">
            <div class="container py-5">
                <h4 class="font-roboto font-size-20">Top Sale</h4>
                <hr>

                <!-- owl-carousel -->
                <div class="owl-carousel owl-theme">

                    <?php foreach($product_shuffle as $item) {?>

                    <div class="item py-2">
                        <div class="product font-roboto">
                            <a href="#">
                                <img src="<?php echo $item['item_image']; ?>"  alt="product1" class="img-fluid" > </a>
                               <div class="text-center">
                                <h6> <?php echo $item['item_image']; ?></h6>
                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                </div>

                                <div class="price py-2">
                                    <span>$<?php echo $item['item_price'] ?></span>
                                </div> 
                                <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>

                               </div>
                                
                        </div>
                    </div>
                <?php  } //closing php function ?>
                </div>

            </div>
        </section>

        <!-- End of Top sales -->
