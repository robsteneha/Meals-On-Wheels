<?php
	class foodmenu 
	{
		private $id;
		private $title;
		private $price;
		private $category;
		private $image;
		private $createdOn;
		public $dbConn;

		function setId($id) { $this->id=$id; }
		function getId() { return $this->id; }
		function setTitle($title) { $this->title=$title; }
		function getTitle() { return $this->title; }
		function setPrice($price) { $this->price=$price; }
		function getPrice() { return $this->price; }
		function setCategory($category) { $this->category=$category; }
		function getCategory() { return $this->category; }
		function setImage($image) { $this->images=$image; }
		function getImage() { return $this->id; }
		function setCreatedOn($createdOn) { $this->createdOn=$createdOn; }
		function getCreatedOn() { return $this->createdOn; }

		public function __construct($conn)
		{
			$this->dbConn = $conn;
		}
		
		public function getAllFood() {
			$sql  = "SELECT * FROM food";
			$stmt = $this->dbConn->prepare($sql);
			$stmt->execute();
			$allFood = $stmt->fetchAll(PDO::FETCH_ASSOC);
			return $allFood;	
		}
		public function getWorkshopById() {
			$sql  = "SELECT * FROM workshops WHERE id = :wid";
			$stmt = $this->dbConn->prepare($sql);
			$stmt->bindParam('wid', $this->id);
			$stmt->execute();
			$workshop = $stmt->fetch(PDO::FETCH_ASSOC);
			return $workshop;	
		}

	}
?>