document.addEventListener('DOMContentLoaded', () => {
  const quantityElement = document.getElementById('quantity');
  const totalElement = document.getElementById('totalValue');
  const qtyDisplay = document.getElementById('qtyDisplay');
  const decreaseBtn = document.getElementById('decrease');
  const increaseBtn = document.getElementById('increase');

  if (!quantityElement || !totalElement || !qtyDisplay || !decreaseBtn || !increaseBtn) {
    return;
  }

  const precoUnitario = Number.parseFloat(document.body.dataset.precoUnitario ?? '0');
  let quantity = Number.parseInt(document.body.dataset.quantidadeInicial ?? '1', 10);

  function formatCurrency(value) {
    return value.toLocaleString('pt-PT', {
      style: 'currency',
      currency: 'EUR'
    });
  }

  function updateTicketUI() {
    quantityElement.textContent = String(quantity);
    qtyDisplay.textContent = String(quantity).padStart(2, '0');
    totalElement.textContent = formatCurrency(precoUnitario * quantity);
  }

  decreaseBtn.addEventListener('click', () => {
    if (quantity > 1) {
      quantity -= 1;
      updateTicketUI();
    }
  });

  increaseBtn.addEventListener('click', () => {
    quantity += 1;
    updateTicketUI();
  });

  updateTicketUI();
});
