<section id="produtos">
    <h2 class="titulo">Produtos</h2>
    <main class="container">
        <div class="row">

        <?php foreach ($produtos as $key => $info) { ?>

            <div class="col-lg-3 col-md-6 col-sm-12">
                <figure>
                    <img src="./assets/img/<?= $info['imagem'] ?>" alt="Poster do jogo" class="foto-produto">
                    <figcaption>
                        <h4><?= $info['titulo'] ?></h4>
                        <span class="preco">R$ <?= $info['preco'] ?></span>
                        <span class="avaliacao">

                            <?php for ($i = 0; $i < $info['avaliacao']; $i++) { ?>

                                <i class="bi bi-star-fill"></i>

                            <?php } ?>

                            <?php for ($i = 0; $i < 5 - $info['avaliacao']; $i++) { ?>

                                <i class="bi bi-star"></i>

                            <?php } ?>
                            <!-- <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-half"></i>
                        <i class="bi bi-star"></i>
                         -->
                        </span>
                    </figcaption>
                </figure>
            </div>

        <?php } ?>

        </div>
    </main>
</section>