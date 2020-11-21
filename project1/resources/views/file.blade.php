<!DOCTYPE html>
<html lang="en">

<head>
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
        crossorigin="anonymous"></script>
    <style>
        head {
            padding: 0px;
            margin: 0px;

        }

        .img {
            padding-left: 100px;
        }

        .tab {

            padding-left: 500px;
            color: white;
            font-size: 13px;
            font-weight: normal;
            outline-color: rgb(77, 144, 254);

        }

        .mid {
            padding-left: 100px;
            font-size: 10px;
            padding-top: 30px;
            padding-right: 0px;
        }

        h1 {
            font-size: 25px;
            padding-right: 0px;
        }

        .midl {
            padding-left: 150px;
            padding-top: 20px;
            margin: 0px;
            color: black;
        }

        .Reg {
            background-color: white;
            border: 1px solid rgb(189, 199, 216);
            font-family: Helvetica, Arial, sans-serif;
            font-size: 18px;
            font-weight: 400;
            outline-color: rgb(77, 144, 254);
            padding: 8px 10px;
            margin: 6px;


        }




        select {
            background-color: rgb(221, 221, 221);
            border: 1px solid rgb(189, 199, 216);
            font-family: Helvetica, Arial, sans-serif;
            font-size: 13px;
            font-weight: 400;
            height: 30px;
            padding: 5px;
            width: 70px;
            margin: 0;
        }

        #bday {
            padding-top: 2px;
            font-size: 10px;
            font-family: Helvetica, Arial, sans-serif;
            text-decoration-color: rgb(54, 88, 153);
            width: 140px;
            display: inline-block;
            text-decoration: none;

        }

        .gender {
            color: rgb(29, 33, 41);
            font-family: Helvetica, Arial, sans-serif;
            font-size: 18px;
            font-weight: 400;
            padding-left: 3px;
            padding-right: 10px;
            margin-top: 30px;
        }

        .term {
            color: rgb(119, 119, 119);
            font-size: 11px;
            display: block;
            width: 300px;

        }
        .mob{
            
          background-color:rgb(189, 199, 216); ;
            border: 1px solid rgb(189, 199, 216);
            font-family: Helvetica, Arial, sans-serif;
           
            outline-color: rgb(77, 144, 254);

            text-align-last: center;
        }
        .np{
            
            background-color: rgb(54, 88, 153);
        }
       .mm{
        font-family: Helvetica, Arial, sans-serif;
            text-decoration-color: rgb(54, 88, 153);
            font-size: large;
            margin: 5px;
       }
 #btnl{
     background-color: green;
     width: 200px;
     color: white;
 }
       
    </style>
    <script>
        function log(){
                var emails = document.getElementById("email").value;
                var word =document.getElementById("pass").value;
                var e_msg=document.getElementById("email_msg");
                var p_msg= document.getElementById("pass_msg");
                formvalid=true;
                if(emails==''){
                    e_msg.style.visibility='visible';
                    formvalid=false;
                }
                else{
                    e_msg.style.visibility='hidden';
                    
                }
                if(word==''){
                    p_msg.style.visibility='visible';
                    formvalid=false;
                }
                else{
                    p_msg.style.visibility='hidden';
                    
                }
                if(formvalid==false){
                    return false;
                }
        }
        function f(){
            var firstname=document.getElementById("fname").value;
            var fmsg=document.getElementById("f_msg");

            var lastname=document.getElementById("lname").value;
            var lmsg=document.getElementById("l_msg");

            var email=document.getElementById("email");
            var emsg=document.getElementById("e_msg");

            var pass=document.getElementById("pa");
            var pmsg=document.getElementById("pa_msg");

            var gender=document.getElementsByName("ge");
            var gmsg=document.getElementById("ge_msg");
            formstatus=true;
            
            if(firstname ==''){
                    fmsg.style.visibility ='visible';
                    formstatus=false;
            }
            else{
                fmsg.style.visibility='hidden';
            }
            if(lastname ==''){
                lmsg.style.visibility='visible';
                formstatus=false;
            }
            else{
                lmsg.style.visibility='hidden';
            }
            if(email.value ==''){
                emsg.style.visibility='visible';
                formstatus=false;
            }
            else{
                emsg.style.visibility='hidden';
            }
            if(pass.value ==''){
                pmsg.style.visibility='visible';
                formstatus=false;
            }
            else{
                pmsg.style.visibility='hidden';
            }
            if(gender[0].checked==false && gender[1].checked==false){
                gmsg.style.visibility='visible';
                formstatus=false;
            }
            else{
                gmsg.style.visibility='hidden';
                
            }
            if(formstatus==false){

                return false;
            }

        }
    </script>
