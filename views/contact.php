 <?php
    include __DIR__ . '/header.php';
    ?>
 <main>
     <section class="section_formaulaire_contact">
         <form class="formaulair_contact">
             <h1>Contactez-nous</h1>

             <label for="nom">Nom:</label>
             <input type="text" id="nom" name="nom" required><br>
             <label for="prrenom">Prrenom:</label>
             <input type="text" id="prrenom" name="prrenom" required><br>
             <label for="Téléphone">Téléphone:</label>
             <input type="text" id="Téléphone" name="Téléphone" required><br>
             <label for="email">Email:</label>
             <input type="email" id="email" name="email" required><br>
             <label for="message">Message:</label>
             <textarea class="textarea" id="message" name="message" required></textarea><br>
             <label for="">
                 <input type="checkbox">
                 J'accepte les conditions d'utilisation</label>
             <input class="w-50 mx-auto text-center mt-3" type="submit" value="Envoyer">
         </form>
         <div class="images_contact">
             <div class="image_contact"></div>

         </div>
     </section>

 </main>


 <?php
    include __DIR__ . '/footer.php';
    ?>