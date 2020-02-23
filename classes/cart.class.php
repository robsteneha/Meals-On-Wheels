<?php
    class cart {
        private $id;
        private $cid;
        private $fid;
        private $title;
        private $quantity;
        private $totalAmount;
        public $dbConn;
        function setId($id) { $this->id = $id; }
        function getId() { return $this->id; }
        function setCid($cid) { $this->cid = $cid; }
        function getCid() { return $this->cid; }
        function setFid($fid) { $this->fid = $fid; }
        function getFid() { return $this->fid; }
        function setTitle($title) { $this->title = $title; }
        function getTitle() { return $this->title; }
        function setQuantity($quantity) { $this->quantity = $quantity; }
        function getQuantity() { return $this->quantity; }
        function setTotalAmount($totalAmount) { $this->totalAmount = $totalAmount; }
        function getTotalAmount() { return $this->totalAmount; }
    
        public function __construct($conn) {
            $this->dbConn = $conn;
        }
        public function addItem() {
            $sql = "INSERT INTO `cart`(`id`, `c_id`, `f_id`, `title`, `quantity`, `totalAmount`) VALUES (null,:cid,:fid,:title,:quantity,:totalAmount)";
            $stmt = $this->dbConn->prepare($sql);
            $stmt->bindParam(':cid', $this->cid);
            $stmt->bindParam(':fid', $this->fid);
            $stmt->bindParam(':title', $this->title);
            $stmt->bindParam(':quantity', $this->quantity);
            $stmt->bindParam(':totalAmount', $this->totalAmount);
            
            try {
                if($stmt->execute()) {
                    return true;
                } else {
                    return false;
                }
            } catch (Exception $e) {
                echo $e->getMessage();
            }
        }
        public function updateItem() {
            $sql  = "UPDATE `cart` SET `quantity` = :quantity, `totalAmount` = :totalAmount WHERE c_id = :cid AND f_id = :fid";
            $stmt = $this->dbConn->prepare($sql);
            $stmt->bindParam(':cid', $this->cid);
            $stmt->bindParam(':fid', $this->fid);
            $stmt->bindParam(':quantity', $this->quantity);
            $stmt->bindParam(':totalAmount', $this->totalAmount);
            try {
                if($stmt->execute()) {
                    return true;
                } else {
                    return false;
                }
            } catch (Exception $e) {
                echo $e->getMessage();
            }
        }
        public function removeItem() {
            $sql  = "DELETE FROM `cart` WHERE id = :id";
            $stmt = $this->dbConn->prepare($sql);
            $stmt->bindParam(':id', $this->id);
            try {
                if($stmt->execute()) {
                    return true;
                } else {
                    return false;
                }
            } catch (Exception $e) {
                echo $e->getMessage();
            }
        }
        public function removeAllItems() {
            $sql  = "DELETE FROM `cart` WHERE cid = :cid";
            $stmt = $this->dbConn->prepare($sql);
            $stmt->bindParam(':cid', $this->cid);
            try {
                if($stmt->execute()) {
                    return true;
                } else {
                    return false;
                }
            } catch (Exception $e) {
                echo $e->getMessage();
            }
        }
        public function getAllCartItems() {
            $sql  = "SELECT c.*, w.price, w.description, w.image FROM cart c JOIN workshops w on c.fid = w.id WHERE cid = :cid";
            $stmt = $this->dbConn->prepare($sql);
            $stmt->bindParam('cid', $this->cid);
            $stmt->execute();
            $carts = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $carts;   
        }
        public function calculatePrices($cartItems = []) {
            if(count($cartItems) <= 0) {
                $cartItems  = $this->getAllCartItems();
            }
            $subTotal   = 0;
            $tax        = 10;
            $quantity   = 0;
            foreach ($cartItems as $key => $cartItem) {
                $subTotal += $cartItem['totalAmount'];
                $quantity += $cartItem['quantity'];
            }
            $totalPrice = number_format( $this->getTotalAmount(), 2);
            $taxes      = $tax * $quantity;
            $finalPrice = number_format( $subTotal + $taxes, 2 );
            $subTotal   = number_format($subTotal, 2);
            $taxes      = number_format($taxes, 2);
            $data       = [ 'itemCount' => count($cartItems), 'totalPrice'=>$totalPrice, 'subTotal'=>$subTotal, 'taxes'=> $taxes, 'finalPrice'=>$finalPrice];
            return $data;
        }
    }
?>