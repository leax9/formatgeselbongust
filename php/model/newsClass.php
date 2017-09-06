<?php
/***************************************************
 * newsClass.php
 * Entity newsClass
 * version 2015-05-08
 ***************************************************/
require_once "BDBonGust.php";
header("Content-Type: text/html;charset=utf-8");

class newsClass {
    private $id;
    private $seccio;
    private $titol;
    private $subtitol;
    private $descripcio;
    private $noticia;
    private $img_slider;
    private $img_noticia;
    private $data_creacio;
    private $data_noticia;
    private $actiu;
    private $usuari;

    //----------Data base Values---------------------------------------
    //CAT
    private static $tableNameCat = "ca_noticies";
    private static $tableNameCast = "es_noticies";
    private static $colNameId = "id";
    private static $colNameSeccio = "seccio";
    private static $colNameTitol = "titol";
    private static $colNameSubtitol = "subtitol";
    private static $colNameDescripcio = "descripcio";
    private static $colNameNoticia = "noticia";
    private static $colNameImgSlider = "img_slider";
    private static $colNameImgNoticia = "img_noticia";
    private static $colNameDataCreacio = "data_creacio";
    private static $colNameDataNoticia = "data_noticia";
    private static $colNameActiu = "actiu";
    private static $colNameUsuari = "usuari";

    //CAST
    private static $tableName2 = "es_noticies";


    function __construct() {
    }

    public function getId() {
        return $this->id;
    }

    public function getSeccio() {
        return $this->seccio;
    }

    public function getTitol() {
        return $this->titol;
    }

    public function getSubtitol() {
        return $this->subtitol;
    }

    public function getDescripcio(){
        return $this->descripcio;
    }

    public function getNoticia() {
        return $this->noticia;
    }

    public function getImgSlider() {
        return $this->img_slider;
    }

    public function getImgNoticia() {
        return $this->img_noticia;
    }

    public function getDataCreacio() {
        return $this->data_creacio;
    }

