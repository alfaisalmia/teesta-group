<?php

// define variables and set to empty values
$name_error = $email_error = $sub_error = $msg_error = "";
$name = $email = $subject = $message = $success = "";

//form is submitted with POST method
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $name_error = "Name is required";
    } else {
        $name = test_input($_POST["name"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
            $name_error = "Only letters and white space allowed";
        }
    }

    if (empty($_POST["email"])) {
        $email_error = "Email is required";
    } else {
        $email = test_input($_POST["email"]);
        // check if e-mail address is well-formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $email_error = "Invalid email format";
        }
    }

    if (empty($_POST["subject"])) {
        $sub_error = "Subjet is required";
    } else {
        $subject = test_input($_POST["subject"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
            $sub_error = "Only letters and white space allowed";
        }
    }
    if (empty($_POST["msg"])) {
        $message = "";
    } else {
        $message = test_input($_POST["msg"]);
    }

    if ($name_error == '' and $email_error == '' and $sub_error == '' and $msg_error == '') {
        $message_body = '';
        unset($_POST['submit']);
        /* foreach ($_POST as $key => $value) {
          $message_body .= "$key: $value."\n";
          } */
        $message_body = "<table width='50%' border='1' cellspacing='0' cellpadding='5' align='center' bgcolor='#EEEEEE'>
                            <tr>
                              <td colspan='2'><h4 align='center'>This Email has come from 'TEESTA GROUP WEBSITE'</h4></td>
                            </tr>
                            <tr>
                              <td width='38%'><div align='center'>Name</div></td>
                              <td width='62%'><div align='center'>$name</div></td>
                            </tr>
                            <tr>
                              <td><div align='center'>Email</div></td>
                              <td><div align='center'>$email</div></td>
                            </tr>
                            <tr>
                              <td><div align='center'>Subject</div></td>
                              <td><div align='center'>$subject</div></td>
                            </tr>
                            <tr>
                              <td><div align='center'>Message</div></td>
                              <td><div align='center'>$message</div></td>
                            </tr>
                          </table>";

        $to = 'aalfaisal.m@gmail.com';
        $subject = 'Contact Form Submit';
        $headers = "From: \r\n";
        $headers .= "Reply-To: \r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
        if (mail($to, $subject, $message_body, $headers)) {
            $success = "Message sent, thank you for contacting us!";
            $name = $email = $subjet = $message = "";
        }
    }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
