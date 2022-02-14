<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Profile | Showcase</title>
    <link rel="stylesheet" href="*" />
    <link rel="stylesheet" href="./css/profile.css" />
  </head>
  <body>
    <!-- Navigation Bar -->
    <nav>
      <div class="home">
        <a href="./"
          ><img
            src="../resources/hz-logo.jpg"
            alt="hz logo takes you to home page"
            id="nav-logo"
        /></a>
      </div>
      <ul class="top-navbar">
        <li><a href="./profile" class="nav-element">Profile</a></li>
        <li>
          <a href="./dashboard" class="nav-element">Dashboard</a>
        </li>
        <li><a href="./faq" class="nav-element">FAQ</a></li>
        <li><a href="./blog" class="nav-element">Blog</a></li>
      </ul>
    </nav>

    <!--1st Body  -->
    <section class="mbody">
      <article class="profile">
        <div class="profile-img">
          <img
            src="../resources/prof-picture.png"
            alt="Illustrated profile picture"
            class="p-img"
          />
        </div>

        <div class="profile-details">
          <ul class="bullets">
            <li><h1 class="head-detail">Olagoke Ayodeji</h1></li>
            <li>Nationality: Nigerian</li>
            <li>Interest(s): UI/UX Design, Arts & Writing</li>
            <li>
              Favourite Channel:
              <a
                href="https://www.youtube.com/channel/UCcX0NaWGYrtrczjOxvmmgmg/videos"
                target="_blank">Kuzomari
              </a>
            </li>
          </ul>
        </div>

      </article>
    </section>

        <!--2nd Body  -->
        <section class="sbody">
          <article class="sTop">Art Works</article>
          
          <article class="gallery">
            <div class="pic">
                  <img src="../resources/one.JPG" alt="illustrated image by Deji" class="fimage">         
            </div>
            <div class="pic">
                <img src="../resources/two.jpg" alt="illustrated image by Deji" class="image">          
            </div>
            <div class="pic">
              <img src="../resources/three.png" alt="illustrated image by Deji" class="image">           
            </div>
            <div class="pic">
              <img src="../resources/fourth.jpg" alt="illustrated image by Deji" class="image">           
            </div>
          </article>

        </section>

        <!-- Footer -->
    <footer class="f">
      <article class="top-footer">

        <span class="footer-info">
          <p><h2>Contact Me</h2>
            This section can be used to send emails to the author of this page.
          </p>
        </span>

        <span class="footer-contact">
        <p><form action="">
          <!-- <label for="email-name">Your email address</label> -->
          <input
            type="email"
            name="email-box"
            id="-email"
            placeholder="Your email address"
          />
          <br>
          <textarea name="message" id="" cols="30" rows="10" placeholder="Your Message"></textarea>
          <br>
          <input type="submit" value="send">
        </p> 
        </form>
      </span>  
      </article>

      <article class="bottom-footer">
        <p>Copright &copy; 2021 DejiHZ</p>
      </article>
    </footer>
  </body>
</html>
