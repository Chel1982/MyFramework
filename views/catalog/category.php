<?php include (ROOT . '/views/layouts/header.php')?>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="left-sidebar">
                        <h2>Каталог</h2>
                        <div class="panel-group category-products">

                            <?php foreach($categories as $categoryItem): ?>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a href="/category/<?= $categoryItem['id'] ?>" class="<?php if ($categoryId == $categoryItem['id']) echo 'active'; ?>">
                                                <?= $categoryItem['name'] ?></a>
                                        </h4>
                                    </div>
                                </div>
                            <?php endforeach; ?>

                        </div>

                    </div>
                </div>

                <div class="col-sm-9 padding-right">
                    <div class="features_items"><!--features_items-->
                        <h2 class="title text-center">Последние товары</h2>

                        <?php foreach ($categoryProduct as $product): ?>

                            <div class="col-sm-4">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="<?= $product['image'] ?>" alt="" />
                                            <h2>$<?= $product['price'] ?></h2>
                                            <p>
                                                <a href="/product/<?= $product['id'] ?>"><?= $product['name'] ?></a>
                                            </p>
                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>В корзину</a>
                                        </div>
                                        <?php if ($product['is_new']): ?>
                                            <img src="/template/images/home/new.png" class="new" alt="">
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>

                        <?php endforeach; ?>

                    </div><!--features_items-->

                </div>
            </div>
        </div>
    </section>

<?php include (ROOT . '/views/layouts/footer.php')?>