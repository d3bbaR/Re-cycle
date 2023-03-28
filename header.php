<?php
/*
<div class="header2">
  <div class="container2">
      <div class="first">
        <div class=box2>
        <h2>Re-cycle</h2>
   </div>
   <a href="cat.php">Zie meer fietsen <i class="fa fa-angle-right"></a></i>
   <div class="left">
    <i  class="fa fa-facebook"></i>
    </div>
    <div class="second">
        <div class="overlay">
          
        </div>
    </div>
</div>
</div>
</div>
?>
<?php 

  ?>
*/
  
  ?>
  <h2>Re-Cycle</h2>


<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="assets/imageslider1.jpg" style="width:100%">
  
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="assets/imageslider2.jpg" style="width:100%">
  
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="assets/imageslider4.jpg" style="width:100%">
  
</div>



</div>
<br>



<script>
let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 4000); // Change image every 2 seconds
}
</script>

</body>