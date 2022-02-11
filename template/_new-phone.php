<?php
    shuffle($product_shuffle);

        //requset method post
        if($_SERVER['REQUEST_METHOD'] == "POST") {

            if(isset($_POST['new_phone_submit'])) {
            //add to cart method
            $Cart->addToCart($_POST['user_id'],$_POST['item_id']);  
            }        
        }
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
                                
                                <!-- Add to cart  -->
                                <form method="POST">
                                    <input type="hidden" name="item_id" value="<?php echo $item['item_id']; ?>" >
                                    <input type="hidden" name="user_id" value="<?php echo 1; ?>" >
                                    <button type="submit" name="new_phone_submit" class="btn btn-warning font-size-12">Add to Cart</button>
            
                                </form>
                               </div>
                                
                        </div>
                    </div>
                <?php  } //closing php function ?>
                </div>


            </div>
        </section>
        <!-- end of new phones section -->