<!doctype html>
<html>
<head>
    <title>Système d'inscription</title>
</head>
<body>
    <form action="action.php" method="post">
        <label for="name">Name :</label>
        <input type="text" name="nom"><br>
        <label for="email">Email :</label>
        <input type="email" name="email"><br>
        <label for="genre">Genre :</label>
        <select name="genre">
            <option value="M">M</option>
            <option value="F">F</option>
        </select><br>
        <input type="submit" value="Envoyer">
    </form>
</body>
</html>