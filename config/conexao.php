<?php
try{
// DEFINE cria uma constante, no parẽnteses temos o nome dela e o valor que ela guarda

 DEFINE('HOST','localhost');
 DEFINE('BD','bdAgenda');
 DEFINE('USER','root');
 DEFINE('PASS','bdjmf');

 // PDO é uma classe que faz a conexão com o banco de dados
 // em conect, no parẽnteses, informamos: o banco que vamos usar, o servidor- host - que está concatenado já que ele foi definido previamente e
 // as outras constantes necessárias

 // OBS: O CONECT de baixo não recebe atribuição mas está chamando ela.

 // O conect de baixo está fazendo uma verificação de erros, através do 'attr' e 'errmode'. Para mostrá-las na tela usamos o echo e o try catch
 // que se assemelha ao if.

 // OBS: TODO PDO TEM QUE USAR O 'TRY CATCH'. O CÓDIGO FICA NAS CHAVES DO TRY - TRY { 'CODE' } CATCH () {   } . 

 // Nos parenteses do catch criamos uma variável que armazenará os erros e será mostrada na tela. Lembrando que no echo usamos o setão novamente pois
 // a variável $a já foi criada e atribuida, portanto agora só poderá receber atribuições, neste caso, o getMessage() - método que mostrará o erro na tela.

 // OBS: o '<strong>' foi usado para "formalizar" o erro.

 

 $conect= new PDO('mysql:host='.HOST.';dbname='.BD,USER,PASS);
 $conect -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo"<strong>ERRO DE PDO = </strong>". $e->getMessage();

}