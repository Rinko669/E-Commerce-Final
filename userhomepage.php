<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <link rel="icon" href="suisegs232.png" type="image/x-icon" />
    <link rel="stylesheet" href="style.css" />

    <!-- BOOTSTRAP CSS LINK -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" 
    integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />


    <title>WE OTAKU</title>
  </head>
  <body>
    <header>
      <div class="logo">
        <img src="suisegs232.png" alt="logo" />
        <span>WE OTAKU</span>
      </div>
      <nav>
        <ul>  
          <li><a href="login.html" class="active">Home</a></li>
          <li><a href="#about-us">About</a></li>
          <li><a href="#register">Login <i class="fa-solid fa-user fa-2xs"></i></a></li>
          <li><a href="#More">More</a></li>
        </ul>
      </nav>
    </header>

    <main>
      <div class="banner" id="banner">
        <div class="circle circle1"></div>
        <div class="circle circle2"></div>
        <div class="circle circle3"></div>
        <div class="circle circle4"></div>
        <div class="banner-content">
          <h1>Browse the most <br>
            trusted anime shop of yours</h1>
            <h1 class="japanese-word">最も閲覧する あなたの信頼できるアニメショップ</h1>
          <a href="https://www.youtube.com/watch?v=NyUTYwZe_l4&t=5m11s" class="button">View more</a>
        </div>
        <img src="ryo.jpg" alt="ayaka" class="banner-image">
        <div class="big-circle"></div>
        <div class="small-circle"></div>
      </div> 
       
      <section class="intro-section" id="about-us">
        <h2>About Us</h2>
        <div class="boxes-container">
          <div class="box">
            <img src="./pictures/Bicol_University.png" alt="BU" width="100">
            <h3>Our Story</h3>
            <p>We are bona fide students of Bicol University, taking up Information Technology as our course.<br>
            <br> This WE OTAKU was founded by the following student below as a part for our<br> E-commerce requirement project.</p>
          </div>
          <div class="box">
            <i class="fas fa-bullseye"></i>
            <h3>Our Mission</h3>
            <p>The We Otaku mission is to offers anime fans a one-stop shop for all of their hobbies need,<br>
               delivering a diverse range of product that cater to their individual hobbies,<br>
               taste and preferences, ensuring authenticity and quality for our customers.<br>
               <br>We strive to make shopping simple, convenient and enjoyable for our customers <br>
               our mission is to be the go-to destination for anime fans,<br>
              and we will continue to innovate and adapt to meet their changing needs and desires.  </p>
          </div>
          <div class="box">
            <i class="fas fa-eye"></i>
            <h3>Our Vision</h3>
            <p>The We Otaku goal is to build a growing online marketplace for anime fans<br>
               that offers them a diverse selection of high-quality anime<br>
                merchandise that captures the essence of their favourite’s anime, characters and games<br>
                <br>To achieve our vision, we are committed to promoting the love 
                <br>and appreciation of anime culture through our products and services.  </p>
          </div>
          <div class="box">
            <i class="fas fa-lightbulb"></i>
            <h3>Our Goals</h3>
            <p>
              <strong>1. Increase Product Variety</strong><br>
              We are committed to increasing our product variety every time there’s a new trend or something we can add to our shop to expand our customer reach.<br><br>
              <strong>2. Implement 24-hour Customer Service</strong><br>
              We aim to provide our customers with quick and efficient support. We will explore various methods, such as chatbots, to ensure our customers' inquiries are answered as soon as possible.<br><br>
      
              <strong>3. Launch a Loyalty Card</strong><br>
              Regular customers can enjoy the benefits of having a loyalty card, which includes discounts when buying from our shop.<br>
            </p>
          </div>
        </div>
    
      <h2>Our Team</h2>
      <div class="boxes-container team">
        <div class="box">
          <img src="./pictures/Yukino.webp" alt="Team Member 1" width="200">
          <h3>Ian Chester Bufete </h3>
          <p><strong>CEO, Full-Stack Developer</strong></p>
          <p>• Founder of the We Otaku </p>
          <p>• Responsible for the designing the website  </p>
          <p>•Develop a user-friendly design </p>
          <p>•Responsible for debugging</p>
        </div>
        <div class="box">
          <img src="./pictures/Eru_chitanda_1.webp" alt="Team Member 2" width="200px">
          <h3>Joshua Allen Bonganay</h3>
          <p><strong>Co-founder and CTO</strong></p>
          <p>• Improves user interactions </p>
          <p>• Implementing design  </p>
          <p>• Improves user interactions </p>
          <p>• Responsible for user interactions in the website</p>


        </div>
        <div class="box">
          <img src="./pictures/Mio.jpg" alt="Team Member 3">
          <h3>Renz Domini Dycoco</h3>
          <p><strong>Project Manager</strong></p>
          <p>• Responsible for delivering the project  </p>
          <p>• Leads and manages the project team  </p>
        

        </div>
        <div class="box">
          <img src="./pictures/makima.jpg" alt="Team Member 4">
          <h3>Joseph Bryan Clutario</h3>
          <p><strong>Backend Developer</strong></p>
          <p>• The one who debugs for the errors of the website  </p>
          <p>•Collaborating with the front-end to determine the bugs and upgrade the features  </p>
        </div>
      </div>
    </section>

    <section class="registration-section" id="register">
      <h2>Register Now</h2>
      <p>WE OTAKU: An  E-Commerce where you can buy all your needs to fulfill your hobbies </p>
           <div class ="container d-flex align-items-center justify-content-center">
             <div class="card">
                <!-- card header -->
                 <div class="card-header">
                     <h3 class="text-center">Sign-Up</h3>
                 </div>
                 <!-- card body -->
                 <div class="card-body">
                     <form action="">
                      <!--first field -->
                      <div class="input-group mb-3">
                      <span class="input-group-text"><i class="fa-solid fa-user fa-xs"></i></span>
                      <div class="form-floating">
                      <input type="text" class="form-control" 
                      id="floatingInputGroup1" placeholder="Enter your Username">
                      <label for="floatingInputGroup1">Username</label>
                       </div> 
                       </div>
                      <!--second field -->
                      <div class="input-group mb-3">
                      <span class="input-group-text"><i class="fa-solid fa-key fa-xs"></i></span>
                      <div class="form-floating">
                      <input type="password" class="form-control" 
                      id="floatingInputGroup1" placeholder="Enter your Password">
                      <label for="floatingInputGroup1">Enter your Password</label>
                       </div> 
                       </div>

                       <!-- third field -->
                       <div class="input-group mb-3">
                      <span class="input-group-text"><i class="fa-solid fa-lock fa-xs"></i></span>
                      <div class="form-floating">
                      <input type="password" class="form-control" 
                      id="floatingInputGroup1" placeholder="Confirm your Password">
                      <label for="floatingInputGroup1">Confirm your Password</label>
                       </div> 
                       </div>
                       <!-- Sign up -->
                       <div class="form-group">
                        <input type="submit" name="register" value="Sign Up" class="btn signup_btn">
                       </div>
                     </form>
                 </div>
                 <!-- card footer -->
                 <div class="card-footer text-center ">
                  Already have an account?<a href="signin.php">Signin</a>
                 </div>
             </div>
           </div>
    </section>   

      
      <section class="more-about-the-site" id="More">
        <h2>More</h2>
        <style>
          h2 {
            color: blue;
          }
        </style>
      <div class="boxes-container">
        <div class="box">
          <img src="suisegs232.png" alt="BU" width="300">
          <h3>WE OTAKU Disclaimers</h3>
          <p>• Product Image in our website is for illustrative only,the actual product may differ<br>
           in color, design,or size.</p>
           <p>• In terms of availability we strive to maintain an accurate inventory,<br>
      in such cases we do our best to notify you and provide an estimated time for restocking</p>
           <p>• In shipping, our estimated delivery may vary depending to your location,and we are<br>
          are not responsible for any delays or issues caused by shipping carries.</p>
          <p>• We do not accept returns or exchanges for products that have been opened or used.<br>
             If you receive a damaged or defective product,
             please contact us within 48 hours of receipt to arrange for a replacement or refund</p>
             <p> • In some cases we are selling a nsfw or r-18 content product which is not<br>
            suitable for below 18 buyers, by making purchase you are confirming that you are legal to buy it</p>
            <p>• All images and product used are authorized to be sold any form of reselling it without authorization<br>
            is strictly probihited</p>
        </div>
        <div class="box">
          <img src="./pictures/anime fig.jpg" alt="" width="300">
          <h3>ANIME FIGURINES</h3>
          <p> • We sell authentic anime figures direct from sellers</p>
          <p> • Price may varies we don't sell bootleg figures here</p>
          <p> • Collectors can choose from a wide variety products</p>
          <p> • You can also pre-order from us to reserve </p>
        </div>
        <div class="box">
          <img src="./pictures/Is-Yugioh-Still-Popular-Trading-Card-Game.png" alt="BU" width="300" height="300">
          <h3>Trading Cards</h3>
          <p>• We also sells trading cards like Yu-Gi-Oh,Weihs Schwarz, Pokemon, Battle Spirits, and Duel Monsters </p>
          <p>• Price may varies depending on the rarity of the cards</p>
          <p>• We also have some japanese versions of the products</p>
        </div>
        <div class="box">
          <div style="float: left; margin-right: 10px;">
            <img src="./pictures/keqing.jpg" alt="BU" width="200">
          </div>
          <div style="float: right; margin-left: 10px;">
            <img src="./pictures/manga.jpg" alt="BU" width="200">
          </div>
          <div style="clear: both;"></div>
          <h3>And More</h3>
          <p>• Also you can buy a varieties of Manga here</p>
          <p>• Also you can buy a cosplay items here</p>
          <p>• You can also pre-order for your cosplay needs here</p>
          <p>• For Manga you can also wait for restock when we run out of stock</p>
        </div>
      </div>
    </section>
    </main>
  </body>
</html>
