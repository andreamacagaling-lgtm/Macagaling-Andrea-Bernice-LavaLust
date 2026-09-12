<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ProductViews</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f3effa;
            color: #333;
            margin: 0;
            padding: 30px;
        }

        .container {
            max-width: 1000px;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(106, 27, 154, 0.1);
        }

        h1 {
            color: #4a148c;
            margin-top: 0;
            border-bottom: 3px solid #e1bee7;
            padding-bottom: 10px;
        }

        .nav-links {
            margin-bottom: 20px;
        }

        .btn {
            display: inline-block;
            padding: 8px 16px;
            text-decoration: none;
            border-radius: 6px;
            font-weight: bold;
            transition: background-color 0.3s;
        }

        .btn-add {
            background-color: #7b1fa2;
            color: #ffffff;
        }

        .btn-add:hover {
            background-color: #4a148c;
        }

        .btn-logout {
            background-color: #f3effa;
            color: #7b1fa2;
            border: 1px solid #ba68c8;
            margin-left: 10px;
        }

        .btn-logout:hover {
            background-color: #e1bee7;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
            overflow: hidden;
            border-radius: 8px;
        }

        th {
            background-color: #6a1b9a;
            color: #ffffff;
            text-align: left;
            padding: 12px 15px;
        }

        td {
            padding: 12px 15px;
            border-bottom: 1px solid #e1bee7;
        }

        tr:nth-child(even) {
            background-color: #f8f4fc;
        }

        tr:hover {
            background-color: #f3effa;
        }

        .action-link {
            text-decoration: none;
            font-weight: bold;
            margin-right: 8px;
        }

        .link-edit {
            color: #8e24aa;
        }

        .link-edit:hover {
            text-decoration: underline;
        }

        .link-delete {
            color: #d32f2f;
        }

        .link-delete:hover {
            text-decoration: underline;
        }

        .no-products {
            text-align: center;
            color: #666;
            font-style: italic;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome to ProductViews</h1>

        <div class="nav-links">
            <a href="/products/create" class="btn btn-add">+ Add New Product</a>
            <a href="/logout" class="btn btn-logout">Logout</a>
        </div>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Product Name</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($products)): ?>
                    <?php foreach ($products as $p): ?>
                        <tr>
                            <td><?= $p['id']; ?></td>
                            <td><?= htmlspecialchars($p['product_name']); ?></td>
                            <td><?= htmlspecialchars($p['description']); ?></td>
                            <td>₱<?= number_format($p['price'], 2); ?></td>
                            <td><?= $p['quantity']; ?></td>
                            <td>
                                <a href="/products/edit/<?= $p['id']; ?>" class="action-link link-edit">Edit</a>
                                <a href="/products/delete/<?= $p['id']; ?>" class="action-link link-delete" onclick="return confirm('Are you sure you want to delete this product?');">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="6" class="no-products">No products found.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</body>
</html>