<?php 
class DB{
	public $host = "localhost";
	public $user = "root";
	public $password = "";
	public $db_name = "oopblog";


	private $link;

	public function  __construct(){

		$this->connect();
	}
	private  function connect(){
		$this->link  = new mysqli($this->host, $this->user, $this->password, $this->db_name);

	}


	// public function insert($query){
	// 	$result = $this->link->query($query);

	// 	if ($result) {
	// 		echo "<center>Registration succcess </center>";		
	// 	}else{
	//         echo "Faild";
	//     }
	// }

	public function select($sql){
		$result = $this->link->query($sql);
		if ($result->num_rows > 0) {
			return $result;
		} else{
			return false;
		}
	}

	public function insert($sql){
		$result = $this->link->query($query);

		if ($result) {
			header("location: index.php?/inset = New post inserted");

		}else{
	        echo "Post freation faild";
	    }
	}

	public function update($sql){
		$update = $this->link->query($query);

		if ($update) {
			header("location: index.php?/update = Post updated ");

		}else{
	        echo "Update faild";
	    }
	}

	public function delete($sql){
		$delete = $this->link->query($query);

		if ($delete) {
			header("location: index.php?/delete = Post Deleted !! ");

		}else{
	        echo "Delete faild";
	    }
	}

	


}


?>