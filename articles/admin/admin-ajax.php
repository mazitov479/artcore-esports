<?
if($_SERVER['REQUEST_METHOD']=='POST') {
    $to = "cybersport.a@mail.ru";
    $subject = "тестовый заголовок письма";
    $a = "Имя: ";
    $a .= $_POST["form_fields"]["name"];
    $a .= "<br />";
    $a .= "Номер телефона: ";
    $a .= $_POST["form_fields"]["tel2"];
    $message =  $a;
    $from = "info@artcore-esports.ru";
    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
    $headers .= "From: <".$from.">\r\n";
    
    if (mail($to,$subject,$message,$headers)) {
        $myObj = [ 'success' => true, 'data' => ['message' => "Сообщение успешно доставлено"] ];

        $myJSON = json_encode($myObj);
        
        echo $myJSON;
    }
    else {
      echo "ERROR";
    }
}?>
