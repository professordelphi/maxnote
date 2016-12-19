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
						<link href='estilo.css' rel='stylesheet' type='text/css' />
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
              <form action='$destino' method='post'>

<div class='lateral'></div>
<input type='email' name='email' size='50' placeholder='Digite Email' />
<br/>
<div class='lateral'></div>
<input type='phone' name='phone'    size='50' placeholder='Digite Telefone' />
<input type='submit' name='btentrar' value='Entrar' id='btentrar'/>

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