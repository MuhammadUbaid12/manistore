<?php
session_start();
include("header.php");
include_once("./admin/config.php");
include('./functions/common_function.php');
?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/js/bootstrap.min.js"
    integrity="sha512-EKWWs1ZcA2ZY9lbLISPz8aGR2+L7JVYqBAYTq5AXgBkSjRSuQEGqWx8R1zAX16KdXPaCjOCaKE8MCpU0wcHlHA=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>



<div class="hero-area section-bg2">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="slider-area">
                    <div class="slider-height2 slider-bg4 d-flex align-items-center justify-content-center">
                        <div class="hero-caption hero-caption2">
                            <h2>Detail</h2>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item"><a href="index">Home</a></li>
                                    <li class="breadcrumb-item"><a href="#">Detail</a></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container mt-5 mb-5" style="margin-top:100px;">
    <div class="row d-flex justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <?php
                include("admin/config.php");
                if(isset($_GET['detail_id'])){
                    $Id = $_GET['detail_id'];
                    // Retrieve the product data for the selected product
                    $selectQuery = "SELECT * FROM products WHERE p_id = '$Id'";
                    $result = mysqli_query($config, $selectQuery);

                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            $product_id = $row['p_id'];
                            $imagePath = 'admin/' . $row['p_image'];
                            $productName = $row['p_name'];
                            $price = $row['p_price'];
                            $category = $row['p_category'];
                            $details = $row['p_details'];

                ?>
                <div class="row">
                    <div class="col-md-6 pt-4">
                        <div class="images">
                            <div class="text-center"> <img id="main-image" style="obeject-fit:cover;"
                                    src="<?php echo $imagePath ?>" width="100%" /> </div>
                            <div class="thumbnail text-center"> <img onclick="change_image(this)" src="" width="70">
                                <img onclick="change_image(this)" src="" width="70">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 pt-4">
                        <div class="product pt-4" style="padding:30px; box-shadow:2px 5px 10px rgba(0,0,0,0.5)">
                            <div class="d-flex justify-content-between align-items-center" style="margin-bottom: 30px;">
                                <div class="d-flex align-items-center"><i
                                        class="fa-solid fa-arrow-left"></i>&nbsp;&nbsp; <span class="ml-1"><a
                                            href="index">Back</a></span>
                                </div>
                                <!--<i class="fa fa-shopping-cart text-muted"></i>-->
                            </div>
                            <div class="mt-4 mb-3"> <span
                                    class="text-uppercase text-muted brand"><?php echo $category ?></span>
                                <h5 class="text-uppercase"><?php echo $productName ?></h5>
                                <div class="star" style="margin-bottom:10px;">
                                    <i class="fa-solid fa-star" style="color:#fdd922; font-size: 14px;"></i><i
                                        class="fa-solid fa-star" style="color:#fdd922; font-size: 14px;"></i><i
                                        class="fa-solid fa-star" style="color:#fdd922; font-size: 14px;"></i><i
                                        class="fa-solid fa-star" style="color:#fdd922; font-size: 14px;"></i>
                                </div>
                                <div class="price d-flex flex-row align-items-center" style="margin-bottom: 20px;">
                                    <span class="act-price">Rs<?php echo $price ?></span>
                                    <!-- <div class="ml-2"> <small class="dis-price">$59</small> <span>40% OFF</span> </div> -->
                                </div>
                            </div>
                            <p class="about" style="margin-bottom: 40px;"><?php echo $details ?></p>
                            <!-- <div class="sizes mt-5" style="margin-bottom: 20px;">
                                <h6 class="text-uppercase">Size</h6> <label class="radio"> <input type="radio" name="size" value="S" checked> <span>S</span> </label> <label class="radio"> <input type="radio" name="size" value="M"> <span>M</span> </label> <label class="radio"> <input type="radio" name="size" value="L"> <span>L</span> </label> <label class="radio"> <input type="radio" name="size" value="XL"> <span>XL</span> </label> <label class="radio"> <input type="radio" name="size" value="XXL"> <span>XXL</span> </label>
                            </div> -->
                            <div class="cart mt-4 align-items-center">
                                <button class="btn btn-danger text-uppercase mr-2 px-4 mt-2"> <a
                                        href="<?php echo 'cart?product_id=' . $product_id; ?>">Add to cart</a></button>

                                <button class="btn btn-danger text-uppercase mr-2 px-4 mt-2"> <a
                                        href="<?php echo 'wishlist?wish_id=' . $product_id; ?>">Add to
                                        wishlist</a></button>
                                <!-- 'wishlist?wish_id=$product_id' -->
                            </div>
                        </div>
                    </div>
                </div>
                <?php }}} ?>
            </div>
        </div>
    </div>
</div>

<div class="latest-items section-padding fix">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-xl-12">
                <div class="nav-button">

                    <nav>
                        <div class="">
                            <h2 class="">Featured Products</h2>
                        </div>

                    </nav>

                </div>
            </div>
        </div>
    </div>
    <div class="container">

        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-one" role="tabpanel" aria-labelledby="nav-one-tab">

                <div class="latest-items-active">
                    <?php
                        featured();
                        ?>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
function change_image(image) {

    var container = document.getElementById("main-image");

    container.src = image.src;
}



document.addEventListener("DOMContentLoaded", function(event) {







});
</script>













<?php
include("footer.php");
?>