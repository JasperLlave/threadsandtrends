<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- custom admin css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <?php @include 'header.php'; ?>
    <section class="home">
        <div class="content">
            <h3>New Arrivals.</h3>
            <p>EXCLUSIVELY SELECTED FASHION, JUST FOR YOU</p>
            <p>Best-Selling outfits are now available.</p>
            <a href="about.php" class="btn">learn more</a>
        </div>
    </section>
    <section class="products">
        <h1 class="title">Our Selection</h1>
        <div class="box-container">
            <form action="" method="POST" class="box">
                <a href="#" class="fas fa-eye"></a>
                <div class="price">PHP799.00</div>
                <img src="./images/14.png" alt="" class="image">
                <div class="name"></div>
                <input type="number" name="product_quantity" value="1" min="0" class="qty">
                <input type="hidden" name="product_id" value="">
                <input type="hidden" name="product_name" value="">
                <input type="hidden" name="product_price" value="">
                <input type="hidden" name="product_image" value="">
                <input type="submit" value="add to wishlist" name="add_to_wishlist" class="option-btn">
                <input type="submit" value="add to cart" name="add_to_cart" class="btn">
            </form>
            <form action="" method="POST" class="box">
                <a href="#" class="fas fa-eye"></a>
                <div class="price">PHP799.00</div>
                <img src="./images/15.png" alt="" class="image">
                <div class="name"></div>
                <input type="number" name="product_quantity" value="1" min="0" class="qty">
                <input type="hidden" name="product_id" value="">
                <input type="hidden" name="product_name" value="">
                <input type="hidden" name="product_price" value="">
                <input type="hidden" name="product_image" value="">
                <input type="submit" value="add to wishlist" name="add_to_wishlist" class="option-btn">
                <input type="submit" value="add to cart" name="add_to_cart" class="btn">
            </form>
            <form action="" method="POST" class="box">
                <a href="#" class="fas fa-eye"></a>
                <div class="price">PHP799.00</div>
                <img src="./images/16.png" alt="" class="image">
                <div class="name"></div>
                <input type="number" name="product_quantity" value="1" min="0" class="qty">
                <input type="hidden" name="product_id" value="">
                <input type="hidden" name="product_name" value="">
                <input type="hidden" name="product_price" value="">
                <input type="hidden" name="product_image" value="">
                <input type="submit" value="add to wishlist" name="add_to_wishlist" class="option-btn">
                <input type="submit" value="add to cart" name="add_to_cart" class="btn">
            </form>
            <form action="" method="POST" class="box">
                <a href="#" class="fas fa-eye"></a>
                <div class="price">PHP799.00</div>
                <img src="./images/17.png" alt="" class="image">
                <div class="name"></div>
                <input type="number" name="product_quantity" value="1" min="0" class="qty">
                <input type="hidden" name="product_id" value="">
                <input type="hidden" name="product_name" value="">
                <input type="hidden" name="product_price" value="">
                <input type="hidden" name="product_image" value="">
                <input type="submit" value="add to wishlist" name="add_to_wishlist" class="option-btn">
                <input type="submit" value="add to cart" name="add_to_cart" class="btn">
            </form>
            <form action="" method="POST" class="box">
                <a href="#" class="fas fa-eye"></a>
                <div class="price">PHP799.00</div>
                <img src="./images/18.png" alt="" class="image">
                <div class="name"></div>
                <input type="number" name="product_quantity" value="1" min="0" class="qty">
                <input type="hidden" name="product_id" value="">
                <input type="hidden" name="product_name" value="">
                <input type="hidden" name="product_price" value="">
                <input type="hidden" name="product_image" value="">
                <input type="submit" value="add to wishlist" name="add_to_wishlist" class="option-btn">
                <input type="submit" value="add to cart" name="add_to_cart" class="btn">
            </form>
            <form action="" method="POST" class="box">
                <a href="#" class="fas fa-eye"></a>
                <div class="price">PHP799.00</div>
                <img src="./images/19.png" alt="" class="image">
                <div class="name"></div>
                <input type="number" name="product_quantity" value="1" min="0" class="qty">
                <input type="hidden" name="product_id" value="">
                <input type="hidden" name="product_name" value="">
                <input type="hidden" name="product_price" value="">
                <input type="hidden" name="product_image" value="">
                <input type="submit" value="add to wishlist" name="add_to_wishlist" class="option-btn">
                <input type="submit" value="add to cart" name="add_to_cart" class="btn">
            </form>
        </div>
        <div class="more-btn">
            <a href="#" class="option-btn">load more</a>
        </div>
    </section>
    <section class="home-contact">
        <div class="content">
            <h3>Talk to us!</h3>
            <p>We appreciate your patronage and are grateful for your choice to shop with us. If you have any
                suggestions or ideas, please feel free to share them with us. Your input helps us continually improve
                and enhance our customer satisfaction.
            </p>
            <a href="contact.php" class="btn">contact us</a>
        </div>
    </section>
    <?php @include 'footer.php'; ?>
    <script src="js/script.js"></script>
</body>

</html>