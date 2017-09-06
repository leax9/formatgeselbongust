<?php
/***************************************************  
 * subcategoryClass.php
 * Entity subcategoryClass
 * version 2015-05-08
 ***************************************************/
require_once "BDBonGust.php";

class subcategoryClass {
    public $id;
    public $ca_nom;
    public $es_nom;
    public $id_categoria;


    //----------Data base Values---------------------------------------
    public static $tableNameCat = "ca_subcategories";
    public static $tableNameCast = "es_subcategories";
    public static $colNameId = "id";
    public static $colNameCaNom = "ca_nom";
    public static $colNameEsNom = "es_nom";
    public static $colNameIdCategoria = "id_categoria";
           
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

    public function getIdCategoria() {
        return $this->id_categoria;
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

    public function setIdCategoria($id_categoria) {
        $this->id_categoria = $id_categoria;
    }
  
    public function getAll() {
        $data = array();
        $data["id"] = $this->getId();
        $data["ca_nom"] = utf8_encode($this->getCaNom());
        $data["es_nom"] = utf8_encode($this->getEsNom());
        $data["id_categoria"] = $this->getIdCategoria();
            
        return $data;
    }

    public function setAll($id, $ca_nom, $es_nom, $id_categoria) {
        $this->setId($id);
        $this->setCaNom($ca_nom);
        $this->setEsNom($es_nom);
        $this->setIdCategoria($id_categoria);
        
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
            $entity = subcategoryClass::fromResultSet( $row );
            
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
   
        $id = $res[ subcategoryClass::$colNameId];                    
        $ca_nom = $res[ subcategoryClass::$colNameCaNom ];
        $es_nom = $res[ subcategoryClass::$colNameEsNom ];
        $id_categoria = $res[ subcategoryClass::$colNameIdCategoria ];
      
        //Object construction
        $entity = new subcategoryClass();
        $entity->setId($id);
        $entity->setCaNom($ca_nom);
        $entity->setEsNom($es_nom);
        $entity->setIdCategoria($id_categoria);
       
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
        
        return subcategoryClass::fromResultSetList( $res );
    }

    /*************************************************** 
     * findById()
     * It runs a query and returns an object array
     * @param id
     * @return object with the query results
    ***************************************************/
    public static function findById( $id , $language) {
        if($language == 0) {
            $cons = "select * from `".subcategoryClass::$tableNameCat."` where ".subcategoryClass::$colNameId." = \"".$id."\"";
        }else{
            $cons = "select * from `".subcategoryClass::$tableNameCast."` where ".subcategoryClass::$colNameId." = \"".$id."\"";
        }
        return subcategoryClass::findByQuery( $cons );
    }


    /*************************************************** 
     * findAll()
     * It runs a query and returns an object array
     * @param none
     * @return object with the query results
    ***************************************************/
    public static function findAll($language ) {
        $conn = new BDBonGust();
        
        if (mysqli_connect_errno()) {
            printf("Connection with the database has failed, error: %s\n", mysqli_connect_error());
                exit();
        }
        if($language == 0) {
            $cons = "select * from `".subcategoryClass::$tableNameCat."` ORDER BY `".subcategoryClass::$colNameId."` DESC";
        }else{
            $cons = "select * from `".subcategoryClass::$tableNameCast."` ORDER BY `".subcategoryClass::$colNameId."` DESC";
        }
        return subcategoryClass::findByQuery( $cons );
    }

    /***************************************************
     * toString()
     * Convert values in String
     * @param none
     * @return object with the query results
    ***************************************************/
    public function toString() {
        $toString = "subcategoryClass[id=" . $this->getId() . "][ca_nom=" . $this->getCaNom() . "][es_nom=" . $this->getEsNom() . "][id_categoria=" . $this->getIdCategoria();
        return $toString;

    }
}

?>