 <?php
    include __DIR__ . '/header.php';
    ?>
 <main class="main_compte">
     <aside>
         <h1 class="créer_compte text-center">Créez votre compte</h1>
         <p class="para_compte  text-center fw-bold">Veuillez remplir le formulaire ci-dessous pour créer votre compte
         </p>

         <form class="form_contact" action="formaulaire">
             <label for="nom">Nom</label><br>
             <input class="w-75" type="text" id="nom" name="nom"><br>
             <label for="prénom">Prénom</label><br>
             <input class="w-75" type="text" id="prénom" name="prrenom"><br>
             <label for="Téléphone">Téléphone</label> <br>
             <input class="w-75" type="text" id="Téléphone" name="Téléphone"><br>
             <label for="email">Email</label><br>
             <input class="w-75" type="email" id="email" name="email"><br>
             <label for="mot de passe">Mot de passe</label><br>
             <input class="w-75" type="password" id="mot de passe" name="mot de passe"><br>
             <label for="confirmer mot de passe">Confirmer mot de passe</label><br>
             <input class="w-75" type="password" id="confirmer mot de passe" name="confirmer mot de passe"><br><br>
             <label class="lable_checkbox">
                 <input type="checkbox">
                 J'accepte les conditions d'utilisation
             </label>
             <!-- <input class="w-25 mx-auto text-center" type="submit" value="S'inscrire"> -->
             <button class="btn_inscrir text-center d-flex align-center" type="submit"> S'inscrire</button>


         </form>

     </aside>
     <article>

         <div class="image_article"></div>
     </article>
 </main>


 <?php
    include __DIR__ . '/footer.php';
    ?>