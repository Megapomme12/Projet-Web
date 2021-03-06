
<head>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="style.css"/>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css"/>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Boutique</title>
</head>
<body>
	<header>

	 
		

		<?php 


		include('header.php');

		?>

	<article>
		
		 <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
      <h1 class="display-4">Boutique</h1>
      <p class="lead">Bienvenue dans la boutique du BDE, qui contient des articles ( snack et boisson ) et des goodies !</p>
    </div>  
<?php
    $bdd = new PDO('mysql:host=localhost;dbname=phpweb','root','');




    $boutique = $bdd->query('SELECT * FROM article');


   while ( $donnees = $boutique->fetch())
    { 

      ?>
  
<div class="row">
                    <!-- debut a copier -->
            <div class="col-lg-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="Image/<?php echo $donnees['Url'] ?>" alt=""></a> <!-- image etc..-->
                <div class="card-body">
                  <h4 class="card-title">
                    <?php  echo $donnees['Article'] ?> <!-- Titre de l'article -->
                  </h4>
                  <h5><?php  echo $donnees['Prix'] ?> €</h5> <!-- prix de l'article -->
                  <p class="card-text"><?php echo $donnees['Description'] ?></p>  <!-- description de l'article -->
                </div>
                <div class="card-footer"><div class="btn-group" role="group">
                    <div class="form-group">
                    <label for="exampleFormControlSelect1">Quantité</label> <!--la quantité de l'article -->
                            <select class="form-control" id="exampleFormControlSelect1">
                                 <option>1</option>
                                 <option>2</option>
                                 <option>3</option>
                                 <option>4</option>
                                 <option>5</option>
                            </select>
                  </div>
                 <button type="button" class="btn btn-danger active">Achéte !</button>
          </div>
          </div>
            </div>
          </div>

<?php
    }

?>



       
          <!-- début pour un article -->
          

            <!-- fin a copier -->
                  

   
    </div>





</article>


	</header>
	
	<footer>
		<?php
		include('footer.php');
?>
	</footer>



</body>
