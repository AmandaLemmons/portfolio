<?php

	// Mail settings
	$to = "amanda.lemmons@gmail.com";
	$subject = "Contact Amanda Lemmons";

	if (isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["message"])) {

		$content  = "Name: "     . $_POST["name"]    . "\r\n";
		$content .= "Email: "    . $_POST["email"]   . "\r\n";
		$content .= "Message: "  . "\r\n" . $_POST["message"];

		if (mail($to, $subject, $content, $_POST["email"])) {

			$result = array(
				"message" => "I found your portfolio site and I would like to chat.",
				"sendstatus" => 1
			);

			echo json_encode($result);

		} else {

			$result = array(
				"message" => "Sorry, something is wrong.",
				"sendstatus" => 0
			);

			echo json_encode($result);

		}

	}

?>
