

<?php 

echo $title;
echo "<br>";
echo $name;
echo "<br>";
echo $email;
?>

<html>
<body>

<form action="/notes" method="post">
    Name: <input type="text" name="name" ><br>
    E-mail: <input type="text" name="email"><br>
    <input type="submit">
</form>

</body>
</html>