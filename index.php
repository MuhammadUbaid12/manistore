<?php
session_start();
include_once("./admin/config.php");
include('./functions/common_function.php');
include('header.php');
?>



<section class="slider-area ">
    <div class="slider-active">

        <div class="single-slider slider-bg1 slider-height d-flex align-items-center">
            <div class="container">
                <div class="rowr">
                    <div class="col-xxl-5 col-xl-6 col-lg-7 col-md-8  col-sm-10">
                        <div class="hero-caption text-center">
                            <span>Fashion Sale</span>
                            <h1 data-animation="bounceIn" data-delay="0.2s">Minimal Menz Style</h1>
                            <p data-animation="fadeInUp" data-delay="0.4s">Consectetur adipisicing elit. Laborum
                                fuga incidunt laboriosam voluptas iure, delectus dignissimos facilis neque nulla
                                earum.</p>
                            <a href="#" class="btn_1 hero-btn" data-animation="fadeInUp" data-delay="0.7s">Shop
                                Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="single-slider slider-bg2 slider-height d-flex align-items-center">
            <div class="container">
                <div class="row justify-content-end">
                    <div class="col-xxl-5 col-xl-6 col-lg-7 col-md-8 col-sm-10">
                        <div class="hero-caption text-center">
                            <span>Fashion Sale</span>
                            <h1 data-animation="bounceIn" data-delay="0.2s">Minimal Menz Style</h1>
                            <p data-animation="fadeInUp" data-delay="0.4s">Consectetur adipisicing elit. Laborum
                                fuga incidunt laboriosam voluptas iure, delectus dignissimos facilis neque nulla
                                earum.</p>
                            <a href="#" class="btn_1 hero-btn" data-animation="fadeInUp" data-delay="0.7s">Shop
                                Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="items-product1 pt-30">
<h2 class="text-center pb-5 pt-5">Top Category</h2>

    <div class="container">
        <div class="row">
            <?php
                include("admin/config.php");

                // Select distinct product categories from the database
                $select_categories = "SELECT * FROM categories WHERE cate_type = 'Top Category' ORDER BY cat_id DESC";

                $result_categories = mysqli_query($config, $select_categories);

                // Check if there are categories available
                if (mysqli_num_rows($result_categories) > 0) {
                    while ($category_row = mysqli_fetch_assoc($result_categories)) {
                        $category_name = $category_row['category'];
                        $category_image = $category_row['image'];
                        $category_image2 = $category_row['image2'];
            ?>
            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-4 col-4">
                <div class="single-items mb-20">
                    <div class="items-img">
                        <!-- Create an ID for each image -->
                        <img id="<?php echo $category_name; ?>_img"
                            style="height:150px;object-fit: cover;background-image:cover;"
                            src="admin/<?php echo $category_image; ?>" alt="">
                    </div>
                    <div class="items-details">
                        <h4><a href="category?category=<?php echo $category_name; ?>"><?php echo $category_name; ?></a>
                        </h4>
                        <a href="category?category=<?php echo $category_name; ?>" class="browse-btn">Shop Now</a>
                    </div>
                </div>
            </div>
            <?php
                    }
                } else {
                    echo "No categories found.";
                }
            ?>
        </div>
    </div>

    <script>
    // Use JavaScript to shuffle images every second
    setInterval(function() {
        <?php
            // Reset the result pointer to the beginning
            mysqli_data_seek($result_categories, 0);
            
            while ($category_row = mysqli_fetch_assoc($result_categories)) {
                $category_name = $category_row['category'];
            ?>
        // Get a random image URL for each category
        var imageUrls = [
            "admin/<?php echo $category_row['image']; ?>",
            "admin/<?php echo $category_row['image2']; ?>",
            // Add more image URLs if needed
        ];

        var randomImageUrl = imageUrls[Math.floor(Math.random() * imageUrls.length)];

        // Set the new image source for each category
        document.getElementById('<?php echo $category_name; ?>_img').src = randomImageUrl;
        <?php
            }
            ?>
    }, 1000); // Shuffle every 1000 milliseconds (1 second)
    </script>
</section>


