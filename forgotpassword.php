<?php
/*
 * User Class
 * This class is used for database related (connect fetch, and insert) operations
 * @author    CodexWorld.com
 * @url       http://www.codexworld.com
 * @license   http://www.codexworld.com/license
 */
class User{
    private $dbHost     = "localhost";
    private $dbUsername = "root";
    private $dbPassword = "";
    private $dbName     = "counselling";
    
    
    public function __construct(){
        if(!isset($this->db)){
            // Connect to the database
            $conn = new mysqli($this->dbHost, $this->dbUsername, $this->dbPassword, $this->dbName);
            if($conn->connect_error){
                die("Failed to connect with MySQL: " . $conn->connect_error);
            }else{
                $this->db = $conn;
            }
        }
    }
    
    /*
     * Returns rows from the database based on the conditions
     * @param string name of the table
     * @param array select, where, order_by, limit and return_type conditions
     */
    public function getRows($conditions = array()){
        $sql = 'SELECT ';
        $sql .= array_key_exists("select",$conditions)?$conditions['select']:'*';
        $sql .= ' FROM '.$this->userTbl;
        if(array_key_exists("where",$conditions)){
            $sql .= ' WHERE ';
            $i = 0;
            foreach($conditions['where'] as $key => $value){
                $pre = ($i > 0)?' AND ':'';
                $sql .= $pre.$key." = '".$value."'";
                $i++;
            }
        }
        
        if(array_key_exists("order_by",$conditions)){
            $sql .= ' ORDER BY '.$conditions['order_by']; 
        }
        
        if(array_key_exists("start",$conditions) && array_key_exists("limit",$conditions)){
            $sql .= ' LIMIT '.$conditions['start'].','.$conditions['limit']; 
        }elseif(!array_key_exists("start",$conditions) && array_key_exists("limit",$conditions)){
            $sql .= ' LIMIT '.$conditions['limit']; 
        }
        
        $result = $this->db->query($sql);
        
        if(array_key_exists("return_type",$conditions) && $conditions['return_type'] != 'all'){
            switch($conditions['return_type']){
                case 'count':
                    $data = $result->num_rows;
                    break;
                case 'single':
                    $data = $result->fetch_assoc();
                    break;
                default:
                    $data = '';
            }
        }else{
            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                    $data[] = $row;
                }
            }
        }
        return !empty($data)?$data:false;
    }
    
    /*
     * Insert data into the database
     * @param string name of the table
     * @param array the data for inserting into the table
     */
    public function insert($data){
       
            $query = "INSERT INTO ".$this->userTbl." (".$columns.") VALUES (".$values.")";
            $insert = $this->db->query($query);
            return $insert?$this->db->insert_id:false;
        }
    
    
    /*
     * Update data into the database
     * @param string name of the table
     * @param array the data for inserting into the table
     */
    public function update($data, $conditions){
        if(!empty($data) && is_array($data) && !empty($conditions)){
            //prepare columns and values sql
            $cols_vals = '';
            $i = 0;
            if(!array_key_exists('modified',$data)){
                $data['modified'] = date("Y-m-d H:i:s");
            }
            foreach($data as $key=>$val){
                $pre = ($i > 0)?', ':'';
                $cols_vals .= $pre.$key." = '".$val."'";
                $i++;
            }
            
            //prepare where conditions
            $whereSql = '';
            $ci = 0;
            foreach($conditions as $key => $value){
                $pre = ($ci > 0)?' AND ':'';
                $whereSql .= $pre.$key." = '".$value."'";
                $ci++;
            }
            
            //prepare sql query
            $query = "UPDATE ".$this->userTbl." SET ".$cols_vals." WHERE ".$whereSql;

            //update data
            $update = $this->db->query($query);
            return $update?true:false;
        }else{
            return false;
        }
    }

}
?>
<?php
session_start();
$sessData = !empty($_SESSION['sessData'])?$_SESSION['sessData']:'';
if(!empty($sessData['status']['msg'])){
    $statusMsg = $sessData['status']['msg'];
    $statusMsgType = $sessData['status']['type'];
    unset($_SESSION['sessData']['status']);
}
?>
<title>Upakara</title>
<div style="text-align: center;"><h2>Enter the username of Your Account to Reset New Password</h2></div>
<?php echo !empty($statusMsg)?'<p class="'.$statusMsgType.'">'.$statusMsg.'</p>':''; ?>
<div class="container" style="text-align: center;">
    <div class="regisFrm">
        <form action="user_profile.php" method="post"><br>
            <div><input type="username" name="username" placeholder="username" required=""></div><br>
            
            <div> <input type="password" name="password" placeholder="PASSWORD" required=""></div><br>
            <div> <input type="password" name="confirm_password" placeholder="CONFIRM PASSWORD" required=""></div><br>
            <div class="send-button">
               
                <input type="submit" name="resetSubmit" value="RESET PASSWORD">
            </div>
        </form>
    </div>
</div>
