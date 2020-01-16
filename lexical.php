
<?php

try {
 
    $pdo = new PDO('mysql:host=localhost:8889;dbname=taekwondo_website', 'root', 'root'); //connection database
    
    }
    catch (PDOException $exception) {
     
     mail('desseresusinigabriel@gmail.com', 'PDOException', $exception->getMessage());
     echo($exception->getMessage());
     die();
    }

echo "toto";

    $query = $pdo->query("SELECT * FROM Lexical WHERE idName = 1");
    var_dump($query);
    $resultat = $query->fetchAll();

//Afficher le résultat dans un tableau

print("<table border=\"1\">");

foreach ($resultat as $key => $variable)
{
print("<tr>");
print("<td>".$resultat[$key]['frenchName']."</td>");
print("<td>".$resultat[$key]['phonetic']."</td>");
print("<td>".$resultat[$key]['hangul']."</td>");
print("<td>".$resultat[$key]['description']."</td>");
print("<td>".$resultat[$key]['audio']."</td>");
print("<tr>");
}

print("</table>");

?>


