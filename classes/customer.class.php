<?php 
	/**
	 * 
	 */
	class customer {
		private $id;
		private $name;
		private $email;
		private $phone;
		private $address;
		private $createdOn;
		public $dbConn;
		function setId($id) { $this->id = $id; }
		function getId() { return $this->id; }
		function setName($name) { $this->u_name = $name; }
		function getName() { return $this->u_name; }
		function setEmail($email) { $this->email = $email; }
		function getEmail() { return $this->email; }
		function setMobile($phone) { $this->phone = $phone; }
		function getMobile() { return $this->phone; }
		function setAddress($address) { $this->address = $address; }
		function getAddress() { return $this->address; }
		function setCreatedOn($createdOn) { $this->createdOn = $createdOn; }
		function getCreatedOn() { return $this->createdOn; }
		public function __construct($conn) {
			$this->dbConn = $conn;
		}
		public function getCustomerByEmailId() {
			$sql  = "SELECT * FROM customers WHERE u_email = :email";
			$stmt = $this->dbConn->prepare($sql);
			$stmt->bindParam('email', $this->email);
			$stmt->execute();
			$customer = $stmt->fetch(PDO::FETCH_ASSOC);
			return $customer;	
		}
		public function getCustomerById() {
			$sql  = "SELECT * FROM customers WHERE id = :id";
			$stmt = $this->dbConn->prepare($sql);
			$stmt->bindParam('id', $this->id);
			$stmt->execute();
			$customer = $stmt->fetch(PDO::FETCH_ASSOC);
			return $customer;	
		}
	}
 ?>