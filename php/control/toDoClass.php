<?php
/***************************************************
* toDoClass class
* it controls the hole server part of the application
***************************************************/
require_once "../model/companyClass.php";
require_once "../model/userClass.php";
require_once "../model/newsClass.php";
require_once "../model/seccioClass.php";
require_once "../model/categoryClass.php";
require_once "../model/subcategoryClass.php";
require_once "../model/productClass.php";
//Incluimos la clase de PHPMailer
require_once("../PHPMailer/class.phpmailer.php");

class toDoClass {

	static public function submitReport($action,$reportObject){
		$reportArray = json_decode(stripslashes($reportObject));
		$report = new reportClass();
		$report->setAll($reportArray->id, $reportArray->id_user_reported, $reportArray->id_user_reporter, $reportArray->id_message, $reportArray->message_content, $reportArray->reason, $reportArray->report_comment);
		$report->create();

		echo true;
	}

	static public function login($action, $JSONData)
	{
		//print_r($JSONData);
		$userObj = json_decode(stripslashes($JSONData));

		$outPutData = array();
		$errors = array();
		$outPutData[0]=true;

		$userList = userClass::findByUsernameAndPass($userObj->usuari, $userObj->passwd);


		if (count($userList)==0)
		{
			$outPutData[0]=false;
			$errors[]="Username or password incorrect.";
			$outPutData[1]=$errors;
		}
		else
		{
			foreach ( $userList as $user)
			{


				$usersArray[]=$user->getAll();

				$outPutData[1]=$usersArray;



			}
			//echo $res;


		}
		//print_r( $outPutData[1]);
		//print_r($outPutData);
		return json_encode($outPutData);
	}

	static public function getNewsData ($action, $location, $language)
	{
		//echo $article_id;

		$outPutData = array();
		$errors = array();
		$newsArray = array();

		$outPutData[0]=true;

		if($location == 1){
			$newsArray =  newsClass::findAll($language);
		}else{
			$newsArray =  newsClass::findAllActive($language);
		}

		$listNewsArray = array();

		if(count($newsArray)==0)
		{
			$outPutData[0] = false;
			$errors="There aren't products in the database";
			$outPutData[1]=$errors;
		} else {


			foreach($newsArray as $new){
				$listNewsArray[]=$new->getAll();
				$outPutData[1] =$listNewsArray;
			}


		}
		//print_r($outPutData[1]);
		return json_encode($outPutData);
	}

	static public function updateNewsDataForSlider($action, $newsArray, $newsSelected, $language)
	{
		$newsArray = json_decode($newsArray);
		$newsArraySelec = json_decode($newsSelected);

		foreach ($newsArray as $new) {
			//id,name,type, description, price, image, stock, inSale
			$newMod = new newsClass();
			$newMod->setAll($new->id, $new->seccio, $new->titol, $new->subtitol, $new->descripcio_curta, $new->descripcio_llarga, $new->img_slider, $new->img_noticia, $new->data_creacio, $new->data_noticia, $new->actiu, $new->usuari);
			$newMod->update($language);
		}

		foreach ($newsArraySelec as $new) {
			//id,name,type, description, price, image, stock, inSale
			$newModSel = new newsClass();
			$newModSel->setAll($new->id, $new->seccio, $new->titol, $new->subtitol, $new->descripcio_curta, $new->descripcio_llarga, $new->img_slider, $new->img_noticia, $new->data_creacio, $new->data_noticia, $new->actiu, $new->usuari);
			$newModSel->update($language);
		}

		return true;
	}

	static public function deleteNew($action, $JSONData, $language)
	{
		$idNewArray = json_decode($JSONData);
		//print_r($threadArray);

		$newToDelete = new newsClass();
		$newToDelete->setId($idNewArray);
		$newToDelete->delete($language);

		echo true;
	}

	static public function deleteProduct($action, $JSONData, $language)
	{
		$idProductArray = json_decode($JSONData);

		$productToDelete = new productClass();
		$productToDelete->setId($idProductArray);
		$productToDelete->delete($language);

		echo true;
	}

