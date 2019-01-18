<?php 

$page = $_GET['page'];
$pages = scandir('pages');

// Vérifie si la page n'est pas vide et existe dans le dossier pages
if(!empty($page) && in_array($page.".php", $pages)) {
    $content = 'pages/'.$page.".php";
}
//Renvoi à la page d'accueil si la page est vide ou n'existe pas
else {
    header("Location:index.php?page=accueil");
}

	switch ($page) {
		case "about";
			$CURRENT_PAGE = "About";
			$PAGE_TITLE = "A Propos";
			$PAGE_DESCRIPTION = "Je suis une personne génialissime !!!";
			break;
		case "contact";
			$CURRENT_PAGE = "Contact";
			$PAGE_TITLE = " Contacte moi !";
			$PAGE_DESCRIPTION = "Donne moi ton argent steuplé";
			break;
		case "users";
			$CURRENT_PAGE = "Users";
			$PAGE_TITLE = "La page des utilisateurs";
			$PAGE_DESCRIPTION = "Oui Oui Oui, c'est troooop biiien";
			break;
		case "boucle";
			$CURRENT_PAGE = "Boucle";
			$PAGE_TITLE = "La page de la boucllleeee";
			$PAGE_DESCRIPTION = "boucleeeeeee";
			break;	
		default;
			$CURRENT_PAGE = "Home";
			$PAGE_TITLE = "TARBA";
			$PAGE_DESCRIPTION = "WESH";
			break;	
	}

function monMsg($colorMsg='red'){
  echo"<p class='toto' style='value:$colorMsg;'>Je suis ici grâce à une fonction PHP!</p>";

}
?>