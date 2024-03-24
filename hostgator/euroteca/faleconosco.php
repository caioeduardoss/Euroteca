<!-- Inicio Fale Conosco -->

<section id="contato" style="padding:20px 0"></section>
<section id="contact" class="sobre">

  <div class="container" data-aos="fade-up">

    <div class="section-header">

      <h1>Fale Conosco</h1>
      <p>Mande uma mensagem para gente!</p>
      
    <div id="trabalho" class="form">

      <form method="POST" id="formulario_contato" action="contatoemail.php" \t="validaForm(); return false;" class="php-email-form">

        <div class="row">

          <div class="form-group col-md-6">

            <input type="text" name="nome" class="form-control" id="nome" placeholder="Nome Completo" required>

          </div>
<br>
<br>
<br>

          <div class="form-group col-md-6">

            <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>

          </div>

        </div>
<br>
        <div class="form-group">

          <input type="text" class="form-control" name="mensagem" id="mensagem" placeholder="Assunto" required>

        </div>
        <br>
        <div class="form-group">

          <textarea class="form-control" name="mensagem2" rows="5" placeholder="Mensagem" required></textarea>

        </div>
        
        <div class="my-3">

          <div class="loading">Carregando</div>

          <div class="error-message">Não foi possivel enviar sua mensagem, tente novamente!</div>

          <div class="sent-message">Sua mensagem foi enviada. Obrigado!</div>

        </div>
<br>

        <div class="text-center"><button type="submit">Enviar Mensagem</button></div>

      </form>

    </div>



  </div>

</section>

<!-- Fim Fale Conosco -->