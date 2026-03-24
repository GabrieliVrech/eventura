document.addEventListener('DOMContentLoaded', () => {
  const eventsBrowser = document.querySelector('[data-events-browser]');

  if (!eventsBrowser) {
    return;
  }

  const cards = Array.from(eventsBrowser.querySelectorAll('[data-events-card]'));
  const prevButton = eventsBrowser.querySelector('[data-events-prev]');
  const nextButton = eventsBrowser.querySelector('[data-events-next]');
  const dotsContainer = eventsBrowser.querySelector('[data-events-dots]');

  if (!prevButton || !nextButton || !dotsContainer || cards.length === 0) {
    return;
  }

  let currentPage = 0;

  function getCardsPerRow() {
    if (window.innerWidth <= 700) {
      return 1;
    }

    if (window.innerWidth <= 1100) {
      return 2;
    }

    return 3;
  }

  function getCardsPerPage() {
    return getCardsPerRow() * 2;
  }

  function getTotalPages() {
    return Math.max(1, Math.ceil(cards.length / getCardsPerPage()));
  }

  function updateCards() {
    const cardsPerPage = getCardsPerPage();
    const start = currentPage * cardsPerPage;
    const end = start + cardsPerPage;

    cards.forEach((card, index) => {
      card.hidden = index < start || index >= end;
    });
  }

  function renderDots() {
    const totalDots = getTotalPages();

    dotsContainer.innerHTML = '';

    for (let index = 0; index < totalDots; index += 1) {
      const dot = document.createElement('button');

      dot.type = 'button';
      dot.className = 'events-pagination-dot';
      dot.setAttribute('aria-label', `Ir para a página ${index + 1} de eventos`);
      dot.addEventListener('click', () => {
        currentPage = index;
        updatePagination();
      });

      dotsContainer.appendChild(dot);
    }
  }

  function updateDots() {
    const dots = Array.from(dotsContainer.children);

    dots.forEach((dot, index) => {
      const isActive = index === currentPage;

      dot.classList.toggle('is-active', isActive);

      if (isActive) {
        dot.setAttribute('aria-current', 'page');
        return;
      }

      dot.removeAttribute('aria-current');
    });
  }

  function updateControls() {
    const lastPage = getTotalPages() - 1;

    prevButton.disabled = currentPage === 0;
    nextButton.disabled = currentPage >= lastPage;
  }

  function updatePagination() {
    const lastPage = getTotalPages() - 1;

    currentPage = Math.min(currentPage, lastPage);
    updateCards();
    updateDots();
    updateControls();
  }

  function syncPagination() {
    renderDots();
    updatePagination();
  }

  prevButton.addEventListener('click', () => {
    if (currentPage === 0) {
      return;
    }

    currentPage -= 1;
    updatePagination();
  });

  nextButton.addEventListener('click', () => {
    if (currentPage >= getTotalPages() - 1) {
      return;
    }

    currentPage += 1;
    updatePagination();
  });

  window.addEventListener('resize', syncPagination);

  syncPagination();
});
