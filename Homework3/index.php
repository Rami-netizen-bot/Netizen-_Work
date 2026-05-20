<!DOCTYPE html>
<html lang="km">
<head>
    <meta charset="UTF-8">
    <title>Homework - Product Grid</title>
    <style>
        body { font-family: 'Khmer OS Battambang', sans-serif; margin: 40px; background-color: #f5f5f5; }
        
        h1 { 
            color: #17366d; 
            /* font-family: "Khmer OS Muol Light";  */
            /* border-bottom: 3px solid #17366d;  */
            display: inline-block;
            margin-bottom: 10px;
        }
        .sub-title { font-size: 20px; color: #333; margin-bottom: 30px; }

   
        .product-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
            gap: 20px;
        }

        .product-card {
            background: white;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 15px;
            text-align: center;
            transition: transform 0.2s;
        }
        .product-card:hover { transform: translateY(-5px); box-shadow: 0 5px 15px rgba(0,0,0,0.1); }

        .product-card img { max-width: 100%; height: auto; border-radius: 4px; }
        .product-name { font-size: 14px; font-weight: bold; margin: 10px 0; min-height: 40px; }
        .product-price { color: #28a745; font-weight: bold; font-size: 16px; }
    </style>
</head>
<body>

   <?php 
   $price = 10000;
   $model = "AK";
   $urlimage = "https://static.beebom.com/wp-content/uploads/2026/01/Control_Fruit.png.webp?w=854";
   ?>
    <h1>ផលិតផល</h1>
    <div class="sub-title">បង្ហាញផលិតផលជារៀងរាល់ថ្ងៃ</div>

    <div class="product-grid">
        <div class="product-card">
            <img src="<?php echo $urlimage; ?>" alt="">
            <div class="product-name"><?php echo $model; ?></div>
            <div class="product-price"><?php echo number_format($price) . '៛'; ?></div>
        </div>
        <div class="product-card">
            <img src="<?php echo $urlimage; ?>" alt="">
            <div class="product-name"><?php echo $model; ?></div>
            <div class="product-price"><?php echo number_format($price) . '៛'; ?></div>
        </div>
        <div class="product-card">
            <img src="<?php echo $urlimage; ?>" alt="">
            <div class="product-name"><?php echo $model; ?></div>
            <div class="product-price"><?php echo number_format($price) . '៛'; ?></div>
        </div>
        <div class="product-card">
            <img src="<?php echo $urlimage; ?>" alt="">
            <div class="product-name"><?php echo $model; ?></div>
            <div class="product-price"><?php echo number_format($price) . '៛'; ?></div>
        </div>
        <div class="product-card">
            <img src="<?php echo $urlimage; ?>" alt="">
            <div class="product-name"><?php echo $model; ?></div>
            <div class="product-price"><?php echo number_format($price) . '៛'; ?></div>
        </div>
        <div class="product-card">
            <img src="<?php echo $urlimage; ?>" alt="">
            <div class="product-name"><?php echo $model; ?></div>
            <div class="product-price"><?php echo number_format($price) . '៛'; ?></div>
        </div>
     
    </div>

</body>
</html>