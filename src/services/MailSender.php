<?php
class MailSender {
    private $name;
    private $email;
    private $subject;
    private $message;

    public function __construct($name, $email, $subject, $message) {
        $this->name = htmlspecialchars($name);
        $this->email = filter_var($email, FILTER_SANITIZE_EMAIL);
        $this->subject = htmlspecialchars($subject);
        $this->message = htmlspecialchars($message);
    }

    public function sendEmail() {
        if (filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            $to = "egecanakincioglu@icloud.com";
            $headers = "From: " . $this->email . "\r\n" .
                       "Reply-To: " . $this->email . "\r\n" .
                       "X-Mailer: PHP/" . phpversion();
            
            $full_message = "Name: " . $this->name . "\n";
            $full_message .= "Email: " . $this->email . "\n";
            $full_message .= "Subject: " . $this->subject . "\n";
            $full_message .= "Message: " . $this->message . "\n";

            if (mail($to, $this->subject, $full_message, $headers)) {
                return "Mesajınız başarıyla gönderildi.";
            } else {
                return "Mesaj gönderilirken bir hata oluştu.";
            }
        } else {
            return "Geçersiz e-posta adresi.";
        }
    }
}

$message_sent = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $contactForm = new MailSender($_POST['name'], $_POST['email'], $_POST['subject'], $_POST['message']);
    $message_sent = $contactForm->sendEmail();
}

echo $message_sent;
?>
