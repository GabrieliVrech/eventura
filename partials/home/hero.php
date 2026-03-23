<section class="home-hero" id="sobre">
  <div class="hero-wave-top" aria-hidden="true">
    <svg viewBox="0 0 1440 120" preserveAspectRatio="none">
      <path fill="#0F5E68" fill-opacity="0.45" d="M0,64C180,32,360,96,540,90.7C720,85,900,11,1080,5.3C1260,0,1350,64,1440,69.3L1440,0L0,0Z"></path>
    </svg>
  </div>

  <?php require __DIR__ . '/../shared/header.php'; ?>

  <div class="container home-hero-content">
    <div class="home-hero-copy">
      <span class="hero-eyebrow">Texto exemplo....</span>
      <h1 class="title-home"><?= e($hero['titulo']); ?></h1>
      <p><?= e($hero['descricao']); ?></p>
      <button class="btn-primary" type="button"><?= e($hero['botao']); ?></button>
    </div>

    <div class="home-hero-visual" aria-hidden="true">
      <div class="visual-halo"></div>
      <div class="visual-shell">
        <div class="visual-card">
          <div class="visual-card-top">
            <span></span>
            <span></span>
            <span></span>
          </div>
          <div class="visual-calendar">
            <span class="is-wide"></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span class="is-highlight"></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
          </div>
        </div>

        <div class="visual-pin">
          <span class="visual-pin-center"></span>
        </div>

      </div>
    </div>
  </div>

  <div class="hero-wave-bottom" aria-hidden="true">
    <svg viewBox="0 0 1440 170" preserveAspectRatio="none">
      <path fill="#f6f8f9" d="M0,96L60,90.7C120,85,240,75,360,69.3C480,64,600,64,720,74.7C840,85,960,107,1080,101.3C1200,96,1320,64,1380,48L1440,32L1440,170L1380,170C1320,170,1200,170,1080,170C960,170,840,170,720,170C600,170,480,170,360,170C240,170,120,170,60,170L0,170Z"></path>
    </svg>
  </div>
</section>
