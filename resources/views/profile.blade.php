@extends ('layout')

@section('title')
<title>Portfolio | Profile</title>
@endsection

@section ('content')
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
@endsection
