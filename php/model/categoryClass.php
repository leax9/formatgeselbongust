<?php
/** categoryClass.php
 * Entity categoryClass
 * version 2015-05-08
 */
require_once "BDBonGust.php";

class categoryClass {
    public $id;
    public $ca_nom;
    public $es_nom;

    //----------Data base Values---------------------------------------
    public static $tableNameCat = "ca_categories";
    public static $tableNameCast = "es_categories";
    public static $colNameId = "id";
    public static $colNameCaNom = "ca_nom";
    public static $colNameEsNom = "es_nom";
           
    function __construct() {
    }

    public function getId() {
        return $this->id;
    }
    
    public function getCaNom() {
        return $this->ca_nom;
    }

    public function getEsNom() {
        return $this->es_nom;
    }
    
    public function setId($id) {
        $this->id = $id;
    }

    public function setCaNom($ca_nom) {
        $this->ca_nom = $ca_nom;
    }

    public function setEsNom($es_nom) {
        $this->es_nom = $es_nom;
    }
  
    public function getAll() {
        $data = array();
        $data["id"] = $this->getId();
        $data["ca_nom"] = utf8_encode($this->getCaNom());
        $data["es_nom"] = utf8_encode($this->getEsNom());
            
        return $data;
    }

    public function setAll($id, $ca_nom, $es_nom) {
        $this->setId($id);
        $this->setCaNom($ca_nom);
        $this->setEsNom($es_nom);
          
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
        $entity = categoryClass::fromResultSet( $row );
        
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
    //We get all the values form the query
        $id = $res[ categoryClass::$colNameId];                    
        $ca_nom = $res[ categoryClass::$colNameCaNom ];
        $es_nom = $res[ categoryClass::$colNameEsNom ];
      
        //Object construction
        $entity = new categoryClass();
        $entity->setId($id);
        $entity->setCaNom($ca_nom);
        $entity->setEsNom($es_nom);
       
        return $entity;
    }

    /***************************************************
     * findByQuery()
     * It runs a particular query and returns the result
     * @param cons query to run
     * @return objects collection
    ***************************************************/
    public static function findByQuery( $cons ) {
        //Connection with the database
        $conn = new BDBonGust();
        if (mysqli_connect_errno()) {
            printf("Connection with the database has failed, error: %s\n", mysqli_connect_error());
            exit();
        }

        //Run the query
        $res = $conn->query($cons);
        
        if ( $conn != null ) $conn->close();
        
        return categoryClass::fromResultSetList( $res );
    }

    /***************************************************
     * findById()
     * It runs a query and returns an object array
     * @param id
     * @return object with the query results
    ***************************************************/
    public static function findById( $id, $language ) {
        if($language == 0) {
            $cons = "select * from `".categoryClass::$tableNameCat."` where ".categoryClass::$colNameId." = \"".$id."\"";
        }else {
            $cons = "select * from `".categoryClass::$tableNameCast."` where ".categoryClass::$colNameId." = \"".$id."\"";
        }
        return categoryClass::findByQuery( $cons );
    }

    /***************************************************
     * findAll()
     * It runs a query and returns an object array
     * @param none
     * @return object with the query results
    ***************************************************/
    public static function findAll( $language) {
        $conn = new BDBonGust();
        if (mysqli_connect_errno()) {
            printf("Connection with the database has failed, error: %s\n", mysqli_connect_error());
                exit();
        }
        if($language == 0) {
            $cons = "select * from `".categoryClass::$tableNameCat."` ORDER BY `".categoryClass::$colNameId."` DESC";
        }else {
            $cons = "select * from `".categoryClass::$tableNameCast."` ORDER BY `".categoryClass::$colNameId."` DESC";
        }
    return categoryClass::findByQuery( $cons );
    }

    /***************************************************
     * toString()
     * Convert values in String
     * @param none
     * @return object with the query results
    ***************************************************/
    public function toString() {
        $toString = "categoryClass[id=" . $this->getId() . "][ca_nom=" . $this->getCaNom() . "][es_nom=" . $this->getEsNom();
        return $toString;

    }
}


/**
     * create()
     * insert a new row into the database
    */
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
        if ($stmt->prepare("insert into ".carClass::$tableNameCat." (`id`,`id_user`,`title`,`entry_date`,`content`,`theme`,`image`,`total_replies`) values (?, ?, ?, ?, ?, ?, ?, ?)" )) {
            $stmt->bind_param("iisssssi", $this->getId(), $this->getIdUser(), $this->getTitle(), $this->getEntryDate(), $this->getContent(), $this->getTheme(), $this->getImage(), $this->getTotalReplies());
            //executar consulta
            $stmt->execute();
            $this->setId($conn->insert_id);
        }
        
        if ( $conn != null ) $conn->close();
        return $this->getId();
    }*/

    /**
     * delete()
     * it deletes a row from the database
    */
    /*public function delete() {
        //Connection with the database
        $conn = new BDcarReservation();
        if (mysqli_connect_errno()) {
            printf("Connection with the database has failed, error: %s\n", mysqli_connect_error());
            exit();
        }
        
        //Preparing the sentence
        $stmt = $conn->stmt_init();
        if ($stmt->prepare("delete from `".articleClass::$tableNameCat."` where ".articleClass::$colNameId." = ?")) {
            $stmt->bind_param("i", $this->getId());
            $stmt->execute();
        }
        if ( $conn != null ) $conn->close();
    }*/


    /**
     * update()
     * it updates a row of the database
    */  
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
        if ($stmt->prepare("update `".articleClass::$tableNameCat."` set ".articleClass::$colNameId." = ?, ".articleClass::$colNameIdUser." = ?, ".articleClass::$colNameTitle." = ?, ".articleClass::$colNameEntryDate." = ?, ".articleClass::$colNameContent." = ?, ".articleClass::$colNameTheme." = ?, ".articleClass::$colNameImage." = ?, ".articleClass::$colNameTotalReplies." = ? where ".articleClass::$colNameId." = '".$this->getId()."'") ) {
            $stmt->bind_param("iisssssi", $this->getId(), $this->getIdUser(), $this->getTitle(), $this->getEntryDate(), $this->getContent(), $this->getTheme(), $this->getImage(), $this->getTotalReplies());
            
            $stmt->execute();
        }
        if ( $conn != null ) $conn->close();

    }*/


    /**
     * update()
     * it updates a row of the database
    */  
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
        if ($stmt->prepare("update `".articleClass::$tableNameCat."` set ".articleClass::$colNameTotalReplies." = ? where ".articleClass::$colNameId." = ?") ) {
            $stmt->bind_param("ii", $this->getTotalReplies(), $this->getId());
            
            $stmt->execute();
        }
        if ( $conn != null ) $conn->close();

    }*/
?>