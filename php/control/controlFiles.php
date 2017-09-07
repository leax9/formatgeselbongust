<?php
	session_start();
	$newFileNames = array();
	switch ($_REQUEST["action"] )
    {
		case "10000":
			//This option is to upload new news images to the server to noticies folder
			//$_FILES contains all the file to upload
			//The program returns an array with the new file's name that ust be inserted into the database

			$newsNamesArray = json_decode(stripslashes($_REQUEST["newsNamesArray"]));
			$i=0;
			foreach($_FILES['images']['error'] as $key => $error){
				if($error == UPLOAD_ERR_OK){
					$name = $_FILES['images']['name'][$key];
					$fileNameParts = explode(".", $name);
					$nameWithoutExtension = $fileNameParts[0];
					$extension = end($fileNameParts);
					$newFileName = $newsNamesArray[$i].".".$extension;
					move_uploaded_file($_FILES['images']['tmp_name'][$key], '../../images/noticies/' . $newFileName);
					$i++;
					$newFileNames[]=$newFileName;
				}
			}
			echo json_encode($newFileNames);
		break;

		case "10005":
			//This option is to upload new news images to the server to slider folder
			//$_FILES contains all the file to upload
			//The program returns an array with the new file's name that ust be inserted into the database

			$newsNamesArray = json_decode(stripslashes($_REQUEST["newsNamesArray"]));
			$i=0;
			foreach($_FILES['images']['error'] as $key => $error){
				if($error == UPLOAD_ERR_OK){
					$name = $_FILES['images']['name'][$key];
					$fileNameParts = explode(".", $name);
					$nameWithoutExtension = $fileNameParts[0];
					$extension = end($fileNameParts);
					$newFileName = $newsNamesArray[$i].".".$extension;
					move_uploaded_file($_FILES['images']['tmp_name'][$key], '../../images/slider/' . $newFileName);
					$i++;
					$newFileNames[]=$newFileName;
				}
			}
			echo json_encode($newFileNames);
		break;

		case "10010":
			//This option is to remove news image files from the server from noticies folder
			//$_REQUEST["JSONData"] contains all the file's names to remove
			$filesToDeleteArray = json_decode(stripslashes($_REQUEST["JSONData"]));


			foreach($filesToDeleteArray as $filename){
				unlink('../../images/noticies/'.$filename);
			}

			echo true;
		break;

		case "10015":
			//This option is to remove news image files from the server from slider folder
			//$_REQUEST["JSONData"] contains all the file's names to remove
			$filesToDeleteArray = json_decode(stripslashes($_REQUEST["JSONData"]));


			foreach($filesToDeleteArray as $filename){
				unlink('../../images/slider/'.$filename);
			}

			echo true;
		break;

		case "10020":
			//This option is to upload articles images to the server
			//$_FILES contains all the file to upload
			//The program returns an array with the new file's name that ust be inserted into the database
			$imageNamesArray = json_decode(stripslashes($_REQUEST["imageNamesArray"]));
			$i=0;
			foreach($_FILES['images']['error'] as $key => $error){
				if($error == UPLOAD_ERR_OK){
					$name = $_FILES['images']['name'][$key];
					$fileNameParts = explode(".", $name);
					$nameWithoutExtension = $fileNameParts[0];
					$extension = end($fileNameParts);
					$newFileName = $imageNamesArray[$i].".".$extension;
					move_uploaded_file($_FILES['images']['tmp_name'][$key], '../uploads/' . $newFileName);
					$i++;
					$newFileNames[]=$newFileName;
				}
			}
			echo json_encode($newFileNames);
		break;

		case "10030":
			//This option is to remove articles image files from the server
			//$_REQUEST["JSONData"] contains all the file's names to remove
			$filesToDeleteArray = json_decode(stripslashes($_REQUEST["JSONData"]));

			foreach($filesToDeleteArray as $filename){
				unlink($filename);
			}

			echo true;
		break;

		case "10040":
			//This option is to upload products images to the server
			//$_FILES contains all the file to upload
			//The program returns an array with the new file's name that ust be inserted into the database
			$imageNamesArray = json_decode(stripslashes($_REQUEST["productNamesArray"]));
			$i=0;
			foreach($_FILES['images']['error'] as $key => $error){
				if($error == UPLOAD_ERR_OK){
					$name = $_FILES['images']['name'][$key];
					$fileNameParts = explode(".", $name);
					$nameWithoutExtension = $fileNameParts[0];
					$extension = end($fileNameParts);
					$newFileName = $imageNamesArray[$i].".".$extension;
					move_uploaded_file($_FILES['images']['tmp_name'][$key], '../../images/productes/' . $newFileName);
					$i++;
					$newFileNames[]=$newFileName;
				}
			}
			echo json_encode($newFileNames);
		break;


		case "10050":
			//This option is to remove products images files from the server
			//$_REQUEST["JSONData"] contains all the file's names to remove
			$filesToDeleteArray = json_decode(stripslashes($_REQUEST["JSONData"]));

			foreach($filesToDeleteArray as $filename){
				unlink('../../images/productes/'.$filename);
			}

			echo true;
		break;

		case "10060":
			//This option is to upload subforums images to the server
			//$_FILES contains all the file to upload
			//The program returns an array with the new file's name that ust be inserted into the database
			$imageNamesArray = json_decode(stripslashes($_REQUEST["imageNamesArray"]));
			$i=0;
			foreach($_FILES['images']['error'] as $key => $error){
				if($error == UPLOAD_ERR_OK){
					$name = $_FILES['images']['name'][$key];
					$fileNameParts = explode(".", $name);
					$nameWithoutExtension = $fileNameParts[0];
					$extension = end($fileNameParts);
					$newFileName = $imageNamesArray[$i].".".$extension;
					move_uploaded_file($_FILES['images']['tmp_name'][$key], '../uploads/' . $newFileName);
					$i++;
					$newFileNames[]=$newFileName;
				}
			}
			echo json_encode($newFileNames);
		break;


		default:
			echo "Action not correct: ".$_REQUEST["action"];
		break;
	}
?>
