<?php
/***************************************************
 * productClass.php
 * Entity productClass
 * version 2015-05-08
 ***************************************************/
require_once "BDBonGust.php";

class productClass {
    private $id;
    private $codi;
    private $categoria;
    private $subcategoria;
    private $nom;
    private $info;
    private $imatge;
    private $descripcio;
    private $preu;
    private $tipus;
    private $actiu;
    private $data_creacio;
    private $usuari;

    //----------Data base Values---------------------------------------
    private static $tableNameCat = "ca_productes";
    private static $tableNameCast = "es_productes";
    private static $colNameId = "id";
    private static $colNameCodi = "codi";
    private static $colNameCategoria = "categoria";
    private static $colNameSubcategoria = "subcategoria";
    private static $colNameNom = "nom";
    private static $colNameInfo = "info";
    private static $colNameImatge = "imatge";
    private static $colNameDescripcio = "descripcio";
    private static $colNamePreu = "preu";
    private static $colNameTipus = "tipus";
    private static $colNameActiu = "actiu";
    private static $colNameDataCreacio = "data_creacio";
    private static $colNameUsuari = "usuari";

    function __construct() {
    }

    public function getId() {
        return $this->id;
    }

    public function getCodi() {
        return $this->codi;
    }

    public function getCategoria() {
        return $this->categoria;
    }

    public function getSubcategoria() {
        return $this->subcategoria;
    }

    public function getNom() {
        return $this->nom;
    }

    public function getInfo() {
        return $this->info;
    }

    public function getImatge() {
        return $this->imatge;
    }

    public function getDescripcio() {
        return $this->descripcio;
    }

    public function getPreu() {
        return $this->preu;
    }

    public function getTipus() {
        return $this->tipus;
    }

    public function getActiu() {
        return $this->actiu;
    }

    public function getDataCreacio() {
        return $this->data_creacio;
    }

