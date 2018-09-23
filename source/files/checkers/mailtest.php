<?php
class Sender
{
    private $headers = 'MIME-Version: 1.0' . "\r\n" . 'Content-type: text/html; charset=utf-8' . "\r\n";
    private $messageText = '';
    private $subject = '';

    function __construct()
    {
        $this->setHeaders();
        $this->setMessageText();
        $this->setSubject();

        $this->sendMessage();
    }

    private function setHeaders()
    {
        $this->headers .= "To: {$_POST['inputTo']} \r\n";
        $this->headers .= "From: {$_POST['inputFrom']} \r\n";
        $this->headers .= "Reply-To: {$_POST['inputFrom']} \r\n";
    }

    private function setMessageText()
    {
        $this->messageText = $_POST['inputMessage'];
    }

    private function setSubject()
    {
        $this->subject = $_POST['inputSubject'];
    }

    private function sendMessage()
    {
        if (mail($_POST['inputTo'], $this->subject, $this->message, $this->headers)) {
            echo '<h2 style="color: green">Сообщение отправлено</h2>';
        } else {
            echo '<h2 style="color: red">Произошла ошибка при отправке сообщения</h2>';
        }
    }
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Mail checker</title>

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/4.1/examples/floating-labels/floating-labels.css" rel="stylesheet">
</head>

<body>
<form class="form-signin" method="post">
    <?php if (isset($_POST['ford']) && $_POST['ford'] == 'focus'): ?>
        <?php new Sender(); ?>
    <?php else: ?>
        <div class="text-center mb-4">
            <h1 class="h3 mb-3 font-weight-normal">Mail checker</h1>
        </div>

        <div class="form-label-group">
            <input type="email" id="inputEmailFrom" name="inputEmailFrom" class="form-control" placeholder="Почта отправителя" value="<?="admin@{$_SERVER['HTTP_HOST']}"?>" required autofocus>
            <label for="inputEmailFrom">Почта отправителя</label>
        </div>

        <div class="form-label-group">
            <input type="email" id="inputEmailTo" name="inputEmailTo" class="form-control" placeholder="Почта получателя" value="<?="admin@{$_SERVER['HTTP_HOST']}"?>" required autofocus>
            <label for="inputEmailTo">Почта получателя</label>
        </div>

        <div class="form-label-group">
            <input type="text" id="inputSubject" name="inputSubject" class="form-control" placeholder="Тема письма" value="Mail check" required autofocus>
            <label for="inputSubject">Тема письма</label>
        </div>

        <div class="form-label-group">
            <input type="text" id="inputMessage" name="inputMessage" class="form-control" placeholder="Текст письма" value="test test test test" required autofocus>
            <label for="inputMessage">Текст письма</label>
        </div>

        <input name="ford" required type="hidden" placeholder="j4l" value="focus">

        <button class="btn btn-lg btn-primary btn-block" type="submit">Отправить</button>
    <?php endif; ?>
</form>
</body>
</html>