	static public function getAllSections ($action)
	{
		//echo $article_id;

		$outPutData = array();
		$errors = array();
		$newsArray = array();

		$outPutData[0]=true;

		$sectionsArray = seccioClass::findAll();

		$listSectionsArray = array();

		if(count($sectionsArray)==0)
		{
			$outPutData[0] = false;
			$errors="There aren't sections in the database";
			$outPutData[1]=$errors;
		} else {


			foreach($sectionsArray as $section){
				$listSectionsArray[]=$section->getAll();
				$outPutData[1] =$listSectionsArray;
			}


		}
		//print_r($outPutData[1]);
		return json_encode($outPutData);
	}

	/******************************************
		Afegir producte
	******************************************/
	static public function addNewProduct($action, $JSONData, $language)
	{
		$outPutData = array();
		$productArray = json_decode($JSONData);

		$product = new productClass();

		$product->setAll($productArray->id, $productArray->codi, $productArray->categoria, $productArray->subcategoria, $productArray->nom, $productArray->info, $productArray->imatge, $productArray->descripcio, $productArray->preu, $productArray->tipus, $productArray->actiu, $productArray->data_creacio, $productArray->usuari);

		$productId = $product->create($language);
		$prodObj = new productClass();
		$productObjArray = $prodObj->findById($productId, $language);
		foreach($productObjArray as $objecte){

			$outPutData[1] =$objecte->getAll();
		}

		$outPutData[0]=true;

		return json_encode($outPutData);

	}

	/******************************************
		Afegir noticia
	******************************************/
	static public function addNewNews($action, $JSONData, $language)
	{
		$outPutData = array();
		$newArray = json_decode($JSONData);

		$new = new newsClass();
		$seccioNew = new seccioClass();
		$seccio = $seccioNew->findById($newArray->seccio, $language);

		//var_dump($seccio);
		$new->setAll($newArray->id, $seccio[0], $newArray->titol, $newArray->subtitol, $newArray->descripcio, $newArray->noticia, $newArray->img_slider, $newArray->img_noticia, $newArray->data_creacio, $newArray->data_noticia, $newArray->actiu, $newArray->usuari);
		$newId = $new->create($language);
		$newOb = new newsClass();
		$newObjArray = $newOb->findById($newId, $language);
		foreach($newObjArray as $newObj){

			$outPutData[1] =$newObj->getAll();
		}
		//var_dump($newObj);
		$outPutData[0]=true;

		return json_encode($outPutData);

	}

	/******************************************
		Modificar noticia
	******************************************/
	static public function modNewNews($action, $JSONData, $language)
	{
		$outPutData = array();
		$newArray = json_decode($JSONData);

		$new = new newsClass();
		$seccioNew = new seccioClass();

		$seccio = $seccioNew->findById($newArray->seccio->id, $language);
		//var_dump($newArray);
		$new->setAll($newArray->id, $seccio[0], $newArray->titol, $newArray->subtitol, $newArray->descripcio, $newArray->noticia, $newArray->img_slider, $newArray->img_noticia, $newArray->data_creacio, $newArray->data_noticia, $newArray->actiu, $newArray->usuari);
		$newId = $new->update($language);
		$newId = $newArray->id;

		$newOb = new newsClass();
		$newObjArray = $newOb->findById($newId, $language);
		foreach($newObjArray as $newObj){

			$outPutData[1] =$newObj->getAll();
		}
		//var_dump($newObj);
		$outPutData[0]=true;

		return json_encode($outPutData);
	}

	static public function modProduct($action, $JSONData, $language)
	{

		$outPutData = array();
		$productArray = json_decode($JSONData);
		
		$product = new productClass();

		$product->setAll($productArray->id, $productArray->codi, $productArray->categoria, $productArray->subcategoria, $productArray->nom, $productArray->info, $productArray->imatge, $productArray->descripcio, $productArray->preu, $productArray->tipus, $productArray->actiu, $productArray->data_creacio, $productArray->usuari);
		$productId = $product->update($language);
		$productId = $productArray->id;

		$prodOb = new productClass();
		$productObjArray = $prodOb->findById($productId, $language);
		foreach($productObjArray as $productObj){

			$outPutData[1] =$productObj->getAll();
		}
		//var_dump($newObj);
		$outPutData[0]=true;

		return json_encode($outPutData);
	}




