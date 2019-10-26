<?php 

    $title = "recap";
    require_once "header.php";
    include_once "function.php";

    if (empty($_POST))
    {
        // Permet de récuperer les infos de la db pour les mettre dans le tableau 
        $file = fopen("db.csv", "r+");
            $users  = fread($file, filesize("db.csv"));
        fclose($file);
    }
    else 
    {
        $name = test_input($_POST['name']);
        $phone = test_input($_POST['phone']);
        $mail = test_input($_POST['mail']);
        $comment = test_input($_POST['comment']);
        $choix = $_POST['choix'];
        $moyen = $_POST['moyen'];
        $week = $_POST['week'];
        $dispo = $_POST['dispo'];
       // permet d'écrire dans la db les infos récupérés dans le formulaire
        $handle = fopen("db.csv", "a+");
            if (isset($name, $phone, $mail, $choix, $comment, $moyen, $week, $dispo))
            {
                fwrite($handle ,"$name | $phone | $mail | $choix | $comment | $moyen | ");
                foreach ($week as $day)
                {
                    fwrite($handle , "$day ");
                }
                fwrite($handle , " | ");
                foreach ($dispo as $element)
                {
                    fwrite($handle , "$element ");
                }
                fwrite($handle , "+\n");
            }
            if(empty($week) && isset($dispo))
            {
                fwrite($handle ,"$name | $phone | $mail | $choix | $comment | $moyen | indefini | ");
                foreach ($dispo as $element)
                {
                    fwrite($handle , "$element ");
                }
                fwrite($handle , "+\n");
            } 
            if (empty($dispo) && isset($week))
            {
                fwrite($handle ,"$name | $phone | $mail | $choix | $comment | $moyen | ");
                foreach ($week as $day)
                {
                    fwrite($handle , "$day ");
                }
                fwrite($handle , " | indefini +\n");
            }
            if (empty($dispo) && empty($week))
            {
                fwrite($handle ,"$name | $phone | $mail | $choix | $comment | $moyen | indefini | indefini +\n");
            }    
        fclose($handle);

        // Permet de récuperer les infos de la db pour les mettre dans le tableau 
        $file = fopen("db.csv", "r+");
            $users  = fread($file, filesize("db.csv"));
        fclose($file);  
    } 
    $users_ = explode("+", $users);
    for($compt = 0; $compt < count($users_) ; $compt++)
    {
        $users_[$compt] = explode("|", $users_[$compt]);
    } 
    printTable($users_);  
?>
<?php require_once "footer.php" ; ?>