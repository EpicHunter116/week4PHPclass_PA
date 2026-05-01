<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Week4 PA - Steven</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        h2 {
            font-weight: bold;
        }

        table {
            border-collapse: collapse;
            width: 60%;
        }

        th {
            background-color: #87CEEB;
            border: 1px solid #999;
            padding: 8px 16px;
            font-weight: bold;
            text-align: center;
        }

        td {
            border: 1px solid #999;
            padding: 8px 16px;
            text-align: center;
        }

        tr:nth-child(even) td {
            background-color: #D3D3D3;
        }
    </style>
</head>
<body>

<h2>Current Products:</h2>

<table>
    <tr>
        <th>Product #</th>
        <th>Name</th>
        <th>Type</th>
    </tr>
    <?php foreach ($products as $product): ?>
    <tr>
        <td><?php echo htmlspecialchars($product['ProductNo']); ?></td>
        <td><?php echo htmlspecialchars($product['Name']); ?></td>
        <td><?php echo htmlspecialchars($product['Type']); ?></td>
    </tr>
    <?php endforeach; ?>
</table>

</body>
</html>
