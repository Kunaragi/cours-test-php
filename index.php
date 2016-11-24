<!DOCTYPE html>
<html>
<header>

<title>Cours PHP</title>
<meta charset="utf-8">
<link rel="stylesheet" media="screen" href="style.css">

<script type="text/javascript">
    function secret(secretId)
    {
  if(document.getElementById)
    {
      secret = document.getElementById(secretId);
      if(secret.style.display =="none")
        {
          secret.style.display ="";
        }
        else{
           secret.style.display ="none";
        }
    }
  }
  </script>


</header>

<body>

          <h1>Cours sur le PHP : Définition d'une boucle BUR en PHP</h1>
<break />
    <h2> Structure "for" </h2>

<p>
  La structure "for" s'utilise de cette manière suivante :
  </p>

<!-- Note par Hennedy : Je cherche une balise permettant d'afficher d'autres balises -->

 <?php
 for($i=0; $i<=100; $i++)
   echo("$i"."<hr/>")

 ?>






  </div>
  <!-- Lien pour afficher la chose cachée -->
  <dt style="cursor: pointer;">
<a href="" onclick="global:secret('cache');return false;">
  Ce qui nous donne comme résultat :
</a>

<br /><br />

</dt>

  <!--le bloc caché -->
  <div id="cache" style="display : none; ">

    <?php
    for($i=0; $i<=100; $i++)
      echo("$i"."<hr/>")
    ?>

  </div>

</html>