<section class="items-product1 pt-30">
<h2 class="text-center pb-5 pt-5">Exlusive For You</h2>
    <div class="container">
        <div class="row">
            <?php
                include("admin/config.php");

                // Select distinct product categories from the database
                $select_categories = "SELECT * FROM categories WHERE cate_type = 'Exclusive' ORDER BY cat_id DESC";

                $result_categories = mysqli_query($config, $select_categories);

                // Check if there are categories available
                if (mysqli_num_rows($result_categories) > 0) {
                    while ($category_row = mysqli_fetch_assoc($result_categories)) {
                        $category_name = $category_row['category'];
                        $category_image = $category_row['image'];
                        $category_image2 = $category_row['image2'];
            ?>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
                <div class="single-items mb-20">
                    <div class="items-img">
                        <!-- Create an ID for each image -->
                        <img id="<?php echo $category_name; ?>_img"
                            style="height:150px;object-fit: cover;background-image:cover;"
                            src="admin/<?php echo $category_image; ?>" alt="">
                    </div>
                    <div class="items-details">
                        <h4><a href="category?category=<?php echo $category_name; ?>"><?php echo $category_name; ?></a>
                        </h4>
                        <a href="category?category=<?php echo $category_name; ?>" class="browse-btn">Shop Now</a>
                    </div>
                </div>
            </div>
            <?php
                    }
                } else {
                    echo "No categories found.";
                }
            ?>
        </div>
    </div>

    <script>
    // Use JavaScript to shuffle images every second
    setInterval(function() {
        <?php
            // Reset the result pointer to the beginning
            mysqli_data_seek($result_categories, 0);
            
            while ($category_row = mysqli_fetch_assoc($result_categories)) {
                $category_name = $category_row['category'];
            ?>
        // Get a random image URL for each category
        var imageUrls = [
            "admin/<?php echo $category_row['image']; ?>",
            "admin/<?php echo $category_row['image2']; ?>",
            // Add more image URLs if needed
        ];

        var randomImageUrl = imageUrls[Math.floor(Math.random() * imageUrls.length)];

        // Set the new image source for each category
        document.getElementById('<?php echo $category_name; ?>_img').src = randomImageUrl;
        <?php
            }
            ?>
    }, 1000); // Shuffle every 1000 milliseconds (1 second)
    </script>
</section>



<div class="latest-items section-padding fix">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-xl-12">
                <div class="nav-button">

                    <nav>
                        <div class="">
                        <h2  class="">Top Products</h2>
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
                        allProducts();
                        ?>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="testimonial-area testimonial-padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-10 col-md-11">
                <div class="h1-testimonial-active">

                    <div class="single-testimonial text-center">
                        <div class="testimonial-caption ">
                            <div class="testimonial-top-cap">
                                <h2>Customer Testimonial</h2>
                                <p>Everybody is different, which is why we offer styles for every body. Laborum fuga
                                    incidunt laboriosam voluptas iure, delectus dignissimos facilis neque nulla
                                    earum.</p>
                            </div>

                            <div class="testimonial-founder d-flex align-items-center justify-content-center">
                                <div class="founder-img">
                                    <img src="images/founder-img.png" alt="">
                                </div>
                                <div class="founder-text">
                                    <span>Petey Cruiser</span>
                                    <p>Designer at Colorlib</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="single-testimonial text-center">
                        <div class="testimonial-caption ">
                            <div class="testimonial-top-cap">
                                <h2>Customer Testimonial</h2>
                                <p>Everybody is different, which is why we offer styles for every body. Laborum fuga
                                    incidunt laboriosam voluptas iure, delectus dignissimos facilis neque nulla
                                    earum.</p>
                            </div>

                            <div class="testimonial-founder d-flex align-items-center justify-content-center">
                                <div class="founder-img">
                                    <img src="images/founder-img.png" alt="">
                                </div>
                                <div class="founder-text">
                                    <span>Petey Cruiser</span>
                                    <p>Designer at Colorlib</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
                        <div class="nav-tittle">
                            <h2>Featured Product</h2>
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



<div class="latest-items section-padding fix">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-xl-12">
                <div class="nav-button">

                    <nav>
                        <div class="nav-tittle">
                            <h2>Health Care Product</h2>
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
                        health();
                        ?>
                </div>
            </div>


        </div>
    </div>
</div>


<?php
    include('footer.php');
    ?>