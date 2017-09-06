<?php
/***************************************************  
 * rolClass.php
 * Entity rolClass
 * version 2015-05-08
 ***************************************************/
require_once "BDBonGust.php";
 
class rolClass {
    public $id;
    public $rol;


    //----------Data base Values---------------------------------------
    public static $tableName = "rols";
    public static $colNameId = "id";
    public static $colNameRol = "rol";
           
    function __construct() {
    }

    public function getId() {
        return $this->id;
    }
    
    public function getRol() {
        return $this->rol;
    }

    
    public function setId($id) {
        $this->id = $id;
    }

    public function setRol($rol) {
        $this->rol = $rol;
    }
  
    public function getAll() {
        $data = array();
        $data["id"] = $this->getId();
        $data["rol"] = utf8_encode($this->getRol());
            
        return $data;
    }

    public function setAll($id, $rol) {
        $this->setId($id);
        $this->setRol($rol);
        
    }
    
    //---Databese management section-----------------------
    /*************************************************** 
     * fromResultSetList()
     * this function runs a query and returns an array with all the result transformed into an object
     * @param res query to execute
     * @return objects collection
    ***************************************************/
    private static function fromResultSetList( $res ) {
        $entityList = array();
        $i=0;
        while ( ($row = $res->fetch_array(MYSQLI_BOTH)) != NULL ) {
            //We get all the values an add into the array
            $entity = rolClass::fromResultSet( $row );
            
            $entityList[$i]= $entity;
            $i++;
        }
        return $entityList;
    }

    /*************************************************** 
    * fromResultSet()
    * the query result is transformed into an object
    * @param res ResultSet del qual obtenir dades
    * @return object
    ***************************************************/
    private static function fromResultSet( $res ) {

        $id = $res[ rolClass::$colNameId];                    
        $rol = $res[ rolClass::$colNameSeccio ];
      
        //Object construction
        $entity = new rolClass();
        $entity->setId($id);
        $entity->setRol($rol);
       
        return $entity;
    }

    /*************************************************** 
     * findByQuery()
     * It runs a particular query and returns the result
     * @param cons query to run
     * @return objects collection
    ***************************************************/
    public static function findByQuery( $cons ) {
   
        $conn = new BDBonGust();
        if (mysqli_connect_errno()) {
                printf("Connection with the database has failed, error: %s\n", mysqli_connect_error());
                exit();
        }
        
        //Run the query
        $res = $conn->query($cons);        
        if ( $conn != null ) $conn->close();
        
        return rolClass::fromResultSetList( $res );
    }

    /*************************************************** 
     * findById()
     * It runs a query and returns an object array
     * @param id
     * @return object with the query results
    ***************************************************/
    public static function findById( $id ) {
        $cons = "select * from `".rolClass::$tableName."` where ".rolClass::$colNameId." = \"".$id."\"";

        return rolClass::findByQuery( $cons );
    }

    /*************************************************** 
     * findAll()
     * It runs a query and returns an object array
     * @param none
     * @return object with the query results
    ***************************************************/
    public static function findAll( ) {
        $conn = new BDBonGust();
        if (mysqli_connect_errno()) {
            printf("Connection with the database has failed, error: %s\n", mysqli_connect_error());
                exit();
        }
        
        $cons = "select * from `".rolClass::$tableName."` ORDER BY `".rolClass::$colNameId."` DESC";
        return rolClass::findByQuery( $cons );
    }


    /***************************************************
     * toString()
     * Convert values in String
     * @param none
     * @return object with the query results
    ***************************************************/
    public function toString() {
        $toString = "rolClass[id=" . $this->getId() . "][rol=" . $this->getRol();
        return $toString;

    }
}

