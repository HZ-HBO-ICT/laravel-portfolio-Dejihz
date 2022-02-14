<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard | Showcase</title>
    <link rel="stylesheet" href="*" />
    <link rel="stylesheet" href="./css/dashboard.css" />
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

<!--Main body  -->
    <article class="main">
      <div>
        <table class="dashboard">
          <tr>
            <th>Quatile</th>
            <th>Contents</th>
            <th>Credits Obtained</th>
            <th>Credits Available</th>
          </tr>

          <tr>
            <th rowspan="3">Quatile 1</th>
            <td>
              Programme and Career Orientation
            </td>
            <td>2.5</td>
            <td>2.5</td>
          </tr>

          <tr>
            <td>Computer Science Basics</td>
              <td>5</td>
              <td>5</td>
          </tr>

          <tr>
            <td>Programming Basics</td>
            <td>5</td>
            <td>5</td>
          </tr>

          <tr>
            <th>Quatile 2</th>
            <td>Object Oriented Programming</td>
            <td>10</td>
            <td>10</td>
          </tr>

          
          <tr>
            <th rowspan="2">Quartile 3</th>
            <td>
              Framework Development 1</td>
            <td>-------</td>
            <td>5</td>
          </tr>

          <tr>
            <td>Framework Project 1</td>
            <td>-------</td>
            <td>7.5</td>
          </tr>

          <tr>
            <th>Quartile 4</th>
            <td> Framework Project 2</td>
              <td>-------</td>
              <td>10</td>
          </tr>
          
          <tr>
            <th rowspan="3">Entire Year </th>
            <td>Programme and Career Orientation</td>
            <td>-------</td>
            <td>12.5</td>
          </tr>

          <tr>
            <td>IT Personality 1</td>
            <td>-------</td>
            <td>1.25</td>
          </tr>

          <tr>
            <td>IT Personality 2</td>
            <td>-------</td>
            <td>1.25</td>
          </tr>

          <caption class="table-link"><a href="https://hz.nl/uploads/documents/Regelingen/EN/OER-HZ-2019-2020werkdocv2018-05-17DEF_ENGELS-AC-29112019.pdf" target="_blank" 
            class="caption-link">Regulations Regarding Tests and Exams</a></caption>
        
        </table>
      </div>

      <article class="section">Study Links</article>
      <article class="content">
        <div class="footerItem"><a class="link" href="https://hz.nl/over-de-hz/regelingen-documenten-1/onderwijs-en-examenregelingen">Visit the HZ HBO-ICT Course and Examination Regulations (CER)</a></div>
        <div class="footerItem"><a class="link" href="https://hz.nl/uploads/documents/Regelingen/OERS/2021-2022/11.-Uitvoeringsregeling-OER-ICT-Voltijd-2021-2022.pdf">Visit the Implementation Regulations (IR) of the HBO-ICT programme</a></div>
        <div class="footerItem"><a class="link" href="https://learn.hz.nl/my/">Visit HZ Learn environment</a></div>
        <div class="footerItem"><a class="link" href="https://teams.microsoft.com/l/team/19%3a2e2afa0286b04932be16cb8ad2d9d2c0%40thread.skype/conversations?groupId=95bddebc-a340-4d88-81fc-b80e0bfc70c3&tenantId=4c16deb3-342d-4fca-bcd5-b1429308034c">Visit Teams environment of the study programme</a></div>
        <div class="footerItem"><a class="link" href="https://apps.hz.nl/angular/studievoortgang/studiestatus">Visit page in MyHZ with my study progress</a></div>
        <div class="footerItem"><a class="link" href="https://dejihz.github.io/project/">The Github environment of the study programme</a></div>
      </article>
    </article>

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