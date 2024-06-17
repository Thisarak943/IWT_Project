<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="style/feedback.css">

</head>

<body>
  <div class="wrapper">
    <form action="feedback_connect.php" method="POST">
      <div class="pageTitle title">FEEDBACK </div>
      <div class="secondaryTitle title">Please fill this form to feedback.</div>
      <input type="text" class="name formEntry" placeholder="Name" name="username"/>
      <input type="text" class="email formEntry" placeholder="Email" name="email"/>
      <input type="text" class="message formEntry" placeholder="Message" name="message"></textarea>
      
      
      <input type="submit" class="submit formEntry" value="Submit">
    </form>
  </div>
  <script src="app.js"></script>
</body>

</html>

