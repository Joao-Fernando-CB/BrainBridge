let carrinho = [];

function adicionarCarrinho(curso) {
  carrinho.push(curso);
  atualizarCarrinho();
}

function atualizarCarrinho() {
  const carrinhoList = document.getElementById('carrinho');
  carrinhoList.innerHTML = '';
  
  carrinho.forEach(item => {
    const li = document.createElement('li');
    li.textContent = item;
    carrinhoList.appendChild(li);
  });
}

function finalizarCompra() {
  if (carrinho.length === 0) {
    alert('Seu carrinho está vazio!');
  } else {
    alert('Compra finalizada com sucesso!');
    carrinho = []; // Limpar carrinho após finalizar
    atualizarCarrinho();
  }
}
