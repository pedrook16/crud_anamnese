<?php
namespace Models;

use \Core\Model;

class Exemplo extends Model {
	public function getAll() {
		$array = array();

		$sql = "SELECT * FROM diagnostic";
		$sql = $this->db->query($sql);

		$array = $sql->fetchAll(\PDO::FETCH_ASSOC);

		return $array;
	}

	public function get($id) {
		$array = array();
		$sql = "SELECT * FROM diagnostic WHERE id = :id";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(':id', $id);
		$sql->execute();
		if($sql->rowCount() > 0) {
			$array = $sql->fetch(\PDO::FETCH_ASSOC);
		}
		return $array;
	}

	public function add($anamnese, $response) {
		$sql = "INSERT INTO diagnostic (anamnese, response) VALUES ( :anamnese, :response)";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(':anamnese', $anamnese);
		$sql->bindValue(':response', $response);
		$sql->execute();

	}

	public function edit($anamnese, $response, $id) {
		$sql = "UPDATE diagnostic SET anamnese = :anamnese,
		response = :response  WHERE id = :id";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(":anamnese", $anamnese);
		$sql->bindValue(":response", $response);
		$sql->bindValue(":id", $id);
		$sql->execute();		
	}

	public function del($id) {
		$sql = "DELETE FROM diagnostic WHERE id = :id";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(':id', $id);
		$sql->execute();
	}
}
