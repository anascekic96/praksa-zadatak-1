<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">\

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"defer>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"defer></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"defer></script>
    <title>Prijavna forma</title>

</head>
<body>

<h1>Dobrodosli. Prijavite se!</h1>

<form method="POST" action="/prijava">
    @csrf

    <label for="first_name">Ime:</label>
    <input type="text" id="first_name" name="first_name"><br><br>

    <label for="last_name">Prezime:</label>
    <input type="text" id="last_name" name="last_name"><br><br>

    <label for="email">Email-adresa:</label>
    <input type="text" id="email" name="email"><br><br>

    <a class="btn btn-primary" href="/welcome">Prijavi se!</a>

</form>
</body>

</html>
