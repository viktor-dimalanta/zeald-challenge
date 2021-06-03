<?php
class TeamModel{
    protected $db;

    public function __construct($database)
    {
        $this->db = $database;
    }

    public function getAllTeam()
    {
        $link = $this->db->openDbConnection();

        $result = $link->query("SELECT * FROM team ");

        $team = array();
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            $team[] = $row;
        }
        $this->db->closeDbConnection($link);

        
		return $team;
    }

    // public function getMusicById($id)
    // {
    //     $link = $this->db->openDbConnection();

    //     $query = 'SELECT * FROM music WHERE  id=:id';
    //     $statement = $link->prepare($query);
    //     $statement->bindValue(':id', $id, PDO::PARAM_INT);
    //     $statement->execute();

    //     $row = $statement->fetch(PDO::FETCH_ASSOC);

    //     $this->db->closeDbConnection($link);

    //     return $row;
    // }
	
    // public function insert()
    // {
    //     $link = $this->db->openDbConnection();

    //     $query = 'INSERT INTO music (nama, judul, album, tahun) VALUES (:nama, :judul, :album, :tahun)';
    //     $statement = $link->prepare($query);
    //     $statement->bindValue(':nama', $_POST['nama'], PDO::PARAM_STR);
    //     $statement->bindValue(':judul', $_POST['judul'], PDO::PARAM_STR);
    //     $statement->bindValue(':album', $_POST['album'], PDO::PARAM_STR);
    //     $statement->bindValue(':tahun', $_POST['tahun'], PDO::PARAM_STR);
    //     $statement->execute();

    //     $this->db->closeDbConnection($link);
    // }

    // public function update($id)
    // {
    //     $link = $this->db->openDbConnection();

    //     $query = "UPDATE music SET nama = :nama, judul = :judul, album = :album, tahun = :tahun WHERE id = :id";
    //     $statement = $link->prepare($query);
    //     $statement->bindValue(':nama', $_POST['nama'], PDO::PARAM_STR);
    //     $statement->bindValue(':judul', $_POST['judul'], PDO::PARAM_STR);
    //     $statement->bindValue(':album', $_POST['album'], PDO::PARAM_STR);
    //     $statement->bindValue(':tahun', $_POST['tahun'], PDO::PARAM_STR);
    //     $statement->bindValue(':id', $id, PDO::PARAM_INT);
    //     $statement->execute();

    //     $this->db->closeDbConnection($link);
    // }

    // public function delete($id)
    // {
    //     $link = $this->db->openDbConnection();

    //     $query = "DELETE FROM music WHERE id = :id";
    //     $statement = $link->prepare($query);
    //     $statement->bindValue(':id', $id, PDO::PARAM_INT);
    //     $statement->execute();

    //     $this->db->closeDbConnection($link);
    // }
}