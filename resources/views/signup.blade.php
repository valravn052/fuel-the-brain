<!DOCTYPE html>
<html>
  <head>
    <title>Sign Up Form</title>
  <style>
          /* Style the container */
    .container {
      width: 500px;
      margin: 0 auto;
    }

    /* Style the form */
    form {
      border: 3px solid #f1f1f1;
      background-color: #fff;
      padding: 20px;
    }

    /* Style the input fields */
    input[type=text], input[type=password] {
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      box-sizing: border-box;
    }

    /* Style the submit button */
    button[type=submit] {
      background-color: #4CAF50;
      color: white;
      padding: 14px 20px;
      margin: 8px 0;
      border: none;
      cursor: pointer;
      width: 100%;
    }

    /* Center the sign up button */
    .signupbtn {
      width: auto;
      padding: 10px 18px;
      background-color: #4CAF50;
      margin: 10px 5px;
      border: none;
      cursor: pointer;
      border-radius: 5px;
      color: white;
      font-size: 18px;
      font-weight: bold;
    }

    /* Add a hover effect for buttons */
    button:hover {
      opacity: 0.8;
    }

  </style>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
    <div class="container">
      <form>
        <h1>Sign Up</h1>
        <label for="fullname"><b>Full Name</b></label>
        <input type="text" placeholder="Enter Full Name" name="fullname" required>

        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="Enter Email" name="email" required>

        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="psw" required>

        <label for="psw-repeat"><b>Repeat Password</b></label>
        <input type="password" placeholder="Repeat Password" name="psw-repeat" required>

        <button type="submit" class="signupbtn">Sign Up</button>
      </form>
    </div>
  </body>
</html>
