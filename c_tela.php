<?php


class Tela  {

function fillTitle($title)
{


			echo "	
                                                            <!doctype html>
                                       
                                                           <html lang='pt-br'>

                                                            <meta charset ='utf-8'>
					<head>
						<title>$title</title>
					
						<link href='estilos/estilo.css' rel='stylesheet' type='text/css' />
					
						
					</head> 
                                                                            <body>

                                                                       <div id='geral'>	
                                                                                            ";

}

	function showLogo(){
		echo "
					
					
					<section id='cima'>

                                                                                          <div id='logo'></div>
							
				                </section>
						
							
			";
	}
	

function showFormLogin($destino)
{
echo "
              <form action='$destino' method='post' id='form'>

			 <div id='formInterno'> 
			

                    <div id='formInternoEmail'> 
			
<div  id='lateralEmail'>░  ▒ </div> <!--alt+176 e alt + 177 -->
<input type='email' name='email' size='50' placeholder='  Email' id='txtEmail' />

					</div>

					<div id='formInternoPhone'> 
					
<div id='lateralPhone'>░  ▒ </div> <!--alt+176 e alt + 177 -->
<input type='phone' name='phone'    size='50' placeholder='  Telefone' id='txtPhone' />

					</div>
					
			<div id='formInternoButton'> 
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