<?php

function modifier($image, $nom, $prix, $desc, $id)
{
  if(require("conn.php"))
  {
    $req = $access->prepare("UPDATE produit SET `image` = ?, nom = ?, prix = ?, description = ? WHERE id_pr=?");

    $req->execute(array($image, $nom, $prix, $desc, $id));

    $req->closeCursor();
  }
}

function afficherUnProduit($id)
{
	if(require("conn.php"))
	{
		$req=$access->prepare("SELECT * FROM produit WHERE id_pr=?");

        $req->execute(array($id));

        $data = $req->fetchAll(PDO::FETCH_OBJ);

        return $data;

  
	}
}

  function ajouter( $nom, $prix,$quantite, $description )
  {
    if(require("conn.php"))
    {
    
         // $targetDir = "uploads/";
         // $targetFilePath = $targetDir . $fileName;
        // $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION); 
        //  move_uploaded_file($_FILES['image']['tmp_name'],$targetDir.$fileName);
        //  move_uploaded_file($_FILES["image"]["tmp_name"], $targetFilePath);
         $fileName = basename($_FILES["image"]["name"]);
         $target="C:/xampp/htdocs/Mini-Market/vetement/".$fileName;
          move_uploaded_file($_FILES['image']['tmp_name'], $target);

        $image=$fileName;

        $query = $conn->prepare('INSERT INTO produit (nom , prix ,description ,image,quantite) VALUES(? , ? ,?,?,?)');
         $query->execute([$nom,$prix,$description,$image,$quantite]);

    }
  }
  
  function afficher()
  {
    if(require("conn.php"))
    {
      $req=$access->prepare("SELECT * FROM produit ORDER BY id_pr DESC");
  
          $req->execute();
  
          $data = $req->fetchAll(PDO::FETCH_OBJ);
  
          return $data;
  
          $req->closeCursor();
    }
  }
// function afficher($categorie)
// {
// 	if(require("conn.php"))
// 	{
//     if(!$categorie){
// 		$req=$access->prepare("SELECT * FROM produit ORDER BY id_pr DESC");

//         $req->execute();

//         $data = $req->fetchAll(PDO::FETCH_OBJ);

//         return $data;
//       }
//         else{
//           $req=$access->prepare("SELECT * FROM produit WHERE categories=? ORDER BY id_pr DESC ");

//         $req->execute(array($categorie));

//         $data = $req->fetchAll(PDO::FETCH_OBJ);
//           return $data;
//         }
// 	}
// }

function supprimer($id)
{
	if(require("conn.php"))
	{
		$req=$access->prepare("DELETE FROM produit WHERE id_pr=?");

		$req->execute(array($id));

		$req->closeCursor();
	}
}


function getAdmin($email, $password){
  
  if(require("conn.php")){

    $req = $access->prepare("SELECT * FROM admin WHERE id=55");

    $req->execute();

    if($req->rowCount() == 1){
      
      $data = $req->fetchAll(PDO::FETCH_OBJ);

      foreach($data as $i){
        $mail = $i->email;
        $mdp = $i->motdepasse;
      }

      if($mail == $email AND $mdp == $password)
      {
        return $data;
      }
      else{
          return false;
      }

    }

  }

}

?>
