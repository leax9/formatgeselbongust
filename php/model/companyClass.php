<?php
/*************************************************** 
 companyClass.php
 * Entity companyClass
 * version 2015-05-08
 ***************************************************/
require_once "BDBonGust.php";
 
class companyClass {
    private $id;
    private $ca_titol;
    private $es_titol;
    private $ca_descripcio;
    private $es_descripcio;
    private $imatge;
    private $data_creacio;    
    private $actiu;
    private $usuari;

    //----------Data base Values---------------------------------------
    private static $tableName = "empresa";
    private static $colNameId = "id";
    private static $colNameCaTitol = "ca_titol";
    private static $colNameEsTitol = "es_titol";
    private static $colNameCaDescripcio = "ca_descripcio";
    private static $colNameEsDescripcio = "es_descripcio";
    private static $colNameImatge = "imatge";
    private static $colNameDataCreacio = "data_creacio";
    private static $colNameActiu = "actiu";
    private static $colNameUsuari = "usuari";
           
    function __construct() {
    }

    public function getId() {
        return $this->id;
    }
    
    public function getCaTitol() {
        return $this->ca_titol;
    }

    public function getEsTitol() {
        return $this->es_titol;
    }

    public function getCaDescripcio() {
        return $this->ca_descripcio;
    }

    public function getEsDescripcio() {
        return $this->es_descripcio;
    }

    public function getImatge() {
        return $this->imatge;
    }

    public function getDataCreacio() {
        return $this->data_creacio;
    }

    public function getActiu() {
        return $this->actiu;
    }

    public function getUsuari() {
        return $this->usuari;
    }
    
    public function setId($id) {
        $this->id = $id;
    }

    public function setCaTitol($ca_titol) {
        $this->ca_titol = $ca_titol;
    }

    public function setEsTitol($es_titol) {
        $this->es_titol = $es_titol;
    }

    public function setCaDescripcio($ca_descripcio) {
        $this->ca_descripcio = $ca_descripcio;
    }

    public function setEsDescripcio($es_descripcio) {
        $this->es_descripcio = $es_descripcio;
    }

    public function setImatge($imatge) {
        $this->imatge = $imatge;
    }

    public function setDataCreacio($data_creacio) {
        $this->data_creacio = $data_creacio;
    }

    public function setActiu($actiu) {
        $this->actiu = $actiu;
    }

    public function setUsuari($usuari) {
        $this->usuari = $usuari;
    }

     
    public function getAll() {
        $data = array();
        $data["id"] = $this->getId();
        $data["ca_titol"] = $this->getCaTitol();
        $data["es_titol"] = $this->getEsTitol();
        $data["ca_descripcio"] = utf8_encode($this->getCaDescripcio());
        $data["es_descripcio"] = utf8_encode($this->getEsDescripcio());
        $data["imatge"] = $this->getImatge();
        $data["data_creacio"] = $this->getDataCreacio();
        $data["actiu"] = $this->getActiu();
        $data["usuari"] = $this->getUsuari();
        
        return $data;
    }

    public function setAll($id, $ca_titol, $ca_descripcio, $imatge, $data_creacio, $actiu, $usuari) {
        $this->setId($id);
        $this->setCaTitol($ca_titol);
        $this->setEsTitol($es_titol);
        $this->setCaDescripcio($ca_descripcio);
        $this->setEsDescripcio($es_descripcio);
        $this->setImatge($imatge);
        $this->setDataCreacio($data_creacio);
        $this->setActiu($actiu);
        $this->setUsuari($usuari);
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
        $entity = companyClass::fromResultSet( $row );
        
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
        $id = $res[ companyClass::$colNameId];                    
        $ca_titol = $res[ companyClass::$colNameCaTitol];
        $es_titol = $res[ companyClass::$colNameEsTitol];
        $ca_descripcio = $res[ companyClass::$colNameCaDescripcio];
        $es_descripcio = $res[ companyClass::$colNameEsDescripcio];
        $imatge = $res[ companyClass::$colNameImatge];
        $data_creacio = $res[ companyClass::$colNameDataCreacio];
        $actiu = $res[ companyClass::$colNameActiu];
        $usuari = $res[ companyClass::$colNameUsuari];
        
        //Object construction
        $entity = new companyClass();
        $entity->setId($id);
        $entity->setCaTitol($ca_titol);
        $entity->setEsTitol($es_titol);
        $entity->setCaDescripcio($ca_descripcio);
        $entity->setEsDescripcio($es_descripcio);
        $entity->setImatge($imatge);
        $entity->setDataCreacio($data_creacio);
        $entity->setActiu($actiu);
        $entity->setUsuari($usuari);
        
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
        
        return companyClass::fromResultSetList( $res );
    }

    /***************************************************
     * findById()
     * It runs a query and returns an object array
     * @param id
     * @return object with the query results
    ***************************************************/
    public static function findById( $id ) {
        $cons = "select * from `".companyClass::$tableName."` where ".companyClass::$colNameId." = \"".$id."\"";

        return companyClass::findByQuery( $cons );
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
        $cons = "select * from `".companyClass::$tableName."` ORDER BY `".companyClass::$colNameId."` DESC";
    return companyClass::findByQuery( $cons );
    }

    /***************************************************
     * toString()
     * Convert values in String
     * @param none
     * @return object with the query results
    ***************************************************/
    public function toString() {
        $toString = "companyClass[id=" . $this->getId() . "][ca_titol=" . $this->getCaca_titol(). "][ca_descripcio=" . $this->getca_descripcio(). "][imatge=" . $this->getImatge(). "][data_creacio=" . $this->getDataCreacio(). "][actiu=" . $this->getActiu(). "][usuari=" . $this->getUsuari();
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
        //id,ca_titol,ca_descripcio,name,surname1,surname2,type_user,email,address,bank_account,phone
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
        if ($stmt->prepare("delete from `".companyClass::$tableName."` where ".companyClass::$colNameId." = ?")) {
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
        if ($stmt->prepare("update `".companyClass::$tableName."` set ".companyClass::$colNameId." = ?, ".companyClass::$colNameIdUser." = ?, ".companyClass::$colNameTitle." = ?, ".companyClass::$colNameEntryDate." = ?, ".companyClass::$colNameContent." = ?, ".companyClass::$colNameTheme." = ?, ".companyClass::$colNameImage." = ?, ".companyClass::$colNameTotalReplies." = ? where ".companyClass::$colNameId." = '".$this->getId()."'") ) {
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
        if ($stmt->prepare("update `".companyClass::$tableName."` set ".companyClass::$colNameTotalReplies." = ? where ".companyClass::$colNameId." = ?") ) {
            $stmt->bind_param("ii", $this->getTotalReplies(), $this->getId());
            
            $stmt->execute();
        }
        if ( $conn != null ) $conn->close();

    }***************************************************/
                    //$id, $ca_ca_titol, $ca_descripcio, $imatge, $data_creacio, $actiu, $usuari    


?>
