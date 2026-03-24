<main class="home-main">
  <div class="container">
    <section class="showcase-card">
      <div class="section-heading" id="proximos-eventos">
        <h2>Próximos Eventos</h2>
        <p>Confira os eventos que estão chegando e garanta já o seu ingresso.</p>
      </div>

      <div class="events-browser" data-events-browser>
        <?php if ($eventos !== []): ?>
          <div class="events-grid" data-events-grid>
            <?php foreach ($eventos as $item): ?>
              <article class="event-card" data-events-card>
                <div class="event-card-media">
                  <span class="event-card-placeholder" aria-hidden="true">Imagem</span>
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
                      <span class="event-card-icon" aria-hidden="true">📍</span>
                      <span><?= e($item['local']); ?></span>
                    </div>
                    <div class="event-card-line">
                      <span class="event-card-icon" aria-hidden="true">🎟</span>
                      <span>A partir de <?= format_currency_eur((float) $item['preco']); ?></span>
                    </div>
                  </div>

                  <a class="btn-primary event-card-link" href="<?= e($rootPath . $item['link']); ?>">Saiba Mais</a>
                </div>
              </article>
            <?php endforeach; ?>
          </div>

          <div class="events-pagination" data-events-pagination role="navigation" aria-label="Paginação dos próximos eventos">
            <button class="events-pagination-control" type="button" data-events-prev aria-label="Ver página anterior">‹</button>
            <div class="events-pagination-dots" data-events-dots aria-label="Páginas de eventos"></div>
            <button class="events-pagination-control" type="button" data-events-next aria-label="Ver próxima página">›</button>
          </div>
        <?php else: ?>
          <p class="events-empty">Nenhum evento disponível no momento.</p>
        <?php endif; ?>
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