</head>

<body>
    <div class="container-fluid">
    <div class="d-none d-sm-block">
        <div class="row" style="background-color: #3b5998;">
            <div class="col-md-3">
                <img src="logo.png" class="img">
            </div>
            <div class="col-md-9">
                <div class="tab">
                    <table>
                        <tr>
                            <th>Email or Phone </th>
                            <th>Password</th>
                        </tr>
                        <tr>
                            <td><input type="email" id="email"> <br><span  style="color: red; font-size: small; visibility: hidden;" id="email_msg" > Enter your Email</span></td>
                            <td><input type="password" id="pass"><br><span  style="color: red; font-size: small; visibility: hidden;" id="pass_msg" > Enter your password</span></td>
                            <td><button type="submit"
                                    onclick=" return log()" style="background-color: #4267b2; color: white; border: 1px solid darkblue; font-weight: bold;">Log
                                    in</button></td>

                        </tr>
                        <tr>
                            <td></td>
                            <td><small style="color:rgb(223, 233, 231);"> Forgotten Account? </small></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>


        <div class="row">

            <div class="col-md-6">
                <div class="mid">
                    <h1>Facebook helps you connect and share with the people in your life.</h1>
                    <img src="connect.png" height="250px">
                </div>
            </div>
            <div class="col-md-6">
                <div class="midl">
                    <h2 style="font-weight: bold; font-size:xx-large; color: rgba(0, 0, 0, 0.726);">Create an account
                    </h2>
                    <p style="font-size: larger; font-weight: 500;">it's free and always will be.</p>
                    <form action="" method="POST">
                        <input class="Reg" type="text" placeholder="First name" id="fname">
                        <span  style="color: red; font-size: small; visibility: hidden;" id="f_msg" > Ente your First Name</span>
                        <input class="Reg" type="text" placeholder="Sure name" id="lname">
                        
                       
                        <span  style="color: red; font-size: small; visibility: hidden;" id="l_msg" > Ente your Last Name</span>
                        <br>
                        <input class="Reg" type="text" placeholder="Moble Number or email address"
                            style="width: 365px;" id="email">
                            <span  style="color: red; font-size: smaller; visibility: hidden;" id="e_msg" > Ente your Email ID</span>

                    
                        <input class="Reg" type="text" placeholder="New Password" style="width: 365px;" id="pa">
                        
                        <span  style="color: red; font-size: small; visibility: hidden;" id="pa_msg" >Ente your Password</span>
                        <br>
                        <br>
                        <span style=" font-size:19px; font-family:Helvetica, Arial, sans-serif" ;>Birthday</span>
                        <br>
                        <select name="" id="">
                            <option value="">Day</option>
                            <option value="">2</option>
                            <option value="">3</option>
                        </select>
                        <select name="" id="">
                            <option value="">Month</option>
                            <option value="">Feb</option>
                            <option value="">Mar</option>
                        </select>
                        <select name="" id="">
                            <option value="">Year</option>
                            <option value="">1996</option>
                            <option value="">1997</option>
                        </select>
                        <a href="" id="bday">why i need to provide my birthday?</a>
                        <br>

                        <input type="radio" name="ge" ><label class="gender">Male</label> <input type="radio" name="ge"> <label
                            class="gender">Female</label><span  style="color: red; font-size: small; visibility: hidden;" id="ge_msg" > Select Gender</span>
                            <br>
                        <p class="term">Create an account or log into <span><a href="">Facebook</a></span>. Connect with
                            friends, family and other people you know. Share photos and videos, send messages and get
                            updates.</p>
                    </form>
                    <div>
                        <input type="button" id="btnl" onclick=" return f()" value="Sign Up">
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<div class=" d-md-none">
    <div class="d-block d-sm-none ">
        <div class="row">
            <div class="col-12 np" >
                <img src="logo.png" class="" height="30px" style="padding-left: 20px;">
            </div>
        

            </div>
            
        </div>
        <div class="row">
                <div class="col-12 mm">
                    <label for="">Email or Mobile Number</label>
                    <input type="text" style="width: 377px;" class="Reg"><br>
                    <label for="">Password</label>
                    <br>
                    <input type="password" style="width: 377px;" class="Reg">
                    <br>
                 <button type="submit" style="margin-left: 30px; background-color:rgb(54, 88, 153); width: 330px; color: white;">Login</button>
                    
                </div>
        </div>

     
         
    </div>

</div>


    


</body>

</html>