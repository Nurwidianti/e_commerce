<?php 
include ('header.php');
 ?>
<style>
.kotak1
    {
      height:800px;
      width:1380px;
      padding: 100px;
      border: 0px solid #F0F8FF;
      background-color:rgb(255, 99, 71);
      margin: 0% 0% 0% -0.8% ;
      align-content: center;
      align-items: center;
    } 
  .login
    {
      height:350px;
      width:400px;
      padding: 100px;
      border: 7px solid #F0F8FF;
      background-color:rgb(101, 99, 82);
      margin: 2% 0% 0% 23% ;
      border-radius: 20px;
      margin-right: 85px; 
    }
  .input1{
    align-content: center;
    width: 200px;
  }
  .input2{
    align-content: center;
    width: 200px;
  }
.tombol_login {
  width: 100px;
  height: 30px;
  text-align: center;
  background-color: #0288D1;
  color: white;
  font-size: 17px;
  border: 2px solid #0288D1;
  border-radius: 8px;
  margin-top: 20px;
  margin-left: 42px;
} 
</style>
<body >

  <div class="kotak1" >
    <font  color="rgb(101, 99, 82)" size="70">
      <h3><center>Silahkan Login untuk mulai berbelanja</center></h3>
    </font>
    <center><div class="login">
    <form>
    <input class="input1" type="email" name="email" placeholder="E-mail" style="margin:10px; border-radius: 2px;"><br><br>
    <input class="input2" type="password" name="pass" placeholder="Password" style="margin:10px;">
	 <input type="submit" name="login" value="login" class="tombol_login"style="margin:8px; border-radius: 2px;">
	 </div></center>
   <p><b><center>belum punya akun?<a href="daftar.php "> <font  color="rgb(101, 99, 82)">daftar</font></a></center></b></p>
</form>
</div>

</div>
</body>
