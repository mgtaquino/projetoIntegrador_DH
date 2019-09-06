<?php
    require "inc/head.php";
    require "inc/nav.php";
?>

    <main class="page catalog-page">
        <section class="clean-block clean-catalog dark">
            <div class="container">
                <div class="block-heading">
                    <h2 style="color: #083b66;">Produtos</h2>
                    <p>Conheça os produtos à venda</p>
                </div>
                <div class="content">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="d-none d-md-block">
                                <div class="filters">
                                    <div class="filter-item" id="filters2">
                                        <h3>Categorias</h3>
                                        
                                        <div class="form-check"><input class="form-check-input" type="checkbox"
                                                id="formCheck-1" value=".iphone"><label class="form-check-label"
                                                for="formCheck-1">iPhone</label></div>
                                        <div class="form-check"><input class="form-check-input" type="checkbox"
                                                id="formCheck-2" value=".ipad"><label class="form-check-label"
                                                for="formCheck-2">iPad</label></div>
                                        <div class="form-check"><input class="form-check-input" type="checkbox"
                                                id="formCheck-3" value=".mackbook"><label class="form-check-label"
                                                for="formCheck-3">Macbook</label></div>

                                    </div>
                                    
                                    <div class="filter-item"></div>
                                    <div class="filter-item"></div>
                                </div>
                            </div>
                            <div class="d-md-none"><a class="btn btn-link d-md-none filter-collapse"
                                    data-toggle="collapse" aria-expanded="false" aria-controls="filters" href="#filters"
                                    role="button" style="opacity: 1;">Filters<i
                                        class="icon-arrow-down filter-caret"></i></a>
                                <div class="collapse" id="filters">
                                    <div class="filters">
                                        <div class="filter-item" id="filters2">
                                            <h3>Categorias</h3>
                                            <div class="form-check"><input class="form-check-input" type="checkbox"
                                                    id="formCheck-1" value=".iphone"><label class="form-check-label"
                                                    for="formCheck-1">iPhone</label></div>
                                            <div class="form-check"><input class="form-check-input" type="checkbox"
                                                    id="formCheck-2" value=".ipad"><label class="form-check-label"
                                                    for="formCheck-2">iPad</label></div>
                                            <div class="form-check"><input class="form-check-input" type="checkbox"
                                                    id="formCheck-3" value=".mackbook"><label class="form-check-label"
                                                    for="formCheck-3">Macbook</label></div>
                                        </div>
                                        <div class="filter-item"></div>
                                        <div class="filter-item"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="products">
                                <div class="row no-gutters" id="container2">

                                    <div class="col-12 col-md-6 col-lg-4 item iphone">
                                        <div class="clean-product-item">
                                            <div class="image"><a href="product-page.php"><img
                                                        class="img-fluid d-block mx-auto"
                                                        src="assets/img/img%20store/iphone-xr-black.png"></a></div>
                                            <div class="product-name"><a href="product-page.php">iphone1</a></div>
                                            <div class="about">
                                                <div class="price">
                                                    <h3>$100</h3>
                                                </div><a class="btn btn-sm border rounded-0" role="button"
                                                    style="color: #083b66;" href="product-page.php">Saiba Mais</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-6 col-lg-4 item ipad">
                                        <div class="clean-product-item">
                                            <div class="image"><a href="#"><img class="img-fluid d-block mx-auto"
                                                        src="assets/img/img%20store/iphone-xr-white.png"></a></div>
                                            <div class="product-name"><a href="#">iphone2</a></div>
                                            <div class="about">
                                                <div class="price">
                                                    <h3>$100</h3>
                                                </div><a class="btn btn-sm border rounded-0" role="button"
                                                    style="color: #083b66;" href="product-page.php">Saiba Mais</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-6 col-lg-4 item mackbook">
                                        <div class="clean-product-item">
                                            <div class="image"><a href="#"><img class="img-fluid d-block mx-auto"
                                                        src="assets/img/img%20store/iphone-xr-orange.png"></a></div>
                                            <div class="product-name"><a href="#">iphone3</a></div>
                                            <div class="about">
                                                <div class="price">
                                                    <h3>$100</h3>
                                                </div><a class="btn btn-sm border rounded-0" role="button"
                                                    style="color: #083b66;" href="product-page.php">Saiba Mais</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-6 col-lg-4">
<!--
                                        <div class="clean-product-item">
                                            <div class="image"><a href="#"><img class="img-fluid d-block mx-auto"
                                                        src="assets/img/tech/image2.jpg"></a></div>
                                            <div class="product-name"><a href="#">Lorem ipsum dolor sit amet</a></div>
                                            <div class="about">
                                                <div class="price">
                                                    <h3>$100</h3>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-12 col-md-6 col-lg-4">

                                        <div class="clean-product-item">
                                            <div class="image"><a href="#"><img class="img-fluid d-block mx-auto"
                                                        src="assets/img/tech/image2.jpg"></a></div>
                                            <div class="product-name"><a href="#">Lorem ipsum dolor sit amet</a></div>
                                            <div class="about">
                                                <div class="price">
                                                    <h3>$100</h3>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-12 col-md-6 col-lg-4">

                                        <div class="clean-product-item">
                                            <div class="image"><a href="#"><img class="img-fluid d-block mx-auto"
                                                        src="assets/img/tech/image2.jpg"></a></div>
                                            <div class="product-name"><a href="#">Lorem ipsum dolor sit amet</a></div>
                                            <div class="about">
                                                <div class="price">
                                                    <h3>$100</h3>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
-->
                                </div>
                                <nav>
                                    <ul class="pagination"></ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php
        require "inc/footer.php";
    ?>