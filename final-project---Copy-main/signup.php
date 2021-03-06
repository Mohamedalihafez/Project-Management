<!DOCTYPE html>
<html lang="ar" dir="rtl">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" charset="utf-8">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" ></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
    <meta charset="utf-8">
    <title>signup</title>
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/style.css">
    <style>
      body{
        --color-primary: 	#00994d;
        --color-primary-dark: #007f67;
        --color-secondary: #252c6a;
        --color-error: #cc3333;
        --color-success: #4bb544;
        --border-radius: 4px;
        background: url(xxx.jpg);
        background-size: cover;
      }
    .containersi {
          width: 500px;
          max-width: 600px;
          margin-bottom:1rem;
            margin-top:3rem;
          margin-right:35rem;
          margin-left:10rem;
          padding: 2rem;
          box-shadow: 0 0 40px rgba(0, 0, 0, 0.2);
          border-radius: var(--border-radius);
          background-color:white;


      }


      .containersi,
      .form__input,
      .form__button {
          font: 500 1rem 'Quicksand', sans-serif;
      }

      .form--hidden {
          display: none;
      }

      .form > *:first-child {
          margin-top: 0;
      }

      .form > *:last-child {
          margin-bottom: 0;
      }

      .form__title {
          margin-bottom: 2rem;
          text-align: center;
      }

      .form__message {
          text-align: center;
          margin-bottom: 1rem;
      }

      .form__message--success {
          color: var(--color-success);
      }

      .form__message--error {
          color: var(--color-error);
      }

      .form__input-group {
          margin-bottom: 1rem;
      }

      .form__input {
          display: block;
          width: 100%;
          padding: 0.75rem;
          box-sizing: border-box;
          border-radius: var(--border-radius);
          border: 1px solid #dddddd;
          outline: none;
          background: #eeeeee;
          transition: background 0.2s, border-color 0.2s;
      }

      .form__input:focus {
          border-color: var(--color-primary);
          background: #ffffff;
      }

      .form__input--error {
          color: var(--color-error);
          border-color: var(--color-error);
      }

      .form__input-error-message {
          margin-top: 0.5rem;
          font-size: 0.85rem;
          color: var(--color-error);
      }

      .form__button {
          width: 100%;
          padding: 1rem 2rem;
          font-weight: bold;
          font-size: 1.1rem;
          color: #ffffff;
          border: none;
          border-radius: var(--border-radius);
          outline: none;
          cursor: pointer;
          background: var(--color-primary);
      }

      .form__button:hover {
          background: var(--color-primary-dark);
      }

      .form__button:active {
          transform: scale(0.98);
      }

      .form__text {
          text-align: center;
      }

      .form__link {
          color: var(--color-secondary);
          text-decoration: none;
          cursor: pointer;
      }

      .form__link:hover {
          text-decoration: underline;
      }
</style>

  </head>

<script>
  var x  =  document.myform.name.value;
  var isArabic =  "/[\u0600-\u06FF\u0750-\u077F]/";
function formValidation ( ){
    flag = true;
if(x != isArabic){
    alert("???????? ?????????? ???????????? ??????????????");
 flag=false;
}

/*
var uid = document.myform.idnum;
if (uid.length != 14 || !isNumber(uid)) {
  alert("???????? ?????????? ???????????? ????????????");
           flag = false;
}*/
if (!/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)* (\.\w{2,3})+$/.test(myForm.email.value))  //Regular expressions to validate email

{

 alert("???????? ?????????? ???????? ????????!");

 flag = false;


}

}
function isNumber(n) {
        return !isNaN(parseFloat(n)) && isFinite(n);
    }




</script>


