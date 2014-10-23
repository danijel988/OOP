<?php
include_once 'config.php';
class Entry {
    
    
    
    public $string;
    public $delimiter; 
    public $data;
    public $id;
    
    private $db;
    public function __construct() {
        $this->db = new Database();
    }
    
    public function Insert(Entry $e)
    {
        try
        {
        
        $query = "INSERT INTO ENTRY(string,delimiter) VALUES(?,?)";
        $stmt = $this->db->mysqli->prepare($query);
        $stmt->bind_param('ss',$e->string,$e->delimiter);
        $stmt->execute();
        $stmt->close();
        }
        catch(Exception $ex)
        {
            
            echo $ex->getMessage();
        }
    }
    
    public function Read()
    {
        
        $query = ("select entryid,string,delimiter from entry");
        $result = $this->db->mysqli->query($query);
        $num_result = $result->num_rows;
        if($num_result>0)
        {
            while($rows =$result->fetch_assoc())
            {
                $this->data[] = $rows;
            }
        }
    }
    
    public function Update(Entry $e)
    {

            $query = "update entry set string = ?,delimiter=? where entryid= ?";
            $stmt = $this->db->mysqli->prepare($query);
            $stmt->bind_param('ssi',$e->string,$e->delimiter,$e->id);
            $stmt->execute();

    }
    
    public function ReadById($id)
    {
        $query = $this->db->mysqli->query("select * from entry where entryid=$id");
        $num_result = $query->num_rows;
        if($num_result >0)
        {
            while($rows=$query->fetch_assoc())
            {
                $this->data[] = $rows;
            }
        }
    }
    
    public function Delete($id)
    {
        $query = "delete from entry where entryid=?";
        $stmt = $this->db->mysqli->prepare($query);
        $stmt->bind_param('i',$id);
        $stmt->execute();
        
    }

}
