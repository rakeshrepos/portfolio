<?phpc
	$name = $_POST['name'];
	$email = $_POST['email'];
	$subject = $_POST['subject']
	$messsage = $_POST['message']

	$to = 'rebbavarapurakesh@gmail.com'

	$email_body = "Name : $name.\n".
				  "Message: $messsage.\n";

	$headers = "From: $email \r\n";
	$headers .= "Reply-To: $to \r\n";

	email($to,$subject,$email_body,$headers)
	header("Location: ../index.html")
?>