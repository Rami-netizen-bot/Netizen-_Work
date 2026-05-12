<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Product Form Exercise</title>
    <style>
        body { font-family: sans-serif; margin: 40px; }
        h1 { color: #17366d; border-bottom: 2px solid #17366d; display: inline-block; }
        .container { display: flex; gap: 50px; border: 1px solid #ccc; padding: 20px; width: fit-content; }
        .form-section { border-right: 1px solid #ddd; padding-right: 30px; }
        input { margin-bottom: 10px; display: block; border: 1px solid #ccc; padding: 4px; }
        table { border-collapse: collapse; margin-top: 20px; width: 100%; }
        th { background: black; color: white; padding: 8px; border: 1px solid #333; }
        td { border: 1px solid #ddd; padding: 8px; text-align: center; }
    </style>
</head>
<body>

    <h1>Homework Exercise</h1>
    <div class="container">
        <div class="form-section">
            <h3>Product Input Form</h3>
            <form method="POST">
                Input Code: <input type="text" name="code">
                Product Name: <input type="text" name="name">
                Input Qty: <input type="number" name="qty">
                Input Price: <input type="number" name="price">
                <button type="submit" name="calculate">Submit</button>
            </form>
        </div>

        <?php
        if (isset($_POST['calculate'])) {
            $data = [
                'code' => $_POST['code'],
                'name' => $_POST['name'],
                'qty' => (int)$_POST['qty'],
                'price' => (float)$_POST['price'],
            ];

            $data['total'] = $data['qty'] * $data['price'];

            if ($data['qty'] > 10) {
                $data['discount'] = $data['total'] * 0.1;
            } elseif ($data['qty'] > 5) {
                $data['discount'] = $data['total'] * 0.05;
            } else {
                $data['discount'] = 0;
            }
        ?>

        <div class="output-section">
            <table>
                <thead>
                    <tr>
                        <th>Product Code</th>
                        <th>Product Name</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Total</th>
                        <!-- <th>Discount</th> -->
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?php echo $data['code']; ?></td>
                        <td><?php echo $data['name']; ?></td>
                        <td><?php echo $data['qty']; ?></td>
                        <td>$<?php echo $data['price']; ?></td>
                        <td>$<?php echo $data['total']; ?></td>
                        <!-- <td>$<?php echo $data['discount']; ?></td> -->
                    </tr>
                </tbody>
            </table>
        </div>
        <?php } ?>
    </div>

</body>
</html>
