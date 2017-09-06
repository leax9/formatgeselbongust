<?php
/***************************************************  
 * seccioClass.php
 * Entity seccioClass
 * version 2015-05-08
 ***************************************************/
require_once "BDBonGust.php";
 
class seccioClass {
    public $id;
    public $seccio;


    //----------Data base Values---------------------------------------
    public static $tableName = "seccions";
    public static $colNameId = "id";
    public static $colNameSeccio = "seccio";
           
    function __construct() {
    }

    public function getId() {
        return $this->id;
    }
    
    public function getSeccio() {
        return $this->seccio;
    }
    
    public function setId($id) {
        $this->id = $id;
    }

    public function setSeccio($seccio) {
        $this->seccio = $seccio;
    }
  
    public function getAll() {
        $data = array();
        $data["id"] = $this->getId();
        $data["seccio"] = utf8_encode($this->getSeccio());
            
        return $data;
    }

    public function setAll($id, $seccio) {
        $this->setId($id);
        $this->setSeccio($seccio);
        
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
            $entity = seccioClass::fromResultSet( $row );
            
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
    
        $id = $res[ seccioClass::$colNameId];                    
        $seccio = $res[ seccioClass::$colNameSeccio ];
      
        //Object construction
        $entity = new seccioClass();
        $entity->setId($id);
        $entity->setSeccio($seccio);
       
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
        
        return seccioClass::fromResultSetList( $res );
    }

    /*************************************************** 
     * findById()
     * It runs a query and returns an object array
     * @param id
     * @return object with the query results
    ***************************************************/
    public static function findById( $id ) {
        $cons = "select * from `".seccioClass::$tableName."` where ".seccioClass::$colNameId." = \"".$id."\"";

        return seccioClass::findByQuery( $cons );
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

        $cons = "select * from `".seccioClass::$tableName."` ORDER BY `".seccioClass::$colNameId."` DESC";
        return seccioClass::findByQuery( $cons );
    }

    /*************************************************** 
    * findByUsernameAndPass()
    * It runs a query and returns an object array
    * @param name
    * @return object with the query results
    ***************************************************/
    public static function findByUsernameAndPass( $usuari, $passwd ) {
       
       $cons = "select * from `".seccioClass::$tableName."` where ".seccioClass::$colNameUsername." = \"".$usuari."\" and ".seccioClass::$colNamePassword." = \""./*md5(***************************************************/$passwd/*)***************************************************/."\"";
       
       return seccioClass::findByQuery( $cons );
    }


    /***************************************************
     * toString()
     * Convert values in String
     * @param none
     * @return object with the query results
    ***************************************************/
    public function toString() {
        $toString = "seccioClass[id=" . $this->getId() . "][seccio=" . $this->getSeccio();
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
        if ($stmt->prepare("delete from `".seccioClass::$tableName."` where ".seccioClass::$colNameId." = ?")) {
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
        if ($stmt->prepare("update `".seccioClass::$tableName."` set ".seccioClass::$colNameId." = ?, ".seccioClass::$colNameIdUser." = ?, ".seccioClass::$colNameTitle." = ?, ".seccioClass::$colNameEntryDate." = ?, ".seccioClass::$colNameContent." = ?, ".seccioClass::$colNameTheme." = ?, ".seccioClass::$colNameImage." = ?, ".seccioClass::$colNameTotalReplies." = ? where ".seccioClass::$colNameId." = '".$this->getId()."'") ) {
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
        if ($stmt->prepare("update `".seccioClass::$tableName."` set ".seccioClass::$colNameTotalReplies." = ? where ".seccioClass::$colNameId." = ?") ) {
            $stmt->bind_param("ii", $this->getTotalReplies(), $this->getId());
            
            $stmt->execute();
        }
        if ( $conn != null ) $conn->close();

    }***************************************************/

?>
