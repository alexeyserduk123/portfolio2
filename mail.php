<?php

$recepient = "kv1106@yandex.ua";
$sitename = "Spark promo";

$name = trim($_POST["name"]);
$phone = trim($_POST["phone"]);
$text = trim($_POST["text"]);
$about = trim($_POST["about"]);
$message = "Имя: $name \nПочта: $phone \nТема: $text \nСообщение: $about";

$pagetitle = "Новая заявка с сайта \"$sitename\"";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");