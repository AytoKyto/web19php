<?php
namespace src\Controller;

use src\Model\Categorie;
use src\Model\BDD;

class CategorieController extends AbstractController {

    public function Add(){
        if($_POST){
            $objCategorie = new Categorie();
            $objCategorie->setlibelle($_POST["libelle"]);
            $objCategorie->seticon($_POST["icon"]);
            //Exécuter l'insertion
            $id = $objCategorie->SqlAdd(BDD::getInstance());
            // Redirection
            header("Location:/categorie/show/$id");
        }else{
            return $this->twig->render("Categorie/add.html.twig");
        }


    }

    public function All(){
        $categorie = new Categorie();
        $datas = $categorie->SqlGetAll(BDD::getInstance());
        return $this->twig->render("Categorie/all.html.twig", [
            "categorieList"=>$datas
        ]);
    }

    public function Show($id){
        $categorie = new Categorie();
        $datas = $categorie->SqlGetByid(BDD::getInstance(),$id);

        return $this->twig->render("Categorie/show.html.twig", [
            "categorie"=>$datas
        ]);
    }

    public function Delete($id){
        $categorie = new Categorie();
        $datas = $categorie->SqlDeleteByid(BDD::getInstance(),$id);

        header("Location:/Categorie/All");
    }

    public function Update($id){
        $categorie = new Categorie();
        $datas = $categorie->SqlGetByid(BDD::getInstance(),$id);

        if($_POST){
            $objCategorie = new Categorie();
            $objCategorie->setLibelle($_POST["libelle"]);
            $objCategorie->setIcon($_POST["icon"]);
            $objCategorie->setid($id);
            //Exécuter la mise à jour
            $objCategorie->SqlUpdate(BDD::getInstance());
            // Redirection
            header("Location:/categorie/show/$id");
        }else{
            return $this->twig->render("Categorie/update.html.twig", [
                "categorie"=>$datas
            ]);
        }

    }
/*
    public function Fixtures(){
        //Vider la table
        $article = new Article();
        $article->SqlTruncate(BDD::getInstance());

//Tableau "Jeu de donnée"
        $Titres = ["PHP en force", "Java en baisse", "JS un jour ça marchera", "Flutter valeur montante", "GO le futur"];
        $Prenoms = ["Rebecca", "Alexandre", "Emilie", "Léo", "Aegir"];
        $datedujour = new \DateTime();
        for($i = 0;$i < 200;$i++){
            $datedujour->modify("+1 day");
            shuffle($Titres);
            shuffle($Prenoms);

            //Objet Article
            $objArticle = new Article();
            $objArticle->setTitre($Titres[0]);
            $objArticle->setDescription("Ceci est une excellent description");
            $objArticle->setDateAjout($datedujour->format("Y-m-d"));
            $objArticle->setAuteur($Prenoms[0]);

            //Exécuter l'insertion
            $objArticle->SqlAdd(BDD::getInstance());
        }
        header("Location:/?controller=Article&action=All");
    }
*/
}