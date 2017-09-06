<?php
/**
 * Classe FaCtrlClass
 * encapsula el control de l'aplicació de gestió de faltes d'assistència de l'alumnat
*/
require_once "toDoClass.php";
class controlClass {
    private $params;	// parametres de l'aplicacio: creats a partir dels formularis de la vista

	/***************************************************
	 * __construct()
	 * constructor de la classe
	 * parametre prmts: parametres a copiar a les propietats, provenen dels formularis de la vista
	 * author Robert Plana
	 * version 2012/09/18
	***************************************************/
	function __construct( $prmts )
	{
		$this->params = array();
		foreach ( $prmts as $n => $v)
		{
			$this->params[$n] = $v;
		}
	}

	/***************************************************
	 * doAccio()
	 * executa l'acció demanada des del formulari client (vista de l'aplicació)
	 * escriu el resultat del servei sol·licitat
	 * author Robert Plana
	 * version 2012/09/18
	***************************************************/
	public function actionToDO()
	{
		if ( isset($this->params['action']) )
        {
           switch ( $this->params['action'] )
           {

					case '10000':
						echo toDoClass::login($this->params['action'], $this->params['JSONData']);
						break;
					case '10010':
						echo toDoClass::getNewsData($this->params['action'], $this->params['location'], $this->params['language']);
						break;
					case '10020':
						echo toDoClass::updateNewsDataForSlider($this->params['action'], $this->params['NewsArray'], $this->params['NewsSelected'], $this->params['language']);
						break;
					case '10030':
						echo toDoClass::deleteNew($this->params['action'], $this->params['newDeleteToId'], $this->params['language']);
						break;
					case '10031':
						echo toDoClass::deleteProduct($this->params['action'], $this->params['productDeleteToId'], $this->params['language']);
						break;
					case '10040':
						echo toDoClass::getAllSections($this->params['action']);
						break;
					case '10050':
						echo toDoClass::addNewNews($this->params['action'], $this->params['JSONData'], $this->params['language']);
						break;
		      case '10051':
		  				echo toDoClass::modNewNews($this->params['action'], $this->params['JSONData'], $this->params['language']);
		  			break;
            case '10052':
  		  				echo toDoClass::modProduct($this->params['action'], $this->params['JSONData'], $this->params['language']);
  		  			break;
		  		case '10055':
						echo toDoClass::addNewProduct($this->params['action'], $this->params['JSONData'], $this->params['language']);
						break;
					case '10060':
						echo toDoClass::getProductsData($this->params['action'], $this->params['language'], $this->params['language']);
						break;
					case '10061':
						echo toDoClass::getProductByCategory($this->params['action'], $this->params['idCategoria'], $this->params['language']);
						break;
					case '10070':
						echo toDoClass::getWhoAreWe($this->params['action']);
						break;
          			case '10080':
						echo toDoClass::getAllCategories($this->params['action'], $this->params['language']);
						break;
          			case '10081':
						echo toDoClass::getAllSubCategories($this->params['action'], $this->params['language']);
						break;
					case '10090':
						echo toDoClass::getAllNewsBySection($this->params['action'], $this->params['seccio'], $this->params['language']);
						break;
					case '10100':
						echo toDoClass::getNewById($this->params['action'], $this->params['id'], $this->params['language']);
						break;
					case '10110':
						echo toDoClass::getSubCategoryProducts($this->params['action'], $this->params['subCat'], $this->params['language']);
						break;
					case '10120':
						echo toDoClass::getCategoryProducts($this->params['action'], $this->params['catId'], $this->params['language']);
						break;
					case '10130':
						echo toDoClass::sendEmail($this->params['action'], $this->params['emailData']);
						break;
          			case '10140':
						echo toDoClass::changeProductStatus($this->params['action'], $this->params['active'], $this->params['idProd'], $this->params['language']);
						break;

					default:
						echo "Action not correct, value: ".$this->params['action'];
						break;
		    }
		}
	}
	/***************************************************
	 * test()
	 * retorna les propietats de la classe (només per a test -> esborrar )
	 * author Jose Moreno
	 * version 2009/11/18
	***************************************************/
	private function test()
	{
		$r = "Variables enviades";
		foreach ($this->params as $n=>$v)
		{
			$r .= "<br />".$n."=".$v;
		}
		return $r;
	}
}

?>
