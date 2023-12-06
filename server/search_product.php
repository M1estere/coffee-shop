<?php
    include 'db_connection.php';

    function search($category) {
        global $server_connection;

        $result_array = array();

        $category = ucfirst($category);
        $request = "SELECT * FROM products WHERE type = '$category';";
        
        if ($category == NULL)
            $request = "SELECT * FROM products;";

        $query = mysqli_query($server_connection, $request);
        if ($query) {

            $counter = 0;
            while ($product = mysqli_fetch_array($query)) {
                $product_name = 'Product '.$counter;

                $result_array[$product_name]['id'] = $product['id'];
                $result_array[$product_name]['name'] = $product['name'];
                $result_array[$product_name]['price'] = $product['price'];
                $result_array[$product_name]['calories'] = $product['calories'];
                $result_array[$product_name]['picture'] = $product['picture'];

                $counter += 1;
            }
        }

        return $result_array;
    }
?>