<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="msapplication-config" content="resources/favicon/browserconfig.xml">
  <meta name="theme-color" content="#ffffff">
  <title>Omnifood</title>
  <!-- favicon -->
  <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicon/apple-touch-icon.png') }}">
  <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon/favicon-32x32.png') }}">
  <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon/favicon-16x16.png') }}">
  <link rel="manifest" href="{{ asset('favicon/site.webmanifest') }}">
  <link rel="mask-icon" href="{{ asset('favicon/safari-pinned-tab.svg') }}" color="#5bbad5">
  <link rel="shortcut icon" href="{{ asset('favicon/favicon.ico') }}">
  <!-- favicon -->
  <link rel="stylesheet" href="{{ asset('libs/css/normalize.css') }}" />
  <link rel="stylesheet" href="{{ asset('libs/css/grid.css') }}" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/query.css') }}">
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;1,300&display=swap"
    rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    referrerpolicy="no-referrer" />
</head>

<body>
  <!-- header section -->
  <header>
    <nav>
      <div class="row">
        <img src="{{ asset('imgs/logo-white.png') }}" alt="Omnifood logo" class="logo" />
        <img src="{{ asset('imgs/logo.png') }}" alt="Omnifood logo" class="logo-black" />
        <ul class="main-nav js--main-nav">
          <li><a href="#feature">Food Delivery</a></li>
          <li><a href="#steps">How It Works</a></li>
          <li><a href="#cities">Our Cities</a></li>
          <li><a href="#plans">Sign Up</a></li>
        </ul>
        <a class="mobile-nav-icon js--mobile-nav-icon"><i class="fas fa-bars"></i></a>
      </div>
    </nav>
    <div class="hero-text-box">
      <h1>
        Goodbye junk food. <br />
        Hello super healthy meals.
      </h1>
      <a href="line://oaMessage/@820cfnsa/?Can%20I%20order%21" class="btn btn-full js--btn-full">I’m hungry</a>
      <a href="#" class="btn btn-ghost js--btn-ghost">Show me more</a>
    </div>
  </header>

  <!-- feature section -->
  <section class="section-feature js--section-feature" id="feature">
    <div class="row">
      <h2>Get food fast &horbar; not fast food</h2>
      <p class="long-para">
        Hello, we’re Omnifood, your new premium food delivery service. We know
        you’re always busy. No time for cooking. So let us take care of that,
        we’re really good at it, we promise!
      </p>
    </div>
    <div class="row js--wp-1">
      <div class="col span-1-of-4 box">
        <i class="far fa-clock big-icon"></i>
        <h3>Up to 365 days/year</h3>
        <p>
          Never cook again! We really mean that. Our subscription plans
          include up to 365 days/year coverage. You can also choose to order
          more flexibly if that's your style.
        </p>
      </div>
      <div class="col span-1-of-4 box">
        <i class="fas fa-shipping-fast big-icon"></i>
        <h3>Ready in 20 minutes</h3>
        <p>
          You're only twenty minutes away from your delicious and super
          healthy meals delivered right to your home. We work with the best
          chefs in each town to ensure that you're 100% happy.
        </p>
      </div>
      <div class="col span-1-of-4 box">
        <i class="fas fa-heartbeat big-icon"></i>
        <h3>100% organic</h3>
        <p>
          All our vegetables are fresh, organic and local. Animals are raised
          without added hormones or antibiotics. Good for your health, the
          environment, and it also tastes better!
        </p>
      </div>
      <div class="col span-1-of-4 box">
        <i class="fas fa-concierge-bell big-icon"></i>
        <h3>Order anything</h3>
        <p>
          We don't limit your creativity, which means you can order whatever
          you feel like. You can also choose from our menu containing over 100
          delicious meals. It's up to you!
        </p>
      </div>
    </div>
  </section>

  <!-- meal section -->
  <section class="section-meals">
    <ul class="meal-showcase clear-fix">
      <li>
        <figure class="meal-img">
          <img src="{{ asset('imgs/1.jpg') }}" alt="Korean bibimbap with egg and vegetables" />
        </figure>
      </li>
      <li>
        <figure class="meal-img">
          <img src="{{ asset('imgs/2.jpg') }}" alt="Simple italian pizza with cherry tomatoes" />
        </figure>
      </li>
      <li>
        <figure class="meal-img">
          <img src="{{ asset('imgs/3.jpg') }}" alt="Chicken breast steak with vegetables " />
        </figure>
      </li>
      <li>
        <figure class="meal-img">
          <img src="{{ asset('imgs/4.jpg') }}" alt="Autumn pumpkin soup" />
        </figure>
      </li>
    </ul>
    <ul class="meal-showcase clear-fix">
      <li>
        <figure class="meal-img">
          <img src="{{ asset('imgs/5.jpg') }}" alt="Paleo beef steak with vegetables" />
        </figure>
      </li>
      <li>
        <figure class="meal-img">
          <img src="{{ asset('imgs/6.jpg') }}" alt="Healthy baguette with egg and vegetables" />
        </figure>
      </li>
      <li>
        <figure class="meal-img">
          <img src="{{ asset('imgs/7.jpg') }}" alt="Burger with cheddar and bacon" />
        </figure>
      </li>
      <li>
        <figure class="meal-img">
          <img src="{{ asset('imgs/8.jpg') }}" alt="Granola with cherries and strawberries" />
        </figure>
      </li>
    </ul>
  </section>

  <!-- steps section -->
  <section class="section-steps" id="steps">
    <div class="row">
      <h2>How it works &mdash; Simple as 1, 2, 3</h2>
    </div>
    <div class="row">
      <div class="col span-1-of-2 steps-box">
        <img src="{{ asset('imgs/app-iPhone.png') }}" alt="Omnifood Steps On Screen" class="app-screen js--wp-2" />
      </div>
      <div class="col span-1-of-2 steps-box">
        <div class="works-step">
          <div>1</div>
          <p>
            Choose the subscription plan that best fits your needs and sign up
            today.
          </p>
        </div>
        <div class="works-step">
          <div>2</div>
          <p>
            Order your delicious meal using our mobile app or website. Or you
            can even call us!
          </p>
        </div>
        <div class="works-step">
          <div>3</div>
          <p>
            Enjoy your meal after less than 20 minutes. See you the next time!
          </p>
        </div>
        <a href="#" class="btn-app">
          <img src="{{ asset('imgs/download-app.svg') }}" alt="App Store Button" />
        </a>
        <a href="#" class="btn-app">
          <img src="{{ asset('imgs/download-app-android.png') }}" alt="Play Store Button" />
        </a>
        <a href="https://page.line.me/?accountId=820cfnsa" class="btn-app">
            <img src="https://scdn.line-apps.com/n/line_add_friends/btn/en.png" alt="Add friend" height="36" border="0">
        </a>
      </div>
    </div>
  </section>

  <!-- cities section -->
  <section class="section-cities" id="cities">
    <div class="row">
      <h2>We're currently in these cities</h2>
    </div>
    <div class="row js--wp-3">
      <div class="col span-1-of-4 box">
        <img src="{{ asset('imgs/lisbon-3.jpg') }}" alt="Lisbon" />
        <h3>Lisbon</h3>
        <div class="city-feature">
          <i class="fas fa-users icon-small"></i>1600+ happy eaters
        </div>
        <div class="city-feature">
          <i class="fas fa-glass-cheers icon-small"></i>60+ top chefs
        </div>
        <div class="city-feature">
          <i class="fab fa-twitter icon-small"></i><a href="#" class="city-twitter">@omnifood_lx</a>
        </div>
      </div>
      <div class="col span-1-of-4 box">
        <img src="{{ asset('imgs/san-francisco.jpg') }}" alt="San Francisco" />
        <h3>San Francisco</h3>
        <div class="city-feature">
          <i class="fas fa-users icon-small"></i>3700+ happy eaters
        </div>
        <div class="city-feature">
          <i class="fas fa-glass-cheers icon-small"></i>160+ top chefs
        </div>
        <div class="city-feature">
          <i class="fab fa-twitter icon-small"></i><a href="#" class="city-twitter">@omnifood_sf</a>
        </div>
      </div>
      <div class="col span-1-of-4 box">
        <img src="{{ asset('imgs/berlin.jpg') }}" alt="Berlin" />
        <h3>Berlin</h3>
        <div class="city-feature">
          <i class="fas fa-users icon-small"></i>2300+ happy eaters
        </div>
        <div class="city-feature">
          <i class="fas fa-glass-cheers icon-small"></i>110+ top chefs
        </div>
        <div class="city-feature">
          <i class="fab fa-twitter icon-small"></i><a href="#" class="city-twitter">@omnifood_berlin</a>
        </div>
      </div>
      <div class="col span-1-of-4 box">
        <img src="{{ asset('imgs/london.jpg') }}" alt="London" />
        <h3>London</h3>
        <div class="city-feature">
          <i class="fas fa-users icon-small"></i>1200+ happy eaters
        </div>
        <div class="city-feature">
          <i class="fas fa-glass-cheers icon-small"></i>50+ top chefs
        </div>
        <div class="city-feature">
          <i class="fab fa-twitter icon-small"></i><a href="#" class="city-twitter">@omnifood_london</a>
        </div>
      </div>
    </div>
  </section>

  <!-- testimonials section -->
  <section class="section-testimonials">
    <div class="row">
      <h2>Our customers can't live without us</h2>
    </div>
    <div class="row">
      <div class="col span-1-of-3">
        <blockquote>
          Omnifood is just awesome! I just launched a startup which leaves me
          with no time for cooking, so Omnifood is a life-saver. Now that I
          got used to it, I couldn't live without my daily meals!
          <cite>
            <img src="{{ asset('imgs/customer-1.jpg') }}" alt="customer1" />Alberto
            Duncan
          </cite>
        </blockquote>
      </div>
      <div class="col span-1-of-3">
        <blockquote>
          Inexpensive, healthy and great-tasting meals, delivered right to my
          home. We have lots of food delivery here in Lisbon, but no one comes
          even close to Omifood. Me and my family are so in love!
          <cite>
            <img src="{{ asset('imgs/customer-2.jpg') }}" alt="customer1" />Joana
            Silva
          </cite>
        </blockquote>
      </div>
      <div class="col span-1-of-3">
        <blockquote>
          I was looking for a quick and easy food delivery service in San
          Franciso. I tried a lot of them and ended up with Omnifood. Best
          food delivery service in the Bay Area. Keep up the great work!
          <cite>
            <img src="{{ asset('imgs/customer-1.jpg') }}" alt="customer1" />Milton
            Chapman
          </cite>
        </blockquote>
      </div>
    </div>
  </section>

  <!-- plans section -->
  <section class="section-plans js--section-plans" id="plans">
    <div class="row">
      <h2>Start eating healthy today</h2>
    </div>
    <div class="row">
      <div class="col span-1-of-3">
        <div class="plan-box">
          <div>
            <h3>Premium</h3>
            <p class="plan-price">399$ <span>/ month</span></p>
            <p class="plan-price-meal">That’s only 13.30$ per meal</p>
          </div>
          <div>
            <ul>
              <li><i class="fas fa-lightbulb icon-small"></i>1 meal every day</li>
              <li><i class="fas fa-lightbulb icon-small"></i>Order 24/7</li>
              <li><i class="fas fa-lightbulb icon-small"></i>Access to newest creations</li>
              <li><i class="fas fa-lightbulb icon-small"></i>Free delivery</li>
            </ul>
          </div>
          <div>
            <a href="javascript: void(0);" class="btn btn-full" id="popup">Sign Up</a>
          </div>
        </div>
      </div>
      <div class="col span-1-of-3">
        <div class="plan-box">
          <div>
            <h3>Pro</h3>
            <p class="plan-price">149$ <span>/ month</span></p>
            <p class="plan-price-meal">That’s only 14.90$ per meal</p>
          </div>
          <div>
            <ul>
              <li><i class="fas fa-lightbulb icon-small"></i>1 meal 10 days/month</li>
              <li><i class="fas fa-lightbulb icon-small"></i></i>Order 24/7</li>
              <li><i class="fas fa-lightbulb icon-small"></i>Access to newest creations</li>
              <li><i class="fas fa-lightbulb icon-small"></i>Free delivery</li>
            </ul>
          </div>
          <div>
            <a href="javascript: void(0);" class="btn btn-ghost" id="popup">Sign Up</a>
          </div>
        </div>
      </div>
      <div class="col span-1-of-3">
        <div class="plan-box">
          <div>
            <h3>Starter</h3>
            <p class="plan-price">19$ <span>/ meal</span></p>
            <p class="plan-price-meal">&nbsp;</p>
          </div>
          <div>
            <ul>
              <li><i class="fas fa-lightbulb icon-small"></i>1 meal</li>
              <li><i class="fas fa-lightbulb icon-small"></i>Order from 8 am to 12 pm</li>
              <li><i class="fas fa-lightbulb icon-small"></i></li>
              <li><i class="fas fa-lightbulb icon-small"></i>Free delivery</li>
            </ul>
          </div>
          <div>
            <a href="javascript: void(0);" class="btn btn-ghost" id="popup">Sign Up</a>
          </div>
        </div>
      </div>
    </div>
    <div id="popupBox" class="popup_wrapper">
      <div class="overlay"></div>
      <div id="login-box">
        <div class="left">
          <h1>Sign up</h1>

          <input type="text" name="username" placeholder="Username" />
          <input type="text" name="email" placeholder="E-mail" />
          <input type="password" name="password" placeholder="Password" />
          <input type="password" name="password2" placeholder="Retype password" />
          <a href="javascript: void(0);" class="btn" id="popup">Sign me up</a>
        </div>

        <div class="right">
          <span class="loginwith">Sign in with<br />social network</span>

          <a class="social-signin facebook">Log in with facebook</a>
          <a class="social-signin twitter">Log in with Twitter</a>
          <a href="https://line-ojt-16522.herokuapp.com/" class="social-signin line">Log in with LINE</a>
        </div>
        <div class="or">OR</div>
      </div>
    </div>
  </section>

  <!-- content form section -->
  <section class="section-content">
    <div class="row">
      <h2>We're happy to hear from you</h2>
    </div>

    <div class="row">
      <form action="#" method="POST" class="content-form">
        <div class="row">
          <div class="col span-1-of-3">
            <label for="name">Name</label>
          </div>
          <div class="col span-2-of-3">
            <input type="text" name="name" id="name" placeholder="Your Name" required>
          </div>
        </div>
        <div class="row">
          <div class="col span-1-of-3">
            <label for="email">Email</label>
          </div>
          <div class="col span-2-of-3">
            <input type="email" name="email" id="email" placeholder="Your email" required>
          </div>
        </div>
        <div class="row">
          <div class="col span-1-of-3">
            <label for="">How did you find us?</label>
          </div>
          <div class="col span-2-of-3">
            <select name="" id="find-us">
              <option value="friend">Friend</option>
              <option value="search">Search Engine</option>
              <option value="ad">Adverstiments</option>
              <option value="other">Others</option>
            </select>
          </div>
        </div>
        <div class="row">
          <div class="col span-1-of-3">
            <label for="">Newsletter</label>
          </div>
          <div class="col span-2-of-3">
            <input type="checkbox" name="news" id="news" checked> Yes Please
          </div>
        </div>
        <div class="row">
          <div class="col span-1-of-3">
            <label for="">Drop us a line</label>
          </div>
          <div class="col span-2-of-3">
            <textarea name="" id="" cols="30" rows="10" placeholder="Your Message"></textarea>
          </div>
        </div>
        <div class="row">
          <div class="col span-1-of-3">
            <label for="">&nbsp;</label>
          </div>
          <div class="col span-2-of-3">
            <input type="submit" value="Send It">
          </div>
        </div>
      </form>
    </div>
  </section>

  <!-- footer section -->
  <footer>
    <div class="row">
      <div class="col span-1-of-2">
        <ul class="footer-nav">
          <li><a href="#">About Us</a></li>
          <li><a href="#">Blog</a></li>
          <li><a href="#">Press</a></li>
          <li><a href="#">iOS App</a></li>
          <li><a href="#">Android App</a></li>
        </ul>
      </div>
      <div class="col span-1-of-2">
        <ul class="social-nav">
          <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
          <li><a href="#"><i class="fab fa-twitter"></i></a></li>
          <li><a href="https://page.line.me/?accountId=820cfnsa" id="line_acc_link"><i class="fab fa-line"></i></a></li>
          <li><a href="#"><i class="fab fa-instagram"></i></a></li>
        </ul>
      </div>
    </div>
  </footer>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/selectivizr/1.0.2/selectivizr-min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
  <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>