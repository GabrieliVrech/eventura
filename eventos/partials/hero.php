<section class="event-hero">
  <div class="hero-wave-top" aria-hidden="true">
    <svg viewBox="0 0 1440 120" preserveAspectRatio="none">
      <path fill="#0F5E68" fill-opacity="0.55" d="M0,64C180,32,360,96,540,90.7C720,85,900,11,1080,5.3C1260,0,1350,64,1440,69.3L1440,0L0,0Z"></path>
    </svg>
  </div>

  <?php require __DIR__ . '/../../partials/shared/header.php'; ?>

  <div class="container event-hero-content">
    <div class="event-hero-copy">
      <span class="event-hero-kicker">Página privada do evento</span>
      <h1><?= e($evento['titulo']); ?></h1>

      <div class="event-hero-meta">
        <div class="event-meta-item"><span class="event-meta-icon">🗓</span> <span><?= e($evento['data']); ?> • <?= e($evento['hora']); ?></span></div>
        <div class="event-meta-item"><span class="event-meta-icon">📍</span> <span><?= e($evento['local']); ?></span></div>
        <div class="event-meta-item"><span class="event-meta-icon">🎟</span> <span>A partir de <?= format_currency_brl((float) $evento['preco']); ?></span></div>
      </div>

      <div class="event-hero-actions">
        <a class="btn-primary" href="#comprar-ingressos">Comprar Ingressos</a>

        <div class="event-social-list" aria-label="Redes sociais">
          <a href="#" class="event-social-link" aria-label="WhatsApp">✉</a>
          <a href="#" class="event-social-link" aria-label="Instagram">◎</a>
          <a href="#" class="event-social-link" aria-label="YouTube">▶</a>
        </div>
      </div>
    </div>

    <div class="event-hero-media">
      <div class="event-hero-image-wrap">
        <img class="event-hero-image" src="<?= e($evento['imagem']); ?>" alt="Imagem do evento <?= e($evento['titulo']); ?>">
      </div>
    </div>
  </div>

  <div class="hero-wave-bottom" aria-hidden="true">
    <svg viewBox="0 0 1440 170" preserveAspectRatio="none">
      <path fill="#ffffff" d="M0,96L60,90.7C120,85,240,75,360,69.3C480,64,600,64,720,74.7C840,85,960,107,1080,101.3C1200,96,1320,64,1380,48L1440,32L1440,170L1380,170C1320,170,1200,170,1080,170C960,170,840,170,720,170C600,170,480,170,360,170C240,170,120,170,60,170L0,170Z"></path>
    </svg>
  </div>
</section>
