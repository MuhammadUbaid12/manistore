<style>
    .search-results {
        /* border: 1px solid #ccc; */
        padding: 10px;
        margin-top: 5px;
        float:left;
        /* max-width: 300px; Adjust as needed */
    }

    .search-results a {
        width:100%;
        display: block;
        margin-bottom: 5px;
        text-decoration: none;
        color: white;
    }

</style>

<?php
include_once("./admin/config.php");

if (isset($_POST['searchTerm'])) {
    $searchTerm = mysqli_real_escape_string($config, $_POST['searchTerm']);
    $query = "SELECT p_id, p_name FROM products WHERE p_name LIKE '%$searchTerm%' LIMIT 5";
    $result = mysqli_query($config, $query);

    echo '<div class="search-results">';
    while ($row = mysqli_fetch_assoc($result)) {
        $product_id = $row['p_id'];
        $product_name = $row['p_name'];
        
        echo "<a href='detail?detail_id=$product_id'>$product_name</a><br>";
    }
    echo '</div>';
}
?>