<body>

    <div class="top py-1" lang="ar" dir="rtl">
      <div class="container">
        <div class="row">
          <div class="col d-flex align-items-center">
            <p class="mb-0"><a href="#">mohp.gov.egy@gmail.com</a> </p>
          </div>
          <div class="col-4 d-flex justify-content-end">
            <div class="social-media">
              <p class="mb-0 d-flex">
                <a href="https://www.facebook.com/egypt.mohp" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
                <a href="https://twitter.com/mohpegypt?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
                <a href="https://www.instagram.com/mohpegypt/" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
                
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>





    <div class="wrap" lang="ar" dir="rtl">

      <div class="container">

        <div class="row ">
          <div class="navbar-brand ml-md-2">
          <a >
          <img src="logo3.jpg" class="eagle " alt="brand-logo" style="width:159px ; height:65px ; margin-right:0px"/>
          </a></div>
          <div class="col-md-3 mb-md-0 mb-4 d-flex align-items-center">

            <a class="navbar-brand" href="index1.html"> ?????????? ??????????  ?? ??????????????  </a>
          </div>
          <div class="col-md-7">
            <div class="row">
              <div class="col-md-8 mb-md-0 mb-3">
                <div class="top-wrap d-flex">
                  <div class="text" ><span>??????????????</span><span> Magles Al Shaeb, El-Sayeda Zainab, Cairo Governorate, Egypt </span></div>
                  <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-location-arrow"></span></div>

                </div>
              </div>
              <div class="col">
                <div class="top-wrap d-flex">
                  <div class="text"><span> ???????? ????????</span><span> 27941506 02</span></div>
                  <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-phone"></span></div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar" lang="ar" dir="rtl">

      <div class="container" style=" margin-right: 0px" >




        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="fa fa-bars"></span> ??????????????
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active"><a href="home.html" class="nav-link">??????????????</a></li>
            <li class="nav-item"><a href="about.html" class="nav-link" >????????????</a></li>
            <li class="nav-item"><a href="medicine.html" class="nav-link">?????????? ?? ????????????</a></li>
            <li class="nav-item"><a href="consult.html" class="nav-link">?????????????? ??????????</a></li>
            <li class="nav-item"><a href="19.html" class="nav-link">?????????? 19</a></li>
              <li class="nav-item"><a href="tt3emat.html" class="nav-link">?????????????? </a></li>
            


          </ul>
        </div>
        <div class="order-lg-last">
          <a href="login.php" class="btn btn-primary" style="margin-right: 100px">

          ?????????? ????????????</a>
        </div>
      </div>
    </nav>
    <div id="error">

    </div>
<div class="containersi">


    <form class="form" id="createAccount" name="myform" onsubmit="return formValidation();" method="post" >
                <h1 class="form__title">?????????? ????????</h1>

              <div class="form__input-group">

                    <input type="text" name="name" class="form__input" autofocus placeholder="?????????? ??????????????" required>

                </div>
                <div class="form__input-group">
                    <input type="text" class="form__input" name="idnum" autofocus placeholder="?????? ?????????????? ??????????????" required>

                </div>
                <div class="form__input-group">
                    <input type="text" class="form__input" name="age" autofocus placeholder="????????" required>

                </div>
                <div class="form__input-group">

                    <li><select name="city" id="city" type="text" class="form__input" autofocus placeholder="??????????????" required>

                    <option value="??????????????">??????????????</option>
                    <option value="????????????">????????????</option>
                    <option value="????????????????????">????????????????????</option>
                    <option value="??????????">?????? ??????????</option>
                    <option value="??????????????????">?????? ????????????</option>
                    <option value="??????????">??????????</option>
                    <option value="????????????">????????????</option>
                    <option value="??????????">??????????</option>
                    <option value="??????????????">??????????????</option>
                    <option value="?????? ??????????">?????? ??????????</option>
                    <option value="??????????">??????????</option>
                    <option value="????????????">????????????</option>
                    <option value="??????????????">??????????????</option>
                    <option value="??????????">??????????</option>
                    <option value="????????????????">????????????????</option>
                  
                    </select></li>
                </div>
                <div class="form__input-group">
                    <input type="text" class="form__input" name="area" autofocus placeholder="??????????????" required>

                </div>
                <div class="form__input-group">
                    <!--<input type="text" class="form__input" autofocus placeholder="??????????" required>-->
                    <li><select name="gender" type="text" class="form__input" autofocus placeholder="??????????" required>