    public function getUsuari() {
        return $this->usuari;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setCodi($codi) {
        $this->codi = $codi;
    }

    public function setCategoria($categoria) {
        $this->categoria = $categoria;
    }

    public function setSubcategoria($subcategoria) {
        $this->subcategoria = $subcategoria;
    }

    public function setNom($nom) {
        $this->nom = $nom;
    }

    public function setInfo($info) {
        $this->info = $info;
    }

    public function setImatge($imatge) {
        $this->imatge = $imatge;
    }

    public function setDescripcio($descripcio) {
        $this->descripcio = $descripcio;
    }

    public function setPreu($preu) {
        $this->preu = $preu;
    }

    public function setTipus($tipus) {
        $this->tipus = $tipus;
    }

    public function setActiu($actiu) {
        $this->actiu = $actiu;
    }

    public function setDataCreacio($data_creacio) {
        $this->data_creacio = $data_creacio;
    }

    public function setUsuari($usuari) {
        $this->usuari = $usuari;
    }

    public function getAll() {
        $data = array();
        $data["id"] = $this->getId();
        $data["codi"] = $this->getCodi();
        $data["categoria"] = $this->getCategoria();
        $data["subcategoria"] = $this->getSubcategoria();
        $data["nom"] = utf8_encode($this->getNom());
        $data["info"] = utf8_encode($this->getInfo());
        $data["imatge"] = $this->getImatge();
        $data["descripcio"] = utf8_encode($this->getDescripcio());
        $data["preu"] = $this->getPreu();
        $data["tipus"] = utf8_encode($this->getTipus());
        $data["actiu"] = $this->getActiu();
        $data["data_creacio"] = $this->getDataCreacio();
        $data["usuari"] = $this->getUsuari();
        return $data;
    }

    public function setAll($id, $codi, $categoria, $subcategoria, $nom, $info, $imatge, $descripcio, $preu, $tipus, $actiu, $data_creacio, $usuari) {

        /*
            $seccioObj = new seccioClass();
            $seccioObj->setAll($seccio->id,$seccio->seccio);
        */
        $this->setId($id);
        $this->setCodi($codi);
        $this->setCategoria($categoria);
        $this->setSubcategoria($subcategoria);
        $this->setNom(utf8_decode($nom));
        $this->setInfo(utf8_decode($info));
        $this->setImatge($imatge);
        $this->setDescripcio(utf8_decode($descripcio));
        $this->setPreu($preu);
        $this->setTipus(utf8_decode($tipus));
        $this->setActiu($actiu);
        $this->setDataCreacio($data_creacio);
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
            $entity = productClass::fromResultSet( $row );

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

        $id = $res[ productClass::$colNameId];
        $codi = $res[ productClass::$colNameCodi ];
        $categoria = $res[ productClass::$colNameCategoria ];
        $subcategoria = $res[ productClass::$colNameSubcategoria ];
        $nom = $res[ productClass::$colNameNom ];
        $info = $res[ productClass::$colNameInfo ];
        $imatge = $res[ productClass::$colNameImatge ];
        $descripcio = $res[ productClass::$colNameDescripcio ];
        $preu = $res[ productClass::$colNamePreu ];
        $tipus = $res[ productClass::$colNameTipus ];
        $actiu = $res[ productClass::$colNameActiu ];
        $data_creacio = $res[ productClass::$colNameDataCreacio ];
        $usuari = $res[ productClass::$colNameUsuari ];

        //Object construction
        $entity = new productClass();
        $entity->setId($id);
        $entity->setCodi($codi);
        /*
            $seccioArray = seccioClass::findById($seccio);
            $entity->setSeccio($seccioArray[0]->getAll());
        */
        $entity->setCategoria($categoria);
        $entity->setSubcategoria($subcategoria);
        $entity->setNom($nom);
        $entity->setInfo($info);
        $entity->setImatge($imatge);
        $entity->setDescripcio($descripcio);
        $entity->setPreu($preu);
        $entity->setTipus($tipus);
        $entity->setActiu($actiu);
        $entity->setDataCreacio($data_creacio);
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

        $conn = new BDBonGust();
        if (mysqli_connect_errno()) {
                printf("Connection with the database has failed, error: %s\n", mysqli_connect_error());
                exit();
        }

        //Run the query
        $res = $conn->query($cons);
        if ( $conn != null ) $conn->close();

        return productClass::fromResultSetList( $res );
    }

    /***************************************************
     * findById()
     * It runs a query and returns an object array
     * @param id
     * @return object with the query results
    ***************************************************/
    public static function findById( $id, $language) {
        if($language == 0) {
            $cons = "select * from `".productClass::$tableNameCat."` where ".productClass::$colNameId." = \"".$id."\"";
        } else {
            $cons = "select * from `".productClass::$tableNameCast."` where ".productClass::$colNameId." = \"".$id."\"";
        }
        return productClass::findByQuery( $cons );
    }

    /***************************************************
     * findByCategory()
     * It runs a query and returns an object array
     * @param id
     * @return object with the query results
    ***************************************************/
    public static function findByCategory( $categoria, $language ) {
         if($language == 0) {
            $cons = "select * from `".productClass::$tableNameCat."` where ".productClass::$colNameCategoria." = \"".$categoria."\" and actiu = 1
                    ORDER BY ".productClass::$colNameId." asc";
            return productClass::findByQuery( $cons );
         } else {
            $cons = "select * from `".productClass::$tableNameCast."` where ".productClass::$colNameCategoria." = \"".$categoria."\" and actiu = 1
                    ORDER BY ".productClass::$colNameId." asc";
            return productClass::findByQuery( $cons );
         }
    }

    /***************************************************
     * findCountProductsByCategory()
     * It runs a query and returns an object array
     * @param id
     * @return object with the query results
    ***************************************************/
    public static function findCountProductsByCategory($language) {
         if($language == 0) {
            $cons = "select categoria, count(*) as TOTAL from `".productClass::$tableNameCat."` where actiu = 1
                    GROUP BY categoria
                    ORDER BY ".productClass::$colNameId." asc";
         }else {
            $cons = "select categoria, count(*) as TOTAL from `".productClass::$tableNameCast."` where actiu = 1
                    GROUP BY categoria
                    ORDER BY ".productClass::$colNameId." asc";
         }
        return productClass::findByQuery( $cons );
    }

    /***************************************************
     * findCountProductsByCategory()
     * It runs a query and returns an object array
     * @param id
     * @return object with the query results
    ***************************************************/
    public static function changeActiveStatus($active, $id, $language) {
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
        if ($stmt->prepare("update `".productClass::$tableNameCat."` set ".productClass::$colNameActiu." = ? where ".productClass::$colNameId." = ?") ) {
            $stmt->bind_param("ii", $active, $id);

            $stmt->execute();
        }
      } else {
        if ($stmt->prepare("update `".productClass::$tableNameCast."` set ".productClass::$colNameActiu." = ? where ".productClass::$colNameId." = ?") ) {
          $stmt->bind_param("ii", $active, $id);

          $stmt->execute();
        }  
      }
      if ( $conn != null ) $conn->close();
    }

