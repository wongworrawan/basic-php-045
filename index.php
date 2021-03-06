<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic PHP by Wongworrawan Lomwong</title>

    <!-- get cdn css custom -->
    <link rel="stylesheet" href="style.css">

    <!-- get cdn css boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
     <!-- get cdn javascript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="script.js"></script> 
</head>

<body>

    <div id="logreg-forms">
        <form class="form-signin" action = "receive-data.php" method = "post">
            <h1 class="h3 mb-3 font-weight-normal" style="text-align: center"> Sign in</h1>
            
            <input type="email" name ="email"id="user-email" class="form-control" placeholder="Email address" required autofocus="">
                <input type="password"  name ="pwd"id="user-pass" class="form-control" placeholder="Password" required autofocus="" >

                 Choose number
                 <select class="form-select" aria-label="Default select example" name ="time">
                    <option selected>Open this select menu</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                 </select>
            <button class="btn btn-success btn-block" type="submit"><i class="fas fa-sign-in-alt"></i> Sign in</button>
            
        </form>

        
            <br>
            
    </div>
                <p style="text-align:center">
                    <a href="http://bit.ly/2RjWFMfunction toggleResetPswd(e){
                e.preventDefault();
                $('#logreg-forms .form-signin').toggle() // display:block or none
                $('#logreg-forms .form-reset').toggle() // display:block or none
            }

            function toggleSignUp(e){
                e.preventDefault();
                $('#logreg-forms .form-signin').toggle(); // display:block or none
                $('#logreg-forms .form-signup').toggle(); // display:block or none
            }

            $(()=>{
                // Login Register Form
                $('#logreg-forms #forgot_pswd').click(toggleResetPswd);
                $('#logreg-forms #cancel_reset').click(toggleResetPswd);
                $('#logreg-forms #btn-signup').click(toggleSignUp);
                $('#logreg-forms #cancel_signup').click(toggleSignUp);
            })g" target="_blank" style="color:black">By Artin</a>
                </p>

                
                <!-- path file = / ?????????????????????????????????????????? root folder ????????????
                root = ict.su.ac.th/ script.js
                ??????????????????????????????????????? index


                path file = ????????????????????????????????????
                ???????????? scc = "script.js" (??????????????? / ????????????????????????)
                ????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????? -->

    
</body>
</html>