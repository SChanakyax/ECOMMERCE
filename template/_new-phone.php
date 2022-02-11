<?php
    shuffle($product_shuffle);

?>
<!-- New phones section -->
      <section id="new-phones">
            <div class="container">
                <h4 class="font-roboto font-size-20">New Phones</h4>
                <hr>

                 <!-- owl-carousel -->
                 <div class="owl-carousel owl-theme">
                    
                    <?php foreach($product_shuffle as $item) {?>

                    <div class="item py-2 bg-light">
                        <div class="product font-roboto">
                            <a href="<?php printf('%s?item_id=%s','product.php', $item['item_id']);  ?>">
                                <img src="<?php echo $item['item_image']; ?>"  alt="product1" class="img-fluid" > </a>
                               <div class="text-center">
                                <h6> <?php echo $item['item_name']; ?></h6>
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
        <!-- end of new phones section -->