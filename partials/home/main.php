<main class="home-main">
  <div class="container">
    <section class="showcase-card">
      <div class="section-heading" id="proximos-eventos">
        <h2>Próximos Eventos</h2>
        <p>Confira os eventos que estão chegando e garanta já o seu ingresso.</p>
      </div>

      <div class="carousel" data-carousel>
        <div class="carousel-shell">
          <button class="carousel-control" type="button" data-carousel-prev aria-label="Ver eventos anteriores">‹</button>

          <div class="carousel-viewport">
            <div class="carousel-track" data-carousel-track>
              <?php foreach ($eventos as $item): ?>
                <article class="event-card" data-carousel-card>
                  <div class="event-card-media">
                    <img src="<?= e($item['imagem']); ?>" alt="Imagem do evento <?= e($item['titulo']); ?>">
                    <div class="event-date-badge">
                      <strong><?= e($item['dia']); ?></strong>
                      <span><?= e($item['mes']); ?></span>
                      <small><?= e($item['ano']); ?></small>
                    </div>
                  </div>

                  <div class="event-card-body">
                    <h3><?= e($item['titulo']); ?></h3>

                    <div class="event-card-meta">
                      <div class="event-card-line">
                        <span class="event-card-icon">📍</span>
                        <span><?= e($item['local']); ?></span>
                      </div>
                      <div class="event-card-line">
                        <span class="event-card-icon">🎟</span>
                        <span>A partir de <?= format_currency_brl((float) $item['preco']); ?></span>
                      </div>
                    </div>

                    <a class="btn-primary event-card-link" href="<?= e($item['link']); ?>">Saiba Mais</a>
                  </div>
                </article>
              <?php endforeach; ?>
            </div>
          </div>

          <button class="carousel-control" type="button" data-carousel-next aria-label="Ver mais eventos">›</button>
        </div>

        <div class="carousel-dots" data-carousel-dots aria-label="Paginação do carrossel"></div>
      </div>

      <section class="create-card" id="criar-evento">
        <div class="create-copy">
          <h3><?= e($criacao['titulo']); ?></h3>
          <p><?= e($criacao['descricao']); ?></p>
          <a class="btn-primary create-card-link" href="#"><?= e($criacao['botao']); ?></a>
        </div>

        <div class="create-visual" aria-hidden="true">
          <div class="create-board">
            <div class="create-board-top">
              <span></span>
              <span></span>
              <span></span>
            </div>
            <div class="create-board-grid">
              <span></span>
              <span></span>
              <span></span>
              <span></span>
              <span class="is-accent"></span>
              <span></span>
              <span></span>
              <span></span>
              <span></span>
            </div>
          </div>

          <div class="create-megaphone"></div>
          <div class="create-spark create-spark-one"></div>
          <div class="create-spark create-spark-two"></div>
          <div class="create-spark create-spark-three"></div>
        </div>
      </section>
    </section>
  </div>
</main>
