<!DOCTYPE html>
<html lang="km">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="//style.css">
    <title>Homework1</title>
</head>
<style>
    h1 {
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

.btn {
  display: inline-block;
  min-width: 36px;
  padding: 7px 10px;
  border-radius: 3px;
  color: #ffffff;
  font-size: 12px;
  font-weight: 700;
  line-height: 1;
  text-align: center;
  text-decoration: none;
}

.edit {
  background: #08bfd8;
}

.delete {
  background: #e52f51;
}
</style>
<body>
    <?php
    // $products = [
    //     ["id" => 1, "name" => "AK1", "price" => 2000],
    //     ["id" => 2, "name" => "AK2", "price" => 5000],
    //     ["id" => 3, "name" => "AK3", "price" => 1000],
    //     ["id" => 6, "name" => "AK6", "price" => 15000],
    //     ["id" => 7, "name" => "AK7", "price" => 34500],
    //     ["id" => 8, "name" => "AK8", "price" => 25000],
    // ];

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

    <main class="page">
        <h1>Product List</h1>

        <div class="table-wrap">
            <table>
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                 
                            <td><?php echo $username1; ?></td>
                            <td><?php echo $price1; ?></td>
                            <td><?php echo number_format($total1); ?></td>
                            <td><?php echo $username2; ?></td>
                            <td><?php echo $price2; ?></td>
                            <td><?php echo number_format($total2); ?></td>
                            <td><?php echo $username3; ?></td>
                            <td><?php echo $price3; ?></td>
                            <td><?php echo number_format($total3); ?></td>
                            <td><a class="btn edit" href="#">Edit</a></td>
                            <td><a class="btn delete" href="#">Delete</a></td>
                        </tr>
                 
                </tbody>
            </table>
        </div>
    </main>
</body>
</html>
