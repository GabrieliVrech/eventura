document.addEventListener('DOMContentLoaded', () => {
  const carousel = document.querySelector('[data-carousel]');

  if (!carousel) {
    return;
  }

  const track = carousel.querySelector('[data-carousel-track]');
  const cards = Array.from(carousel.querySelectorAll('[data-carousel-card]'));
  const prevButton = carousel.querySelector('[data-carousel-prev]');
  const nextButton = carousel.querySelector('[data-carousel-next]');
  const dotsContainer = carousel.querySelector('[data-carousel-dots]');

  if (!track || !prevButton || !nextButton || !dotsContainer || cards.length === 0) {
    return;
  }

  let currentIndex = 0;

  function getVisibleCards() {
    if (window.innerWidth <= 700) {
      return 1;
    }

    if (window.innerWidth <= 1100) {
      return 2;
    }

    return 3;
  }

  function getStepWidth() {
    const firstCard = cards[0];
    const styles = window.getComputedStyle(track);
    const gap = Number.parseFloat(styles.columnGap || styles.gap || '0');

    return firstCard.getBoundingClientRect().width + gap;
  }

  function getMaxIndex() {
    return Math.max(0, cards.length - getVisibleCards());
  }

  function renderDots() {
    const totalDots = getMaxIndex() + 1;

    dotsContainer.innerHTML = '';
    dotsContainer.hidden = totalDots <= 1;

    for (let index = 0; index < totalDots; index += 1) {
      const dot = document.createElement('button');

      dot.type = 'button';
      dot.className = 'carousel-dot';
      dot.setAttribute('aria-label', `Ir para o grupo ${index + 1} de eventos`);
      dot.addEventListener('click', () => {
        currentIndex = index;
        updateCarousel();
      });

      dotsContainer.appendChild(dot);
    }
  }

  function updateDots() {
    const dots = Array.from(dotsContainer.children);

    dots.forEach((dot, index) => {
      dot.classList.toggle('is-active', index === currentIndex);
    });
  }

  function updateControls() {
    const maxIndex = getMaxIndex();

    prevButton.disabled = currentIndex === 0;
    nextButton.disabled = currentIndex >= maxIndex;
  }

  function updateCarousel() {
    const maxIndex = getMaxIndex();

    currentIndex = Math.min(currentIndex, maxIndex);
    track.style.transform = `translateX(-${getStepWidth() * currentIndex}px)`;

    updateControls();
    updateDots();
  }

  function syncCarousel() {
    renderDots();
    updateCarousel();
  }

  prevButton.addEventListener('click', () => {
    if (currentIndex === 0) {
      return;
    }

    currentIndex -= 1;
    updateCarousel();
  });

  nextButton.addEventListener('click', () => {
    if (currentIndex >= getMaxIndex()) {
      return;
    }

    currentIndex += 1;
    updateCarousel();
  });

  window.addEventListener('resize', syncCarousel);

  syncCarousel();
});
