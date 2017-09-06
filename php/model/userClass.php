<?php
/***************************************************  
 * userClass.php
 * Entity userClass
 * version 2015-05-08
 ***************************************************/
require_once "BDBonGust.php";
class userClass {
    private $id;
    private $usuari;
    private $passwd;
    private $passwd_confirm;
    private $nom;    
    private $cognoms;
    private $email;
    private $rol;

    //----------Data base Values---------------------------------------
    private static $tableName = "usuaris";
    private static $colNameId = "id";
    private static $colNameUsername = "usuari";
    private static $colNamePassword = "passwd";
    private static $colNamePasswordConf = "passwd_confirm";
    private static $colNameNom = "nom";
    private static $colNameCognoms = "cognoms";
    private static $colNameEmail = "email";
    private static $colNameRol = "rol";
           
    function __construct() {
    }

    public function getId() {
        return $this->id;
    }
    
    public function getUsuari() {
        return $this->usuari;
    }

    public function getPassword() {
        return $this->passwd;
    }

    public function getPasswordConf() {
        return $this->passwd_confirm;
    }

    public function getNom() {
        return $this->nom;
    }

    public function getCognoms() {
        return $this->cognoms;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getRol() {
        return $this->rol;
    }
    
    public function setId($id) {
        $this->id = $id;
    }

    public function setUsuari($usuari) {
        $this->usuari = $usuari;
    }

    public function setPassword($passwd) {
        $this->passwd = $passwd;
    }

    public function setPasswordConf($passwd_confirm) {
        $this->passwd_confirm = $passwd_confirm;
    }

    public function setNom($nom) {
        $this->nom = $nom;
    }

    public function setCognoms($cognoms) {
        $this->cognoms = $cognoms;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setRol($rol) {
        $this->rol = $rol;
    }
  
    public function getAll() {
        $data = array();
        $data["id"] = $this->getId();
        $data["usuari"] = utf8_encode($this->getUsuari());
        $data["passwd"] = utf8_encode($this->getPassword());
        $data["passwd_confirm"] = utf8_encode($this->getPasswordConf());
        $data["nom"] = utf8_encode($this->getNom());
        $data["cognoms"] = utf8_encode($this->getCognoms());
        $data["email"] = utf8_encode($this->getEmail());
        $data["rol"] = utf8_encode($this->getRol());

        return $data;
    }

    public function setAll($id, $usuari, $passwd, $passwd_confirm, $nom, $cognoms, $email, $rol) {
        $this->setId($id);
        $this->setUsuari($usuari);
        $this->setPassword($passwd);
        $this->setPasswordConf($passwd_confirm);
        $this->setNom($nom);
        $this->setCognoms($cognoms);
        $this->setEmail($email);
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
            $entity = userClass::fromResultSet( $row );
            
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
    
        $id = $res[ userClass::$colNameId];                    
        $usuari = $res[ userClass::$colNameUsername ];
        $passwd = $res[ userClass::$colNamePassword ];
        $passwd_confirm = $res[ userClass::$colNamePasswordConf ];
        $nom = $res[ userClass::$colNameNom ];
        $cognoms = $res[ userClass::$colNameCognoms ];
        $email = $res[ userClass::$colNameEmail ];
        $rol = $res[ userClass::$colNameRol ];

        //Object construction
        $entity = new userClass();
        $entity->setId($id);
        $entity->setUsuari($usuari);
        $entity->setPassword($passwd);
        $entity->setPasswordConf($passwd_confirm);
        $entity->setNom($nom);
        $entity->setCognoms($cognoms);
        $entity->setEmail($email);
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
        
        return userClass::fromResultSetList( $res );
    }

    /*************************************************** 
     * findById()
     * It runs a query and returns an object array
     * @param id
     * @return object with the query results
    ***************************************************/
    public static function findById( $id ) {
        $cons = "select * from `".userClass::$tableName."` where ".userClass::$colNameId." = \"".$id."\"";

        return userClass::findByQuery( $cons );
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
        
        $cons = "select * from `".userClass::$tableName."` ORDER BY `".userClass::$colNameId."` DESC";
        return userClass::findByQuery( $cons );
    }

     /*************************************************** 
    * findByUsernameAndPass()
     * It runs a query and returns an object array
     * @param name
     * @return object with the query results
    ***************************************************/
    public static function findByUsernameAndPass( $usuari, $passwd ) {
        
        $cons = "select * from `".userClass::$tableName."` where ".userClass::$colNameUsername." = \"".$usuari."\" and ".userClass::$colNamePassword." = \""./*md5(***************************************************/$passwd/*)***************************************************/."\"";
        
        return userClass::findByQuery( $cons );
    }

    /***************************************************
     * toString()
     * Convert values in String
     * @param none
     * @return object with the query results
    ***************************************************/
    public function toString() {
        $toString = "userClass[id=" . $this->getId() . "][usuari=" . $this->getUsuari(). "][passwd=" . $this->getPassword();
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
        if ($stmt->prepare("delete from `".userClass::$tableName."` where ".userClass::$colNameId." = ?")) {
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
        if ($stmt->prepare("update `".userClass::$tableName."` set ".userClass::$colNameId." = ?, ".userClass::$colNameIdUser." = ?, ".userClass::$colNameTitle." = ?, ".userClass::$colNameEntryDate." = ?, ".userClass::$colNameContent." = ?, ".userClass::$colNameTheme." = ?, ".userClass::$colNameImage." = ?, ".userClass::$colNameTotalReplies." = ? where ".userClass::$colNameId." = '".$this->getId()."'") ) {
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
        if ($stmt->prepare("update `".userClass::$tableName."` set ".userClass::$colNameTotalReplies." = ? where ".userClass::$colNameId." = ?") ) {
            $stmt->bind_param("ii", $this->getTotalReplies(), $this->getId());
            
            $stmt->execute();
        }
        if ( $conn != null ) $conn->close();

    }***************************************************/

?>