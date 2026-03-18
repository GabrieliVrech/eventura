<?php
declare(strict_types=1);

$rootPath = $rootPath ?? '';
?>
<footer class="footer" id="footer">

  <div class="footer-wave-bottom" aria-hidden="true">
    <svg viewBox="0 0 1440 160" preserveAspectRatio="none">
      <path fill="#0f5e68" d="M0,120L60,110C120,100,240,80,360,75C480,70,600,80,720,96C840,112,960,134,1080,134C1200,134,1320,112,1380,100L1440,88L1440,160L0,160Z"></path>
    </svg>
  </div>

  <div class="container footer-inner">
    <div class="footer-brand">
      <div class="footer-content">
        <a href="<?= e($rootPath . 'index.php'); ?>" class="logo" aria-label="Eventura">
                <span class="logo-mark"></span>
                <span>EVENTURA</span>
        </a>

        <div class="footer-social" aria-label="Redes sociais">
          <a href="#" aria-label="Facebook">f</a>
          <a href="#" aria-label="Instagram">ig</a>
          <a href="#" aria-label="YouTube">yt</a>
          <a href="#" aria-label="X">x</a>
        </div>

      </div>
      
      <p>Eventura facilita a organização e promoção de eventos culturais, conectando pessoas através de experiências únicas.</p>
    </div>


      <div class="footer-columns">
        <div>
          <h3>Atalhos</h3>
          <ul class="footer-list">
            <li><a href="<?= e($rootPath . 'index.php'); ?>">Início</a></li>
            <li><a href="<?= e($rootPath . 'index.php#sobre'); ?>">Sobre</a></li>
            <li><a href="<?= e($rootPath . 'index.php#proximos-eventos'); ?>">Eventos</a></li>
            <li><a href="<?= e($rootPath . 'eventos/evento.php'); ?>">Calendário</a></li>
            <li><a href="<?= e($rootPath . 'index.php#criar-evento'); ?>">Contato</a></li>
          </ul>
        </div>

        <div>
          <h3>Contato</h3>
          <div class="footer-contact-list">
            <p><span class="footer-contact-icon">T</span>(00) 1234-5678</p>
            <p><span class="footer-contact-icon">@</span>contato@eventura.com</p>
            <p><span class="footer-contact-icon">P</span>Rua dos Eventos, 1500, Sousa, - SP</p>
            <p><span class="footer-contact-icon">W</span>www.eventura.com</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>
