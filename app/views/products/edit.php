<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f3effa;
            color: #333;
            margin: 0;
            padding: 30px;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 80vh;
        }

        .card {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(106, 27, 154, 0.1);
            width: 100%;
            max-width: 450px;
        }

        h2 {
            color: #4a148c;
            margin-top: 0;
            border-bottom: 3px solid #e1bee7;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 18px;
        }

        label {
            display: block;
            font-weight: bold;
            color: #4a148c;
            margin-bottom: 6px;
        }

        input[type="text"],
        input[type="number"],
        textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ba68c8;
            border-radius: 6px;
            box-sizing: border-box;
            font-size: 14px;
            background-color: #f8f4fc;
            transition: border-color 0.3s, background-color 0.3s;
        }

        input[type="text"]:focus,
        input[type="number"]:focus,
        textarea:focus {
            outline: none;
            border-color: #7b1fa2;
            background-color: #ffffff;
        }

        textarea {
            resize: vertical;
        }

        .actions {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-top: 25px;
        }

        .btn-submit {
            background-color: #7b1fa2;
            color: #ffffff;
            border: none;
            padding: 10px 20px;
            border-radius: 6px;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s;
            font-size: 14px;
        }

        .btn-submit:hover {
            background-color: #4a148c;
        }

        .btn-cancel {
            color: #7b1fa2;
            text-decoration: none;
            font-weight: bold;
            padding: 10px 15px;
            border-radius: 6px;
            border: 1px solid #ba68c8;
            transition: background-color 0.3s;
            font-size: 14px;
        }

        .btn-cancel:hover {
            background-color: #e1bee7;
        }
    </style>
</head>
<body>
    <div class="card">
        <h2>Edit Product</h2>

        <form action="/products/edit/<?= $product['id']; ?>" method="POST">
            <div class="form-group">
                <label for="product_name">Product Name:</label>
                <input type="text" id="product_name" name="product_name" value="<?= htmlspecialchars($product['product_name']); ?>" required>
            </div>

            <div class="form-group">
                <label for="description">Description:</label>
                <textarea id="description" name="description" rows="4" required><?= htmlspecialchars($product['description']); ?></textarea>
            </div>

            <div class="form-group">
                <label for="price">Price:</label>
                <input type="number" id="price" step="0.01" name="price" value="<?= $product['price']; ?>" required>
            </div>

            <div class="form-group">
                <label for="quantity">Quantity:</label>
                <input type="number" id="quantity" name="quantity" value="<?= $product['quantity']; ?>" required>
            </div>

            <div class="actions">
                <button type="submit" class="btn-submit">Update Product</button>
                <a href="/ProductViews" class="btn-cancel">Cancel</a>
            </div>
        </form>
    </div>
</body>
</html>