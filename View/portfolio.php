<?php 
    include "nav.php";
    include "../includes/cdnlinks.php";
   // Header ("Content-type: text/css; charset=utf-8"); RUN THIS 1000x --- MUST KNOW WHY
?>

<link rel="stylesheet" href="styles.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<style>
  <?php include "../styles.css"?>
</style>

<div class="card-group">
  <div class="card">
    <video width="500" height="250" autoplay controls> <!-- WOULD LIKE THIS TO AUTOPLAY BUT NOT AUTOPLAYING -->
        <source src="../videos/MDBFinal.webm" type="video/webm"/>
    </video>
    <div class="card-body">
      <a href="../externalSites/VueMovieTickets-Final"><h5 class="card-title">Vue</h5></a>
      <p class="card-text">Select tickets for adult & children from the newest movies in theatre's. The sum for all movies and tickets will be calculated in your shopping cart. This page uses Vue and Axios to retrieve and display all data.</p>
      <p class="card-text"><small class="text-muted">TMDB: Now Playing</small></p>
    </div>
  </div>
  <div class="card">
    <video width="500" height="250" autoplay controls> <!-- WOULD LIKE THIS TO AUTOPLAY BUT NOT AUTOPLAYING -->
        <source src="../videos/RocketLaunch.webm" type="video/webm"/>
    </video>
    <div class="card-body">
      <a href="../externalSites/RocketLaunchProject"><h5 class="card-title">Dynamic Web Page</h5></a>
      <p class="card-text">This dynamic pages uses Javascript to manipulate dom elements using click events. The picture of the day is displayed using NASA's API for their Astronomy Picture of the Day. The Next 5 Launches and Astronauts information is pulled from The Space Devs API.</p>
      <p class="card-text"><small class="text-muted">API: The Space Devs </br>NASA</small></p>
    </div>
  </div>
  <div class="card">
    <video width="500" height="250" autoplay controls> <!-- WOULD LIKE THIS TO AUTOPLAY BUT NOT AUTOPLAYING -->
            <source src="../videos/MDB1.webm" type="video/webm"/>
    </video>
    <div class="card-body">
      <a href="../externalSites/jQueryMovies/index.html"><h5 class="card-title">jQuery</h5></a>
      <p class="card-text">This simple page will show the most popular movies in theatre today, and a description is shown when clicking on the title of any movie. This is done using jQuery and vanilla Javascript.</p>
      <p class="card-text"><small class="text-muted">API: The Movie DataBase</small></p>
    </div>
  </div>
</div>

<?php include "footer.php"?>
