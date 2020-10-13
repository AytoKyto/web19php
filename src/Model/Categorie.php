<?php
namespace src\Model;

class Categorie {
    private $id;
    private $libelle;
    private $icon;

  public function SqlAdd(\PDO $bdd){
        try {
            $requete = $bdd->prepare("INSERT INTO categorie (libelle, icon) VALUES(:libelle, :icon)");

            $requete->execute([
                "libelle" => $this->getlibelle(),
                "icon" => $this->geticon(),
            ]);
            return $bdd->lastInsertid();
        }catch (\Exception $e){
            return $e->getMessage();
        }

    }
    public function SqlUpdate(\PDO $bdd){
        try {
            $requete = $bdd->prepare("UPDATE categorie set libelle= :libelle, icon = :icon WHERE id = :id");

            $requete->execute([
                "libelle" => $this->getlibelle(),
                "icon" => $this->geticon(),
                "id" => $this->getId()
            ]);
            return "OK";
        }catch (\Exception $e){
            return $e->getMessage();
        }

    }
    /**
     * Récupère tous les categorie
     * @param \PDO $bdd
     * @return array
     */
    public function SqlGetAll(\PDO $bdd){
        $requete = $bdd->prepare("SELECT * FROM categorie");
        $requete->execute();
        //$datas =  $requete->fetchAll(\PDO::FETCH_ASSOC);
        $datas =  $requete->fetchAll(\PDO::FETCH_CLASS,'src\Model\Categorie');
        return $datas;

    }

    public function SqlGetByid(\PDO $bdd, $id){
        $requete = $bdd->prepare("SELECT * FROM categorie WHERE id=:id");
        $requete->execute([
            "id" => $id
        ]);
        $requete->setFetchMode(\PDO::FETCH_CLASS,'src\Model\Categorie');
       $categorie = $requete->fetch();

        return$categorie;
    }

    public function SqlDeleteByid(\PDO $bdd, $id){
        $requete = $bdd->prepare("DELETE FROM categorie WHERE id=:id");
        $requete->execute([
            "id" => $id
        ]);
        return true;
    }
    public function SqlTruncate(\PDO $bdd){
        $requete = $bdd->prepare("TRUNCATE TABLE categorie");
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
     * @return Categorie
     */
    public function setid($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getlibelle()
    {
        return $this->libelle;
    }

    /**
     * @param mixed $libelle
     * @return Categorie
     */
    public function setlibelle($libelle)
    {
        $this->libelle = $libelle;
        return $this;
    }

    /**
     * @return mixed
     */
    public function geticon()
    {
        return $this->icon;
    }

    /**
     * @param mixed $icon
     * @return Categorie
     */
    public function seticon($icon)
    {
        $this->icon = $icon;
        return $this;
    }
}