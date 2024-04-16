<?php
session_start();
include("admin/config.php");


if (isset($_SESSION['userDetails'])) {
    $userId = $_SESSION['userDetails']['user_id'];

    if (isset($_GET['wishl_id'])) {
        $productId = $_GET['wishl_id'];

        // Delete the item from the cart_data table
        $deleteQuery = "DELETE FROM wishlist_data WHERE user_id = '$userId' AND product_id = '$productId'";
        $deleteResult = mysqli_query($config, $deleteQuery);

        if ($deleteResult) {
            header("Location: wishlist"); // Redirect back to the cart page after deletion
            exit();
        } else {
            die("Error deleting item from cart_data: " . mysqli_error($config));
        }
    }
} else {
    // Redirect to the login page if the user is not logged in
    header("Location: signup");
    exit();
}

?>
