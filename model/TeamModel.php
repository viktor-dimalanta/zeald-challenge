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

}