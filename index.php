<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Tworzymy strony internetowe, identyfikacje graficzne a także prowadzimy kampanie marketingowe. Powierz nam swój wizerunek w sieci!">
  <meta name="keywords" content="agencja marketing desing grafika strona website kampania">
  <meta name="author" content="Sebastian Blaik">
  <meta name="theme-color" content="#f6f6f6">
  <title>Agencja Marketingowa - Better Advertising Media</title>

  <meta property ="og:title" content="Agencja Marketingowa - Better Advertising Media"/>
  <meta property ="og:description" content="Powierz nam swój wizerunek w sieci!"/>
  <meta property ="og:type" content="website"/>
  <meta property ="og:url" content="https://betteram.pl/"/>
  <meta property ="og:image" content="https://raw.githubusercontent.com/Hutchii/BEADVME-Website/main/img/og.webp"/>
  
  <meta property ="twitter:title" content="Agencja Marketingowa - Better Advertising Media"/>
  <meta property ="twitter:description" content="Powierz nam swój wizerunek w sieci!"/>
  <meta property ="og:card" content="summary"/>
  <meta property ="og:url" content="https://betteram.pl/"/>
  <meta property ="og:image" content="https://raw.githubusercontent.com/Hutchii/BEADVME-Website/main/img/og.webp"/>
  
  
  <link rel="preload" as="font" href="fonts/poppins-v15-latin-ext_latin-300.woff2" type="font/woff2" crossorigin> 
  <link rel="preload" as="font" href="fonts/poppins-v15-latin-ext_latin-500.woff2" type="font/woff2" crossorigin> 
  <link rel="preload" as="font" href="fonts/poppins-v15-latin-ext_latin-700.woff2" type="font/woff2" crossorigin>
  <link rel="preload" href="style.css" as="style">
  <link rel="stylesheet" href="style.css">
  <link rel="preload" href="js/navbar.js" as="script">
  <link rel="preload" href="js/portfolio.js" as="script">
