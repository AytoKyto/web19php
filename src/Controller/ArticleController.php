<?php

namespace src\Controller;

use src\Model\Article;
use src\Model\Categorie;
use src\Model\Comment;
use src\Model\BDD;
use DateTime;

class ArticleController extends AbstractController
{

    public function Add()
    {
        if ($_POST) {
            $objArticle = new Article();
            $objArticle->setTitre($_POST["Titre"]);
            $objArticle->setDescription($_POST["Description"]);
            $objArticle->setDateAjout($_POST["DateAjout"]);
            $objArticle->setAuteur($_POST["Auteur"]);
            //Exécuter l'insertion
            $id = $objArticle->SqlAdd(BDD::getInstance());
            // Redirection
            header("Location:/article/show/$id");
        } else {
            return $this->twig->render("Article/add.html.twig");
        }
    }

    public function All()
    {
        $articles = new Article();
        $datas = $articles->SqlGetAll(BDD::getInstance());

        return $this->twig->render("Article/all.html.twig", [
            "articleList" => $datas
        ]);
    }

    /*  public function Show($id){
        $articles = new Article();
        $datas = $articles->SqlGetById(BDD::getInstance(),$id);
        $categorie = new Categorie();
        $dataCategorie = $categorie->SqlGetById(BDD::getInstance(),$datas->getCategorieId());
        if($_POST){
            $objComment = new Comment();
            $objComment->setuser($_POST["user"]);
           // $objComment->setcommentaire($_POST["commentaire"]);
            //Exécuter l'insertion
            $id = $objComment->SqlAdd(BDD::getInstance());
        }
        return $this->twig->render("Article/show.html.twig", [
            "article"=>$datas,
            "categorie"=> $dataCategorie
        ]);
    }*/
    public function Show($id)
    {
        $articles = new Article();
        $datas = $articles->SqlGetById(BDD::getInstance(), $id);
        $categories = new Categorie();
        $categorie = $categories->SqlGetById(BDD::getInstance(), $datas->getCategorieId());
        $comment = new Comment();
        $comment = $comment->findByArticle(BDD::getInstance(), $datas->getId());
        if ($_POST) {
            $date = new \DateTime();
            $commentaire = new Comment();
            $commentaire->setcommentaire($_POST['commentaire']);
            $commentaire->setmail($_POST['mail']);
            $commentaire->setuser($_POST['user']);
            $commentaire->setDate($date->format('Y-m-d'));
            $commentaire->setarticle_id($id);
            $commentaire->SqlAddToComment(BDD::getInstance());
            header("Location: /Article/show/$id");
        }

        return $this->twig->render("Article/show.html.twig", [
            "article" => $datas,
            "comments" => $comment,
            "categorie" => $categorie
        ]);
    }

    public function Delete($id)
    {
        $articles = new Article();
        $datas = $articles->SqlDeleteById(BDD::getInstance(), $id);

        header("Location:/Article/All");
    }

    public function Update($id)
    {
        $articles = new Article();
        $datas = $articles->SqlGetById(BDD::getInstance(), $id);

        if ($_POST) {
            $objArticle = new Article();
            $objArticle->setTitre($_POST["Titre"]);
            $objArticle->setDescription($_POST["Description"]);
            $objArticle->setDateAjout($_POST["DateAjout"]);
            $objArticle->setAuteur($_POST["Auteur"]);
            $objArticle->setId($id);
            //Exécuter la mise à jour
            $objArticle->SqlUpdate(BDD::getInstance());
            // Redirection
            header("Location:/article/show/$id");
        } else {
            return $this->twig->render("Article/update.html.twig", [
                "article" => $datas
            ]);
        }
    }

    public function Fixtures()
    {
        //Vider la table
        $article = new Article();
        $article->SqlTruncate(BDD::getInstance());

        //Tableau "Jeu de donnée"
        $Titres = ["PHP en force", "Java en baisse", "JS un jour ça marchera", "Flutter valeur montante", "GO le futur"];
        $Prenoms = ["Rebecca", "Alexandre", "Emilie", "Léo", "Aegir"];
        $datedujour = new \DateTime();
        for ($i = 0; $i < 200; $i++) {
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
}