/*************************************************** 
     * create()
     * insert a new row into the database
    ***************************************************/
    /*public function create() {
        //Connection with the database
        $conn = new BDcarReservation();
        if (mysqli_connect_errno()) {
            printf("Connection with the database has failed, error: %s\n", mysqli_connect_error());
                exit();
        }
        //id,usuari,passwd,name,surname1,surname2,type_user,email,address,bank_account,phone
        //Preparing the sentence
        $stmt = $conn->stmt_init();
       //echo "id:".$this->getId()." idUser:". $this->getIdUser()." title:". $this->getTitle()." entry_date:". $this->getEntryDate()." content:". $this->getContent()." theme:". $this->getTheme()." image:". $this->getImage()." total_replies:". $this->getTotalReplies()." | resposta:";
        if ($stmt->prepare("insert into ".carClass::$tableName." (`id`,`id_user`,`title`,`entry_date`,`content`,`theme`,`image`,`total_replies`) values (?, ?, ?, ?, ?, ?, ?, ?)" )) {
            $stmt->bind_param("iisssssi", $this->getId(), $this->getIdUser(), $this->getTitle(), $this->getEntryDate(), $this->getContent(), $this->getTheme(), $this->getImage(), $this->getTotalReplies());
            //executar consulta
            $stmt->execute();
            $this->setId($conn->insert_id);
        }
        
        if ( $conn != null ) $conn->close();
        return $this->getId();
    }***************************************************/

    /*************************************************** 
     * delete()
     * it deletes a row from the database
    ***************************************************/
    /*public function delete() {
        //Connection with the database
        $conn = new BDcarReservation();
        if (mysqli_connect_errno()) {
            printf("Connection with the database has failed, error: %s\n", mysqli_connect_error());
            exit();
        }
        
        //Preparing the sentence
        $stmt = $conn->stmt_init();
        if ($stmt->prepare("delete from `".rolClass::$tableName."` where ".rolClass::$colNameId." = ?")) {
            $stmt->bind_param("i", $this->getId());
            $stmt->execute();
        }
        if ( $conn != null ) $conn->close();
    }***************************************************/


    /*************************************************** 
     * update()
     * it updates a row of the database
    ***************************************************/  
     /*public function update() {
        //Connection with the database
        $conn = new BDcarReservation();
        if (mysqli_connect_errno()) {
            printf("Connection with the database has failed, error: %s\n", mysqli_connect_error());
            exit();
        }
                        
        //Preparing the sentence
        $stmt = $conn->stmt_init();
        //echo "iisssssi", $this->getId(), $this->getIdUser(), $this->getTitle(), $this->getEntryDate(), $this->getContent(), $this->getTheme(), $this->getImage(), $this->getTotalReplies();
        if ($stmt->prepare("update `".rolClass::$tableName."` set ".rolClass::$colNameId." = ?, ".rolClass::$colNameIdUser." = ?, ".rolClass::$colNameTitle." = ?, ".rolClass::$colNameEntryDate." = ?, ".rolClass::$colNameContent." = ?, ".rolClass::$colNameTheme." = ?, ".rolClass::$colNameImage." = ?, ".rolClass::$colNameTotalReplies." = ? where ".rolClass::$colNameId." = '".$this->getId()."'") ) {
            $stmt->bind_param("iisssssi", $this->getId(), $this->getIdUser(), $this->getTitle(), $this->getEntryDate(), $this->getContent(), $this->getTheme(), $this->getImage(), $this->getTotalReplies());
            
            $stmt->execute();
        }
        if ( $conn != null ) $conn->close();

    }***************************************************/


    /*************************************************** 
     * update()
     * it updates a row of the database
    ***************************************************/  
     /*public function updateTotalReplies() {
        //Connection with the database
        $conn = new BDcarReservation();
        if (mysqli_connect_errno()) {
            printf("Connection with the database has failed, error: %s\n", mysqli_connect_error());
            exit();
        }
                        
        //Preparing the sentence
        $stmt = $conn->stmt_init();
        //echo "iisssssi", $this->getId(), $this->getIdUser(), $this->getTitle(), $this->getEntryDate(), $this->getContent(), $this->getTheme(), $this->getImage(), $this->getTotalReplies();
        if ($stmt->prepare("update `".rolClass::$tableName."` set ".rolClass::$colNameTotalReplies." = ? where ".rolClass::$colNameId." = ?") ) {
            $stmt->bind_param("ii", $this->getTotalReplies(), $this->getId());
            
            $stmt->execute();
        }
        if ( $conn != null ) $conn->close();

    }***************************************************/
?>
