
<?php



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data

// Establish a connection to your MySQL database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aslform";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



$parenteId=null;
$parentId=null;


// Retrieve data from HTML inputs  parent data   

	// Check if $identite is "Tuteur"
	$identite = $_POST['identite'];

	if ($identite !== "Tutrice") {
		// Code to execute if $identite is "Tuteur"
		$nom = $_POST['nompt'];
		$prenom = $_POST['prenompt'];
		$profession = $_POST['professionpt'];
		$entreprise = $_POST['entreprisept'];
		$direction = $_POST['directionpt'];
		$telephoneposte = $_POST['telephonepostept'];
		$telephonedomicile = $_POST['telephonedomicilept'];
		$telephoneportable = $_POST['telephoneportablept'];
		$nombreenfant = $_POST['nombreenfantpt'];
		$situationfamiliale = $_POST['situationfamilialept'];
		// Retrieve the uploaded files
			$attestation_travailpt = isset($_FILES["attestation_travailpt"]) && $_FILES["attestation_travailpt"]["error"] === UPLOAD_ERR_OK ? file_get_contents($_FILES["attestation_travailpt"]["tmp_name"]) : null;
			$fiche_paiept = isset($_FILES["fiche_paiept"]) && $_FILES["fiche_paiept"]["error"] === UPLOAD_ERR_OK ? file_get_contents($_FILES["fiche_paiept"]["tmp_name"]) : null;

		// Insert data into parent table
		$parentInsertQuery = "INSERT INTO parent (identite, nom, prenom, profession, direction, telephoneposte, telephonedomicile, telephoneportable,nombreenfant,situationfamiliale,entreprise,attestation_travail,fiche_paie) VALUES (?, ?, ?, ?, ?, ?, ?, ?,?,?,?,?,?)";
		$parentStmt = $conn->prepare($parentInsertQuery);
		$parentStmt->bind_param("sssssiiiissss", $identite, $nom, $prenom, $profession, $direction, $telephoneposte, $telephonedomicile, $telephoneportable,$nombreenfant,$situationfamiliale,$entreprise,$attestation_travailpt,$fiche_paiept);
		// $parentStmt->send_long_data(11, $attestation_travailpt); // For large BLOB data
		// $parentStmt->send_long_data(12, $fiche_paiept); // For large BLOB data

		// Execute the statement
		if ($parentStmt->execute()) {
			// echo "Data inserted successfully into parent table.";
			$parentId = $conn->insert_id;
			// Retrieve data from HTML inputs  parentz data   
		} else {
			echo "Error: " . $parentStmt->error;
		}

	} 
	// Check if $identite is "Tutrice"
	if ($identite !== "Tuteur") {
		// Code to execute if $identite is "Tutrice"
		$nom = $_POST['nommt'];
		$prenom = $_POST['prenommt'];
		$profession = $_POST['professionmt'];
		$entreprise = $_POST['entreprisemt'];
		$direction = $_POST['directionmt'];
		$telephoneposte = $_POST['telephonepostemt'];
		$telephonedomicile = $_POST['telephonedomicilemt'];
		$telephoneportable = $_POST['telephoneportablemt'];
		$nombreenfant = $_POST['nombreenfantmt'];
		$situationfamiliale = $_POST['situationfamilialemt'];
		// Retrieve the uploaded files
			$attestation_travailmt = isset($_FILES["attestation_travailmt"]) && $_FILES["attestation_travailmt"]["error"] === UPLOAD_ERR_OK ? file_get_contents($_FILES["attestation_travailmt"]["tmp_name"]) : null;
			$fiche_paiemt = isset($_FILES["fiche_paiemt"]) && $_FILES["fiche_paiemt"]["error"] === UPLOAD_ERR_OK ? file_get_contents($_FILES["fiche_paiemt"]["tmp_name"]) : null;

		// Insert data into parent table
		$parentInsertQuery = "INSERT INTO `parente`(`identite`, `nom`, `prenom`, `profession`, `entreprise`, `direction`, `telephoneposte`, `telephonedomicile`, `telephoneportable`, `nombreenfant`, `situationfamiliale`, `attestation_travail`, `fiche_paie`) VALUES (?, ?, ?, ?, ?, ?, ?, ?,?,?,?,?,?)";
		$parentStmt = $conn->prepare($parentInsertQuery);
		$parentStmt->bind_param("ssssssiiiisbb", $identite, $nom, $prenom, $profession,$entreprise, $direction, $telephoneposte, $telephonedomicile, $telephoneportable,$nombreenfant,$situationfamiliale,$attestation_travailmt,$fiche_paiemt);
		// $parentStmt->send_long_data(11, $attestation_travailmt); // For large BLOB data
		// $parentStmt->send_long_data(12, $fiche_paiemt); // For large BLOB data
		
		// Execute the statement
		if ($parentStmt->execute()) {
			
			$parenteId = $conn->insert_id;
			 //echo "Data inserted successfully into parente table.".$parenteId;
			// $parenteId=null;
		
		} else {
			echo "Error: " . $parentStmt->error;
		}
	} 
		
		// Assigns the value of $parenteId to $parentId if $parentId is null.
		// $parentId = $parentId ?? $parenteId;

		// Assigns the value of $parentId to $parenteId if $parenteId is null.
		// $parenteId = $parenteId ?? $parentId;

		// Retrieve data from HTML Enfant inputs
			$nomEnfant = $_POST["nomEnfant"];
			$prenomEnfant = $_POST["prenomEnfant"];
			$datenaissanceEnfant = $_POST["datenaissanceEnfant"];
			$groupesanguinEnfant = $_POST["groupesanguinEnfant"];
			$adressedomicileEnfant = $_POST["adressedomicileEnfant"];
		// Retrieve the uploaded files
			$extrait_naissance = $_FILES["extrait_naissance"]["error"] === UPLOAD_ERR_OK ? file_get_contents($_FILES["extrait_naissance"]["tmp_name"]): null;
			$certificat_vaccination = $_FILES["certificat_vaccination"]["error"] === UPLOAD_ERR_OK
				? file_get_contents($_FILES["certificat_vaccination"]["tmp_name"])
				: null;

			$certificat_medical = $_FILES["certificat_medical"]["error"] === UPLOAD_ERR_OK
				? file_get_contents($_FILES["certificat_medical"]["tmp_name"])
				: null;

			$photo_identite = $_FILES["photo_identite"]["error"] === UPLOAD_ERR_OK
				? file_get_contents($_FILES["photo_identite"]["tmp_name"])
				: null;

			
			// Prepare the SQL statement to insert data into enfant table
			// $enfantStmt = $conn->prepare("INSERT INTO enfant (nom, prenom, datenaissance, groupesanguin, adressedomicile) VALUES (?, ?, ?, ?, ?)");
			$enfantStmt = $conn->prepare("INSERT INTO enfant (nom, prenom, datenaissance, groupesanguin, adressedomicile,extrait_naissance,certificat_vaccination,certificat_medical,photo_identite) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
			// Bind parameters to the statement
			$enfantStmt->bind_param("sssssssss", $nomEnfant, $prenomEnfant, $datenaissanceEnfant, $groupesanguinEnfant, $adressedomicileEnfant,$extrait_naissance, $certificat_vaccination, $certificat_medical, $photo_identite);
			// $enfantStmt->send_long_data(5, $extrait_naissance); // For large BLOB data
			// $enfantStmt->send_long_data(6, $certificat_vaccination); // For large BLOB data
			// $enfantStmt->send_long_data(7, $certificat_medical); // For large BLOB data
			// $enfantStmt->send_long_data(8, $photo_identite); // For large BLOB data

		// Execute the statement
		if ($enfantStmt->execute()) {
			// echo "Data inserted successfully into enfant table.";
			$enfantId = $conn->insert_id;
			// Retrieve data from HTML Questions inputs
			$autorisationMediacle = isset($_POST['autorisationMediacle']) ? 1 : 0;
			$autorisationSortie = isset($_POST['autorisationSortie']) ? 1 : 0;
			$agemarche = (int) $_POST['agemarche'];
			$ageproprejour =(int) $_POST['ageproprejour'];
			$ageproprenuit =(int) $_POST['ageproprenuit'];
			$ageparle =(int) $_POST['ageparle'];
			$premiermot = $_POST['premiermot'];
			$conditions = $_POST['conditions'];
			$collectivite = $_POST['collectivite'];
			$maladies = $_POST['Maladies'];
			$operationshospitalisations = $_POST['operationshospitalisations'];
			$nombrefreresoeur = $_POST['nombrefreresoeur'];
			$conditionhabitation = $_POST['conditionhabitation'];
			$chambreindividuelle = $_POST['chambreindividuelle'];
			$partage = $_POST['partage'];
			$mange = $_POST['Mange'];
			$dortbien = $_POST['Dortbien'];
			$activitesmaison = $_POST['activitesmaison'];
			$volontaire = $_POST['volontaire'];
			$turbulent = $_POST['turbulent'];
			$observations_remarques = $_POST['observations_remarques'];
			$jardinsouhaitable = $_POST['jardinsouhaitable'];
			$certificat_justice = isset($_FILES["certificat_justice"]) && $_FILES["certificat_justice"]["error"] === UPLOAD_ERR_OK ? file_get_contents($_FILES["certificat_justice"]["tmp_name"]) : null;

			// Insert data into preinscription table
			// $preInscriptionInsertQuery = "INSERT INTO preinscription (id_enfant, id_parent, date, agemarche, ageproprejour, ageproprenuit, ageparle, premiermot, conditions, collectivite, Maladies, operationshospitalisations, nombrefreresoeur, conditionhabitation, chambreindividuelle, partage, Mange, Dortbien, activitesmaison, volontaire, turbulent) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
			// $preInscriptionStmt = $conn->prepare($preInscriptionInsertQuery);
			// $preInscriptionStmt->bind_param("iisssisisssssisssssss", $enfantId, $parentId, $datenaissanceEnfant, $agemarche, $ageproprejour, $ageproprenuit, $ageparle, $premiermot, $conditions, $collectivite, $Maladies, $operationshospitalisations, $nombrefreresoeur, $conditionhabitation, $chambreindividuelle, $partage, $Mange, $Dortbien, $activitesmaison, $volontaire, $turbulent);
			
			$preInscriptionInsertQuery = "INSERT INTO `preinscription`(
			`id_enfant`, `id_parent`, `id_parente`, `date`, `autorisationMediacle`, 
			`autorisationSortie`, `agemarche`, `ageproprejour`, `ageproprenuit`, `ageparle`,
			`premiermot`, `conditions`, `collectivite`, `maladies`, `operationshospitalisations`, `nombrefreresoeur`, `conditionhabitation`,
			`chambreindividuelle`, `partage`, `mange`, `dortbien`, `activitesmaison`, `volontaire`, `turbulent`, `observations_remarques`,
			`jardinsouhaitable`, `certificat_justice` ) VALUES (?,?,?,CURDATE(),?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
			$preInscriptionStmt = $conn->prepare($preInscriptionInsertQuery);
			// Check for errors
			if (!$preInscriptionStmt) {
				echo "preInscriptionInsertQuery Error preparing statement: " . $conn->error;
				// Handle the error
			} else {
				// Bind parameters and execute the statement

			$preInscriptionStmt->bind_param("iiiiiiiiisssssssssssssssss", 
			$enfantId, $parentId, $parenteId, $autorisationMediacle, $autorisationSortie,$agemarche, $ageproprejour, $ageproprenuit, $ageparle, 
			$premiermot, $conditions, $collectivite,$maladies, $operationshospitalisations, $nombrefreresoeur, $conditionhabitation,
			$chambreindividuelle,$partage, $mange, $dortbien, $activitesmaison, $volontaire, $turbulent, $observations_remarques, $jardinsouhaitable,$certificat_justice);
			//$preInscriptionStmt->send_long_data(26, $certificat_justice); // For large BLOB data

			// Execute the statement
			if ($preInscriptionStmt->execute()) {
				//echo "Data inserted successfully into enfant Parent table.";
				// Handle successful response
				$data = array('creation' => 'succes','id_preinscription' => $conn->insert_id );
				// Encode data as JSON
				$jsonData = json_encode($data);
				// Set the content type header to application/json
				header('Content-Type: application/json');

				// Output JSON data
				echo $jsonData;

				
				// echo "succes_creation";
				// FICHE DE RENSEIGNEMENTS
				// AUTORISATION DE SORTIE
				// AUTORISATION MEDICALE


				} else {
				echo "Error: " . $preInscriptionStmt->error; 
				echo "<br>id_parent: " . $parentId; 
				echo "<br>id_parente: " . $parenteId; 
			}
			}




			
			} else {
				echo "Error: " . $enfantStmt->error;
			}




		// Close statements and connection
		$preInscriptionStmt->close();
		$enfantStmt->close();
		$parentStmt->close();
		$conn->close();
}

?>