<!DOCTYPE html>
<html lang="km">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style.css">
    <title>HomeWork2</title>
</head>
<style>
    h2 {
  margin: 0 0 70px;
  padding-bottom: 8px;

  color: #17366d;
  font-family:
    "Khmer OS Muol Light", "Khmer OS Muol", "Noto Serif Khmer", serif;
  font-size: 42px;
  font-weight: 700;
  line-height: 1.25;
}
table {
  width: 100%;
  border-collapse: collapse;
  border: 1px solid #100d0d;
}
th,
td {
  padding: 11px 8px;
  border: 1px solid #e6e6e6;
  text-align: left;
  vertical-align: middle;
}
th {
  background: #20242a;
  border-color: #20242a;
  color: #ffffff;
  font-weight: 700;
}
tbody tr:nth-child(odd) {
  background: #f3f3f3;
}
tbody tr:nth-child(even) {
  background: #ffffff;
}
td {
  font-weight: 600;
}
.report-actions {
  margin-bottom: 20px;
}
.report-btn {
  display: inline-block;
  padding: 10px 15px;
  background-color: #20242a;
  color: #ffffff;
  text-decoration: none;
  border-radius: 4px;
  font-weight: 600;
}
</style>
<body>
    <?php
    $username = "AK";
    $price = "10000";
    $total = 0;
    $username1 = "AK1";
    $price1 = "15000";
    $total1 = 0;
    $username2 = "AK2";
    $price2 = "20000";
    $total2 = 0;
    $username3 = "AK3";
    $price3 = "30000";
    $total3 = 0;
    ?>
    <h2>Best Selling Products</h2>
    <div class="report-actions">
        <a class="report-btn" href="#">Download CSV</a>
        <a class="report-btn" href="#">Email Report</a>
    </div>
   
    <table>
        <thead>
            <tr>
                <th>Username</th>
                <th>Price</th>
                <th>Total</th>
                <th>Username</th>
                <th>Price</th>
                <th>Total</th>
                <th>Username</th>
                <th>Price</th>
                <th>Total</th>
                <th colspan="2">Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $username; ?></td>
                <td><?php echo $price; ?></td>
                <td><?php echo number_format($total); ?></td>
                <td><?php echo $username1; ?></td>
                <td><?php echo $price1; ?></td>
                <td><?php echo number_format($total1); ?></td>
                <td><?php echo $username2; ?></td>
                <td><?php echo $price2; ?></td>
                <td><?php echo number_format($total2); ?></td>
            </tr>
        </tbody>
    </table>
</body>
</html>
