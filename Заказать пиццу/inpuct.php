<?php
$name = $_POST["name"];
$text = $_POST['text'];
$connection = mysqli_connect("localhost", "root", "", "Pizza");
if($connection === false)
{
    die("ERROR: Ошибка подключение. " . mysqli_connect_error());
}
$sql = "INSERT INTO `Sing up` (`Email`, `Password`) VALUES ('$name', '$text')";
if(mysqli_query($connection, $sql))
{
    echo "Поздравляю, вы зарегистрировались.";
}
else{
    echo "ERROR: Не удалось выполнить $sql. " . mysqli_errno($connection);
}
mysqli_close($connection);
?>