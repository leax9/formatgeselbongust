<?php
/***************************************************  
 * languageClass.php
 * Entity languageClass
 * version 2015-05-08
 ***************************************************/
require_once "BDBonGust.php";
 
class languageClass {
    public $id;
    public $idioma;
    public $ref;

    //----------Data base Values---------------------------------------
    public static $tableName = "idiomes";
    public static $colNameId = "id";
    public static $colNameSeccio = "idioma";
    public static $colNameSeccio = "ref";
           
    function __construct() {
    }

    public function getId() {
        return $this->id;
    }
    
    public function getIdioma() {
        return $this->idioma;
    }

    public function getRef() {
        return $this->ref;
    }

    
    public function setId($id) {
        $this->id = $id;
    }

    public function setIdioma($idioma) {
        $this->idioma = $idioma;
    }

    public function setRef($ref) {
        $this->ref = $ref;
    }
  
    public function getAll() {
        $data = array();
        $data["id"] = $this->getId();
        $data["idioma"] = $this->getIdioma();
        $data["ref"] = $this->getRef();
            
        return $data;
    }

    public function setAll($id, $idioma) {
        $this->setId($id);
        $this->setIdioma($idioma);
        $this->setRef($ref);
        
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
            $entity = languageClass::fromResultSet( $row );
            
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
        $id = $res[ languageClass::$colNameId];
        $idioma = $res[ languageClass::$colNameIdioma ];
        $ref = $res[ languageClass::$colNameRef ];
      
        //Object construction
        $entity = new languageClass();
        $entity->setId($id);
        $entity->setIdioma($idioma);
        $entity->setRef($ref);
       
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
        
        return languageClass::fromResultSetList( $res );
    }

    /*************************************************** 
     * findById()
     * It runs a query and returns an object array
     * @param id
     * @return object with the query results
    ***************************************************/
    public static function findById( $id ) {
        $cons = "select * from `".languageClass::$tableName."` where ".languageClass::$colNameId." = \"".$id."\"";

        return languageClass::findByQuery( $cons );
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
        $cons = "select * from `".languageClass::$tableName."` ORDER BY `".languageClass::$colNameId."` DESC";
    return languageClass::findByQuery( $cons );
    }
   
    
    /***************************************************
     * toString()
     * Convert values in String
     * @param none
     * @return object with the query results
    ***************************************************/
    public function toString() {
        $toString = "languageClass[id=" . $this->getId() . "][idioma=" . $this->getIdioma(). "][ref=" . $this->getRef();
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
        if ($stmt->prepare("delete from `".languageClass::$tableName."` where ".languageClass::$colNameId." = ?")) {
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
        if ($stmt->prepare("update `".languageClass::$tableName."` set ".languageClass::$colNameId." = ?, ".languageClass::$colNameIdUser." = ?, ".languageClass::$colNameTitle." = ?, ".languageClass::$colNameEntryDate." = ?, ".languageClass::$colNameContent." = ?, ".languageClass::$colNameTheme." = ?, ".languageClass::$colNameImage." = ?, ".languageClass::$colNameTotalReplies." = ? where ".languageClass::$colNameId." = '".$this->getId()."'") ) {
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
        if ($stmt->prepare("update `".languageClass::$tableName."` set ".languageClass::$colNameTotalReplies." = ? where ".languageClass::$colNameId." = ?") ) {
            $stmt->bind_param("ii", $this->getTotalReplies(), $this->getId());
            
            $stmt->execute();
        }
        if ( $conn != null ) $conn->close();

    }***************************************************/

?>
