<?php
defined('BASEPATH') or exit('No direct script access allowed');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

function sendemail($email_tujuan, $pesan = null, $subject = null, $nama_pengirim = 'Keuangan BQN', $email_pengirim = 'kamscode@kamscode.tech')
{
    /** @var CI_Controller $ci */

    $ci = &get_instance();

    require VENDOR_PATH . 'phpmailer/phpmailer/src/Exception.php';
    require VENDOR_PATH . 'phpmailer/phpmailer/src/PHPMailer.php';
    require VENDOR_PATH . 'phpmailer/phpmailer/src/SMTP.php';

    $mail = new PHPMailer(TRUE);

    try {
        /* Set the mail sender. */
        $mail->IsSMTP();
        $mail->Host = EMAIL_HOST;

        // optional
        // used only when SMTP requires authentication  
        $mail->SMTPAuth = true;
        $mail->Username = EMAIL_USER;
        $mail->Password = EMAIL_PASS;
        $mail->setFrom($email_pengirim, $nama_pengirim);

        /* Add a recipient. */
        $mail->addAddress($email_tujuan);

        /* Set the subject. */
        $mail->Subject = $subject;

        /* Set the mail message body. */
        $mail->Body = $pesan;
        
        $mail->send();
    } catch (Exception $e) {
        echo $e->errorMessage();
    } catch (\Exception $e) {
        echo $e->getMessage();
    }
}
