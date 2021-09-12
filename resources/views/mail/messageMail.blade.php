<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Message by {{ $contact['name'] }}</title>
</head>
<style>
    * {
        font-family: 'Montserrat',sans-serif;
    }
    h1 {
        color: #00b0ff;
        margin-bottom: 20px;
    }
    ul {
        list-style-type: none;
        border: 2px solid #00b0ff;
        padding: 20px;
    }
    ul li i {
        color: #00b0ff;
    }
</style>
<body>
    <h1>Informazioni ricevute da {{ $contact['name'] }}:</h1>
    <ul>
        <li><i>Nome:</i> {{ $contact['name'] }}</li>
        <li><i>Email:</i> {{ $contact['email'] }}</li>
        <li><i>Telefono:</i> {{ $contact['phone'] }}</li>
        <li><i>Luogo di nascita:</i> {{ $contact['birthplace'] }}</li>
        <li><i>Giorno di nascita:</i> {{ $contact['birthday'] }}</li>
        <li><i>Azienda:</i> {{ $contact['company'] }}</li>
        <li><i>Messaggio:</i> {{ $contact['message'] }}</li>
    </ul>
</body>
</html>
