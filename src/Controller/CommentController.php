<?php

namespace src\Controller;

use src\Model\Comment;
use src\Model\BDD;

class CommentController extends AbstractController
{

    public function Add()
    {
        if ($_POST) {
            $objComment = new Comment();
            $objComment->setuser($_POST["user"]);
            $objComment->setcommentaire($_POST["commentaire"]);
            $objComment->setmail($_POST["mail"]);
            //Exécuter l'insertion
            $id = $objComment->SqlAdd(BDD::getInstance());
            // Redirection
            header("Location:/article/show/$id");
        } else {
            return $this->twig->render("Comment/add.html.twig");
        }
    }

    public function All()
    {
        $comment = new Comment();
        $datas = $comment->SqlGetAll(BDD::getInstance());
        return $this->twig->render("Comment/all.html.twig", [
            "commentList" => $datas
        ]);
    }

    public function Show($id)
    {
        $comment = new Comment();
        $datas = $comment->SqlGetByid(BDD::getInstance(), $id);

        return $this->twig->render("Comment/show.html.twig", [
            "comment" => $datas
        ]);
    }

    public function Delete($id)
    {
        $comment = new Comment();
        $datas = $comment->SqlDeleteByid(BDD::getInstance(), $id);

        header("Location:/Article/All");
    }

    public function Update($id)
    {
        $comment = new Comment();
        $datas = $comment->SqlGetByid(BDD::getInstance(), $id);

        if ($_POST) {
            $comment->setuser($_POST["user"]);
            $comment->setcommentaire($_POST["commentaire"]);
            $comment->setmail($_POST["mail"]);
            $comment->setid($id);
            $comment->SqlUpdate(BDD::getInstance());
            // Redirection
            header("Location:/comment/show/$id");
        } else {
            return $this->twig->render("Comment/update.html.twig", [
                "comment" => $datas
            ]);
        }
    }
}
