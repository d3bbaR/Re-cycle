<!-- about section starts  -->
<div class="container3">
   <div class="title">
      <h1>Over Ons</h1>
   </div>
   <div class="content3">
      <div class="article3">
         <h2>Re-Cycle</h2>
         <?php

         foreach (query($tekst) as $dat) {
            echo "<p>" . $dat["tekst"] . "<br><br>";
         }
         echo "</p>";
         ?>
      </div>
      <div class="image-section">
         <img src="assets/overons.jpg" alt="overons">
      </div>

   </div>
</div>
<!-- about section ends -->