<?php

function modifier($nom, $prix, $desc, $image, $quantite, $id)
{
  if(require("conn.php"))
  {
    $req = $access->prepare("UPDATE produit SET `image` = ?, nom = ?, prix = ?, quantite = ?, description = ? WHERE id_pr=?");

    $req->execute(array($image, $nom, $prix,$quantite, $desc, $id));

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

        $req->closeCursor();
	}
}

  function ajouter( $nom, $prix, $desc, $image, $quantite)
  {
    if(require("conn.php"))
    {
      $req = $access->prepare("INSERT INTO produit (image, nom, prix, quantite ,description) VALUES (?, ?, ?, ?, ?)");

      $req->execute(array($image, $nom, $prix, $desc));

      $req->closeCursor();
    }
  }

function afficher($categorie)
{
	if(require("conn.php"))
	{
    if(!$categorie){
		$req=$access->prepare("SELECT * FROM produit ORDER BY id_pr DESC");

        $req->execute();

        $data = $req->fetchAll(PDO::FETCH_OBJ);

        return $data;
      }
        else{
          $req=$access->prepare("SELECT * FROM produit WHERE categories=? ORDER BY id_pr DESC ");

        $req->execute(array($categorie));

        $data = $req->fetchAll(PDO::FETCH_OBJ);
          return $data;
        }
	}
}

function supprimer($id)
{
	if(require("conn.php"))
	{
		$req=$access->prepare("DELETE FROM produit WHERE id_pr=?");

		$req->execute(array($id));

		$req->closeCursor();
	}
}



?>