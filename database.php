<?php
class database{
    public $server="localhost";
    public $user="root";
    public $pass="";
    public $db="db_siswa";
    public $table="tb_siswa";
    public $conn;
    public $data=[];
    public $db_value;
    public $filled;
    public function __construct(){
        $this->conn = mysqli_connect($this->server,$this->user,$this->pass,$this->db);
   
    }
    public function save(){
		$bd=count($this->data);
			if ($bd===2) {
		 	$this->db_value= "'".$this->data[0]."','".$this->data[1]."'";
		}elseif ($bd===3) {
			$this->db_value="'".$this->data[0]."','".$this->data[1]."','".$this->data[2]."'";
		}elseif ($bd===4) {
			$this->db_value="'".$this->data[0]."','".$this->data[1]."','".$this->data[2]."','".$this->data[3]."'";
		}elseif ($bd===5) {
			$this->db_value="'".$this->data[0]."','".$this->data[1]."','".$this->data[2]."','".$this->data[3]."','".$this->data[4]."'";
		}elseif ($bd===6) {
			$this->db_value="'".$this->data[0]."','".$this->data[1]."','".$this->data[2]."','".$this->data[3]."','".$this->data[4]."','".$this->data[5]."'";
		}elseif ($bd===7 ){
			$this->db_value="'".$this->data[0]."','".$this->data[1]."','".$this->data[2]."','".$this->data[3]."','".$this->data[4]."','".$this->data[5]."','".$this->data[6]."'";
		}
		echo $this->db_value;
		$query=	"INSERT INTO $this->table values (".$this->db_value.")";
 
	mysqli_query($this->conn,$query);
	return mysqli_affected_rows($this->conn);
}
    
public function getdata(){
    $query="select*from $this->table";
    $result = mysqli_query($this->conn,$query);
    $rows=[];
    while ($row= mysqli_fetch_assoc($result)){
        $rows[]=$row;
    }
    return$rows;
}

public function delete($id){
    mysqli_query($this->conn,"DELETE FROM $this->table where ". $this->filled[0]."='$id'");
    return mysqli_affected_rows($this->conn);
}
public function getdatasingle($id){
     $query = "select*from $this->table where ". $this->filled[0]."='$id'";
     $result = mysqli_query($this->conn,$query);
     $rows = mysqli_fetch_assoc($result);
     return $rows;
}

public function update (){
    $bd=count($this->data);
    if ($bd===2) {
    $this->db_value=$this->filled[0]."='".$this->data[0]."',".$this->filled[1]."='".$this->data[1]."'";
}elseif ($bd===3) {
    $this->db_value=$this->filled[0]."='".$this->data[0]."',".$this->filled[1]."='".$this->data[1]."',".$this->filled[2]."='".$this->data[2]."'";
}elseif ($bd===4) {
    $this->db_value=$this->filled[0]."='".$this->data[0]."',".$this->filled[1]."='".$this->data[1]."',".$this->filled[2]."='".$this->data[2]."',".$this->filled[3]."='".$this->data[3]."'";
}elseif ($bd===5) {
    $this->db_value=$this->filled[0]."='".$this->data[0]."',".$this->filled[1]."='".$this->data[1]."',".$this->filled[2]."='".$this->data[2]."',".$this->filled[3]."='".$this->data[3]."',".$this->filled[4]."='".$this->data[4]."'";
}elseif ($bd===6) {
    $this->db_value=$this->filled[0]."='".$this->data[0]."',".$this->filled[1]."='".$this->data[1]."',".$this->filled[2]."='".$this->data[2]."',".$this->filled[3]."='".$this->data[3]."',".$this->filled[4]."='".$this->data[4]."',".$this->filled[5]."='".$this->data[5]."'";
}elseif ($bd===7) {
    $this->db_value=$this->filled[0]."='".$this->data[0]."',".$this->filled[1]."='".$this->data[1]."',".$this->filled[2]."='".$this->data[2]."',".$this->filled[3]."='".$this->data[3]."',".$this->filled[4]."='".$this->data[4]."',".$this->filled[5]."='".$this->data[5]."',".$this->filled[6]."='".$this->data[6]."'";
}

$query=	"UPDATE $this->table set ".$this->db_value." WHERE ".$this->filled[0]."='".$this->data[0]."'";
 

    mysqli_query($this->conn,$query);
    return mysqli_affected_rows($this->conn);
}
public function cari($keyword){
    $bd=count($this->filled);
        if ($bd===2) {
        $this->db_value=$this->filled[0]." LIKE '%$keyword%' OR ".$this->filled[1]." LIKE '%$keyword%'";
    }elseif ($bd===3) {
        $this->db_value=$this->filled[0]." LIKE '%$keyword%' OR ".$this->filled[1]." LIKE '%$keyword%' OR ".$this->filled[2]." LIKE '%$keyword%'";
    }elseif ($bd===4) {
        $this->db_value=$this->filled[0]." LIKE '%$keyword%' OR ".$this->filled[1]." LIKE '%$keyword%' OR ".$this->filled[2]." LIKE '%$keyword%' OR ".$this->filled[3]." LIKE '%$keyword%'";
    }elseif ($bd===5) {
        $this->db_value=$this->filled[0]." LIKE '%$keyword%' OR ".$this->filled[1]." LIKE '%$keyword%' OR ".$this->filled[2]." LIKE '%$keyword%' OR ".$this->filled[3]." LIKE '%$keyword%' OR ".$this->filled[4]." LIKE '%$keyword%'";
    }elseif ($bd===6) {
        $this->db_value=$this->filled[0]." LIKE '%$keyword%' OR ".$this->filled[1]." LIKE '%$keyword%' OR ".$this->filled[2]." LIKE '%$keyword%' OR ".$this->filled[3]." LIKE '%$keyword%' OR ".$this->filled[4]." LIKE '%$keyword%' OR ".$this->filled[5]." LIKE '%$keyword%'";
    }elseif ($bd===7) {
        $this->db_value=$this->filled[0]." LIKE '%$keyword%' OR ".$this->filled[1]." LIKE '%$keyword%' OR ".$this->filled[2]." LIKE '%$keyword%' OR ".$this->filled[3]." LIKE '%$keyword%' OR ".$this->filled[4]." LIKE '%$keyword%' OR ".$this->filled[5]." LIKE '%$keyword%' OR ".$this->filled[6]." LIKE '%$keyword%'";
    }
    $query="SELECT*FROM $this->table WHERE ".$this->db_value;
    $result= mysqli_query($this->conn,$query);
    $rows=[];
    while ($row = mysqli_fetch_assoc($result)){
        $rows[]= $row;
    }
    return $rows;
}

}
$db= new database();

?>





