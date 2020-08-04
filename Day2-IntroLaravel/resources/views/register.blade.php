<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SanberCode-Intro Laravel</title>
</head>
<body>
    <h1>Buat Account Baru!</h1>
    <h3>Sign Up Form</h3>
    <form action="/welcome" method="post">
        @csrf
        <p>First name:</p>
        <input type="text" name="first-name">
        <p>Last name:</p>
        <input type="text" name="last-name">
        <p>Gender</p>
        <input type="radio" name="gender" value="Male">Male <br>
        <input type="radio" name="gender" value="Female">Female <br>
        <input type="radio" name="gender" value="Other">Other <br>
        <p>Nationality:</p>
        <select name="nationality">
            <option value="Indonesian">Indonesian</option>
            <option value="Singaporean">Singaporean</option>
            <option value="Malaysian">Malaysian</option>
            <option value="Autralian">Australian</option>
        </select>
        <p>Language Spoken:</p>
        <input type="checkbox" name="language" value="Bahasa Indonesia">Bahasa Indonesia <br>
        <input type="checkbox" name="language" value="English">English <br>
        <input type="checkbox" name="language" value="Other">Other <br>
        <p>Bio:</p>
        <textarea name="bio" cols="30" rows="10"></textarea>
        <br>
        <input type="submit" value="Sign Up">
    </form>
</body>
</html>