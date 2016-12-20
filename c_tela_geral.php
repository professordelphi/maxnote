<?php

include("c_telalogin.php");


class TelaGeral  extends Tela  {

	

function showFormGeral($destino)
{
echo "
              <form action='$destino' method='post' id='form'>

				<div id='formInterno'> ";
			

			include ("include_formulario_geral.php");  //campos para a tela de fornecedor como base
			
					
echo "			<div id='formInternoButton'> 
<input type='submit' name='btentrar' value='Entrar' id='btentrar'/>
			</div>
				</div>  <!--formInterno-->

              </form>

";
}




	function close(){
		echo "

                                                                  </div>   <!--fecha o div geral-->
				</body></html>
		";
	}
}
?>