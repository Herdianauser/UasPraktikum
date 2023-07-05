<?php
    class Employee{
    // Connection
    private $conn;
    // Table
    private $db_table = "employee";
    // Columns
    public $id;
    public $nama;
    public $umur;
    public $shift;
    public $waktumasuk;
    public $waktupulang;
    // Db connection
    public function __construct($db){
        $this->conn = $db;
        }
        // GET ALL
        public function getEmployees(){
            $sqlQuery = "SELECT id, nama, umur, shift, waktumasuk, waktupulang FROM "
            . $this->db_table . "";
            $stmt = $this->conn->prepare($sqlQuery);
            $stmt->execute();
            return $stmt;
        }
        // CREATE
        public function createEmployee(){
            $sqlQuery = "INSERT INTO
            ". $this->db_table ."
            SET
            nama = :nama, 
            umur = :umur, 
            shift = :shift, 
            waktumasuk = :waktumasuk, 
            waktupulang = :waktupulang";
            $stmt = $this->conn->prepare($sqlQuery);
            // sanitize
            $this->nama=htmlspecialchars(strip_tags($this->nama));
            $this->umur=htmlspecialchars(strip_tags($this->umur));
            $this->shift=htmlspecialchars(strip_tags($this->shift));
            $this->waktumasuk=htmlspecialchars(strip_tags($this->waktumasuk));
            $this->waktupulang=htmlspecialchars(strip_tags($this->waktupulang));
            // bind data
            $stmt->bindParam(":nama", $this->nama);
            $stmt->bindParam(":umur", $this->umur);
            $stmt->bindParam(":shift", $this->shift);
            $stmt->bindParam(":waktumasuk", $this->waktumasuk);
            $stmt->bindParam(":waktupulang", $this->waktupulang);
            if($stmt->execute()){
            return true;
            }
            return false;
        }
        // READ single
        public function getSingleEmployee(){
            $sqlQuery = "SELECT
            id, 
            nama, 
            umur, 
            shift, 
            waktumasuk, 
            waktupulang
            FROM
            ". $this->db_table ."
            WHERE 
            id = ?
            LIMIT 0,1";
            $stmt = $this->conn->prepare($sqlQuery);
            $stmt->bindParam(1, $this->id);
            $stmt->execute();
            $dataRow = $stmt->fetch(PDO::FETCH_ASSOC);
            $this->nama = $dataRow['nama'];
            $this->umur = $dataRow['umur'];
            $this->shift = $dataRow['shift'];
            $this->waktumasuk = $dataRow['waktumasuk'];
            $this->waktupulang = $dataRow['waktupulang'];
        } 
        // UPDATE
        public function updateEmployee(){
            $sqlQuery = "UPDATE
            ". $this->db_table ."
            SET
            nama = :nama, 
            umur = :umur, 
            shift = :shift, 
            waktumasuk = :waktumasuk, 
            waktupulang = :waktupulang
            WHERE 
            id = :id";
            $stmt = $this->conn->prepare($sqlQuery);
            $this->nama=htmlspecialchars(strip_tags($this->nama));
            $this->umur=htmlspecialchars(strip_tags($this->umur));
            $this->shift=htmlspecialchars(strip_tags($this->shift));
            $this->waktumasuk=htmlspecialchars(strip_tags($this->waktumasuk));
            $this->waktupulang=htmlspecialchars(strip_tags($this->waktupulang));
            $this->id=htmlspecialchars(strip_tags($this->id));
            // bind data
            $stmt->bindParam(":nama", $this->nama);
            $stmt->bindParam(":umur", $this->umur);
            $stmt->bindParam(":shift", $this->shift);
            $stmt->bindParam(":waktumasuk", $this->waktumasuk);
            $stmt->bindParam(":waktupulang", $this->waktupulang);
            $stmt->bindParam(":id", $this->id);
            if($stmt->execute()){
            return true;
            }
            return false;
        }
        // DELETE
        function deleteEmployee(){
        $sqlQuery = "DELETE FROM " . $this->db_table . " WHERE id = ?";
        $stmt = $this->conn->prepare($sqlQuery);
        $this->id=htmlspecialchars(strip_tags($this->id));
        $stmt->bindParam(1, $this->id);
        if($stmt->execute()){
        return true;
        }
        return false;
    }
    }
?>