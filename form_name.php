<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Форма пользовательских данных</title>

</head>
<body>
<?php
// Блок 1 (строки 11-13)
// Выводит на экран все данные, переданные в запросе ($_REQUEST) в удобном для чтения формате
// $_REQUEST содержит данные из $_GET, $_POST и $_COOKIE
echo "<pre>";
var_dump($_REQUEST);
echo "</pre>";

// Блок 2 (строка 17)
// Создаём массив с информацией о пользователе и присваиваем значения с использованием ключей
// Исправлено: добавлены ключи для всех элементов массива
$arUserInfo = array(
    "name" => $_REQUEST['user_name'], 
    "second_name" => $_REQUEST['user_second_name'],
    "last_name" => $_REQUEST['user_last_name'], 
    "city" => $_REQUEST['user_city'],
    "street" => $_REQUEST['user_street'],
    "house" => $_REQUEST['user_house'],
    "apartment" => $_REQUEST['user_apartment']
);

// Блок 3 (строка 36)
// Преобразует массив $arUserInfo в JSON-строку с поддержкой Unicode и форматированием для читаемости
// JSON_UNESCAPED_UNICODE - сохраняет кириллические символы без экранирования
// JSON_PRETTY_PRINT - добавляет отступы и переносы строк для лучшей читаемости
$strUserInfo = json_encode($arUserInfo, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
?>

	<form action="" method="POST">
		<strong>Ваше имя<span class="mf-req">*</span></strong><br>
		<input type="text" name="user_name" id="user_name" value=""><br>

		<strong>Ваше отчество<span class="mf-req">*</span></strong><br>
		<input type="text" name="user_second_name" id="user_second_name" value=""><br>

		<strong>Ваша фамилия<span class="mf-req">*</span></strong><br>
		<input type="text" name="user_last_name" id="user_last_name" value=""><br>

		<!-- Адрес разделен на отдельные поля для каждого компонента -->
		<strong>Ваш город<span class="mf-req">*</span></strong><br>
		<input type="text" name="user_city" id="user_city" value=""><br>

		<strong>Улица<span class="mf-req">*</span></strong><br>
		<input type="text" name="user_street" id="user_street" value=""><br>

		<strong>Дом<span class="mf-req">*</span></strong><br>
		<input type="text" name="user_house" id="user_house" value=""><br>

		<strong>Квартира<span class="mf-req">*</span></strong><br>
		<input type="text" name="user_apartment" id="user_apartment" value=""><br>

		<input type="submit" name="submit" id="submit" value="Отправить">
	</form>
<div id="result">
	<?=$strUserInfo?>
</div>
</body>
</html>
