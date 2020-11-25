<?php
$pagina = "Login";
include 'menu.php';
'<br>'
?>        
                <center>
        <form name="form" method="post" action="logar.php" >
            
            </p>
                <label> E-mail </label> <br />
                <input class="campo" type="email" name="email" />
            </p>
            <p>
                <label> Senha </label> <br />
                <input class="campo" type="password" name="senha" required />
        </p>
        <p>
               <input class="btnEnviar" type="submit" value="Enviar" />
        </p>
        </form>
                    <li><a href="cadastrar.php">cadastrar-se</a></li>
                </center>
                
    </body>