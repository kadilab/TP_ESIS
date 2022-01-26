<!doctype html>

<head>
    <meta charset="UTF-8">
    <title>Formulaire</title>
</head>
<body>
    <form action="action.php" method="post">
        Nom : <input type="text" name="nom"><br><br>
        Post-nom : <input type="text" name="postnom"><br><br>
        Prenom : <input type="text" name="prenom"><br><br>
        Matricule : <input type="text" name="matricule"><br><br>
        Genre : <select name="genre"><br><br>
            <option value="M">M</option>
            <option value="F">F</option>
        </select><br><br>
        Promotion : <input type="text" name="promotion"><br><br>
        Email : <input type="email" name="email"><br><br>

        <input type="submit">
    </form>
</body>
</html>
