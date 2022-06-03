<?php
if (isset($_POST['Email'])) {

    $email_to = $_POST['applicantaddress'];
    $email_subject = "New form submissions";

    // validation expected data exists
    if (
        !isset($_POST['form'])
    ) {
        echo "We are sorry, but there appears to be a problem with the form you submitted.";
    }

    $message = $_POST['form'];

    $email_message = $message;


    @mail($email_to, $email_subject, $email_message);

    header('Location: index.php');
   exit;
?>
    Thank you for submitting feedback. You may now close this window.
<?php
}
?>
