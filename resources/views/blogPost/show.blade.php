<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Portfolio | BlogPost</title>
    <link rel="stylesheet" href="/*" /> 
    <link rel="stylesheet" href="/css/faq.css"> 
  </head>
  <body>

    <!-- Only add repeated elements to layoutpage-->
 <!-- Navigation Bar -->
    <nav>
      <div class="home">
        <a href="/"
          ><img
            src="/resources/hz-logo.jpg"
            alt="hz logo takes you to home page"
            id="nav-logo"
        /></a>
      </div>
      <ul class="top-navbar">
        <li><a href="/profile" class="nav-element">Profile</a></li>
        <li>
          <a href="/dashboard" class="nav-element">Dashboard</a>
        </li>
        <li><a href="/faq" class="nav-element">FAQ</a></li>
        <li><a href="/blog" class="nav-element">Blog</a></li>
      </ul>
    </nav>
 

 <!-- Main content -->
  <!-- Header -->
    <header class="container">
      <div class="h-text">{{$article-> title}}</div>
    </header>
    
<!--Body  -->
    <article class="main">  
      <section class="content">
            <div class="drop-down">
              <p>{{$article-> body}}</p>
            </div>
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
        <p><form action="mailto:olag0002@hz.nl" method="POST" enctype="text/plain">
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


