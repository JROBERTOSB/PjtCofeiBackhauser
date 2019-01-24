<?php include 'php_components/header.php'; ?>



	<div id="contato">
      <div id="contato_1" >
           <p class="titulo_post">DIGA OI!</p>
           <p id="paragrafo_1">Aqui, você vai poder solicitar maiores informações,
            pedir orçamentos, enviar críticas ou elogios!</p>

            <p id="paragrafo_2">Frete a combinar • Retirada nos bairros de 
            Perdizes ou Paraíso (São Paulo - SP)</p>

            
      </div >
      <p id="titulo_map">CONHEÇA NOSSA LOCALIZAÇÃO</p>
      

    <div id="contato_2" >

      <form method="POST" action="email/EnviaEmail.php">

      	<div id="nome_contato">

      		<label>Nome</label><br>
		<textarea name="nome" type="text" cols="20" rows="1"></textarea>

      	</div>
		
		<div id="assunto_contato">
           
           <label>Assunto</label><br>
		<textarea name="assunto" type="text" cols="20" rows="1"></textarea>

		</div>
		
        <div id="email_contato">
           <label>Email</label><br>
		<textarea name="email" type="text" cols"20" rows="1"></textarea>

        </div>
		
		<div id="mensagem_contato">
            <label>Mesagem</label><br>
		<textarea name="mensagem" type="text" cols="35" rows="10"></textarea>

		</div>
		
		
           
           <button id="btn_contato" type="submit">Enviar</button><br>

				
		
	  </form>

    </div>

    <div id="contato_3" >
          <iframe src="https://www.google.com/maps/embed?pb=
           !1m18!1m12!1m3!1d3657.2291073725514!2d-46.712217285
           02216!3d-23.560213684683465!2m3!1f0!2f0!3f0!3m2!1i1024!
           2i768!4f13.1!3m3!1m2!1s0x94ce564ca685a0f7%3A0x5b416c87db
           e6546f!2sAv.+Magalh%C3%A3es+de+Castro%2C+120+-+Butant%C3%
           A3%2C+S%C3%A3o+Paulo+-+SP!5e0!3m2!1spt-BR!2sbr!4v1493083955651"
            width="400" height="370" frameborder="0" style="border:0"
             allowfullscreen></iframe>

          
    </div>



	</div>


  

	
	


<?php include 'php_components/footer.php'; ?>