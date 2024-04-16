<?php
session_start();
include('./admin/config.php');
include('./functions/common_function.php');
include('header.php');
?>

<!-- <div class="col-12">
    <div class="mobile_menu d-block d-lg-none"></div>
</div>
</div>
</div>

</div>
</header>
<main> -->

<div class="hero-area section-bg2">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="slider-area">
                    <div class="slider-height2 slider-bg4 d-flex align-items-center justify-content-center">
                        <div class="hero-caption hero-caption2">
                            <h2>Category</h2>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item"><a href="index">Home</a></li>
                                    <li class="breadcrumb-item"><a href="#">Category</a></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="listing-area pt-50 pb-50">
    <div class="container">
        <div class="row">



            <div class="col-xl-9 col-lg-8 col-md-8">
                <div class="latest-items latest-items2">
                    <div class="row">
                        <!-- fetching a products -->
                        <?php
                            // calling a function
                            get_unique_categories();
                            ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</main>


<?php
include('footer.php');
?>