<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" stylesheet href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
</head>
<body>
<div class="wat">
        <a href=" https://wa.me/918838612520" target="_blank"><img src="one.png" class="homes" alt=""></a>
    </div>
<div class="go">
    </div>
    <div class="cre">
        <div class="maihe">
            <img src="aa.PNG" alt="">
            <div class="ct">
                <p>
                <h3>Dawath Caterers</h3>
                </p>
                <div class="fq">"Where Quality And Taste Are Known Best"</div>
            </div>
        </div>
        <div class="barn">
            <a href="http://localhost/Dawathcaterer/">
                <div class="home1 kon">Home</div>
            </a>
            <a href="http://localhost/Dawathcaterer/views.php">
                <div class="home1 kon">Views of Variety</div>
            </a>

            <a href="http://localhost/Dawathcaterer/menu.php">
                <div class="home1 kon">Menu</div>
            </a>

            <a href="http://localhost/Dawathcaterer/about.php">
                <div class="home1 kon">About Us</div>
            </a>

            <a href="http://localhost/Dawathcaterer/contact.php">
                <div class="home1 kon">Contact Us</div>
            </a>

            <a href="http://localhost/Dawathcaterer/index1.php">
                <div class="home2 kon"><img src="sw.png" alt=""></div>
            </a>
            <!-- <select name="All" id="all">
            <option value="All">All</option>
        </select>!-->
            <!-- <div class="ser">
        <input placeholder="  Search Zaitoons.com" class="Search">
        <i class="fas fa-search"></i>
        </div>  -->

            <!-- <div class="home1"><img src="cart.svg" class="home"><h6>Cart</h6></div>
        <a href="http://127.0.0.1:5502/index2.html">
        <div class="home1" id="was"><img src="acc.svg" class="home"><h6>Sign in</h6>
        </div></a> -->
            <!-- <div class="sig">
            Sign in
        </div> -->

        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>


    <div class="green"></div>
    <div class="ora"></div>
    <div class="red"></div>
    <br>
    <div class="s">
        <p>Dawath Caterers</p>
    </div>
    <br>
    <div class="d">
        <marquee>
            <div class="l">Dawath Caterers is One of The Leaders in Catering Services. We have earned Valueble goodwill
                and our clints confidence over the past 2-Years.We had Opportunity and honor of Undertaking Marriage
                arrangements of Catering.</div>
        </marquee>
    </div>
    <br>
    <div class="te">
        <p>Contact To Dawath Caterers</p>
        <div class="la"></div>
    </div>
    <br>
    <div class="mat">
        <p>
            Where Quality Unique And Taste Are Known Best!

            The DAWATH CATERERS group is in the field of Indoor and outdoor catering since 2018.It is a one stop food
            solution point of yours in any celebration or party needs.

            We accept orders for marriages, birthday party, thread ceremony, corporate party, government function, and
            etc. We judge the requirement of our customers and accordingly deliver our commitment and hence bring a
            smile to their face.

            We are best known among people for our four but major and important reasons i.e.; Quality, Punctuality,
            Hygiene & Quantity. We also offer best affordable price to our esteemed customer.

            Our dedicated and experienced chef team delivers our customers the best quality food demanded by them.
        </p>

    </div>
    <br>
    <div class="mall">
            <br>
            <br>
            <div class="tet">
                <br>
        <p class="te">Our Address</p>
        <div class="la"></div>
    
    <br>
    <p>Dawath Caterers</p>

           <br>
                <p>257/40 P.C Street Periapet Vaniyambadi</p>
        <br>    
           
                <p>Phone No : 9597933598,8838612520</p>
                <br>
                <div class="dd">
        Get in Touch with Contact information
       </div>
            
       </div>  
       <br>  
        <form method="post" action="">
            <table border="0" cellpadding="5" cellspacing="5" class="design jk">
            <tr><td colspan="2" align="center" class="msg">
                <!-- <?PHP
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "online";
            
            $conn = new mysqli($servername, $username, $password, $dbname);
            
            if(isset($_POST['register']))
            {
                $roll=$_POST['roll'];
                $sem=$_POST['sem'];
                $email=$_POST['email'];
                $nam=$_POST['nam'];
                $dobb=$_POST['dob'];
                $d=$_POST['dd'];
            
                if($roll==NULL || $sem==NULL || $email==NULL || $nam==NULL || $dobb==NULL || $d==NULL)
                {
                    //
                }
                else
                {
                    $sql=mysqli_query($conn,"INSERT INTO `stud`(`Name`, `Regno`, `Semester`, `Email`,`Dateb`,`Degree`) VALUES ('$nam','$roll','$sem','$email','$dobb','$d')");
                    if($sql)
                    {
                        echo "Successfully Registered!";
                    }
                    else
                    {
                        echo "Email Already Exists!";
                    }
            }
            }
            // if ($conn->connect_error) {
            //     die("Connection failed: " . $conn->connect_error);
            // }
            
            // $name=$_POST['nam'];
            // $roll=$_POST['roll'];
            // $sems=$_POST['sem'];
            // $email=$_POST['email'];
            
            // $sql= "INSERT INTO stud (nam,roll,sems,email) VALUES ('$name','$roll','$sems','$email')";
            
            // $result=mysqli_query($conn,$sql);
            
            // if($result)
            // {
            //     $sms="Sucessfully Registered";
            // }
            // else
            // {
            //     $sms="Email is Already Exists";
            // }
            ?></td></tr> -->
            <tr><td class="labels">NAME :</td><td><input type="text" required="required" name="nam" class="fields" size="25" placeholder="Enter Name" /></td></tr>
            <tr><td class="labels">EMAIL ID :</td><td><input type="email" required="required" name="email" class="fields" size="25" placeholder="Enter Email Id" /></td></tr>
            <tr><td class="labels">Password :</td><td><input type="password" required="required" name="dob" class="fields" size="25" placeholder="Enter Password" /></td></tr>
            <tr><td class="labelsc">Phone No :</td><td><input type="number" required="required" name="dob" class="fields" size="25" placeholder="Enter Phone NO" /></td></tr>
            <tr><td class="labelsc">Address :</td><td><textarea required="required" name="dd" class="fields" size="25" placeholder="Enter Adress"></textarea></td></tr>
            <tr><td colspan="2" align="center"><input type="submit" value="Contact" name="register" class="fields fg" /></td></tr>
            </table>
            </form> 
         <br>
         <br>
         <div class="teta">
                <br>
        <p class="te">Our Site</p>
        <div class="la"></div>
    
    <br>
    <p class="s">Dawath Caterers</p>

           <br>
                <p>Email :dawathcaterers959@gmail.com</p>
        <br>    
                <div class="dds">
            Follow in The Below Platforms
       </div>
       <div class="lnk">
            <a href="https://www.facebook.com/profile.php?id=61556770794660&mibextid=ZbWKwL"><img src="wq.png" class="abs ia" style="width:60px;" alt=""></a>
            <a href="twiter.com"><img src="three.png" class="abs" alt=""></a>
            <a href="instagram.com"><img src="four.png" class="abs" alt=""></a>
            </div>
       </div>
         
       <br>  
            </div>
        </div>
        
    </div>
    </div>
    <br>
    <br>
    <div class="map">
        <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3892.517892465659!2d78.60543737380513!3d12.679584421215834!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bada9a0844654af%3A0xe6cb4caa43604c8d!2sDawath%20Caterers!5e0!3m2!1sen!2sin!4v1718049396462!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></p>
    </div>
    <br>
    <div class="fotbar">
        <div class="a">Dawath Caterers in Publicity with 5 Ratings.</div>
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
        </div>
    </div>
    <br>
    <div class="tol">
    <div class="footr">
        <div class="mb">
        <br>
            <h3>
                Dawath Caterers
            </h3>
            <br>
            <p>"Where Quality And Taste Are Known Best"</p>
            <br>
        </div>
        <br>
        <br>
        <div class="footer-bottom">
        <br>
            <p>&copy; 2024 Dawath Caterers. All rights reserved.</p>
            <br>
            <div class="mail">
        <p>Email :dawathcaterers959@gmail.com</p>
        <br>
            </div>
        </div>
        <div class="cell">
        <br>
            <p><a href="https://wa.me/919597933598"><img src="one.png" class="ab" alt="">+91-9597933598</a></p>
            <p><a href="https://wa.me/8838612520"><img src="two.png" class="ab" alt="">+91-8838612520</a></p>
            </div>
    </div>
    </div>
    <button id="back-to-top" onclick="topFunction()" title="Go to top" style="bottom: 20%;">&#8679;</button>
<script src="script.js"></script>

</body>
</html>