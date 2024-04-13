<?php
$user = "juquinha@pizzas.com.br";
$pwd = "1234";
$perfil = "CLI";



// $variavel = 140;

// echo"Bem Vindo, " .  $user . PHP_EOL . "<br> O valor da variável é " . $variavel . "<br>"; 

// var_dump( $user );
// var_dump( $variavel);

if ($user == "juquinha@pizzas.com.br" && $pwd == "1234") {
    echo"<span> Bem Vindo, " .$user."! </span>";
    
    
        carregarOpcoes($perfil) ;
}

else {
    echo"<span> Login ou Senha inválidos!!! </span>";
}



function carregarOpcoes(string $opcaoPerfil) {

    if ($opcaoPerfil == "ADM") {       
    echo "<ul>";
    for ($i=1; $i <=6 ; $i++) { 
        echo "<li><a href=\"\">Opção " .$i. "</a></li>";
    }
    echo"</ul>";
}   
elseif ($opcaoPerfil=="VEN") {
  $i=1;
  do {
    echo "<li><a href=\"\">Opção " .$i. "</a></li>";
    $i++;   
  } while ($i <= 3);  
}      
    elseif ($opcaoPerfil== "CLI") {
        $i= 1;
        while ($i <= 10) {
            echo "<li><a href=\"\">Opção " .$i. "</a></li>";
            $i++;
        }
 }
}
