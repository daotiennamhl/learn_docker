<html>

<head>
  <title>My Shop</title>
</head>

<body>
  <h1>Welcome to my shop</h1>
  <ul>
    <?php

    $json = file_get_contents('http://product-service/');
    $obj = json_decode($json);

    $products = $obj->products->data;

    foreach ($products as $product) {
      echo "<li>$product->id: $product->first_name $product->last_name</li>";
    }

    ?>
  </ul>
</body>

</html>