<?php 
class Sender
{

    private $to = 'ford153focus@gmail.com';
    private $from = '';

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
        $this->headers .= sprintf("To: %s \r\n", self::MAIL_TO);
        $this->headers .= sprintf("From: %s <%s> \r\n", $_POST['inputName'], self::MAIL_FROM ? self::MAIL_FROM : "admin@{$_SERVER['HTTP_HOST']}");
        $this->headers .= "Reply-To: {$_POST['inputEmail']} \r\n";
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
        ?>
        <?php if (mail(self::MAIL_TO, $this->subject, $this->message, $this->headers)): ?>
            <h2 style="color: green">Сообщение отправлено</h2>
        <?php else: ?>
            <h2 style="color: red">Произошла ошибка при отправке сообщения</h2>
        <?php endif; ?>
        <?php
    }
}

if (isset($_POST['ford']) && $_POST['ford'] == 'focus') {
    new Sender();
    die();
} 
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Form-Checker</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <style>
        body.swal2-shown:not(.swal2-no-backdrop) {
            overflow-y: hidden;
        }

        body.swal2-toast-shown {
            overflow-y: auto;
        }

        body.swal2-toast-shown.swal2-has-input > .swal2-container > .swal2-toast {
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
        }

        body.swal2-toast-shown.swal2-has-input > .swal2-container > .swal2-toast .swal2-icon {
            margin: 0 0 15px;
        }

        body.swal2-toast-shown.swal2-has-input > .swal2-container > .swal2-toast .swal2-buttonswrapper {
            -webkit-box-flex: 1;
            -ms-flex: 1;
            flex: 1;
            -ms-flex-item-align: stretch;
            align-self: stretch;
            -webkit-box-pack: end;
            -ms-flex-pack: end;
            justify-content: flex-end;
        }

        body.swal2-toast-shown.swal2-has-input > .swal2-container > .swal2-toast .swal2-loading {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
        }

        body.swal2-toast-shown.swal2-has-input > .swal2-container > .swal2-toast .swal2-input {
            height: 32px;
            font-size: 14px;
            margin: 5px auto;
        }

        body.swal2-toast-shown > .swal2-container {
            position: fixed;
            background-color: transparent;
        }

        body.swal2-toast-shown > .swal2-container.swal2-shown {
            background-color: transparent;
        }

        body.swal2-toast-shown > .swal2-container.swal2-top {
            top: 0;
            left: 50%;
            bottom: auto;
            right: auto;
            -webkit-transform: translateX(-50%);
            transform: translateX(-50%);
        }

        body.swal2-toast-shown > .swal2-container.swal2-top-right {
            top: 0;
            left: auto;
            bottom: auto;
            right: 0;
        }

        body.swal2-toast-shown > .swal2-container.swal2-top-left {
            top: 0;
            left: 0;
            bottom: auto;
            right: auto;
        }

        body.swal2-toast-shown > .swal2-container.swal2-center-left {
            top: 50%;
            left: 0;
            bottom: auto;
            right: auto;
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%);
        }

        body.swal2-toast-shown > .swal2-container.swal2-center {
            top: 50%;
            left: 50%;
            bottom: auto;
            right: auto;
            -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
        }

        body.swal2-toast-shown > .swal2-container.swal2-center-right {
            top: 50%;
            left: auto;
            bottom: auto;
            right: 0;
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%);
        }

        body.swal2-toast-shown > .swal2-container.swal2-bottom-left {
            top: auto;
            left: 0;
            bottom: 0;
            right: auto;
        }

        body.swal2-toast-shown > .swal2-container.swal2-bottom {
            top: auto;
            left: 50%;
            bottom: 0;
            right: auto;
            -webkit-transform: translateX(-50%);
            transform: translateX(-50%);
        }

        body.swal2-toast-shown > .swal2-container.swal2-bottom-right {
            top: auto;
            left: auto;
            bottom: 0;
            right: 0;
        }

        body.swal2-iosfix {
            position: fixed;
            left: 0;
            right: 0;
        }

        body.swal2-no-backdrop > .swal2-shown {
            top: auto;
            bottom: auto;
            left: auto;
            right: auto;
            background-color: transparent;
        }

        body.swal2-no-backdrop > .swal2-shown > .swal2-modal {
            -webkit-box-shadow: 0 0 10px rgba(0, 0, 0, 0.4);
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.4);
        }

        body.swal2-no-backdrop > .swal2-shown.swal2-top {
            top: 0;
            left: 50%;
            -webkit-transform: translateX(-50%);
            transform: translateX(-50%);
        }

        body.swal2-no-backdrop > .swal2-shown.swal2-top-left {
            top: 0;
            left: 0;
        }

        body.swal2-no-backdrop > .swal2-shown.swal2-top-right {
            top: 0;
            right: 0;
        }

        body.swal2-no-backdrop > .swal2-shown.swal2-center {
            top: 50%;
            left: 50%;
            -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
        }

        body.swal2-no-backdrop > .swal2-shown.swal2-center-left {
            top: 50%;
            left: 0;
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%);
        }

        body.swal2-no-backdrop > .swal2-shown.swal2-center-right {
            top: 50%;
            right: 0;
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%);
        }

        body.swal2-no-backdrop > .swal2-shown.swal2-bottom {
            bottom: 0;
            left: 50%;
            -webkit-transform: translateX(-50%);
            transform: translateX(-50%);
        }

        body.swal2-no-backdrop > .swal2-shown.swal2-bottom-left {
            bottom: 0;
            left: 0;
        }

        body.swal2-no-backdrop > .swal2-shown.swal2-bottom-right {
            bottom: 0;
            right: 0;
        }

        .swal2-container {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -ms-flex-direction: row;
            flex-direction: row;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            position: fixed;
            padding: 10px;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: transparent;
            z-index: 1060;
        }

        .swal2-container.swal2-top {
            -webkit-box-align: start;
            -ms-flex-align: start;
            align-items: flex-start;
        }

        .swal2-container.swal2-top-left {
            -webkit-box-align: start;
            -ms-flex-align: start;
            align-items: flex-start;
            -webkit-box-pack: start;
            -ms-flex-pack: start;
            justify-content: flex-start;
        }

        .swal2-container.swal2-top-right {
            -webkit-box-align: start;
            -ms-flex-align: start;
            align-items: flex-start;
            -webkit-box-pack: end;
            -ms-flex-pack: end;
            justify-content: flex-end;
        }

        .swal2-container.swal2-center {
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
        }

        .swal2-container.swal2-center-left {
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: start;
            -ms-flex-pack: start;
            justify-content: flex-start;
        }

        .swal2-container.swal2-center-right {
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: end;
            -ms-flex-pack: end;
            justify-content: flex-end;
        }

        .swal2-container.swal2-bottom {
            -webkit-box-align: end;
            -ms-flex-align: end;
            align-items: flex-end;
        }

        .swal2-container.swal2-bottom-left {
            -webkit-box-align: end;
            -ms-flex-align: end;
            align-items: flex-end;
            -webkit-box-pack: start;
            -ms-flex-pack: start;
            justify-content: flex-start;
        }

        .swal2-container.swal2-bottom-right {
            -webkit-box-align: end;
            -ms-flex-align: end;
            align-items: flex-end;
            -webkit-box-pack: end;
            -ms-flex-pack: end;
            justify-content: flex-end;
        }

        .swal2-container.swal2-grow-fullscreen > .swal2-modal {
            display: -webkit-box !important;
            display: -ms-flexbox !important;
            display: flex !important;
            -webkit-box-flex: 1;
            -ms-flex: 1;
            flex: 1;
            -ms-flex-item-align: stretch;
            align-self: stretch;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
        }

        .swal2-container.swal2-grow-row > .swal2-modal {
            display: -webkit-box !important;
            display: -ms-flexbox !important;
            display: flex !important;
            -webkit-box-flex: 1;
            -ms-flex: 1;
            flex: 1;
            -ms-flex-line-pack: center;
            align-content: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
        }

        .swal2-container.swal2-grow-column {
            -webkit-box-flex: 1;
            -ms-flex: 1;
            flex: 1;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
        }

        .swal2-container.swal2-grow-column.swal2-top, .swal2-container.swal2-grow-column.swal2-center, .swal2-container.swal2-grow-column.swal2-bottom {
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
        }

        .swal2-container.swal2-grow-column.swal2-top-left, .swal2-container.swal2-grow-column.swal2-center-left, .swal2-container.swal2-grow-column.swal2-bottom-left {
            -webkit-box-align: start;
            -ms-flex-align: start;
            align-items: flex-start;
        }

        .swal2-container.swal2-grow-column.swal2-top-right, .swal2-container.swal2-grow-column.swal2-center-right, .swal2-container.swal2-grow-column.swal2-bottom-right {
            -webkit-box-align: end;
            -ms-flex-align: end;
            align-items: flex-end;
        }

        .swal2-container.swal2-grow-column > .swal2-modal {
            display: -webkit-box !important;
            display: -ms-flexbox !important;
            display: flex !important;
            -webkit-box-flex: 1;
            -ms-flex: 1;
            flex: 1;
            -ms-flex-line-pack: center;
            align-content: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
        }

        .swal2-container:not(.swal2-top):not(.swal2-top-left):not(.swal2-top-right):not(.swal2-center-left):not(.swal2-center-right):not(.swal2-bottom):not(.swal2-bottom-left):not(.swal2-bottom-right) > .swal2-modal {
            margin: auto;
        }

        @media all and (-ms-high-contrast: none), (-ms-high-contrast: active) {
            .swal2-container .swal2-modal {
                margin: 0 !important;
            }
        }

        .swal2-container.swal2-fade {
            -webkit-transition: background-color .1s;
            transition: background-color .1s;
        }

        .swal2-container.swal2-shown {
            background-color: rgba(0, 0, 0, 0.4);
        }

        .swal2-popup {
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            background-color: #fff;
            font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
            border-radius: 5px;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            text-align: center;
            overflow-x: hidden;
            overflow-y: auto;
            display: none;
            position: relative;
            max-width: 100%;
        }

        .swal2-popup.swal2-toast {
            width: 300px;
            padding: 0 15px;
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -ms-flex-direction: row;
            flex-direction: row;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            overflow-y: hidden;
            -webkit-box-shadow: 0 0 10px #d9d9d9;
            box-shadow: 0 0 10px #d9d9d9;
        }

        .swal2-popup.swal2-toast .swal2-title {
            max-width: 300px;
            font-size: 16px;
            text-align: left;
        }

        .swal2-popup.swal2-toast .swal2-content {
            font-size: 14px;
            text-align: left;
        }

        .swal2-popup.swal2-toast .swal2-icon {
            width: 32px;
            height: 32px;
            margin: 0 15px 0 0;
        }

        .swal2-popup.swal2-toast .swal2-icon.swal2-success .swal2-success-ring {
            width: 32px;
            height: 32px;
        }

        .swal2-popup.swal2-toast .swal2-icon.swal2-info, .swal2-popup.swal2-toast .swal2-icon.swal2-warning, .swal2-popup.swal2-toast .swal2-icon.swal2-question {
            font-size: 26px;
            line-height: 32px;
        }

        .swal2-popup.swal2-toast .swal2-icon.swal2-error [class^='swal2-x-mark-line'] {
            top: 14px;
            width: 22px;
        }

        .swal2-popup.swal2-toast .swal2-icon.swal2-error [class^='swal2-x-mark-line'][class$='left'] {
            left: 5px;
        }

        .swal2-popup.swal2-toast .swal2-icon.swal2-error [class^='swal2-x-mark-line'][class$='right'] {
            right: 5px;
        }

        .swal2-popup.swal2-toast .swal2-buttonswrapper {
            margin: 0 0 0 5px;
        }

        .swal2-popup.swal2-toast .swal2-styled {
            margin: 0 0 0 5px;
            padding: 5px 10px;
        }

        .swal2-popup.swal2-toast .swal2-styled:focus {
            -webkit-box-shadow: 0 0 0 1px #fff, 0 0 0 2px rgba(50, 100, 150, 0.4);
            box-shadow: 0 0 0 1px #fff, 0 0 0 2px rgba(50, 100, 150, 0.4);
        }

        .swal2-popup.swal2-toast .swal2-validationerror {
            width: 100%;
            margin: 5px -20px;
        }

        .swal2-popup.swal2-toast .swal2-success {
            border-color: #a5dc86;
        }

        .swal2-popup.swal2-toast .swal2-success [class^='swal2-success-circular-line'] {
            border-radius: 50%;
            position: absolute;
            width: 32px;
            height: 64px;
            -webkit-transform: rotate(45deg);
            transform: rotate(45deg);
        }

        .swal2-popup.swal2-toast .swal2-success [class^='swal2-success-circular-line'][class$='left'] {
            border-radius: 64px 0 0 64px;
            top: -4px;
            left: -15px;
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg);
            -webkit-transform-origin: 32px 32px;
            transform-origin: 32px 32px;
        }

        .swal2-popup.swal2-toast .swal2-success [class^='swal2-success-circular-line'][class$='right'] {
            border-radius: 0 64px 64px 0;
            top: -5px;
            left: 14px;
            -webkit-transform-origin: 0 32px;
            transform-origin: 0 32px;
        }

        .swal2-popup.swal2-toast .swal2-success .swal2-success-ring {
            width: 32px;
            height: 32px;
        }

        .swal2-popup.swal2-toast .swal2-success .swal2-success-fix {
            width: 7px;
            height: 90px;
            left: 28px;
            top: 8px;
        }

        .swal2-popup.swal2-toast .swal2-success [class^='swal2-success-line'] {
            height: 5px;
        }

        .swal2-popup.swal2-toast .swal2-success [class^='swal2-success-line'][class$='tip'] {
            width: 12px;
            left: 3px;
            top: 18px;
        }

        .swal2-popup.swal2-toast .swal2-success [class^='swal2-success-line'][class$='long'] {
            width: 22px;
            right: 3px;
            top: 15px;
        }

        .swal2-popup.swal2-toast .swal2-animate-success-line-tip {
            -webkit-animation: animate-toast-success-tip .75s;
            animation: animate-toast-success-tip .75s;
        }

        .swal2-popup.swal2-toast .swal2-animate-success-line-long {
            -webkit-animation: animate-toast-success-long .75s;
            animation: animate-toast-success-long .75s;
        }

        .swal2-popup:focus {
            outline: none;
        }

        .swal2-popup.swal2-loading {
            overflow-y: hidden;
        }

        .swal2-popup .swal2-title {
            color: #595959;
            font-size: 30px;
            text-align: center;
            font-weight: 600;
            text-transform: none;
            position: relative;
            margin: 0 0 .4em;
            padding: 0;
            display: block;
            word-wrap: break-word;
        }

        .swal2-popup .swal2-buttonswrapper {
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            margin-top: 15px;
        }

        .swal2-popup .swal2-buttonswrapper:not(.swal2-loading) .swal2-styled[disabled] {
            opacity: .4;
            cursor: no-drop;
        }

        .swal2-popup .swal2-buttonswrapper.swal2-loading .swal2-styled.swal2-confirm {
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            border: 4px solid transparent;
            border-color: transparent;
            width: 40px;
            height: 40px;
            padding: 0;
            margin: 7.5px;
            vertical-align: top;
            background-color: transparent !important;
            color: transparent;
            cursor: default;
            border-radius: 100%;
            -webkit-animation: rotate-loading 1.5s linear 0s infinite normal;
            animation: rotate-loading 1.5s linear 0s infinite normal;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        .swal2-popup .swal2-buttonswrapper.swal2-loading .swal2-styled.swal2-cancel {
            margin-left: 30px;
            margin-right: 30px;
        }

        .swal2-popup .swal2-buttonswrapper.swal2-loading :not(.swal2-styled).swal2-confirm::after {
            display: inline-block;
            content: '';
            margin-left: 5px;
            vertical-align: -1px;
            height: 15px;
            width: 15px;
            border: 3px solid #999999;
            -webkit-box-shadow: 1px 1px 1px #fff;
            box-shadow: 1px 1px 1px #fff;
            border-right-color: transparent;
            border-radius: 50%;
            -webkit-animation: rotate-loading 1.5s linear 0s infinite normal;
            animation: rotate-loading 1.5s linear 0s infinite normal;
        }

        .swal2-popup .swal2-styled {
            border: 0;
            border-radius: 3px;
            -webkit-box-shadow: none;
            box-shadow: none;
            color: #fff;
            cursor: pointer;
            font-size: 17px;
            font-weight: 500;
            margin: 15px 5px 0;
            padding: 10px 32px;
        }

        .swal2-popup .swal2-styled:focus {
            outline: none;
            -webkit-box-shadow: 0 0 0 2px #fff, 0 0 0 4px rgba(50, 100, 150, 0.4);
            box-shadow: 0 0 0 2px #fff, 0 0 0 4px rgba(50, 100, 150, 0.4);
        }

        .swal2-popup .swal2-image {
            margin: 20px auto;
            max-width: 100%;
        }

        .swal2-popup .swal2-close {
            background: transparent;
            border: 0;
            margin: 0;
            padding: 0;
            width: 38px;
            height: 40px;
            font-size: 36px;
            line-height: 40px;
            font-family: serif;
            position: absolute;
            top: 5px;
            right: 8px;
            cursor: pointer;
            color: #cccccc;
            -webkit-transition: color .1s ease;
            transition: color .1s ease;
        }

        .swal2-popup .swal2-close:hover {
            color: #d55;
        }

        .swal2-popup > .swal2-input,
        .swal2-popup > .swal2-file,
        .swal2-popup > .swal2-textarea,
        .swal2-popup > .swal2-select,
        .swal2-popup > .swal2-radio,
        .swal2-popup > .swal2-checkbox {
            display: none;
        }

        .swal2-popup .swal2-content {
            font-size: 18px;
            text-align: center;
            font-weight: 300;
            position: relative;
            float: none;
            margin: 0;
            padding: 0;
            line-height: normal;
            color: #545454;
            word-wrap: break-word;
        }

        .swal2-popup .swal2-input,
        .swal2-popup .swal2-file,
        .swal2-popup .swal2-textarea,
        .swal2-popup .swal2-select,
        .swal2-popup .swal2-radio,
        .swal2-popup .swal2-checkbox {
            margin: 20px auto;
        }

        .swal2-popup .swal2-input,
        .swal2-popup .swal2-file,
        .swal2-popup .swal2-textarea {
            width: 100%;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            font-size: 18px;
            border-radius: 3px;
            border: 1px solid #d9d9d9;
            -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.06);
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.06);
            -webkit-transition: border-color .3s, -webkit-box-shadow .3s;
            transition: border-color .3s, -webkit-box-shadow .3s;
            transition: border-color .3s, box-shadow .3s;
            transition: border-color .3s, box-shadow .3s, -webkit-box-shadow .3s;
        }

        .swal2-popup .swal2-input.swal2-inputerror,
        .swal2-popup .swal2-file.swal2-inputerror,
        .swal2-popup .swal2-textarea.swal2-inputerror {
            border-color: #f27474 !important;
            -webkit-box-shadow: 0 0 2px #f27474 !important;
            box-shadow: 0 0 2px #f27474 !important;
        }

        .swal2-popup .swal2-input:focus,
        .swal2-popup .swal2-file:focus,
        .swal2-popup .swal2-textarea:focus {
            outline: none;
            border: 1px solid #b4dbed;
            -webkit-box-shadow: 0 0 3px #c4e6f5;
            box-shadow: 0 0 3px #c4e6f5;
        }

        .swal2-popup .swal2-input::-webkit-input-placeholder,
        .swal2-popup .swal2-file::-webkit-input-placeholder,
        .swal2-popup .swal2-textarea::-webkit-input-placeholder {
            color: #cccccc;
        }

        .swal2-popup .swal2-input:-ms-input-placeholder,
        .swal2-popup .swal2-file:-ms-input-placeholder,
        .swal2-popup .swal2-textarea:-ms-input-placeholder {
            color: #cccccc;
        }

        .swal2-popup .swal2-input::-ms-input-placeholder,
        .swal2-popup .swal2-file::-ms-input-placeholder,
        .swal2-popup .swal2-textarea::-ms-input-placeholder {
            color: #cccccc;
        }

        .swal2-popup .swal2-input::placeholder,
        .swal2-popup .swal2-file::placeholder,
        .swal2-popup .swal2-textarea::placeholder {
            color: #cccccc;
        }

        .swal2-popup .swal2-range input {
            float: left;
            width: 80%;
        }

        .swal2-popup .swal2-range output {
            float: right;
            width: 20%;
            font-size: 20px;
            font-weight: 600;
            text-align: center;
        }

        .swal2-popup .swal2-range input,
        .swal2-popup .swal2-range output {
            height: 43px;
            line-height: 43px;
            vertical-align: middle;
            margin: 20px auto;
            padding: 0;
        }

        .swal2-popup .swal2-input {
            height: 43px;
            padding: 0 12px;
        }

        .swal2-popup .swal2-input[type='number'] {
            max-width: 150px;
        }

        .swal2-popup .swal2-file {
            font-size: 20px;
        }

        .swal2-popup .swal2-textarea {
            height: 108px;
            padding: 12px;
        }

        .swal2-popup .swal2-select {
            color: #545454;
            font-size: inherit;
            padding: 5px 10px;
            min-width: 40%;
            max-width: 100%;
        }

        .swal2-popup .swal2-radio {
            border: 0;
        }

        .swal2-popup .swal2-radio label:not(:first-child) {
            margin-left: 20px;
        }

        .swal2-popup .swal2-radio input,
        .swal2-popup .swal2-radio span {
            vertical-align: middle;
        }

        .swal2-popup .swal2-radio input {
            margin: 0 3px 0 0;
        }

        .swal2-popup .swal2-checkbox {
            color: #545454;
        }

        .swal2-popup .swal2-checkbox input,
        .swal2-popup .swal2-checkbox span {
            vertical-align: middle;
        }

        .swal2-popup .swal2-validationerror {
            background-color: #f0f0f0;
            margin: 0 -20px;
            overflow: hidden;
            padding: 10px;
            color: gray;
            font-size: 16px;
            font-weight: 300;
            display: none;
        }

        .swal2-popup .swal2-validationerror::before {
            content: '!';
            display: inline-block;
            width: 24px;
            height: 24px;
            border-radius: 50%;
            background-color: #ea7d7d;
            color: #fff;
            line-height: 24px;
            text-align: center;
            margin-right: 10px;
        }

        @supports (-ms-accelerator: true) {
            .swal2-range input {
                width: 100% !important;
            }

            .swal2-range output {
                display: none;
            }
        }

        @media all and (-ms-high-contrast: none), (-ms-high-contrast: active) {
            .swal2-range input {
                width: 100% !important;
            }

            .swal2-range output {
                display: none;
            }
        }

        .swal2-icon {
            width: 80px;
            height: 80px;
            border: 4px solid transparent;
            border-radius: 50%;
            margin: 20px auto 30px;
            padding: 0;
            position: relative;
            -webkit-box-sizing: content-box;
            box-sizing: content-box;
            cursor: default;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        .swal2-icon.swal2-error {
            border-color: #f27474;
        }

        .swal2-icon.swal2-error .swal2-x-mark {
            position: relative;
            display: block;
        }

        .swal2-icon.swal2-error [class^='swal2-x-mark-line'] {
            position: absolute;
            height: 5px;
            width: 47px;
            background-color: #f27474;
            display: block;
            top: 37px;
            border-radius: 2px;
        }

        .swal2-icon.swal2-error [class^='swal2-x-mark-line'][class$='left'] {
            -webkit-transform: rotate(45deg);
            transform: rotate(45deg);
            left: 17px;
        }

        .swal2-icon.swal2-error [class^='swal2-x-mark-line'][class$='right'] {
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg);
            right: 16px;
        }

        .swal2-icon.swal2-warning {
            font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
            color: #f8bb86;
            border-color: #facea8;
            font-size: 60px;
            line-height: 80px;
            text-align: center;
        }

        .swal2-icon.swal2-info {
            font-family: 'Open Sans', sans-serif;
            color: #3fc3ee;
            border-color: #9de0f6;
            font-size: 60px;
            line-height: 80px;
            text-align: center;
        }

        .swal2-icon.swal2-question {
            font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
            color: #87adbd;
            border-color: #c9dae1;
            font-size: 60px;
            line-height: 80px;
            text-align: center;
        }

        .swal2-icon.swal2-success {
            border-color: #a5dc86;
        }

        .swal2-icon.swal2-success [class^='swal2-success-circular-line'] {
            border-radius: 50%;
            position: absolute;
            width: 60px;
            height: 120px;
            -webkit-transform: rotate(45deg);
            transform: rotate(45deg);
        }

        .swal2-icon.swal2-success [class^='swal2-success-circular-line'][class$='left'] {
            border-radius: 120px 0 0 120px;
            top: -7px;
            left: -33px;
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg);
            -webkit-transform-origin: 60px 60px;
            transform-origin: 60px 60px;
        }

        .swal2-icon.swal2-success [class^='swal2-success-circular-line'][class$='right'] {
            border-radius: 0 120px 120px 0;
            top: -11px;
            left: 30px;
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg);
            -webkit-transform-origin: 0 60px;
            transform-origin: 0 60px;
        }

        .swal2-icon.swal2-success .swal2-success-ring {
            width: 80px;
            height: 80px;
            border: 4px solid rgba(165, 220, 134, 0.2);
            border-radius: 50%;
            -webkit-box-sizing: content-box;
            box-sizing: content-box;
            position: absolute;
            left: -4px;
            top: -4px;
            z-index: 2;
        }

        .swal2-icon.swal2-success .swal2-success-fix {
            width: 7px;
            height: 90px;
            position: absolute;
            left: 28px;
            top: 8px;
            z-index: 1;
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg);
        }

        .swal2-icon.swal2-success [class^='swal2-success-line'] {
            height: 5px;
            background-color: #a5dc86;
            display: block;
            border-radius: 2px;
            position: absolute;
            z-index: 2;
        }

        .swal2-icon.swal2-success [class^='swal2-success-line'][class$='tip'] {
            width: 25px;
            left: 14px;
            top: 46px;
            -webkit-transform: rotate(45deg);
            transform: rotate(45deg);
        }

        .swal2-icon.swal2-success [class^='swal2-success-line'][class$='long'] {
            width: 47px;
            right: 8px;
            top: 38px;
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg);
        }

        .swal2-progresssteps {
            font-weight: 600;
            margin: 0 0 20px;
            padding: 0;
        }

        .swal2-progresssteps li {
            display: inline-block;
            position: relative;
        }

        .swal2-progresssteps .swal2-progresscircle {
            background: #3085d6;
            border-radius: 2em;
            color: #fff;
            height: 2em;
            line-height: 2em;
            text-align: center;
            width: 2em;
            z-index: 20;
        }

        .swal2-progresssteps .swal2-progresscircle:first-child {
            margin-left: 0;
        }

        .swal2-progresssteps .swal2-progresscircle:last-child {
            margin-right: 0;
        }

        .swal2-progresssteps .swal2-progresscircle.swal2-activeprogressstep {
            background: #3085d6;
        }

        .swal2-progresssteps .swal2-progresscircle.swal2-activeprogressstep ~ .swal2-progresscircle {
            background: #add8e6;
        }

        .swal2-progresssteps .swal2-progresscircle.swal2-activeprogressstep ~ .swal2-progressline {
            background: #add8e6;
        }

        .swal2-progresssteps .swal2-progressline {
            background: #3085d6;
            height: .4em;
            margin: 0 -1px;
            z-index: 10;
        }

        [class^='swal2'] {
            -webkit-tap-highlight-color: transparent;
        }

        @-webkit-keyframes showSweetToast {
            0% {
                -webkit-transform: translateY(-10px) rotateZ(2deg);
                transform: translateY(-10px) rotateZ(2deg);
                opacity: 0;
            }
            33% {
                -webkit-transform: translateY(0) rotateZ(-2deg);
                transform: translateY(0) rotateZ(-2deg);
                opacity: .5;
            }
            66% {
                -webkit-transform: translateY(5px) rotateZ(2deg);
                transform: translateY(5px) rotateZ(2deg);
                opacity: .7;
            }
            100% {
                -webkit-transform: translateY(0) rotateZ(0);
                transform: translateY(0) rotateZ(0);
                opacity: 1;
            }
        }

        @keyframes showSweetToast {
            0% {
                -webkit-transform: translateY(-10px) rotateZ(2deg);
                transform: translateY(-10px) rotateZ(2deg);
                opacity: 0;
            }
            33% {
                -webkit-transform: translateY(0) rotateZ(-2deg);
                transform: translateY(0) rotateZ(-2deg);
                opacity: .5;
            }
            66% {
                -webkit-transform: translateY(5px) rotateZ(2deg);
                transform: translateY(5px) rotateZ(2deg);
                opacity: .7;
            }
            100% {
                -webkit-transform: translateY(0) rotateZ(0);
                transform: translateY(0) rotateZ(0);
                opacity: 1;
            }
        }

        @-webkit-keyframes hideSweetToast {
            0% {
                opacity: 1;
            }
            33% {
                opacity: .5;
            }
            100% {
                -webkit-transform: rotateZ(1deg);
                transform: rotateZ(1deg);
                opacity: 0;
            }
        }

        @keyframes hideSweetToast {
            0% {
                opacity: 1;
            }
            33% {
                opacity: .5;
            }
            100% {
                -webkit-transform: rotateZ(1deg);
                transform: rotateZ(1deg);
                opacity: 0;
            }
        }

        @-webkit-keyframes showSweetAlert {
            0% {
                -webkit-transform: scale(0.7);
                transform: scale(0.7);
            }
            45% {
                -webkit-transform: scale(1.05);
                transform: scale(1.05);
            }
            80% {
                -webkit-transform: scale(0.95);
                transform: scale(0.95);
            }
            100% {
                -webkit-transform: scale(1);
                transform: scale(1);
            }
        }

        @keyframes showSweetAlert {
            0% {
                -webkit-transform: scale(0.7);
                transform: scale(0.7);
            }
            45% {
                -webkit-transform: scale(1.05);
                transform: scale(1.05);
            }
            80% {
                -webkit-transform: scale(0.95);
                transform: scale(0.95);
            }
            100% {
                -webkit-transform: scale(1);
                transform: scale(1);
            }
        }

        @-webkit-keyframes hideSweetAlert {
            0% {
                -webkit-transform: scale(1);
                transform: scale(1);
                opacity: 1;
            }
            100% {
                -webkit-transform: scale(0.5);
                transform: scale(0.5);
                opacity: 0;
            }
        }

        @keyframes hideSweetAlert {
            0% {
                -webkit-transform: scale(1);
                transform: scale(1);
                opacity: 1;
            }
            100% {
                -webkit-transform: scale(0.5);
                transform: scale(0.5);
                opacity: 0;
            }
        }

        .swal2-show {
            -webkit-animation: showSweetAlert .3s;
            animation: showSweetAlert .3s;
        }

        .swal2-show.swal2-toast {
            -webkit-animation: showSweetToast .5s;
            animation: showSweetToast .5s;
        }

        .swal2-show.swal2-noanimation {
            -webkit-animation: none;
            animation: none;
        }

        .swal2-hide {
            -webkit-animation: hideSweetAlert .15s forwards;
            animation: hideSweetAlert .15s forwards;
        }

        .swal2-hide.swal2-toast {
            -webkit-animation: hideSweetToast .2s forwards;
            animation: hideSweetToast .2s forwards;
        }

        .swal2-hide.swal2-noanimation {
            -webkit-animation: none;
            animation: none;
        }

        @-webkit-keyframes animate-success-tip {
            0% {
                width: 0;
                left: 1px;
                top: 19px;
            }
            54% {
                width: 0;
                left: 1px;
                top: 19px;
            }
            70% {
                width: 50px;
                left: -8px;
                top: 37px;
            }
            84% {
                width: 17px;
                left: 21px;
                top: 48px;
            }
            100% {
                width: 25px;
                left: 14px;
                top: 45px;
            }
        }

        @keyframes animate-success-tip {
            0% {
                width: 0;
                left: 1px;
                top: 19px;
            }
            54% {
                width: 0;
                left: 1px;
                top: 19px;
            }
            70% {
                width: 50px;
                left: -8px;
                top: 37px;
            }
            84% {
                width: 17px;
                left: 21px;
                top: 48px;
            }
            100% {
                width: 25px;
                left: 14px;
                top: 45px;
            }
        }

        @-webkit-keyframes animate-success-long {
            0% {
                width: 0;
                right: 46px;
                top: 54px;
            }
            65% {
                width: 0;
                right: 46px;
                top: 54px;
            }
            84% {
                width: 55px;
                right: 0;
                top: 35px;
            }
            100% {
                width: 47px;
                right: 8px;
                top: 38px;
            }
        }

        @keyframes animate-success-long {
            0% {
                width: 0;
                right: 46px;
                top: 54px;
            }
            65% {
                width: 0;
                right: 46px;
                top: 54px;
            }
            84% {
                width: 55px;
                right: 0;
                top: 35px;
            }
            100% {
                width: 47px;
                right: 8px;
                top: 38px;
            }
        }

        @-webkit-keyframes animate-toast-success-tip {
            0% {
                width: 0;
                left: 1px;
                top: 9px;
            }
            54% {
                width: 0;
                left: 1px;
                top: 9px;
            }
            70% {
                width: 24px;
                left: -4px;
                top: 17px;
            }
            84% {
                width: 8px;
                left: 10px;
                top: 20px;
            }
            100% {
                width: 12px;
                left: 3px;
                top: 18px;
            }
        }

        @keyframes animate-toast-success-tip {
            0% {
                width: 0;
                left: 1px;
                top: 9px;
            }
            54% {
                width: 0;
                left: 1px;
                top: 9px;
            }
            70% {
                width: 24px;
                left: -4px;
                top: 17px;
            }
            84% {
                width: 8px;
                left: 10px;
                top: 20px;
            }
            100% {
                width: 12px;
                left: 3px;
                top: 18px;
            }
        }

        @-webkit-keyframes animate-toast-success-long {
            0% {
                width: 0;
                right: 22px;
                top: 26px;
            }
            65% {
                width: 0;
                right: 22px;
                top: 26px;
            }
            84% {
                width: 26px;
                right: 0;
                top: 15px;
            }
            100% {
                width: 22px;
                right: 3px;
                top: 15px;
            }
        }

        @keyframes animate-toast-success-long {
            0% {
                width: 0;
                right: 22px;
                top: 26px;
            }
            65% {
                width: 0;
                right: 22px;
                top: 26px;
            }
            84% {
                width: 26px;
                right: 0;
                top: 15px;
            }
            100% {
                width: 22px;
                right: 3px;
                top: 15px;
            }
        }

        @-webkit-keyframes rotatePlaceholder {
            0% {
                -webkit-transform: rotate(-45deg);
                transform: rotate(-45deg);
            }
            5% {
                -webkit-transform: rotate(-45deg);
                transform: rotate(-45deg);
            }
            12% {
                -webkit-transform: rotate(-405deg);
                transform: rotate(-405deg);
            }
            100% {
                -webkit-transform: rotate(-405deg);
                transform: rotate(-405deg);
            }
        }

        @keyframes rotatePlaceholder {
            0% {
                -webkit-transform: rotate(-45deg);
                transform: rotate(-45deg);
            }
            5% {
                -webkit-transform: rotate(-45deg);
                transform: rotate(-45deg);
            }
            12% {
                -webkit-transform: rotate(-405deg);
                transform: rotate(-405deg);
            }
            100% {
                -webkit-transform: rotate(-405deg);
                transform: rotate(-405deg);
            }
        }

        .swal2-animate-success-line-tip {
            -webkit-animation: animate-success-tip .75s;
            animation: animate-success-tip .75s;
        }

        .swal2-animate-success-line-long {
            -webkit-animation: animate-success-long .75s;
            animation: animate-success-long .75s;
        }

        .swal2-success.swal2-animate-success-icon .swal2-success-circular-line-right {
            -webkit-animation: rotatePlaceholder 4.25s ease-in;
            animation: rotatePlaceholder 4.25s ease-in;
        }

        @-webkit-keyframes animate-error-icon {
            0% {
                -webkit-transform: rotateX(100deg);
                transform: rotateX(100deg);
                opacity: 0;
            }
            100% {
                -webkit-transform: rotateX(0deg);
                transform: rotateX(0deg);
                opacity: 1;
            }
        }

        @keyframes animate-error-icon {
            0% {
                -webkit-transform: rotateX(100deg);
                transform: rotateX(100deg);
                opacity: 0;
            }
            100% {
                -webkit-transform: rotateX(0deg);
                transform: rotateX(0deg);
                opacity: 1;
            }
        }

        .swal2-animate-error-icon {
            -webkit-animation: animate-error-icon .5s;
            animation: animate-error-icon .5s;
        }

        @-webkit-keyframes animate-x-mark {
            0% {
                -webkit-transform: scale(0.4);
                transform: scale(0.4);
                margin-top: 26px;
                opacity: 0;
            }
            50% {
                -webkit-transform: scale(0.4);
                transform: scale(0.4);
                margin-top: 26px;
                opacity: 0;
            }
            80% {
                -webkit-transform: scale(1.15);
                transform: scale(1.15);
                margin-top: -6px;
            }
            100% {
                -webkit-transform: scale(1);
                transform: scale(1);
                margin-top: 0;
                opacity: 1;
            }
        }

        @keyframes animate-x-mark {
            0% {
                -webkit-transform: scale(0.4);
                transform: scale(0.4);
                margin-top: 26px;
                opacity: 0;
            }
            50% {
                -webkit-transform: scale(0.4);
                transform: scale(0.4);
                margin-top: 26px;
                opacity: 0;
            }
            80% {
                -webkit-transform: scale(1.15);
                transform: scale(1.15);
                margin-top: -6px;
            }
            100% {
                -webkit-transform: scale(1);
                transform: scale(1);
                margin-top: 0;
                opacity: 1;
            }
        }

        .swal2-animate-x-mark {
            -webkit-animation: animate-x-mark .5s;
            animation: animate-x-mark .5s;
        }

        @-webkit-keyframes rotate-loading {
            0% {
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg);
            }
            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }

        @keyframes rotate-loading {
            0% {
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg);
            }
            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }
    </style>
    <style>
        html,
        body,
        .form-signin-wrapper {
            width: 100%;
            height: 100%;
        }
        .form-signin-wrapper {
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .form-signin-wrapper .form-signin {
            max-width: 777px;
            text-align: center;
        }
        .form-signin-wrapper .form-signin input.form-control {
            border-bottom-left-radius: 0;
            border-bottom-right-radius: 0;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
            width: 100%;
        }
        .form-signin-wrapper .form-signin input.form-control:first-of-type {
            border-bottom-left-radius: 0;
            border-bottom-right-radius: 0;
            border-top-left-radius: .25rem;
            border-top-right-radius: .25rem;
        }
        .form-signin-wrapper .form-signin input.form-control:nth-of-type(4) {
            border-bottom-left-radius: .25rem;
            border-bottom-right-radius: .25rem;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }
        .form-signin-wrapper .form-signin textarea.form-control {
            height: 333px;
        }
        .form-signin-wrapper .form-signin .g-recaptcha div {
            margin: 0 auto;
        }
    </style>
</head>

<body class="text-center" cz-shortcut-listen="true">
    <div class="form-signin-wrapper">
        <form class="form-signin" method="post">
            <h1 class="h3 mb-3 font-weight-normal">Форма обратной связи</h1>

            <label for="inputFrom" class="sr-only">Email отправителя</label>
            <input type="email" id="inputFrom" name="inputFrom" class="form-control" placeholder="Email отправителя" required="required" value="<?="admin@{$_SERVER['HTTP_HOST']}"?>">

            <label for="inputTo" class="sr-only">Email получателя</label>
            <input type="email" id="inputTo" name="inputTo" class="form-control" placeholder="Email получателя" required="required" value="<?="admin@{$_SERVER['HTTP_HOST']}"?>">

            <label for="inputSubject" class="sr-only">Тема письма</label>
            <input type="text" id="inputSubject" name="inputSubject" class="form-control" placeholder="Тема письма" required="required" value="Тема письма">

            <br/>

            <label for="inputMessage" class="sr-only">Сообщение</label>
            <textarea id="inputMessage" name="inputMessage" class="form-control" placeholder="Сообщение" required="">test test test test</textarea>

            <hr/>
            
            <input name="ford" required type="hidden" placeholder="j4l" value="focus">

            <button class="btn btn-lg btn-primary btn-block" type="submit">Отправить</button>
        </form>
    </div>
</body>
</html>