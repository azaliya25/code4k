<?php
require_once 'php/ProductCatalog.php';

$catalog = new ProductCatalog();

$catalog->addProduct('Ноутбук', 90000, 'Электроника');
$catalog->addProduct('Мармелад', 200, 'Продукты');
$catalog->addProduct('Чизкейк', 190, 'Продукты');
$catalog->addProduct('Стиралка', 30000, 'Бытовая техника');
$catalog->addProduct('Кроссовки', 2000, 'Одежда');
$catalog->addProduct('Штаны', 500, 'Одежда');

$keyword = $_GET['search'] ?? '';
$category = $_GET['category'] ?? '';

$products = $keyword ? $catalog->searchProducts($keyword) : $catalog->getProducts();

if ($category) {
    $products = $catalog->filterByCategory($category);
}

$categories = $catalog->getCategories();
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Каталог товаров</title>
    <link rel="stylesheet" href="assets/st5.css">
</head>

<body>
    <div class="container">
        <h1>Каталог</h1>

        <form method="GET" action="pr5.php" class="search-form">
            <div class="container__form">
                <input type="text" name="search" placeholder="Поиск товаров..." value="<?= htmlspecialchars($keyword) ?>">
                <select name="category">
                    <option value="">Все категории</option>
                    <?php foreach ($categories as $cat): ?>
                        <option value="<?= htmlspecialchars($cat) ?>" <?= $cat === $category ? 'selected' : '' ?>>
                            <?= htmlspecialchars($cat) ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>
            <button type="submit">Искать</button>
        </form>

        <div class="product-list">
            <?php if (count($products) > 0): ?>
                <?php foreach ($products as $product): ?>
                    <div class="product-card">
                        <h2><?= htmlspecialchars($product['name']) ?></h2>
                        <p>Цена: <?= htmlspecialchars($product['price']) ?> руб.</p>
                        <p>Категория: <?= htmlspecialchars($product['category']) ?></p>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <p>Товары не найдены.</p>
            <?php endif; ?>
        </div>
    </div>
</body>

</html>
