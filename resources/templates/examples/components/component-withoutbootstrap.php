<?php
// load up your config file
$root = realpath($_SERVER["DOCUMENT_ROOT"]);
require_once("$root/resources/config.php");

require_once(TEMPLATES_PATH . "/header.php");
?>
    <div id="container">
        <div id="content">
            <form method="post" action="traitement.php">
                <p>
                    <label for="pseudo">Votre pseudo :</label>
                    <input type="text" name="pseudo" id="pseudo" placeholder="Ex : Zozor" size="30" maxlength="10" />
                </p>

                <p>
                    <label for="pseudo">Votre pseudo :</label>
                    <input type="text" name="pseudo2" id="pseudo" />

                    <br />
                    <label for="pass">Votre mot de passe :</label>
                    <input type="password" name="pass" id="pass" />

                </p>


                <p>
                    <label for="ameliorer">
                        Comment pensez-vous que je puisse améliorer mon site ?
                    </label>
                    <br />

                    <textarea name="ameliorer" id="ameliorer" rows="10" cols="50">
       Améliorer ton site ?!
       Mais enfin ! Il est tellement génialissime qu'il n'est pas nécessaire de l'améliorer !
                    </textarea>

                </p>





                <p> les zone éditions spéciales :
            <br/>  email <input type="email" />
            <br/>   url <input type="url" />
            <br/>   tel <input type="tel" />
            <br/>   number <input type="number" />
            <br/>   range <input type="range" />
            <br/>   color <input type="color" />
            <br/>   date <input type="date" />
            <br/>   recherche <input type="search" />
                </p>

                <p>
                    <input type="checkbox" checked name="frites" id="frites" /> <label for="frites">Frites</label><br />
                    <input type="checkbox" name="steak" id="steak" /> <label for="steak">Steak haché</label><br />
                    <input type="checkbox" name="epinards" id="epinards" /> <label for="epinards">Epinards</label><br />
                    <input type="checkbox" name="huitres" id="huitres" /> <label for="huitres">Huitres</label>
                </p>



                <p>
                    Veuillez indiquer la tranche d'âge dans laquelle vous vous situez :<br />
                    <input type="radio" name="age" value="moins15" id="moins15" /> <label for="moins15">Moins de 15 ans</label><br />
                    <input type="radio" name="age" value="medium15-25" id="medium15-25" /> <label for="medium15-25">15-25 ans</label><br />
                    <input type="radio" name="age" value="medium25-40" id="medium25-40" /> <label for="medium25-40">25-40 ans</label><br />
                    <input type="radio" name="age" value="plus40" id="plus40" /> <label for="plus40">Encore plus vieux que ça ?!</label>
                </p>

                <p>
                    <label for="pays2">Dans quel pays habitez-vous ?</label><br />
                    <select name="pays2" id="pays">
                        <option value="france">France</option>
                        <option value="espagne">Espagne</option>
                        <option value="italie">Italie</option>
                        <option value="royaume-uni">Royaume-Uni</option>
                        <option value="canada">Canada</option>
                        <option value="etats-unis">États-Unis</option>
                        <option value="chine">Chine</option>
                        <option selected value="japon">Japon</option>
                    </select>
                </p>

                <form method="post" action="traitement.php">
                    <p>
                        <label for="pays">Dans quel pays habitez-vous ?</label><br />
                        <select name="pays" id="pays">
                            <optgroup label="Europe">
                                <option value="france">France</option>
                                <option value="espagne">Espagne</option>
                                <option value="italie">Italie</option>
                                <option value="royaume-uni">Royaume-Uni</option>
                            </optgroup>
                            <optgroup label="Amérique">
                                <option  value="canada">Canada</option>
                                <option value="etats-unis">Etats-Unis</option>
                            </optgroup>
                            <optgroup label="Asie">
                                <option value="chine">Chine</option>
                                <option value="japon">Japon</option>
                            </optgroup>
                        </select>
                    </p>



                    <p>
                    <fieldset>
                        <legend>Vos coordonnées</legend> <!-- Titre du fieldset -->

                        <label for="nom">Quel est votre nom ?</label>
                        <input type="text" name="nom" id="nom" />

                        <label for="prenom">Quel est votre prénom ?</label>
                        <input type="text" name="prenom" id="prenom" />

                        <label for="email">Quel est votre e-mail ?</label>
                        <input type="email" name="email" id="email" />

                    </fieldset>

                    </p>

                    <input type="text" name="prenom" id="prenom" required />
                    <input type="submit" value="Envoyer" />
                    
                </form>
            </form>
        </div>
        <?php
        require_once(TEMPLATES_PATH . "/rightPanel.php");
        ?>
    </div>
<?php
require_once(TEMPLATES_PATH . "/footer.php");
?>