<option value="??????">??????</option>
<option value="????????">????????</option>
</select></li>
                </div>
                <div class="form__input-group">
                    <input type="text" class="form__input" name="history" autofocus placeholder="?????????????? ????????????" required>
                    <div class="form__input-error-message"></div>
                </div>
                <div class="form__input-group">
                    <input type="text" class="form__input" name="email" autofocus placeholder="?????????? ???????????? ????????????????????" required>
                    <div class="form__input-error-message"></div>
                </div>
                <div class="form__input-group">
                    <input type="text" class="form__input" name="username" autofocus placeholder="?????? ????????????????">
                    <div class="form__input-error-message"></div>
                </div>
                <div class="form__input-group">
                    <input type="password" class="form__input"name="pass" autofocus placeholder="???????? ????????">
                    <div class="form__input-error-message"></div>
                </div>
                <button class="form__button" type="submit" onclick="signup.php">????????????????</button>
                <p class="form__text">
                    <a class="form__link" href="login.php" id="linkLogin">???????????? ???????? ???????? ?? ?????????? ????????????</a>
                </p>
            </form>
            </div>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>

 <?php
 require "db-conn.php";
  $name =  $_POST['name'];
  $id =  $_POST['idnum'];
  $age =  $_POST['age'];
  $city =  $_POST['city'];
  $area =  $_POST['area'];
  $gender =  $_POST['gender'];
  $medical =  $_POST['history'];
  $email =  $_POST['email'];
  $username =  $_POST['username'];
  $password =  $_POST['pass'];
  echo $gender;
  echo $name;
echo $city;
echo $area;

 $sql = "INSERT INTO `person1` (`name`, `id`, `age`, `city`, `area`, `gender`, `medicalhistory`, `email`,`password`) VALUES 
       ('$name','$id','$age','$city','$area','$gender','$medical','$email','$password')";
mysqli_query($conn,$sql);
      
    
    
  ?>
 <footer class="footer ftco-section ftco-no-pt">
<div class="container">
   <div class="row mb-5">
   <div class="col-md-6 col-lg">
    <div class="ftco-footer-widget py-4 py-md-5">
    <h2 class="logo"><a href="#">?????????? ?????????? ?? ????????????</a></h2>
   <b>  <p style="font-size:16px ">?????????? ?????????????? ?????????? ???? ???????? ???????????????? ?????????? :</p></b>

<div id="social1">
  <ul class="list-unstyled " style="list-style-type:none ; display: inline-flex; margin: 10px; padding: 1px;">
  <li style="margin-left:15px"><a href="https://www.facebook.com/egypt.mohp" class="fa fa-facebook" ></a></li>
  <li style="margin-left:15px"><a href="https://twitter.com/mohpegypt?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor" class="fa fa-twitter"></a></li>
  <li style="margin-left:15px"> <a href="#" class="fa fa-instagram"></a></li>
  </ul>
</div>


</div>
</div>
<div class="col-md-6 col-lg">
<div class="ftco-footer-widget ml-md-5 py-5">
<h2 class="ftco-heading-2">??????????????</h2>
  <ul class="list-unstyled" style="margin-left:10px ; padding:0px">
 <li style="margin-right:5px "><a href="#" class="py-1 d-block"><span class="fa fa-check mr-3 " >????????????  </span></a></li>
<li style="margin-right:5px "><a href="#" class="py-1 d-block"><span class="fa fa-check mr-3"> ?????????? ?? ????????????</span></a></li>
<li style="margin-right:5px "><a href="#" class="py-1 d-block"><span class="fa fa-check mr-3"> ?????????????? ??????????</span></a></li>
<li style="margin-right:5px "><a href="#" class="py-1 d-block"><span class="fa fa-check mr-3">?????????? 19</span></a></li>
<li style="margin-right:5px "><a href="#" class="py-1 d-block"><span class="fa fa-check mr-3">??????????????????</span></a></li>
<li style="margin-right:5px "><a href="#" class="py-1 d-block"><span class="fa fa-check mr-3"> ?????????????? ??????????</span></a></li>
    </ul>
     </div>
         </div>

<div class="col-md-6 col-lg">
  <div class="ftco-footer-widget bg-primary p-4 py-5">
       <h2 class="ftco-heading-2">?????????? ??????????</h2>
        <div class="opening-hours">
        <h4>???????? ??????????:</h4>
          <p class="pl-3">
          	<span> ?????????? - ????????????: 8?? ?? 12??</span>
          	<span>????????????: 10?? ?? 10??</span>
            </p>
            <h4>????????????????:</h4>
            	<p class="pl-3">
        	<span>???????????????? ?????????????? ??????</span>

	</p>
 </div>
 </div>
</div>
</div>
<div class="row">
   <div class="col-md-12 text-center">
       <p> <i class="fa fa-heart"></i>This template is made with</p>

</div>
  </div>
      </div>
      </footer>
  </body>
</html>
