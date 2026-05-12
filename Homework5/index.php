<!DOCTYPE html>
<html lang="km">
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

    <h1>លំហាត់អនុវត្តន៍</h1>
    
    <div class="container">
        <div class="form-section">
            <h3>Product Form</h3>
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
            // WE USE ONE VARIABLE ($data) TO STORE EVERYTHING
            $data = [
                'code'  => $_POST['code'],
                'name'  => $_POST['name'],
                'qty'   => (int)$_POST['qty'],
                'price' => (float)$_POST['price']
            ];

            // Calculate Base Total
            $data['total'] = $data['qty'] * $data['price'];

            // Logic for Discount/Tax percentage based on your image table
            if ($data['total'] < 10) { $data['percent'] = 0.10; }
            elseif ($data['total'] < 20) { $data['percent'] = 0.20; }
            elseif ($data['total'] < 30) { $data['percent'] = 0.30; }
            elseif ($data['total'] < 40) { $data['percent'] = 0.40; }
            elseif ($data['total'] < 50) { $data['percent'] = 0.50; }
            elseif ($data['total'] < 60) { $data['percent'] = 0.60; }
            else { $data['percent'] = 0.70; }

            // Calculate final payment (Total + Tax/Discount)
            $data['pay'] = $data['total'] + ($data['total'] * $data['percent']);
        ?>

        <div class="output-section">
            <table>
                <thead>
                    <tr>
                        <th>Code</th>
                        <th>Name</th>
                        <th>Qty</th>
                        <th>Price</th>
                        <th>Total</th>
                        <th>Pay</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?php echo $data['code']; ?></td>
                        <td><?php echo $data['name']; ?></td>
                        <td><?php echo $data['qty']; ?></td>
                        <td>$<?php echo number_format($data['price'], 2); ?></td>
                        <td>$<?php echo number_format($data['total'], 2); ?></td>
                        <td>$<?php echo number_format($data['pay'], 2); ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <?php } ?>
    </div>

</body>
</html>