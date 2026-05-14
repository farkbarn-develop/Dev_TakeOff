<?php get_header() ;?>
<section class="Content">
  <img class="ImgTakOff" src="<?php echo get_template_directory_uri()."/img/TakeOff.png"; ?>" alt="">
  <p class="avo">Avoid turbulence. Arrive at your destination sooner. And enjoy the ascent</p>
  <section class="wrap">
    <p class="fly fly1"><a href="#">fly with us</a></p><img class="arr" src="img/Arrow.png" alt="">
  </section>


<?php
  query_posts('category_name=IndexMed&posts_per_page=1' );
  while (have_posts()):the_post(); ?>

    <p class="B2B"><?php the_title(); ?></p>
    <p class="Jum"><?php the_excerpt(); ?></p>
    <p class="Mom MonCen"><?php the_content(); ?></p>

    <a class="linknotafront" href="<?php the_permalink(); ?>"><img class="imgnotafront" src="<?php echo get_the_post_thumbnail_url(); ?>" alt=""></a>
    <a class="linknotafront" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    <p class="fechanotafront"><?php /* echo ', ';  echo the_category( ',  ' ); */ ?><?php echo get_the_date('d/m/Y'); ?></p>
<?php endwhile; ?>

  <section class="wrap WrapIzq">
    <p class="fly flywrap"><a href="#">fly with us</a></p><img class="arr" src="<?php echo get_template_directory_uri()."/img/Arrow.png"; ?>" alt="">
  </section>
  <section class="AirPla fly2">
    <img class="AirPlaImg" src="<?php echo get_template_directory_uri()."/img/AirPlane.png"; ?>" alt="">
    <p class="PAir">airplane</p>
  </section>
  <!-- Inicio Horas -->
  <section class="Des">
    <p class="Tim">time</p>
    <section class="Cro">
      <p class="H1">1</p>
      <p class="H2">4</p>
      <p class="sep">:</p>
      <p class="M1">1</p>
      <p class="M2">0</p>
    </section>
    <section class="Cro">
      <p class="H1">1</p>
      <p class="H2">4</p>
      <p class="sep">:</p>
      <p class="M1">1</p>
      <p class="M2">5</p>
    </section>
    <section class="Cro">
      <p class="H1">1</p>
      <p class="H2">4</p>
      <p class="sep">:</p>
      <p class="M1">1</p>
      <p class="M2">8</p>
    </section>
    <section class="Cro">
      <p class="H1">1</p>
      <p class="H2">4</p>
      <p class="sep">:</p>
      <p class="M1">2</p>
      <p class="M2">4</p>
    </section>
  </section>
  <!-- Fin Horas -->
  <!-- Inicio Destino -->
  <section class="Des DestinoText">
    <p class="Destino">destination</p>
    <section class="Des DesTxtChar">
      <p class="L1 TxtL1">
        <span>c</span><span>r</span><span>e</span><span>a</span><span>t</span><span>e</span><span class="SpaCre">&nbsp;&nbsp;&nbsp;</span>
        <span>m</span><span>o</span><span>m</span><span>e</span><span>n</span><span>t</span><span>u</span><span>m</span>
      </p>
      <p class="L1 TxtL2">
        <span>f</span><span>u</span><span>l</span><span>l</span><span class="SpaCre">&nbsp;&nbsp;&nbsp;</span>
        <span>s</span><span>e</span><span>r</span><span>v</span><span>i</span><span>c</span><span>e</span><span class="SpaCre">&nbsp;&nbsp;&nbsp;</span><span class="SpaCre">&nbsp;&nbsp;&nbsp;</span><span class="SpaCre">&nbsp;&nbsp;&nbsp;</span>
      </p>
      <p class="L1 TxtL3">
        <span>g</span><span>l</span><span>o</span><span>b</span><span>a</span><span>l</span><span class="SpaCre">&nbsp;&nbsp;&nbsp;</span>
        <span>a</span><span>g</span><span>e</span><span>n</span><span>c</span><span>y</span><span class="SpaCre">&nbsp;&nbsp;&nbsp;</span><span class="SpaCre">&nbsp;&nbsp;&nbsp;</span>
      </p>
      <p class="L1 TxtL4">
        <span>f</span><span>o</span><span>r</span><span class="SpaCre">&nbsp;&nbsp;&nbsp;</span><span>b</span><span>2</span><span>b</span><span class="SpaCre">&nbsp;&nbsp;&nbsp;</span><span>t</span><span>e</span><span>a</span><span>m</span><span>s</span><span class="SpaCre">&nbsp;&nbsp;&nbsp;</span><span class="SpaCre">&nbsp;&nbsp;&nbsp;</span>
      </p>
    </section>
  </section>
  <!-- Fin Destino -->
  <!-- Inicio Gate -->
  <section class="Gat">
    <p class="">gate</p>
    <section class="Gate">
      <p class="CodGat"><span class="SpaCar">g</span><span>0</span><span>4</span></p>
      <p class="CodGat"><span class="SpaCar">d</span><span>1</span><span>2</span></p>
      <p class="CodGat"><span class="SpaCar">c</span><span>0</span><span>9</span></p>
      <p class="CodGat"><span class="SpaCar">a</span><span>0</span><span>6</span></p>
    </section>
  </section>
  <!-- Fin Gate -->
  <section class="SecLogIsc">
    <img class="LogIsc" src="img/LogoIsco.png" alt="">
  </section>
  <section class="SecWerRea">
    <p class="WerRea"><span class="Mul">"</span><span>We're really impressed with their </br></span>
      <span class="exp">expertise in B2B - in our opinion, there's</span>
      <span class="Pred">no one close to their level</span>.</p>
    <p class="aut"><span class="Nam">joe doe</span><br><span class="Seo">ceo, isco <span class="Ind">industry</span></span></p>
  </section>
  <section class="Sho">
    <p class="ShoBol">show up boldly </br></p>
    <p class="ShoCon">show up confidently </br></p>
  </section>
  <section class="Arr">
    <img src="img/Arrow2.png" alt="">
  </section>
  <section class="JumSea">
    <section class="HeaJumSea">
      <img src="img/Wing.png" alt="">
      <p class="PJumSea">jumpseat</p>
      <p class="PBoaPas">boarding pass</p>
    </section>
    <section class="LefJumSea">
      <img class="ImgSha" src="img/Shape.png" alt="">
      <section class="StaIn">
        <p class="PSta">stay in the </br>driver's seat</p>
        <p class="POne">one-stop access to key trucking business needs. get evetything from freight factoring to fuel cards, equipment leasing and insurance. simple and fast so you can spend more of your time on what's important - running and growing your business</p>
      </section>
    </section>
    <section class="RigJumSea" name="">
      <p class="TxtLorTit">
        Lorem ipsum dolor sit amet, consectetur
      </p>
      <p class="TxtLorTxt">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
      <section class="Cas">
        <a href="#">case study</a>
        <img class="CasArr" src="img/Arrow.png" alt="">
      </section>
    </section>
    <section class="FooJumSea" name="">
      <section class="IteCir">
        <section class="Cir CirSel"></section>
        <section class="Cir"></section>
        <section class="Cir"></section>
        <section class="Cir"></section>
      </section>
      </section>
  </section>
  <section class="B2BAge">
    <p class="PB2B">b2b agency</p>
    <p class="PAdv">& advisory</p>
  </section>
  <section class="IfAMan">
    <section class="SecLef">
      <p class="PIfAMan">if a management consultancy and indie agency came together, JumSeat would be the result. We're unique blend of left and right brain thinking. strategy and creativity. deep thinking and get it done.</p>
    </section>
    <section class="SecRig">
      <section class="SecIte">
        <p class="PStr">strategic revenue generation advisory</p>
        <section class="LoremTxtFon">
          <p class="TxtFon">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          <img class="ArrPStr" src="img/Arrow.png" alt="">
        </section>
      </section>
      <section class="SecIte">
        <p class="PStr">brand development</p>
        <section class="LoremTxtFon">
          <p class="TxtFon">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          <img class="ArrPStr" src="img/Arrow.png" alt="">
        </section>
      </section>
      <section class="SecIte">
        <p class="PStr">demand gen campaign strategy and execution</p>
        <section class="LoremTxtFon">
          <p class="TxtFon">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          <img class="ArrPStr" src="img/Arrow.png" alt="">
        </section>
      </section>
      <section class="SecIte">
        <p class="PStr">recruitment, onboarding and coaching</p>
        <section class="LoremTxtFon">
          <p class="TxtFon">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          <img class="ArrPStr" src="img/Arrow.png" alt="">
        </section>
      </section>
    </section>
  </section>
  <section class="WitYou">
    <p class="PWitYou">with you every mile</p>
    <p class="PSom">Some firms don't "do" at all. others "do" it if you, negating </br>the benefit of your team's learning and improving. </br>We're in it with you every step of the way to ensure you </br>became the best possible version of yourself.</p>
  </section>
  <section class="TxtAdvAgeJum">
    <section class="TxtA" name="">
      <p class="PTit">advisory firms</p>
      <p class="TxtPTit"><span>Don't</span> do</p>
      <section class="Pun"></section>
    </section>
    <section class="TxtB">
      <p class="PTit">agencies</p>
      <p class="TxtPTit"><span>For</span> you</p>
      <section class="Pun"></section>
    </section>
    <section class="TxtC">
      <p class="PTit">jumpseat</p>
      <p class="TxtPTit"><span>With</span> you</p>
      <section class="Pun"></section>
    </section>
    <hr class="linea-horizontal">
    <section class="TxtAdvAgeJumLin">
      <section class="Lin"></section>
    </section>
  </section>
  <section class="SecEliSal">
    <p class="PEli">eliminate random acts of </br>sales & marketing forever</p>
    <p class="PThi"><span>this is the hill we're willing to die on.</span> </br>We exist to stop all the random acts of content. </br>half baked webinars an uninspired emails. one-</br>off tweets and abandoned social channels. </br>leadership meetings that start with, "I just heard </br>this on a podcast..."</p>
    <p class="PYouGet">you get in. RAofS&M produce chaos but not </br>consistent results.</p>
    <section class="SecGetTo">
      <a class="AGet" href="#">get to know us  <img class="ArrPStr" src="img/Arrow.png" alt=""></a>
    </section>
  </section>
  <section class="SecFee">
    <p class="PFee">feeling lost?</p>
    <p class="PSta">start here.</p>
  </section>
  <section class="AviIde">
    <img class="Avi" src="img/avion.png" alt="">
    <section class="SecIde">
      <p class="PIde">ideal client profiles and the JumpSeat $5,000 FedEx rule.</p>
      <section class="SecBotSta">
        <p class="TxtSecBotSta">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        <a class="AGet StarHere" href="#">start here    <img class="ArrPStr" src="img/Arrow.png" alt=""></a>
      </section>
    </section>
  </section>
  <section class="SecForm">
    <p class="TxtGet"><span class="SpaOur">get in touch with</span> our team</p>
    <input type="text" class="InpNam" name="Nombre" placeholder="Name" value="">
    <input type="text" class="InpLasNam" name="lastname" placeholder="Last Name" value="">
    <input type="text" class="InpTit" name="Tittle" placeholder="Tittle" value="">
    <input type="text" class="InpCom" name="Company" placeholder="Company" value="">
    <input type="text" class="InpMes" name="Message" placeholder="Message" value="">
    <section class="SecSen">
      <a class="ASen" href="#">send <img class="ArrPStr ImgASen" src="img/Arrow.png" alt=""></a>
    </section>
    <section class="LinForm"></section>
    <section class="SecCeo">
      <img class="ImgCeo" src="img/Person.png" alt="">
      <p class="PEma"><span class="SpaEma">Email our </span><span class="SpaCeo"> ceo </span><span class="SpaDir">directly, </span> <span class="SpaEmaSub">dan@domain.co</span> <span>or drop a line to our team.</span></p>
      <p class="PPil">pilots previously. take of today</p>
    </section>
    <a class="AGet StarHere AMeet" href="#">meet the team    <img class="ArrPStr" src="img/Arrow.png" alt=""></a>
  </section>
</section>
<!-- Fin Content -->
