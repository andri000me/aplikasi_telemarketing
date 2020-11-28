<?php 

class database{

	var $host = "localhost";
	var $uname = "root";
	var $pass = "";
	var $db = "telemarketing";
	public $conn;
	

	
	
	function __construct(){
		// mysqli_connect($this->host, $this->uname, $this->pass);
		// mysqli_select_db($this->db);
		$this->conn = mysqli_connect($this->host, $this->uname, $this->pass, $this->db);
	}

	function tampil_data($id){
	
		$data = mysqli_query($this->conn,"select * from customer WHERE employee_id = '$id' AND status=0");

		if(mysqli_num_rows($data) != 0){
		while($d = mysqli_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;

	}

	}


	function tampil_data_report($id){
	
		$data = mysqli_query($this->conn,"SELECT B.id AS id, A.id AS id_customer, A.name AS name, A.phone_number AS phone_number, B.reason AS reason , B.note AS note FROM customer A INNER JOIN report B ON A.id = B.customer_id INNER JOIN employee C ON A.employee_id= C.id WHERE C.id ='$id' AND A.status = 1");

		if(mysqli_num_rows($data) != 0){
		while($d = mysqli_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;

	}

	}

	function tampil_data_employee(){
	
		$data = mysqli_query($this->conn,"select * from employee");
	//	var_dump($data);die();
		if(mysqli_num_rows($data) != 0){
		while($d = mysqli_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;

	}

	}

	function input($name,$phone_number,$note,$employee_id){
		mysqli_query($this->conn,"insert into customer (name,phone_number,status,employee_id) values('$name','$phone_number','$note','$employee_id')");
	}

	function inputReport($note,$customer_id,$reason){
		mysqli_query($this->conn,"insert into report (note,customer_id,reason) values('$note','$customer_id','$reason')");
	}

	function updateStatus($id){
		mysqli_query($this->conn,"update customer set status=1 where id='$id'");
	}

	function login($username,$password){
		
		$data = mysqli_query($this->conn,"select * from employee where username='$username' and password='$password'");
		while($d = mysqli_fetch_array($data)){
			$hasil[] = $d;
		}
		//return $hasil;
		session_start();
	$cek = mysqli_num_rows($data);

	if($cek > 0){
		$_SESSION['username'] = $username;
		foreach($hasil as $h){
		//	var_dump($h['name']);die();
		$_SESSION['id'] = $h['id'];
		$_SESSION['name'] = $h['name'];
		}
		
		$_SESSION['status'] = "login";
		//var_dump($_SESSION['id']);die();
		header("location:index.php");
	}else{
		header("location:login.php?pesan=gagal");
	}

	}

	function register($name,$username,$password){
		mysqli_query($this->conn,"insert into employee (name,username,password) values('$name','$username','$password')");
	}

	function hapus($id){
		mysqli_query($this->conn,"delete from customer where id='$id'");
	}

	function hapusReport($id){
		mysqli_query($this->conn,"delete from report where id='$id'");
	}

	function edit($id){
		$data = mysqli_query($this->conn,"select * from customer where id='$id'");
		while($d = mysqli_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;
	}

	function update($id,$name,$phone_number,$note,$employee_id){
		mysqli_query($this->conn,"update customer set name='$name', phone_number='$phone_number', status='$note', employee_id='$employee_id'  where id='$id'");
	}

} 

?>