	static public function getProductsData ($action, $language)
	{
		//echo $article_id;

		$outPutData = array();
		$errors = array();
		$productsArray = array();

		$outPutData[0]=true;

		$productsArray = productClass::findAll($language);
		//print_r($productsArray);
		$listProductsArray = array();

		if(count($productsArray)==0)
		{
			$outPutData[0] = false;
			$errors="There aren't products in the database";
			$outPutData[1]=$errors;
		} else {


			foreach($productsArray as $product){
				$listProductsArray[]=$product->getAll();
				$outPutData[1] =$listProductsArray;
			}


		}
		//print_r($outPutData[1]);
		return json_encode($outPutData);
	}

	static public function getProductByCategory($action, $id, $language)
	{

		$outPutData = array();
		$errors = array();
		$productsListArray = array();

		$outPutData[0]=true;

		$productsListArray = productClass::findByCategory($id, $language);

		$listProductsCategoryArray = array();

		if(count($productsListArray)==0)
		{
			$outPutData[0] = false;
			$errors="There aren't products in the database";
			$outPutData[1]=$errors;
		} else {
			foreach($productsListArray as $new){
				$listProductsCategoryArray[]=$new->getAll();
				$outPutData[1] =$listProductsCategoryArray;
			}
		}
		//print_r($outPutData[1]);
		return json_encode($outPutData);
	}

	static public function getWhoAreWe ($action)
	{
		$outPutData = array();
		$errors = array();

		$quisomArray = array();
		$outPutData[0]=true;

		$quisomArray = companyClass::findAll();

		$listQuiSomArray = array();

		foreach($quisomArray as $quisom){
			$outPutData[1]=$quisom->getAll();

		}

		return json_encode($outPutData);
	}

	static public function getAllCategories ($action, $language)
	{
		//echo $article_id;

		$outPutData = array();
		$errors = array();
		$categoriesArray = array();

		$outPutData[0]=true;

		$categoriesArray = categoryClass::findAll($language);
		$listCategoriesArray = array();

		if(count($categoriesArray)==0)
		{
			$outPutData[0] = false;
			$errors="There aren't categories in the database";
			$outPutData[1]=$errors;
		} else {


			foreach($categoriesArray as $category){
				$listCategoriesArray[]=$category->getAll();
				$outPutData[1] =$listCategoriesArray;
			}


		}
		//print_r($outPutData[1]);
		return json_encode($outPutData);
	}

	static public function getAllSubCategories ($action, $language)
	{
		//echo $article_id;

		$outPutData = array();
		$errors = array();
		$subCategoriesArray = array();

		$outPutData[0]=true;

		$subCategoriesArray = subcategoryClass::findAll($language);

		$listSubCategoriesArray = array();

		if(count($subCategoriesArray)==0)
		{
			$outPutData[0] = false;
			$errors="There aren't subcategories in the database";
			$outPutData[1]=$errors;
		} else {


			foreach($subCategoriesArray as $subCategory){
				$listSubCategoriesArray[]=$subCategory->getAll();
				$outPutData[1] =$listSubCategoriesArray;
			}


		}
		//print_r($outPutData[1]);
		return json_encode($outPutData);
	}

	/***************************************************
	* getNewsBySection()
	***************************************************/
	static public function getAllNewsBySection($action,$seccio, $language){
		$outPutData = array();
		$errors = array();
		$outPutData[0]=true;
		$messageArray = newsClass::findBySection($seccio, $language);
		$listNewsArray = array();
		if(count($messageArray)==0)
		{
			$outPutData[0]=false;
			$errors="This product not exist in database";
			$outPutData[1]=$errors;
		}
		else
		{
			foreach ( $messageArray as $message)
			{
				$listNewsArray[] = $message->getAll();
				$outPutData[1] = $listNewsArray;
			}
		}

		return json_encode($outPutData);
	}

	static public function getNewById($action,$idNew, $language){
		$outPutData = array();
		$errors = array();
		$outPutData[0]=true;
		$messageArray = newsClass::findById($idNew, $language);
		if(count($messageArray)==0)
		{
			$outPutData[0]=false;
			$errors="This new not exist in database";
			$outPutData[1]=$errors;
		}
		else
		{
			foreach ( $messageArray as $message)
			{
				$outPutData[1] = $message->getAll();
			}
		}
		return json_encode($outPutData);
	}

