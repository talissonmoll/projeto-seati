<body>
    <div class="bg-contato">
        <br>
           <div class="flex-servicos">
                <h1 id="titulo1">Contato</h1>
                <hr class="line-custom">
                <p class="txtcenter white">Solicite seu orçamento!</p class="txtcenter">
            </div><!--flex-servicos-->
    </div><!--bg-servicos-->

    <div class="contato-container center">
        <h1>Contato</h1>
        <form method="$_POST" action="/email.php"></form>

        <div id="contato-msg">
            <form>
                <input type="text" name="nome" placeholder="Nome...">
                <div></div>
                <input type="text" name="email" placeholder="E-mail...">
                <div></div>
                <input type="text" name="telefone" placeholder="Telefone...">
                <div></div>
                <textarea placeholder="Sua mensagem..." name="mensagem" cols="30" rows="10"></textarea>
                <div></div>
                <input type="submit" name="acao" value="Enviar">
            </form>
        </div>
    

        <div id="contato-info">
            <h2>SEATI - Soluções</h2>
            <strong>Prestação de serviços no ES e RJ</strong>
        <br>
        <br>
        <strong>Solicite um orçamento: <a href="http://api.whatsapp.com/send?1=pt_BR&phone=5527997044710">(27) 99704-4710</strong></a>
        <br>
        <strong>Email:contato@seatisolucoes.com</strong>
            </div>
        
            <br>
            <br>

        <div id="redes-sociais">
            <h3>Sigam nossas redes sociais:</h3>
            <div id="redes-sociais-icons">
            <a href="https://www.instagram.com/seatisolucoes/"><i class="fab fa-instagram"></i>
            <a href="https://www.facebook.com/SEATI-Solu%C3%A7%C3%B5es-116593500248112"><i class="fab fa-facebook-square"></i>
            
            </div>
        </div>

    </div><!--CONTATO-CONTAINER-->
</body>