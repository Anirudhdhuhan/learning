<html>
<body>
<?php
echo "Enter your details here <br><br>";
?> 
<form action="welcome.php" method="post">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
Website: <input type="text" name="website"><br>
Comment: <textarea name="comment" rows="5" col="40"></textarea><br>
Gender: <input type="radio" name="gender" value="Female">Female
<input type="radio" name="gender" value="Male">Male
<input type="radio" name="gender" value="Other">Other<br>
<input type="submit">
<input type="reset">
</form>
</body>
</html> 