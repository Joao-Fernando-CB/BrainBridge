  <!-- Seção de Produtos -->
  <section id="produtos" class="produtos">
    <div class="container">
      <h2>Cursos de NR Disponíveis</h2>

      <!-- Lista de Cursos NR -->
      <div class="produtos-lista">
        <!-- Exemplo de Curso NR -->
        <div class="produto">
          <img src="https://www.maconsultoria.com/wp-content/uploads/2024/02/NR01-ATUALIZADA-scaled.webp" alt="Curso NR 01">
          <div class="produto-info">
            <h3>NR 01 - Disposições Gerais</h3>
            <p>Curso sobre as disposições gerais e exigências de segurança e saúde no trabalho.</p>
            <button class="comprar" onclick="adicionarCarrinho('NR 01')">Comprar</button>
          </div>
        </div>

        <div class="produto">
          <img src="https://www.maconsultoria.com/wp-content/uploads/2021/09/nr-2-norma-regulamentadora-2-1-768x432.png" alt="Curso NR 02">
          <div class="produto-info">
            <h3>NR 02 - Inspeção Prévia</h3>
            <p>Curso para entender os requisitos de inspeção prévia e aprovação de instalações.</p>
            <button class="comprar" onclick="adicionarCarrinho('NR 02')">Comprar</button>
          </div>
        </div>

        <div class="produto">
          <img src="https://th.bing.com/th/id/R.78578827420941556c3c2f3af81ccc99?rik=I2CPiAEhdsGmCA&pid=ImgRaw&r=0" alt="Curso NR 03">
          <div class="produto-info">
            <h3>NR 03 - Embargo ou Interdição</h3>
            <p>Curso para entender como funcionam embargos e interdições em atividades ou instalações.</p>
            <button class="comprar" onclick="adicionarCarrinho('NR 03')">Comprar</button>
          </div>
        </div>

        <div class="produto">
          <img src="https://www.maconsultoria.com/wp-content/uploads/2021/09/NR-4-Norma-Regulamentadora-4-1-768x432.png" alt="Curso NR 04">
          <div class="produto-info">
            <h3>NR 04 - Serviços Especializados</h3>
            <p>Curso sobre os serviços especializados em engenharia de segurança e medicina do trabalho.</p>
            <button class="comprar" onclick="adicionarCarrinho('NR 04')">Comprar</button>
          </div>
        </div>

        
      </div>

      <h3>Carrinho de Compras</h3>
      <ul id="carrinho">
        <!-- Itens do carrinho serão exibidos aqui -->
      </ul>
      <button id="finalizarCompra" onclick="finalizarCompra()">Finalizar Compra</button>
    </div>
  </section>

  <!-- Seção sobre -->
  <section id="sobre" class="sobre">
    <div class="container">
      <h2>Sobre o Site</h2>
      <p>Este site oferece cursos especializados nas Normas Regulamentadoras (NRs) para garantir conformidade com as leis de segurança e saúde no trabalho.</p>
    </div>
  </section>

  <!-- Seção de Contato -->
  <section id="contato" class="contato">
    <div class="container">
      <h2>Contato</h2>
      <p>Entre em contato conosco para mais informações sobre os cursos oferecidos.</p>
      <form action="#">
        <input type="text" name="nome" placeholder="Seu Nome" required>
        <input type="email" name="email" placeholder="Seu Email" required>
        <textarea name="mensagem" placeholder="Sua Mensagem" required></textarea>
        <button type="submit">Enviar</button>
      </form>
    </div>
  </section>

  
