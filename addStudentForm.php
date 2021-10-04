<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Student Form</title>
</head>

<body>
<form method="post" action="insertStudent.php"  id="studentForm">
    <label for="id_name">Student Name :</label>
    <input type="text" name="name" id="id_name" required placeholder="Name">
    <br><br>
    <label for="id_mark">Student Mark :</label>
    <input type="numeric" name="mark" id="id_mark" placeholder="Mark">
    <br><br>
    <label for="id_birthday">Student Birthday :</label>
    <input type="date" name="birthday" id="id_birthday" placeholder="Birthday">
    <br><br>
    <label for="id_group">Student Group :</label>
    <input type="numeric" name="std_group" id="id_group" placeholder="Group">
    <br><br>
    <input type="submit" value="Add Student">    
</form>
</body>
</html>