</head>
<body>
  <style>
    @font-face {
      font-family: 'Poppins';
      font-style: normal;
      font-weight: 300;
      font-display: swap;
      src: local(''),
          url('fonts/poppins-v15-latin-ext_latin-300.woff2') format('woff2'),
          url('fonts/poppins-v15-latin-ext_latin-300.woff') format('woff'); 
    }
    @font-face {
      font-family: 'Poppins';
      font-style: normal;
      font-weight: 500;
      font-display: swap;
      src: local(''),
          url('fonts/poppins-v15-latin-ext_latin-500.woff2') format('woff2'),
          url('fonts/poppins-v15-latin-ext_latin-500.woff') format('woff');
    }
    @font-face {
      font-family: 'Poppins';
      font-style: normal;
      font-weight: 700;
      font-display: swap;
      src: local(''),
          url('fonts/poppins-v15-latin-ext_latin-700.woff2') format('woff2'),
          url('fonts/poppins-v15-latin-ext_latin-700.woff') format('woff');
    }
  </style>
  <header>
      <nav class="spacer">
        <p class="logo"><a href="./">BEADVME</a></p>
        <ul class="menu">
          <li><a href="./" class="home ul">HOME</a></li>
          <li><a href="#about" class="ul">O NAS</a></li>
          <li><a href="uslugi.html" class="ul">USŁUGI</a></li>
          <li><a href="portfolio.html" class="ul">PORTFOLIO</a></li>
          <li><a href="#contact" class="ul">KONTAKT</a></li>
        </ul>
        <ul class="social">
          <li><a href="https://www.behance.net/hutchi" target="_blank" class="ul" rel="noopener">behance</a></li>
          <li><a href="https://www.facebook.com/Valkiriaesports" target="_blank" class="ul" rel="noopener">facebook</a></li>
        </ul>
        <div class="menu-mobile">
          <p>MENU</p>
          <div class="dropdown">
            <div class="line-1"></div>
            <div class="line-2"></div>
            <div class="line-3"></div>
          </div>
        </div>
      </nav>
    <section class="title">
      <div class="title-img">
        <img src="img/title-big.webp" 
        srcset="img/title-small.webp 480w, 
                img/title-big.webp 1920w"
        alt="Zdjęcie biura" width="960" height="540">
      </div>
      <div class="title-text">
        <h1>Agencja<br>Marketingowa</h1>
        <h2>Better Advertising Media</h2>
        <p class="desc">Wyróżniamy się indywidualnym podej&shy;ściem i całko&shy;witym zaanga&shy;żowaniem. Twoi ludzie od marketingu!</p>
      </div>
    </section>
  </header>
  <section class="about spacer" id="about">
      <div class="about-svg">
        <img src="img/about.svg" alt="" width="996.46" height="828.18">
      </div>
    <div class="about-text">
      <h2 class="cat">twój produkt jest <br>najważniejszy</h2>
      <p class="desc">Jesteśmy agencją 360°, świad&shy;czymy usługi w szerokim zakresie od two&shy;rzenia stron i identyfikacji graficznych po prowadzenie kam&shy;panii marke&shy;tingowej. Moderujemy wszelkie treści zamiesz&shy;czane na stronach inter&shy;netowych oraz pro&shy;filach społecz&shy;nościowych. Zadbamy o twój wizerunek w sieci i nie tylko.</p>
      <div class="button">
        <a href="uslugi.html"><p>zobacz nasze usługi</p></a>
      </div>
    </div>
  </section>
  <section class="portfolio spacer">
    <h2 class="cat">nasze portfolio</h2>
    <div class="grid">
      <img src="img/p3.webp" 
        srcset="img/p3m.webp 480w, 
                img/p3.webp 1920w"
        alt="" width="600" height="700" class="i1">
        <div class="s1">
          <h3 class="project p1">Valkiria Esports Branding</h3>
          <p class="serv">Identyfikacje Wizualne</p>
        </div>
      <img src="img/p2.webp" 
        srcset="img/p2m.webp 480w, 
                img/p2.webp 1920w"
        alt="" width="600" height="700" class="i2 transform-portfolio" loading=lazy>
        <div class="s2">
          <h3 class="project p2">IT Company Booklet Design</h3>
          <p class="serv">Kampanie Dedykowane</p>
        </div>
        <img src="img/p1.webp" 
        srcset="img/p1m.webp 480w, 
                img/p1.webp 1920w"
        alt="" width="600" height="700" class="i3 transform-portfolio" loading="lazy">
        <div class="s3">
          <h3 class="project p3">LVBET Esport Social Media</h3>
          <p class="serv">Social Media</p>
        </div>
      <img src="img/p4.webp" 
        srcset="img/p4m.webp 480w, 
                img/p4.webp 1920w"
        alt="" width="600" height="700" class="i4 transform-portfolio" loading=lazy>
        <div class="s4">
          <h3 class="project p4">Las Vegas Energy Drink</h3>
          <p class="serv">Web Design</p>
        </div>
      <img src="img/p5.webp" 
        srcset="img/p5m.webp 480w, 
                img/p5.webp 1920w"
        alt="" width="600" height="700" class="i5 transform-portfolio" loading=lazy>
        <div class="s5">
          <h3 class="project p5">LVBET Szkolenia Login Page</h3>
          <p class="serv">Web Design</p>
        </div>
      <div class="button">
        <a href="portfolio.html"><p>zobacz całe portfolio</p></a>
      </div>
    </div>
  </section>
  <section class="contact" id="contact">
    <h2 class="cat spacer">skontaktuj się z nami</h2>
    <div class="contact-flex">
      <div class="contact-img">
        <img src="img/contact-test.png" 
        srcset="img/contact-test.png 480w, 
                  img/contact-test.png 1920w"
        alt="" width="960" height="540">
      </div>
      <div class="contact-left">
        <div class="contact-text">
          <div class="contact-email">
            <h3 class="contact-title">Adres e-mail:</h3>
            <div class="email">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="#ea0053" d="M12 12.713l-11.985-9.713h23.971l-11.986 9.713zm-5.425-1.822l-6.575-5.329v12.501l6.575-7.172zm10.85 0l6.575 7.172v-12.501l-6.575 5.329zm-1.557 1.261l-3.868 3.135-3.868-3.135-8.11 8.848h23.956l-8.11-8.848z"/></svg>
              <p class="contact-info">beadvme@beadvme.pl</p>
            </div>
          </div>
          <div class="contact-phone">
            <h3 class="contact-title">Telefon:</h3>
            <div class="phone">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="#ea0053" d="M20 22.621l-3.521-6.795c-.008.004-1.974.97-2.064 1.011-2.24 1.086-6.799-7.82-4.609-8.994l2.083-1.026-3.493-6.817-2.106 1.039c-7.202 3.755 4.233 25.982 11.6 22.615.121-.055 2.102-1.029 2.11-1.033z"/></svg>
              <p class="contact-info">+48 987 456 124</p>
            </div>
          </div>
        </div>
        <form class="contact-form form">
          <fieldset class="input">
            <label for="name">Imię i nazwisko:</label>
            <input id="name" type="text" name="name">
            <span class="contact-border"></span>
          </fieldset>
          <fieldset class="input">
            <label for="email">Adres e-mail:</label>
            <input id="email" type="text" name="email">
            <span class="contact-border"></span>
          </fieldset>
          <fieldset class="input">
            <label for="message">Treść wiadomości:</label>
            <textarea id="message" type="text" name="message"></textarea>
            <span class="contact-border"></span>
          </fieldset>
          <fieldset class="input">
            <button class="contact-submit" id="submit" name="submit" type="submit">Wyślij wiadomość</button>
            <p class="contact-dane">Naciskając przycisk zgadzasz się na <span class="weight2">przetwa&shy;rzanie</span> danych osobowych.</p>
            <p class="contact-message"></p>
          </fieldset>
          <ul id="form-messages"></ul>
        </form>
      </div>
    </div>
  </section>
  <footer>
    <div class="spacer">
      <nav>
        <p class="logo-footer"><a href="./">BEADVME</a></p>
        <ul class="menu-footer">
          <li><a href="./" class="home">HOME</a></li>
          <li><a href="#about" class="ul2">O NAS</a></li>
          <li><a href="uslugi.html" class="ul2">USŁUGI</a></li>
          <li><a href="portfolio.html" class="ul2">PORTFOLIO</a></li>
          <li><a href="#contact" class="ul2">KONTAKT</a></li>
          <li><a href="#contact" class="ul2 weight">Polityka Prywatności</a></li>
        </ul>
        <ul class="social-footer">
          <li><a href="https://www.behance.net/hutchi" target="_blank" class="ul" rel="noopener">behance</a></li>
          <li><a href="https://www.facebook.com/Valkiriaesports" target="_blank" class="ul" rel="noopener">facebook</a></li>
        </ul>
      </nav>
      <p class="copyright">Copyright © 2020 <span class="weight2">Better Advertising Media.</span> Wszelkie prawa zastrzeżone. </p>
    </div>
  </footer>
  <script src="js/navbar.js" defer></script>
  <script src="js/portfolio.js" defer></script>
</body>
</html>