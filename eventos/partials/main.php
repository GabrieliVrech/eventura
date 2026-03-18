<main class="event-main">
  <div class="container">
    <div class="event-content-card">
      <div class="event-content-grid">
        <div>
          <section class="event-section">
            <h2>Sobre o Evento</h2>
            <p><?= e($evento['descricao']); ?></p>
            <hr class="event-divider">
          </section>

          <section class="event-section">
            <h2>Programação do Evento</h2>
            <div class="event-schedule-card">
              <?php foreach ($evento['programacao'] as $item): ?>
                <div class="event-schedule-row">
                  <div class="event-schedule-time"><?= e($item['hora']); ?></div>
                  <div class="event-schedule-name"><?= e($item['artista']); ?></div>
                </div>
              <?php endforeach; ?>
            </div>
          </section>
        </div>

        <aside class="event-sidebar">
          <div class="ticket-card" id="comprar-ingressos">
            <div class="ticket-list">
              <div class="ticket-item">
                <div class="ticket-icon">🗓</div>
                <div>
                  <strong>Data e horário</strong>
                  <span><?= e($evento['data']); ?> • <?= e($evento['hora']); ?></span>
                </div>
              </div>

              <div class="ticket-item">
                <div class="ticket-icon">📍</div>
                <div>
                  <strong>Local</strong>
                  <span><?= e($evento['local']); ?></span>
                </div>
              </div>

              <div class="ticket-item">
                <div class="ticket-icon">🎟</div>
                <div>
                  <strong>Ingresso</strong>
                  <span>A partir de <?= format_currency_brl((float) $evento['preco']); ?></span>
                </div>
              </div>
            </div>

            <hr class="ticket-divider">

            <div class="quantity-box">
              <button class="qty-btn" type="button" id="decrease">−</button>
              <div class="qty-value" id="quantity"><?= e($quantidadeInicial); ?></div>
              <button class="qty-btn" type="button" id="increase">+</button>
              <div class="qty-total-box" id="qtyDisplay"><?= str_pad((string) $quantidadeInicial, 2, '0', STR_PAD_LEFT); ?></div>
            </div>

            <div class="total-row">
              <span>Total:</span>
              <strong id="totalValue"><?= format_currency_brl((float) $totalInicial); ?></strong>
            </div>

            <button class="btn-primary btn-block" type="button">Comprar Ingressos</button>

            <div class="payment-list" aria-label="Métodos de pagamento">
              <div class="payment-badge">VISA</div>
              <div class="payment-badge">Master</div>
              <div class="payment-badge">Pix</div>
              <div class="payment-badge">PayPal</div>
            </div>
          </div>
        </aside>
      </div>

      <?php require __DIR__ . '/comments.php'; ?>
    </div>
  </div>
</main>
