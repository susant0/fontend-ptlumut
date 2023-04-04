<?php

/** @var yii\web\View $this */

use yii\helpers\Url;
use richardfan\widget\JSRegister;

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <!-- <div class="jumbotron text-center bg-transparent">
        <h1 class="display-4">Congratulations!</h1>

        <p class="lead">You have successfully created your Yii-powered application.</p>

        <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Get started with Yii</a></p>
    </div> -->

    <div class="body-content">
        <header class="">

        </header>
        <main>
            <div class="row py-4 text-custom pb-5">
                <h2 class="display-3 fw-semibold">Bumbu Pawon</h2>
                <figure class="">
                    <blockquote class="blockquote">
                        <p>Kedai Bumbu Pawon menyajikan beragam hidangan kuliner nusantara yang menggugah selera dan diolah dengan bumbu-bumbu alami sehingga memberikan rasa yang autentik dan lezat.</p>
                    </blockquote>
                    <figcaption class="blockquote-footer pt-2 text-custom2">
                        Source : <cite title="Source Title">Owner Name</cite>
                    </figcaption>
                </figure>
            </div>
            <!-- card -->
            <div class="row text-center text-custom py-3">
                <h1 class="">Menu spesial dari kami</h1>
                <p class="lead">
                    Pilih sesuai dengan selera makanmu.
                </p>
            </div>
            <div class="row row-cols-1 row-cols-lg-3 text-custom">
                <div class="col py-4">
                    <div class="card h-100">
                        <div class="content-justify-center text-primary">
                            <img class="img-fluid" src="https://source.unsplash.com/600x350/?indoesian+street+food+1" alt="">
                        </div>

                        <div class="card-body">
                            <h5 class="card-title fs-4 fw-bolder">Menu Paket 1</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis porro nihil libero ullam laboriosam ratione tenetur, ducimus fugiat, placeat sit, perspiciatis et reprehenderit dolorem provident itaque dolor suscipit! Molestias, dolorum.</p>
                            <a href="#" class="btn btn-custom">Pesan</a>
                        </div>
                    </div>
                </div>
                <div class="col py-4">
                    <div class="card h-100">
                        <div class="content-justify-center text-warning">
                            <img class="img-fluid" src="https://source.unsplash.com/600x350/?indoesian+street+food+2" alt="">
                        </div>

                        <div class="card-body">
                            <h5 class="card-title fs-4 fw-bolder">Menu Paket 2</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, molestiae quam ipsa doloremque atque odio. Ullam optio tempore dolore, maxime perferendis impedit maiores cupiditate, quam assumenda nulla, similique sit amet harum accusantium!</p>
                            <a href="#" class="btn btn-custom">Pesan</a>
                        </div>
                    </div>
                </div>
                <div class="col py-4">
                    <div class="card h-100">
                        <div class="content-justify-center text-danger">
                            <img class="img-fluid" src="https://source.unsplash.com/600x350/?indoesian+street+food+3" alt="">
                        </div>

                        <div class="card-body">
                            <h5 class="card-title fs-4 fw-bolder">Menu Paket 3</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, hic consequatur expedita in impedit voluptas ipsam inventore nulla incidunt adipisci cum provident, esse aspernatur nobis commodi ea odit consequuntur. Eligendi, labore.</p>
                            <a href="#" class="btn btn-custom">Pesan</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- feature -->
    </div>
</div>
<?php JSRegister::begin() ?>
<script>

</script>
<?php JSRegister::end() ?>