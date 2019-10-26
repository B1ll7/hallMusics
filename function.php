<?php 

// Fonction pour afficher les jours de la semaine selectionnnés 
function afficherJour ($week)
{
    foreach($week as $day)
    {
        echo "$day"." ";
    }
    echo "</td>";
}
// Fonction pour afficher les disponibilités 
function printDispo ($dispo)
{
    foreach ($dispo as $element)
    {
        echo "$element";
    }
    echo "</td>";
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

// Fonction qui permet d'afficher le tableau
function printTable($users_)
{
    echo "<table width=\"98%\" border=\"1\" border-style=\"solid\" border-color=\"black\" margin=\"2px\" class='table'>" ;
    echo 
    "<tr>
        <th>NOM PRENOM</th>
        <th>COURIEL</th>
        <th>NUMERO DE TEL</th>
        <th>PROFESSIONS</th>
        <th>COMMENTAIRE</th>
        <th>PREFERENCES</th>
        <th colspan=\"2\">DISPONILITE</th>
    </tr>";
    for ($compt = 0; $compt < count($users_) - 1; $compt++)
      {
        echo "<tr>";
            echo "<td>". $users_[$compt][0] . "</td>" ;
            echo "<td>". $users_[$compt][1] . "</td>" ;
            echo "<td>". $users_[$compt][2] . "</td>" ;
            echo "<td>". $users_[$compt][3] . "</td>" ;
            echo "<td>". $users_[$compt][4] . "</td>" ;
            echo "<td>". $users_[$compt][5] . "</td>" ;
            echo "<td>". $users_[$compt][6] . "</td>" ;
            echo "<td>". $users_[$compt][7] . "</td>" ;
        echo "</tr>";
      }
    echo "</table>";
}