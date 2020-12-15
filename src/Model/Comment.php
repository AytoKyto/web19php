<?php

namespace src\Model;

class Comment
{
    private $id;
    private $user;
    private $commentaire;
    private $article_id;
    private $date;
    private $mail;

    public function SqlAdd(\PDO $bdd)
    {
        try {
            $requete = $bdd->prepare("INSERT INTO comment (commentaire, user, mail, date) VALUES(:commentaire, :user, :mail, :date)");
            $date = new \DateTime();
            $requete->execute([
                "commentaire" => $this->getcommentaire(),
                "date" => $this->getdate(),
                "user" => $this->getuser(),
                "mail" => $this->getmail(),
            ]);
            return $bdd->lastInsertId();
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
    public function SqlAddToComment(\PDO $bdd)
    {
        try {
            $requete = $bdd->prepare("INSERT INTO comment (commentaire, user, mail, date, article_id) VALUES(:commentaire, :user, :mail, :date, :article_id)");
            $requete->execute([
                "commentaire" => $this->getcommentaire(),
                "user" => $this->getuser(),
                "date" => $this->getdate(),
                "mail" => $this->getmail(),
                "article_id" => $this->getarticle_id()
            ]);
            return $bdd->lastInsertId();
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
    public function SqlUpdate(\PDO $bdd)
    {
        try {
            $requete = $bdd->prepare("UPDATE comment set commentaire= :commentaire, user = :user, date = :date, mail = :mail WHERE id = :id");
            $date = new \DateTime();
            $requete->execute([
                "commentaire" => $this->getcommentaire(),
                "user" => $this->getuser(),
                "date" => $date->format('d/m/Y'),
                "mail" => $this->getmail(),
                "id" => $this->getid()
            ]);
            return "OK";
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
    /**
     * Récupère tous les comment
     * @param \PDO $bdd
     * @return array
     */
    public function SqlGetAll(\PDO $bdd)
    {
        $requete = $bdd->prepare("SELECT * FROM comment");
        $requete->execute();
        //$datas =  $requete->fetchAll(\PDO::FETCH_ASSOC);
        $datas =  $requete->fetchAll(\PDO::FETCH_CLASS, 'src\Model\Comment');
        return $datas;
    }

    public function SqlGetByid(\PDO $bdd, $id)
    {
        $requete = $bdd->prepare("SELECT * FROM comment WHERE id=:id");
        $requete->execute([
            "id" => $id
        ]);
        $requete->setFetchMode(\PDO::FETCH_CLASS, 'src\Model\Comment');
        $comment = $requete->fetch();

        return $comment;
    }
    public function findByArticle(\PDO $bdd, $id)
    {
        $requete = $bdd->prepare("SELECT * FROM comment WHERE article_id=:id");
        $requete->execute([
            "id" => $id
        ]);
        $requete->setFetchMode(\PDO::FETCH_CLASS, 'src\Model\Comment');
        $comment = $requete->fetchAll();

        return $comment;
    }
    public function SqlDeleteByid(\PDO $bdd, $id)
    {
        $requete = $bdd->prepare("DELETE FROM comment WHERE id=:id");
        $requete->execute([
            "id" => $id
        ]);
        return true;
    }
    public function SqlTruncate(\PDO $bdd)
    {
        $requete = $bdd->prepare("TRUNCATE TABLE comment");
        $requete->execute();
    }
    /**
     * @return mixed
     */
    public function getid()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     * @return comment
     */
    public function setid($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getuser()
    {
        return $this->user;
    }

    /**
     * @param mixed $user
     * @return Categorie
     */
    public function setuser($user)
    {
        $this->user = $user;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getcommentaire()
    {
        return $this->commentaire;
    }

    /**
     * @param mixed $commentaire
     * @return Categorie
     */
    public function setcommentaire($commentaire)
    {
        $this->commentaire = $commentaire;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getmail()
    {
        return $this->mail;
    }

    /**
     * @param mixed $mail
     * @return Categorie
     */
    public function setmail($mail)
    {
        $this->mail = $mail;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getdate()
    {
        return $this->date;
    }

    /**
     * @param mixed $date
     * @return Categorie
     */
    public function setdate($date)
    {
        $this->date = $date;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getarticle_id()
    {
        return $this->article_id;
    }

    /**
     * @param mixed $article_id
     * @return Categorie
     */
    public function setarticle_id($article_id)
    {
        $this->article_id = $article_id;
        return $this;
    }
}
