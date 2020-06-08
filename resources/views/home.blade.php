<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>

<body>
  <fieldset style="width:300px; margin:100px auto">
    <legend>Form Login</legend>
    <form action="/login" method="post">
      {{ csrf_field() }}
      <table>
        <tr>
          <td>Email</td>
          <td>:</td>
          <td><input type="text" name="email" id="email"></td>
        </tr>
        <tr>
          <td>Password</td>
          <td>:</td>
          <td><input type="password" name="password" id="password"></td>
        </tr>
      </table>
      <button type="submit">Login</button>
    </form>
  </fieldset>
</body>

</html>