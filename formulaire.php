<?php 
    $title = "formulaire";
    require_once "header.php"; 
?> 
    <section class="body">
        <header>
            <img src="img/layout_set_logo.jfif">
        </header>
        <form class="content_afpa" action="<?php echo htmlspecialchars("recap.php");?>" method="POST">
            <section class="section_form">
                <article>
                    <ul >
                        <li><input type="text" name="name" placeholder = "Nom Prénom" required /></li>
                        <li><input type="email" name="mail" placeholder = "Courriel" required /></li>
                        <li><input type="tel" name="phone" pattern="^[0][0-9][0-9]{8}$" placeholder = "Telephone" required /></li>   
                        <select name="choix" class="select" required>
                            <option value="">Vous êtes...</option>
                            <option name="choix1">Developpeur</option>
                            <option name="choix2">Etudiant</option>
                        </select>                                             
                        <textarea name="comment" placeholder="Commentaires" rows="10" cols="47" required></textarea>
                    </ul>
                </article>                   
                <aside>
                    <label>Quelle est la meilleure manière de vous contacter</label>
                    <ul class="list">
                        <li><input type= "radio" name="moyen" value="telephone" checked />Telephone</li>
                        <li><input type= "radio" name="moyen" value="courriel" />Courriel</li>
                    </ul>      
                    <label>Jour de la semaine ou vous êtes disponibles</label>
                    <ul class="list">
                        <li><input type= "checkbox" name="week[]" value="lundi" checked /> lundi</li>
                        <li><input type= "checkbox" name="week[]" value="mardi" /> mardi</li>
                        <li><input type= "checkbox" name="week[]" value="mercredi" /> Mercredi</li>
                        <li><input type= "checkbox" name="week[]" value="jeudi" /> Jeudi</li>
                        <li><input type= "checkbox" name="week[]" value="vendredi" /> Vendredi</li>
                    </ul>                          
                    <label>Quelle heure approprié pour un rendez-vous</label>
                    <ul class="list"> 
                        <li><input type= "checkbox" name="dispo[]" value="Matin" checked />Matin</li>
                        <li><input type= "checkbox" name="dispo[]" value="Après-midi" /> Apres-midi</li>
                    </ul>
                </aside>
            </section>      
            <hr class="clearbox">  
            <input type="submit" value="Envoyer" class="send" /> 
        </form>
    </section>
<?php
    require_once "footer.php"; 
?> 