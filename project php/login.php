<html>
<head>
<style>
    
.login{
  background-color: rgba(0,0,0,.5);
    color: #fff;
  border-radius: 6px;
  box-shadow: 5px 10px 20px 10px rgba(156, 104, 104, 0.2);
  margin: auto;
  width: 410px;
  height:280px;

  }
 body {
  background-image: url('wp3639506.jpg');
  background-size: cover;
  background-position: center;
  background-repeat:no repeat;
  }
/* .container {
  display: flex;
  align-items: center;
  justify-content: center;
  height: 100vh;
}*/

form {
  margin-left: 20px;
}

input {
  border-color: rgb(184, 184, 244);
  background-color: antiquewhite;
  text-size-adjust: auto;
  padding-bottom: 8px;
  width: 200px;
  height: 40px;
  text-align: center;
  padding-top: 5px;
  color: midnightblue;
}

h2 {
  text-align: center;
  color: white;
  font-size: xx-large;
}

label {
  display: block;
  font-size: 30px;
  color: rgb(12, 1, 20);
  margin-left: 10px;
}

h5,
a {
  display: block;
  font-size: 20px;
  color: rgb(12,1,20);
  margin-left: 10px;
}

table,
td {
  padding: 20px;
  margin-top: 10px;
  margin-left: auto;
  margin-right: auto;
  margin-bottom: auto;
  height: 30px;
}
table {
  border: 2px solid rgb(225, 225, 247);
  border-radius: 8px;
  padding: 5px;
  background-color:burlywood;
}

.sub {
  margin-left: 160px;
  color: darkblue;
  font-size: x-large;
  background-color:bisque;
  width: 100px;
}

.sub:focus,
.sub:visited,
.sub:hover {
  background-color:darkgoldenrod;
}

.in:hover,
.in:focus,
.in:visited {
  background-color: plum;
}

</style>
</head>
    <body>
        <div class="container">
         
          <form action="verify.php" method="post">
            <h2>Login</h2>
            <table>

              <tr>
                <td><label>Email Address:</label></td>
                <td><input class="in" type="text" name="em" placeholder="Enter your email" required></td>
              </tr>
              <tr>
                <td><label>Password:</label></td>
                <td><input class="in" type="password" name="pwd" placeholder="Enter your password" required></td>
              </tr>
              <tr>
                <td><input class="sub" type="submit" name="submit" value="Login"></td>
              </tr>
              <tr>
                <td>
                  <h5>Not Registered</h5>
                  <a href="form.php">Register here</a>
                </td>
              </tr>
            </table>
          </form>
        </div>
      </body>
</html>