    /***************************************************
     * findCountProductsByCategoryAndSubCategory()
     * It runs a query and returns an object array
     * @param id
     * @return object with the query results
    ***************************************************/
    public static function findCountProductsByCategoryAndSubCategory($language) {
        if($language == 0) {
            $cons = "select categoria, subcategoria, count(*) as TOTAL from `".productClass::$tableNameCat."` where actiu = 1
                    GROUP BY categoria, subcategoria
                    ORDER BY ".productClass::$colNameId." asc";
        } else {
            $cons = "select categoria, subcategoria, count(*) as TOTAL from `".productClass::$tableNameCast."` where actiu = 1
                    GROUP BY categoria, subcategoria
                    ORDER BY ".productClass::$colNameId." asc";
        }
        if (mysqli_connect_errno()) {
            printf("Error en connexió amb la base de dades: %s\n", mysqli_connect_error());
            exit();
        }

        $res = $conn->query($cons);
        $row = $res->fetch_array(MYSQLI_BOTH);
        $contador = $row[ productClass::$colNameCategoria];

        return $contador;
    }


    /***************************************************
     * findAll()
     * It runs a query and returns an object array
     * @param none
     * @return object with the query results
    ***************************************************/
    public static function findAll($language) {
        $conn = new BDBonGust();
        if (mysqli_connect_errno()) {
            printf("Connection with the database has failed, error: %s\n", mysqli_connect_error());
                exit();
        }
        if($language == 0) {
            $cons = "select * from `".productClass::$tableNameCat."` ORDER BY `".productClass::$colNameId."` DESC";
            return productClass::findByQuery( $cons );
        } else {
            $cons = "select * from `".productClass::$tableNameCast."` ORDER BY `".productClass::$colNameId."` DESC";
            return productClass::findByQuery( $cons );   
        }
    }

    /***************************************************
     * findProductsFormatgeBySubCategory()
     * It runs a query and returns an object array
     * @param subcategory
     * @return object with the query results
    ***************************************************/
    public static function findProductsFormatgeBySubCategory($subcategoria, $language) {
        $conn = new BDBonGust();
        if (mysqli_connect_errno()) {
            printf("Connection with the database has failed, error: %s\n", mysqli_connect_error());
                exit();
        }
        if($language == 0) {
            $cons = "select * from `".productClass::$tableNameCat."` WHERE `actiu` = 1 AND `categoria` = 1 and `subcategoria` = ".$subcategoria."  ORDER BY `".productClass::$colNameId."` ASC";
        } else {
            $cons = "select * from `".productClass::$tableNameCast."` WHERE `actiu` = 1 AND `categoria` = 1 and `subcategoria` = ".$subcategoria."  ORDER BY `".productClass::$colNameId."` ASC";
        }
        return productClass::findByQuery( $cons );
    }


