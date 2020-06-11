<?php
$pdo = new PDO('mysql:dbname=forum;host=localhost','root', '4m*VV3sk7eZnP.3"y`3El~AaUx]V?@8E');
$pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdo -> setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
