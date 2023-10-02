<?php
include("header.php");
?>
<!DOCTYPE html>
<html lang="en">
<body>
   <section id="Logo">
    <img class="boat" src="sailboat.jpg" alt="">
    <a class="learn" href="">learn w3.css</a>
   </section>
   <section>
    <h1 class="team">
        Our Team
    </h1>
    <p class="pragraf">
        Meet the team - our office rats:
    </p>
        <div class="division">
            <div class="flex">
                <img class="avatar" src="avatar.jpg" alt="">
                <h3 class="joon">
                    Johnny Walker
                </h3>
                <p>
                    Web Designer
                </p>
            </div>
            <div class="flex">
                <img class="avatar" src="avatar.jpg" alt="">
                <h3 class="joon">
                    Johnny Walker
                </h3>
                <p>
                    Web Designer
                </p>
            </div>
            <div class="flex">
                <img class="avatar" src="avatar.jpg" alt="">
                <h3 class="joon">
                    Johnny Walker
                </h3>
                <p>
                    Web Designer
                </p>
            </div>
            <div class="flex">
                <img class="avatar" src="avatar.jpg" alt="">
                <h3 class="joon">
                    Johnny Walker
                </h3>
                <p>
                    Web Designer
                </p>
            </div>
        </div>
   </section>
   <section class="gray">
    <div class="ourwork">
        <h1>
            Our Work
        </h1>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
            aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
            aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
            occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
    </div>
    <div class="white">
     <img class="snow"  src="snow.jpg" alt="">
     <h3>
        Customer 1
     </h3>
     <p>
        Trade
        <br>
        Blablabla
        <br>
        Blablabla
        <br>
        Blablabla
        <br>
        Blablabla
     </p>
    </div>
        <div class="white">
            <img class="snow" src="snow.jpg" alt="">
            <h3>
                Customer 1
            </h3>
            <p>
                Trade
                <br>
                Blablabla
                <br>
                Blablabla
                <br>
                Blablabla
                <br>
                Blablabla
            </p>
        </div>
            <div class="white">
                <img class="snow"  src="snow.jpg" alt="">
                <h3>
                    Customer 1
                </h3>
                <p>
                    Trade
                    <br>
                    Blablabla
                    <br>
                    Blablabla
                    <br>
                    Blablabla
                    <br>
                    Blablabla
                </p>
            </div>

   </section>
   <section class="pricing">
    <h3>
        PRICING
    </h3>
    <p>
        Choose a pricing plan that fits your needs.
    </p>
    <div class="parentofall">
        <div class="basic">
          <h4>
            Basic
          </h4>
          <p>
            <b>10GB</b> Storage
          </p>
          <p>
            <b>10</b> Emails
          </p>
          <p>
            <b>10GB</b> Storage
          </p>
          <p>
            <b>10</b> Emails
          </p>
          <div >
            <a class="sign"  href="">sign up</a>
          </div>
        </div>
        <div class="basic">
                <h4>
                    Basic
                </h4>
                <p>
                    <b>10GB</b> Storage
                </p>
                <p>
                    <b>10</b> Emails
                </p>
                <p>
                    <b>10GB</b> Storage
                </p>
                <p>
                    <b>10</b> Emails
                </p>
                <div>
                    <a class="sign" href="">sign up</a>
                </div>
        </div>
        <div class="basic">
                            <h4>
                                Basic
                            </h4>
                            <p>
                                <b>10GB</b> Storage
                            </p>
                            <p>
                                <b>10</b> Emails
                            </p>
                            <p>
                                <b>10GB</b> Storage
                            </p>
                            <p>
                                <b>10</b> Emails
                            </p>
                            <div>
                                <a class="sign" href="">sign up</a>
                            </div>
        </div>
    </div>

   </section>
   <section id="con" class="form">
 <div class="contact-us">
       <h3>
           Contact Us
       </h3>
       <p>
           Address
       </p>
       <p>
       Swing by for a cup of coffee, or whatever.
       </p>
       <p>
       <i class="fa-solid fa-location-dot"></i>  Chicago, US
       </p>
       <p>
       <i class="fa-solid fa-phone"></i> +00 1515151515
       </p>
       <p>
       <i class="fa-regular fa-envelope"></i>  test@test.com
       </p>
 </div>
<form class="real-form">

    <label for="pass">Password here : </label>
    <input id="pass" type="password">
    <br>
    <br>
    <br>


    <label for="em">E-mail here : </label>
    <input id="em" type="email">
    <br>
    <br>
    <br>
    <label for="em">Message : </label>
    <input id="em" type="text">
    <br>
    <br>
    <br>
    <input class="checkbox" type="checkbox">
    <label class="checklabel" for="checkbox">I like it</label>
    <button>
        send
    </button>
    
</form>
   </section>
   <img class="map" src="lights.jpg" alt="">
</body>
</html>
<?php
include("foot.php");
?>