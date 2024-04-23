<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <h1>Random number guesser</h1>
    <p>Insert a number from 1-6 below</p>
    <form method="post" action="calculations.php" target="output">
      Insert Number: <input type="number" name="userInp" min="1" max="6" required>
      <br>
      <button type="submit">Submit</button>
      <br>
      <br>
      <iframe name="output" style="width:500px;height:150px;border:2px solid black;"></iframe>
</html>