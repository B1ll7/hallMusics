<?php 
    $title = "contact";
    require_once "header.php"; 
?> 
    <div>
        <form action="">
            <fieldset class="contactUs">
                <legend>NOUS CONTACTER</legend>
                <div class="texte">
                    <p>TEL: 02.35.35.35.35</p>
                    <p>MAIL : contact@hallmusic.fr</p>
                </div class="infos">
                <div>
                        <label id="fistName">NOM</label>
                        <input type="text" id="firstName" name="firstName" size="70" required/>
                </div>
                <div>
                        <label id="lastName">PRENOM</label>
                        <input type="text" id="lastName" name="lastName" size="70" required/>
                </div>
                <div>
                        <label id="mail">MAIL</label>
                        <input type="email" id="mail" name="mail" size="70" required/>
                </div>
                <div>
                        <label id="objet">OBJET</label>
                        <textarea name="objet" id="objet" rows="5" cols="70" required></textarea>
                </div>

                    <input type="submit" />
                </fieldset>
        </form>
        <div style="clear: both"></div>
        <form >
            <fieldset class="horaires">
                <legend>NOS HORAIRES</legend>
                    <p>Lundi : 09h00 - 11h00 / 13h00 - 14h00</p>
                    <p>mardi : 09h00 - 11h00 / 13h00 - 14h00</p>
                    <p>mercredi : 09h00 - 11h00 / 13h00 - 14h00</p>
                    <p>jeudi : 09h00 - 11h00 / 13h00 - 14h00</p>
                    <p>vendredi : 09h00 - 11h00 / 13h00 - 14h00</p>
            </fieldset>
        </form>
    </div>
<?php require_once "footer.php"; ?> 