	static public function getSubCategoryProducts($action, $subCat, $language)
	{
		$outPutData = array();
		$errors = array();
		$productsListArray = array();

		$outPutData[0]=true;

		$productsListArray = productClass::findProductsFormatgeBySubCategory($subCat, $language);
		$subcategoryName = subcategoryClass::findById($subCat, $language);
		$listProductsCategoryArray = array();

		if(count($productsListArray)==0)
		{
			$outPutData[0] = false;
			$errors="There aren't products in the database";
			$outPutData[1]=$errors;
		} else {
			foreach($productsListArray as $new){
				$listProductsCategoryArray[]=$new->getAll();
				$outPutData[1] =$listProductsCategoryArray;
			}
		}
		$outPutData[2] = $subcategoryName;
		//print_r($outPutData[1]);
		return json_encode($outPutData);
	}

	static public function getCategoryProducts($action, $catId, $language)
	{
		$outPutData = array();
		$errors = array();
		$productsListArray = array();

		$outPutData[0]=true;

		$productsListArray = productClass::findByCategory($catId,$language);

		$listProductsCategoryArray = array();

		if(count($productsListArray)==0)
		{
			$outPutData[0] = false;
			$errors="There aren't products in the database";
			$outPutData[1]=$errors;
		} else {
			foreach($productsListArray as $new){
				$listProductsCategoryArray[]=$new->getAll();
				$outPutData[1] =$listProductsCategoryArray;
			}
		}
		//print_r($outPutData[1]);
		return json_encode($outPutData);
	}

	static public function sendEmail($action,$email){
		$outPutData = array();
		$outPutData[0] = true;
		$userArray = json_decode(stripslashes($email));
		$correo = new PHPMailer(); //Creamos una instancia en lugar usar mail()
		$correo->IsSMTP();
		//permite modo debug para ver mensajes de las cosas que van ocurriendo
		//$correo->SMTPDebug = 2;
		$correo->SMTPAuth = true;

		$correo->SMTPSecure = 'tls';

		$correo->Host = "smtp.gmail.com";

		$correo->Port = 587;

		$correo->Username   = "isaac.ortiz89@gmail.com"; //email bongust

		$correo->Password   = "697492329";
		//print_r($email);
		//echo $email->email;
		//Usamos el SetFrom para decirle al script quien envia el correo
		$correo->SetFrom($userArray->nom_cognoms, "Formulari");

		//Usamos el AddReplyTo para decirle al script a quien tiene que responder el correo
		//$correo->AddReplyTo("me@micodigophp.com","Mi Codigo PHP");

		//Usamos el AddAddress para agregar un destinatario
		//$correo->AddAddress($userArray->email, "Robot");
		$correo->AddAddress("elbongust@gmail.com", "El Bon Gust");
		//Ponemos el asunto del mensaje
		$correo->Subject = "Contacte de ".$userArray->nom_cognoms;

		/*
		* Si deseamos enviar un correo con formato HTML utilizaremos MsgHTML:
		* $correo->MsgHTML("<strong>Mi Mensaje en HTML</strong>");
		* Si deseamos enviarlo en texto plano, haremos lo siguiente:
		* $correo->IsHTML(false);
		* $correo->Body = "Mi mensaje en Texto Plano";
		*/
		$correo->MsgHTML("
			<div>
				<img src='../..images/bongust_logo3.png'>
			</div>
			<div>
				Nom: <strong>".$userArray->nom_cognoms."</strong><br>
				Telèfon de contacte <strong>".$userArray->phone."</strong><br>
				Emial de contacte de <strong>".$userArray->email."</strong><br>
				<hr>
				Missatge : <br>
					<p style='color:blue;font-weight:bold;'>".$userArray->description."</p>
			</div>

		"); //plantaillaa sdfsaf :)

		//Si deseamos agregar un archivo adjunto utilizamos AddAttachment
		//$correo->AddAttachment("images/phpmailer.gif");

		//Enviamos el correo
		if(!$correo->Send()) {
			$outPutData[0] = false;
			$outPutData[1] = "Hubo un error: " . $correo->ErrorInfo;
		} else {
			$outPutData[1] = "Mensaje enviado con exito.";
		}

		return json_encode($outPutData);

	}

	static public function changeProductStatus($action,$active,$idProduct, $language) {
		$outPutData = array();
		$outPutData[0] = true;
		$productsListArray = productClass::changeActiveStatus($active, $idProduct, $language);
		return json_encode($outPutData);
	}

}
?>
