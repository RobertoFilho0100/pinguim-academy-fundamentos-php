<?php require 'includes/head.php' ?>
<?php require 'includes/top-nav.php' ?>
<?php require 'includes/header.php' ?>

<main>
    <div class="mx-auto max-w-7xl py-6 px-8">
        My main content here
    </div>

    <div>
        <h2>Products</h2>
        <ul>
            <?php foreach ($products as $product): ?>
                <li>
                    <a href="/products?id=<?= $product['id'] ?>">
                        <?= $product['name'] ?> - R$<?= $product['price'] ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</main>

<?php require 'includes/footer.php' ?>