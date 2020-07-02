<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sanbercode Week 1</title>
</head>
<body>
    <h1>Buat Account Baru !</h1>
    <h4>Sign Up Form</h4>
    <form action="{{url('saveform')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <p>First Name :</p>
        <input type="text" name="fn" id="fn">
        <p>Last Name :</p>
        <input type="text" name="ln" id="ln">
        <p>Gender :</p>
        <input type="radio" name="gender" id="" value="0">Male <br>
        <input type="radio" name="gender" id="" value="1">Female <br>
        <input type="radio" name="gender" id="" value="2">Other <br>
        <p>Nationality :</p>
        <select name="nation" id="nation">
            <option value="Indonesian">Indonesian</option>
            <option value="England">England</option>
            <option value="India">India</option>
        </select>
        <p>Language Spoken :</p>
        <input type="checkbox" name="lang" id="" value="Indonesian">Indonesian <br>
        <input type="checkbox" name="lang" id="" value="English">English <br>
        <input type="checkbox" name="lang" id="" value="Other">Other <br>
        <p>Bio</p>
        <textarea name="bio" id="bio" cols="30" rows="10">Text in here...</textarea> <br>
        <input type="submit" value="Sign Up">
    </form>
</body>
</html>