    /***************************************************
     * create()
     * insert a new row into the database
    ***************************************************/
    public function create($language) {

        $conn = new BDBonGust();
        if (mysqli_connect_errno()) {
            printf("Connection with the database has failed, error: %s\n", mysqli_connect_error());
                exit();
        }

        //Preparing the sentence
        $stmt = $conn->stmt_init();
        if($language == 0) {
            if ($stmt->prepare("insert into ".productClass::$tableNameCat." (`id`,`codi`,`categoria`,`subcategoria`,`nom`,`info`,`imatge`,`descripcio`,`preu`,`tipus`,`actiu`,`data_creacio`,`usuari`) values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)" )) {
                $stmt->bind_param("isiissssdsisi", $this->getId(), $this->getCodi(), $this->getCategoria(), $this->getSubcategoria(), $this->getNom(), $this->getInfo(), $this->getImatge(), $this->getDescripcio(), $this->getPreu(), $this->getTipus(), $this->getActiu(), $this->getDataCreacio(), $this->getUsuari());
                //executar consulta
                $stmt->execute();
            // $this->setId($conn->insert_id);
                $this->setId($conn->insert_id);
            }
        } else {
            if ($stmt->prepare("insert into ".productClass::$tableNameCast." (`id`,`codi`,`categoria`,`subcategoria`,`nom`,`info`,`imatge`,`descripcio`,`preu`,`tipus`,`actiu`,`data_creacio`,`usuari`) values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)" )) {
                $stmt->bind_param("isiissssdsisi", $this->getId(), $this->getCodi(), $this->getCategoria(), $this->getSubcategoria(), $this->getNom(), $this->getInfo(), $this->getImatge(), $this->getDescripcio(), $this->getPreu(), $this->getTipus(), $this->getActiu(), $this->getDataCreacio(), $this->getUsuari());
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
            if ($stmt->prepare("delete from `".productClass::$tableNameCat."` where ".productClass::$colNameId." = ?")) {
                $stmt->bind_param("i", $this->getId());
                $stmt->execute();
            }
        } else {
            if ($stmt->prepare("delete from `".productClass::$tableNameCast."` where ".productClass::$colNameId." = ?")) {
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
        $conn->set_charset("utf8");
        if (mysqli_connect_errno()) {
            printf("Connection with the database has failed, error: %s\n", mysqli_connect_error());
            exit();
        }

        //Preparing the sentence
        $stmt = $conn->stmt_init();
        //echo "iisssssi", $this->getId(), $this->getIdUser(), $this->getTitle(), $this->getEntryDate(), $this->getContent(), $this->getTheme(), $this->getImage(), $this->getTotalReplies();
        if($language == 0) {
            if ($stmt->prepare("update `".productClass::$tableNameCat."` set ".productClass::$colNameId." = ?, ".productClass::$colNameCodi." = ?, ".productClass::$colNameCategoria." = ?, ".productClass::$colNameSubcategoria." = ?, ".productClass::$colNameNom." = ?, ".productClass::$colNameInfo." = ?, ".productClass::$colNameImatge." = ?, ".productClass::$colNameDescripcio." = ?, ".productClass::$colNamePreu." = ?, ".productClass::$colNameTipus." = ?, ".productClass::$colNameActiu." = ?, ".productClass::$colNameDataCreacio." = ?, ".productClass::$colNameUsuari." = ? where ".productClass::$colNameId." = '".$this->getId()."'") ) {
                $stmt->bind_param("isiissssdsisi", $this->getId(), $this->getCodi(), $this->getCategoria(), $this->getSubcategoria(), utf8_encode($this->getNom()), utf8_encode($this->getInfo()), $this->getImatge(), utf8_encode($this->getDescripcio()), $this->getPreu(), $this->getTipus(), $this->getActiu(), $this->getDataCreacio(), $this->getUsuari());

                $stmt->execute();
            }
        } else {
            if ($stmt->prepare("update `".productClass::$tableNameCast."` set ".productClass::$colNameId." = ?, ".productClass::$colNameCodi." = ?, ".productClass::$colNameCategoria." = ?, ".productClass::$colNameSubcategoria." = ?, ".productClass::$colNameNom." = ?, ".productClass::$colNameInfo." = ?, ".productClass::$colNameImatge." = ?, ".productClass::$colNameDescripcio." = ?, ".productClass::$colNamePreu." = ?, ".productClass::$colNameTipus." = ?, ".productClass::$colNameActiu." = ?, ".productClass::$colNameDataCreacio." = ?, ".productClass::$colNameUsuari." = ? where ".productClass::$colNameId." = '".$this->getId()."'") ) {
                $stmt->bind_param("isiissssdsisi", $this->getId(), $this->getCodi(), $this->getCategoria(), $this->getSubcategoria(), utf8_encode($this->getNom()), utf8_encode($this->getInfo()), $this->getImatge(), utf8_encode($this->getDescripcio()), $this->getPreu(), $this->getTipus(), $this->getActiu(), $this->getDataCreacio(), $this->getUsuari());

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
        $toString = "productClass[id=" . $this->getId() . "][codi=" . $this->getCodi(). "][categoria=" . $this->getCategoria(). "][subcategoria=" . $this->getSubcategoria(). "][nom=" . $this->getNom(). "][info=" . $this->getInfo(). "][imatge=" . $this->getImatge(). "][descripcio=" . $this->getDescripcio(). "][preu=" . $this->getPreu(). "][tipus=" . $this->getTipus(). "][actiu=" . $this->getActiu(). "][data_creacio=" . $this->getDataCreacio(). "][usuari=" . $this->getUsuari();
        return $toString;

    }
}


?>
