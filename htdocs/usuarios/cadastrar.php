<?php
$pagina = "Cadastrar";
include 'menu.php';
'<br>'
?>        
		<center>
        <form name="form" method="post" action="insert.php" >
            
            </p>
                <label>      Nome </label> <br />
                <input class="campo" type="nome" name="nome" />
            </p>
            </p>
                <label>      Sobrenome </label> <br />
                <input class="campo" type="sobrenome" name="sobrenome" />
            </p>
            </p>
                <label>     E-mail </label> <br />
                <input class="campo" type="email" name="email" />
            </p>
            <p>
                <label>      Senha </label> <br />
                <input class="campo" type="password" name="senha" required />
        </p>
        <p>
               <input class="btnEnviar" type="submit" value="Enviar" />
        </p>
		</center>
        </form>
</html>
