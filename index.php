<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>opdracht5bap</title>
</head>
<body>
<form method="post" action="sendmail.php">
    <label>
        Afzender:
        <input type="email" name="from"/>
        <br>
    </label>
    <label>
        Onderwerp:
        <input type="text" name="subject"/>
    </label>
    <br>
    <label>
        Bericht:
        <textarea cols="100" rows="10" name="message">
        </textarea>
    </label>
    <br>
    <input type="submit" name="submit" value="VERSTUUR!"/>
</form>
</body>
</html>