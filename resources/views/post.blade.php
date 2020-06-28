<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
</head>
<body>
<h1>My blog post</h1>
<<form method="POST" action="/prijava">
    @csrf

    <label for="first_name">Ime:</label>
    <input type="text" id="first_name" name="first_name"><br><br>

    <label for="last_name">Prezime:</label>
    <input type="text" id="last_name" name="last_name"><br><br>

    <label for="email">Email-adresa:</label>
    <input type="text" id="email" name="email"><br><br>

    <button type="submit">Prijavi se!</button>

</form>
</body>
</html>