    public function getDataNoticia() {
        return $this->data_noticia;
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

    public function setSeccio($seccio) {
        $this->seccio = $seccio;
    }

    public function setTitol($titol) {
        $this->titol = $titol;
    }

    public function setSubtitol($subtitol) {
        $this->subtitol = $subtitol;
    }

    public function setDescripcio($descripcio) {
        $this->descripcio = $descripcio;
    }

    public function setNoticia($noticia) {
        $this->noticia = $noticia;
    }

    public function setImgSlider($img_slider) {
        $this->img_slider = $img_slider;
    }

    public function setImgNoticia($img_noticia) {
        $this->img_noticia = $img_noticia;
    }

    public function setDataCreacio($data_creacio) {
        $this->data_creacio = $data_creacio;
    }

    public function setDataNoticia($data_noticia) {
        $this->data_noticia = $data_noticia;
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
        $data["seccio"] = $this->getSeccio();
        $data["titol"] = utf8_encode($this->getTitol());
        $data["subtitol"] = utf8_encode($this->getSubtitol());
        $data["descripcio"] = utf8_encode($this->getDescripcio());
        $data["noticia"] = utf8_encode($this->getNoticia());
        $data["img_slider"] = utf8_encode($this->getImgSlider());
        $data["img_noticia"] = utf8_encode($this->getImgNoticia());
        $data["data_creacio"] = $this->getDataCreacio();
        $data["data_noticia"] = $this->getDataNoticia();
        $data["actiu"] = $this->getActiu();
        $data["usuari"] = $this->getUsuari();

        return $data;
    }

    public function setAll($id, $seccio, $titol, $subtitol, $descripcio, $noticia, $img_slider, $img_noticia, $data_creacio, $data_noticia, $actiu, $usuari) {
        $this->setId($id);
        $seccioObj = new seccioClass();
        $seccioObj->setAll($seccio->id,$seccio->seccio);
        $this->setSeccio($seccioObj);
        $this->setTitol($titol);
        $this->setSubtitol($subtitol);
        $this->setDescripcio($descripcio);
        $this->setNoticia($noticia);
        $this->setImgSlider($img_slider);
        $this->setImgNoticia($img_noticia);
        $this->setDataCreacio($data_creacio);
        $this->setDataNoticia($data_noticia);
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
            $entity = newsClass::fromResultSet( $row );

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

        $id = $res[ newsClass::$colNameId];
        $seccio = $res[ newsClass::$colNameSeccio ];
        $titol = $res[ newsClass::$colNameTitol ];
        $subtitol = $res[ newsClass::$colNameSubtitol ];
        $descripcio = $res[ newsClass::$colNameDescripcio ];
        $noticia = $res[ newsClass::$colNameNoticia ];
        $img_slider = $res[ newsClass::$colNameImgSlider ];
        $img_noticia = $res[ newsClass::$colNameImgNoticia ];
        $data_creacio = $res[ newsClass::$colNameDataCreacio ];
        $data_noticia = $res[ newsClass::$colNameDataNoticia ];
        $actiu = $res[ newsClass::$colNameActiu ];
        $usuari = $res[ newsClass::$colNameUsuari ];

        //Object construction
        $entity = new newsClass();
        $entity->setId($id);
        $entity->setSeccio($seccio);
        $seccioArray = seccioClass::findById($seccio);
        $entity->setSeccio($seccioArray[0]->getAll());
        $entity->setTitol($titol);
        $entity->setSubtitol($subtitol);
        $entity->setDescripcio($descripcio);
        $entity->setNoticia($noticia);
        $entity->setImgSlider($img_slider);
        $entity->setImgNoticia($img_noticia);
        $entity->setDataCreacio($data_creacio);
        $entity->setDataNoticia($data_noticia);
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

        return newsClass::fromResultSetList( $res );
    }

    /***************************************************
     * findById()
     * It runs a query and returns an object array
     * @param id
     * @return object with the query results
    ***************************************************/
    public static function findById( $id, $language ) {
        if($language == 0) {
            $cons = "select * from `".newsClass::$tableNameCat."` where ".newsClass::$colNameId." = \"".$id."\"";
        } else{
            $cons = "select * from `".newsClass::$tableNameCast."` where ".newsClass::$colNameId." = \"".$id."\"";
        }
        return newsClass::findByQuery( $cons );
    }

    /***************************************************
     * findAll()
     * It runs a query and returns an object array
     * @param none
     * @return object with the query results
    ***************************************************/
    public static function findAll($language ) {
        $conn = new BDBonGust();
        //mysql_query("SET NAMES 'utf8'");
        if (mysqli_connect_errno()) {
            printf("Connection with the database has failed, error: %s\n", mysqli_connect_error());
                exit();
        }
        //$conn->query("SET NAMES 'utf8'");
        if($language == 0) {
            $cons = "select * from `".newsClass::$tableNameCat."` ORDER BY `".newsClass::$colNameId."` DESC";
        } else {
            $cons = "select * from `".newsClass::$tableNameCast."` ORDER BY `".newsClass::$colNameId."` DESC";
        }
        return newsClass::findByQuery( $cons );
    }

    /***************************************************
     * findAllActive()
     * It runs a query and returns an object array
     * @param none
     * @return object with the query results
    ***************************************************/
    public static function findAllActive($language) {
        $conn = new BDBonGust();

        if (mysqli_connect_errno()) {
            printf("Connection with the database has failed, error: %s\n", mysqli_connect_error());
                exit();
        }
        if($language == 0) {
            $cons = "select * from `".newsClass::$tableNameCat."` WHERE actiu = 1 and seccio > 2 ORDER BY `".newsClass::$colNameId."` DESC";
        } else {
            $cons = "select * from `".newsClass::$tableNameCast."` WHERE actiu = 1 and seccio > 2 ORDER BY `".newsClass::$colNameId."` DESC";
        }
        return newsClass::findByQuery( $cons );
    }


    /***************************************************
     * findBySection()
     * Retorna les noticies de la secció escollida
     * @param seccio
     * @return object with the query results
    ***************************************************/
    public static function findBySection( $seccio, $language ) {
        $conn = new BDBonGust();

        if (mysqli_connect_errno()) {
            printf("Connection with the database has failed, error: %s\n", mysqli_connect_error());
                exit();
        }

        if($language == 0) {
            $cons = "select * from `".newsClass::$tableNameCat."` WHERE seccio = ".$seccio." AND actiu = 1 ORDER BY `".newsClass::$colNameId."` DESC";
            return newsClass::findByQuery( $cons );
        } else{
            $cons = "select * from `".newsClass::$tableNameCast."` WHERE seccio = ".$seccio." AND actiu = 1 ORDER BY `".newsClass::$colNameId."` DESC";
            return newsClass::findByQuery( $cons );
        }

        
    }

    /***************************************************
    * findByUsernameAndPass()
    * It runs a query and returns an object array
    * @param name
    * @return object with the query results
    ***************************************************/
    public static function findByUsernameAndPass( $usuari, $passwd, $language ) {
        if($language == 0) {
            $cons = "select * from `".newsClass::$tableNameCat."` where ".newsClass::$colNameUsername." = \"".$usuari."\" and ".newsClass::$colNamePassword." = \""./*md5(***************************************************/$passwd/*)***************************************************/."\"";
        } else {
            $cons = "select * from `".newsClass::$tableNameCast."` where ".newsClass::$colNameUsername." = \"".$usuari."\" and ".newsClass::$colNamePassword." = \""./*md5(***************************************************/$passwd/*)***************************************************/."\"";
        }
        return newsClass::findByQuery( $cons );
    }


    /***************************************************
     * create()
     * insert a new row into the database
    ***************************************************/
    public function create($language) {
        //Connection with the database
        $conn = new BDBonGust();
        if (mysqli_connect_errno()) {
            printf("Connection with the database has failed, error: %s\n", mysqli_connect_error());
                exit();
        }
        //id,usuari,passwd,name,surname1,surname2,type_user,email,address,bank_account,phone
        //Preparing the sentence
        $stmt = $conn->stmt_init();
       //echo "id:".$this->getId()." idUser:". $this->getIdUser()." title:". $this->getTitle()." entry_date:". $this->getEntryDate()." content:". $this->getContent()." theme:". $this->getTheme()." image:". $this->getImage()." total_replies:". $this->getTotalReplies()." | resposta:";
       if($language == 0) {
        if ($stmt->prepare("insert into ".newsClass::$tableNameCat." (`id`,`seccio`,`titol`,`subtitol`,`descripcio`,`noticia`,`img_slider`,`img_noticia`,`data_creacio`,`data_noticia`,`actiu`,`usuari`) values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)" )) {
            $stmt->bind_param("iissssssssii", $this->getId(), $this->getSeccio()->getId(), utf8_decode($this->getTitol()), utf8_decode($this->getSubtitol()), utf8_decode($this->getDescripcio()), utf8_decode($this->getNoticia()), $this->getImgSlider(), $this->getImgNoticia(), $this->getDataCreacio(), $this->getDataNoticia(), $this->getActiu(), $this->getUsuari());
            //executar consulta
            $stmt->execute();
           // $this->setId($conn->insert_id);
            $this->setId($conn->insert_id);
        }
       } else {
        if ($stmt->prepare("insert into ".newsClass::$tableNameCast." (`id`,`seccio`,`titol`,`subtitol`,`descripcio`,`noticia`,`img_slider`,`img_noticia`,`data_creacio`,`data_noticia`,`actiu`,`usuari`) values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)" )) {
            $stmt->bind_param("iissssssssii", $this->getId(), $this->getSeccio()->getId(), utf8_decode($this->getTitol()), utf8_decode($this->getSubtitol()), utf8_decode($this->getDescripcio()), utf8_decode($this->getNoticia()), $this->getImgSlider(), $this->getImgNoticia(), $this->getDataCreacio(), $this->getDataNoticia(), $this->getActiu(), $this->getUsuari());
            //executar consulta
            $stmt->execute();
           // $this->setId($conn->insert_id);
            $this->setId($conn->insert_id);
        }  
       }
        if ( $conn != null ) $conn->close();
        return $this->getId();
    }

    /***************************************************
     * delete()
     * it deletes a row from the database
    ***************************************************/
    public function delete($language) {
        //Connection with the database
        $conn = new BDBonGust();
        if (mysqli_connect_errno()) {
            printf("Connection with the database has failed, error: %s\n", mysqli_connect_error());
            exit();
        }

        //Preparing the sentence
        $stmt = $conn->stmt_init();
        if($language == 0) {
            if ($stmt->prepare("delete from `".newsClass::$tableNameCat."` where ".newsClass::$colNameId." = ?")) {
                $stmt->bind_param("i", $this->getId());
                $stmt->execute();
            }
        } else {
            if ($stmt->prepare("delete from `".newsClass::$tableNameCast."` where ".newsClass::$colNameId." = ?")) {
                $stmt->bind_param("i", $this->getId());
                $stmt->execute();
            }
        }
        if ( $conn != null ) $conn->close();
    }


    /***************************************************
     * update()
     * it updates a row of the database
    ***************************************************/
     public function update($language) {
        //Connection with the database
        $conn = new BDBonGust();
        if (mysqli_connect_errno()) {
            printf("Connection with the database has failed, error: %s\n", mysqli_connect_error());
            exit();
        }

        //Preparing the sentence
        $stmt = $conn->stmt_init();
        //echo "iisssssi", $this->getId(), $this->getIdUser(), $this->getTitle(), $this->getEntryDate(), $this->getContent(), $this->getTheme(), $this->getImage(), $this->getTotalReplies();
        if($language == 0) {
            if ($stmt->prepare("update `".newsClass::$tableNameCat."` set ".newsClass::$colNameId." = ?, ".newsClass::$colNameSeccio." = ?, ".newsClass::$colNameTitol." = ?, ".newsClass::$colNameSubtitol." = ?, ".newsClass::$colNameDescripcio." = ?, ".newsClass::$colNameNoticia." = ?, ".newsClass::$colNameImgSlider." = ?, ".newsClass::$colNameImgNoticia." = ?, ".newsClass::$colNameDataCreacio." = ?, ".newsClass::$colNameDataNoticia." = ?, ".newsClass::$colNameActiu." = ?, ".newsClass::$colNameUsuari." = ? where ".newsClass::$colNameId." = '".$this->getId()."'") ) {
                $stmt->bind_param("iissssssssii", $this->getId(), $this->getSeccio()->getId(), utf8_decode($this->getTitol()), utf8_decode($this->getSubtitol()), utf8_decode($this->getDescripcio()), utf8_decode($this->getNoticia()), $this->getImgSlider(), $this->getImgNoticia(), $this->getDataCreacio(), $this->getDataNoticia(), $this->getActiu(), $this->getUsuari());

                $stmt->execute();


            }
        } else {
            if ($stmt->prepare("update `".newsClass::$tableNameCast."` set ".newsClass::$colNameId." = ?, ".newsClass::$colNameSeccio." = ?, ".newsClass::$colNameTitol." = ?, ".newsClass::$colNameSubtitol." = ?, ".newsClass::$colNameDescripcio." = ?, ".newsClass::$colNameNoticia." = ?, ".newsClass::$colNameImgSlider." = ?, ".newsClass::$colNameImgNoticia." = ?, ".newsClass::$colNameDataCreacio." = ?, ".newsClass::$colNameDataNoticia." = ?, ".newsClass::$colNameActiu." = ?, ".newsClass::$colNameUsuari." = ? where ".newsClass::$colNameId." = '".$this->getId()."'") ) {
                $stmt->bind_param("iissssssssii", $this->getId(), $this->getSeccio()->getId(), utf8_decode($this->getTitol()), utf8_decode($this->getSubtitol()), utf8_decode($this->getDescripcio()), utf8_decode($this->getNoticia()), $this->getImgSlider(), $this->getImgNoticia(), $this->getDataCreacio(), $this->getDataNoticia(), $this->getActiu(), $this->getUsuari());

                $stmt->execute();


            }
        }
        if ( $conn != null ) $conn->close();
      

    }

    /***************************************************
     * toString()
     * Convert values in String
     * @param none
     * @return object with the query results
    ***************************************************/
    public function toString() {
        $toString = "newsClass[id=" . $this->getId() . "][usuari=" . $this->getUsuari(). "][passwd=" . $this->getPassword();
        return $toString;

    }
}

?>
