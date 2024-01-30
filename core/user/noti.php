<!doctype html>
<html lang="en">

  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport"
          content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="theme-color" content="#000000">
    <title>Finapp</title>
    <meta name="description" content="Finapp HTML Mobile Template">
    <meta name="keywords"  content="bootstrap, wallet, banking, fintech mobile template, cordova, phonegap, mobile, html, responsive" />
    <link rel="icon" type="image/png" href="../../template_html/assets/img/favicon.png" sizes="32x32">
    <link rel="apple-touch-icon" sizes="180x180" href="../../template_html/assets/img/icon/192x192.png">
    <link rel="stylesheet" href="../../template_html/assets/css/style.css">
    <link rel="manifest" href="__manifest.json">
  </head>

  <body>

    <!-- loader -->
    <div id="loader">
      <img src="../../template_html/assets/img/loading-icon.png" alt="icon" class="loading-icon">
    </div>
    <!-- * loader -->

    <!-- App Header -->
    <div class="appHeader">
      <div class="left">
        <a href="#" class="headerButton goBack">
          <ion-icon name="chevron-back-outline"></ion-icon>
        </a>
      </div>
      <div class="pageTitle">Notifications</div>
      <div class="right">
      </div>
    </div>
    <!-- * App Header -->

    <!-- App Capsule -->
    <div id="appCapsule">


      <div class="section mt-2 mb-2">
        <div class="section-title">Usage</div>
        <div class="card">
          <div class="card-body">
            <h4>Basic Usage</h4>
            Trigger it with;
            <p>
              <code>notification('notificationID')</code>
            </p>
            <h4>Auto Close</h4>
            Also, you can auto close it in any seconds after calls.
            <br>
            <strong>Example : </strong>
            Auto close in 3 seconds.<br>
            <code>notification('notificationID', 3000)</code>
          </div>
        </div>
      </div>


      <div class="section mt-1">
        <div class="section-title">Android Style</div>
        <div class="card">
          <ul class="listview flush transparent image-listview text">
            <li>
              <a href="#" class="item" onclick="notification('notification-1')">
                <div class="in">
                  <div>Default</div>
                </div>
              </a>
            </li>
            <li>
              <a href="#" class="item" onclick="notification('notification-2')">
                <div class="in">
                  <div>Tap to close</div>
                </div>
              </a>
            </li>
            <li>
              <a href="#" class="item" onclick="notification('notification-3')">
                <div class="in">
                  <div>with Image</div>
                </div>
              </a>
            </li>
            <li>
              <a href="#" class="item" onclick="notification('notification-4')">
                <div class="in">
                  <div>Iconed</div>
                </div>
              </a>
            </li>
            <li>
              <a href="#" class="item" onclick="notification('notification-5')">
                <div class="in">
                  <div>with Button</div>
                </div>
              </a>
            </li>
            <li>
              <a href="#" class="item" onclick="notification('notification-6', 3000)">
                <div class="in">
                  <div>Auto Close (in 3s)</div>
                </div>
              </a>
            </li>
          </ul>
        </div>
      </div>

      <!-- android style 1 -->
      <div id="notification-1" class="notification-box">
        <div class="notification-dialog android-style">
          <div class="notification-header">
            <div class="in">
              <img src="../../template_html/assets/img/sample/avatar/avatar3.jpg" alt="image" class="imaged w24 rounded">
              <strong>John Pacheco</strong>
              <span>5 mins ago</span>
            </div>
            <a href="#" class="close-button">
              <ion-icon name="close"></ion-icon>
            </a>
          </div>
          <div class="notification-content">
            <div class="in">
              <h3 class="subtitle">Payment has been sent</h3>
              <div class="text">
                You just sent $ 200 to John.
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- * android style 1 -->

      <!-- android style 2 -->
      <div id="notification-2" class="notification-box tap-to-close">
        <div class="notification-dialog android-style">
          <div class="notification-header">
            <div class="in">
              <img src="../../template_html/assets/img/sample/avatar/avatar3.jpg" alt="image" class="imaged w24 rounded">
              <strong>John Pacheco</strong>
              <span>5 mins ago</span>
            </div>
          </div>
          <div class="notification-content">
            <div class="in">
              <h3 class="subtitle">Tap to close</h3>
              <div class="text">
                Tap to close this notification.
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- * android style 2 -->

      <!-- android style 3 -->
      <div id="notification-3" class="notification-box">
        <div class="notification-dialog android-style">
          <div class="notification-header">
            <div class="in">
              <img src="../../template_html/assets/img/sample/avatar/avatar3.jpg" alt="image" class="imaged w24 rounded">
              <strong>John Pacheco</strong>
              <span>5 mins ago</span>
            </div>
            <a href="#" class="close-button">
              <ion-icon name="close"></ion-icon>
            </a>
          </div>
          <div class="notification-content">
            <div class="in">
              <h3 class="subtitle">Payment has been sent</h3>
              <div class="text">
                You just sent $ 200 to John.
              </div>
            </div>
            <img src="../../template_html/assets/img/sample/photo/1.jpg" alt="image" class="imaged w64">
          </div>
        </div>
      </div>
      <!-- * android style 3 -->

      <!-- android style 4 -->
      <div id="notification-4" class="notification-box">
        <div class="notification-dialog android-style">
          <div class="notification-header">
            <div class="in">
              <img src="../../template_html/assets/img/sample/avatar/avatar3.jpg" alt="image" class="imaged w24 rounded">
              <strong>John Pacheco</strong>
              <span>5 mins ago</span>
            </div>
            <a href="#" class="close-button">
              <ion-icon name="close"></ion-icon>
            </a>
          </div>
          <div class="notification-content">
            <div class="in">
              <h3 class="subtitle">Payment has been sent</h3>
              <div class="text">
                You just sent $ 200 to John.
              </div>
            </div>
            <div class="icon-box text-success">
              <ion-icon name="cash-outline"></ion-icon>
            </div>
          </div>
        </div>
      </div>
      <!-- * android style 4 -->

      <!-- android style 5 -->
      <div id="notification-5" class="notification-box">
        <div class="notification-dialog android-style">
          <div class="notification-header">
            <div class="in">
              <img src="../../template_html/assets/img/sample/avatar/avatar3.jpg" alt="image" class="imaged w24 rounded">
              <strong>John Pacheco</strong>
              <span>5 mins ago</span>
            </div>
            <a href="#" class="close-button">
              <ion-icon name="close"></ion-icon>
            </a>
          </div>
          <div class="notification-content">
            <div class="in">
              <h3 class="subtitle">Payment has been sent</h3>
              <div class="text">
                You just sent $ 200 to John.
              </div>
            </div>
          </div>
          <div class="notification-footer">
            <a href="#" class="notification-button">
              <ion-icon name="wallet-outline"></ion-icon>
              My Wallet
            </a>
            <a href="#" class="notification-button">
              <ion-icon name="card-outline"></ion-icon>
              Debit Card
            </a>
          </div>
        </div>
      </div>
      <!-- * android style 5 -->

      <!-- android style 6 -->
      <div id="notification-6" class="notification-box">
        <div class="notification-dialog android-style">
          <div class="notification-header">
            <div class="in">
              <img src="../../template_html/assets/img/sample/avatar/avatar3.jpg" alt="image" class="imaged w24 rounded">
              <strong>John Pacheco</strong>
              <span>5 mins ago</span>
            </div>
            <a href="#" class="close-button">
              <ion-icon name="close"></ion-icon>
            </a>
          </div>
          <div class="notification-content">
            <div class="in">
              <h3 class="subtitle">Auto close in 3 seconds.</h3>
              <div class="text">
                Lorem ipsum dolor sit amet.
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- * android style 6 -->




      <div class="section mt-2">
        <div class="section-title">iOS Style</div>
        <div class="card">
          <ul class="listview flush transparent image-listview text">
            <li>
              <a href="#" class="item" onclick="notification('notification-7')">
                <div class="in">
                  <div>Default</div>
                </div>
              </a>
            </li>
            <li>
              <a href="#" class="item" onclick="notification('notification-8')">
                <div class="in">
                  <div>Tap to close</div>
                </div>
              </a>
            </li>
            <li>
              <a href="#" class="item" onclick="notification('notification-9')">
                <div class="in">
                  <div>with Image</div>
                </div>
              </a>
            </li>
            <li>
              <a href="#" class="item" onclick="notification('notification-10')">
                <div class="in">
                  <div>Iconed</div>
                </div>
              </a>
            </li>
            <li>
              <a href="#" class="item" onclick="notification('notification-11')">
                <div class="in">
                  <div>with Button</div>
                </div>
              </a>
            </li>
            <li>
              <a href="#" class="item" onclick="notification('notification-12', 3000)">
                <div class="in">
                  <div>Auto Close (in 3s)</div>
                </div>
              </a>
            </li>
          </ul>
        </div>
      </div>


      <!-- ios style 7-->
      <div id="notification-7" class="notification-box">
        <div class="notification-dialog ios-style">
          <div class="notification-header">
            <div class="in">
              <img src="../../template_html/assets/img/sample/avatar/avatar3.jpg" alt="image" class="imaged w24 rounded">
              <strong>John Pacheco</strong>
            </div>
            <div class="right">
              <span>5 mins ago</span>
              <a href="#" class="close-button">
                <ion-icon name="close-circle"></ion-icon>
              </a>
            </div>
          </div>
          <div class="notification-content">
            <div class="in">
              <h3 class="subtitle">Payment has been sent</h3>
              <div class="text">
                You just sent $ 200 to John.
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- * ios style 7 -->

      <!-- ios style 8 -->
      <div id="notification-8" class="notification-box tap-to-close">
        <div class="notification-dialog ios-style">
          <div class="notification-header">
            <div class="in">
              <img src="../../template_html/assets/img/sample/avatar/avatar3.jpg" alt="image" class="imaged w24 rounded">
              <strong>John Pacheco</strong>
            </div>
            <div class="right">
              <span>5 mins ago</span>
            </div>
          </div>
          <div class="notification-content">
            <div class="in">
              <h3 class="subtitle">Tap to close</h3>
              <div class="text">
                Tap on this notification to close.
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- * ios style 8 -->

      <!-- ios style 9-->
      <div id="notification-9" class="notification-box tap-to-close">
        <div class="notification-dialog ios-style">
          <div class="notification-header">
            <div class="in">
              <img src="../../template_html/assets/img/sample/avatar/avatar3.jpg" alt="image" class="imaged w24 rounded">
              <strong>John Pacheco</strong>
            </div>
            <div class="right">
              <span>5 mins ago</span>
            </div>
          </div>
          <div class="notification-content">
            <div class="in">
              <h3 class="subtitle">Payment has been sent</h3>
              <div class="text">
                You just sent $ 200 to John.
              </div>
            </div>
            <img src="../../template_html/assets/img/sample/photo/1.jpg" alt="image" class="imaged w64">
          </div>
        </div>
      </div>
      <!-- * ios style 9-->

      <!-- ios style 10-->
      <div id="notification-10" class="notification-box">
        <div class="notification-dialog ios-style">
          <div class="notification-header">
            <div class="in">
              <img src="../../template_html/assets/img/sample/avatar/avatar3.jpg" alt="image" class="imaged w24 rounded">
              <strong>John Pacheco</strong>
            </div>
            <div class="right">
              <span>5 mins ago</span>
              <a href="#" class="close-button">
                <ion-icon name="close-circle"></ion-icon>
              </a>
            </div>
          </div>
          <div class="notification-content">
            <div class="in">
              <h3 class="subtitle">Payment has been sent</h3>
              <div class="text">
                You just sent $ 200 to John.
              </div>
            </div>
            <div class="icon-box text-success">
              <ion-icon name="finger-print-outline"></ion-icon>
            </div>
          </div>
        </div>
      </div>
      <!-- * ios style 10 -->

      <!-- ios style 11 -->
      <div id="notification-11" class="notification-box">
        <div class="notification-dialog ios-style">
          <div class="notification-header">
            <div class="in">
              <img src="../../template_html/assets/img/sample/avatar/avatar3.jpg" alt="image" class="imaged w24 rounded">
              <strong>John Pacheco</strong>
            </div>
            <div class="right">
              <span>5 mins ago</span>
              <a href="#" class="close-button">
                <ion-icon name="close-circle"></ion-icon>
              </a>
            </div>
          </div>
          <div class="notification-content">
            <div class="in">
              <h3 class="subtitle">Payment has been sent</h3>
              <div class="text">
                You just sent $ 200 to John.
              </div>
            </div>
          </div>
          <div class="notification-footer">
            <a href="#" class="notification-button">
              <ion-icon name="wallet-outline"></ion-icon>
              My Wallet
            </a>
            <a href="#" class="notification-button">
              <ion-icon name="card-outline"></ion-icon>
              Debit Card
            </a>
          </div>
        </div>
      </div>
      <!-- * ios style 11-->

      <!-- ios style 12 -->
      <div id="notification-12" class="notification-box">
        <div class="notification-dialog ios-style">
          <div class="notification-header">
            <div class="in">
              <img src="../../template_html/assets/img/sample/avatar/avatar3.jpg" alt="image" class="imaged w24 rounded">
              <strong>John Pacheco</strong>
            </div>
            <div class="right">
              <span>5 mins ago</span>
              <a href="#" class="close-button">
                <ion-icon name="close-circle"></ion-icon>
              </a>
            </div>
          </div>
          <div class="notification-content">
            <div class="in">
              <h3 class="subtitle">Auto close in 3 seconds.</h3>
              <div class="text">
                Lorem ipsum dolor sit amet.
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- * ios style 12 -->



      <div class="section mt-2 mb-2">
        <div class="section-title">Colors</div>
        <div class="card">
          <ul class="listview flush transparent image-listview text">
            <li>
              <a href="#" class="item" onclick="notification('notification-13')">
                <div class="in">
                  <div class="text-primary">Primary</div>
                </div>
              </a>
            </li>
            <li>
              <a href="#" class="item" onclick="notification('notification-14')">
                <div class="in">
                  <div class="text-secondary">Secondary</div>
                </div>
              </a>
            </li>
            <li>
              <a href="#" class="item" onclick="notification('notification-15')">
                <div class="in">
                  <div class="text-success">Success</div>
                </div>
              </a>
            </li>
            <li>
              <a href="#" class="item" onclick="notification('notification-16')">
                <div class="in">
                  <div class="text-danger">Danger</div>
                </div>
              </a>
            </li>
            <li>
              <a href="#" class="item" onclick="notification('notification-17')">
                <div class="in">
                  <div class="text-warning">Warning</div>
                </div>
              </a>
            </li>
            <li>
              <a href="#" class="item" onclick="notification('notification-18')">
                <div class="in">
                  <div class="text-info">Info</div>
                </div>
              </a>
            </li>
          </ul>
        </div>
      </div>



      <!-- ios style 13 -->
      <div id="notification-13" class="notification-box">
        <div class="notification-dialog ios-style bg-primary">
          <div class="notification-header">
            <div class="in">
              <img src="../../template_html/assets/img/sample/avatar/avatar3.jpg" alt="image" class="imaged w24 rounded">
              <strong>John Pacheco</strong>
            </div>
            <div class="right">
              <span>5 mins ago</span>
              <a href="#" class="close-button">
                <ion-icon name="close-circle"></ion-icon>
              </a>
            </div>
          </div>
          <div class="notification-content">
            <div class="in">
              <h3 class="subtitle">Primary Color</h3>
              <div class="text">
                Notification text.
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- * ios style 13 -->

      <!-- ios style 14 -->
      <div id="notification-14" class="notification-box">
        <div class="notification-dialog ios-style bg-secondary">
          <div class="notification-header">
            <div class="in">
              <img src="../../template_html/assets/img/sample/avatar/avatar3.jpg" alt="image" class="imaged w24 rounded">
              <strong>John Pacheco</strong>
            </div>
            <div class="right">
              <span>5 mins ago</span>
              <a href="#" class="close-button">
                <ion-icon name="close-circle"></ion-icon>
              </a>
            </div>
          </div>
          <div class="notification-content">
            <div class="in">
              <h3 class="subtitle">Secondary Color</h3>
              <div class="text">
                Notification text.
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- * ios style 14 -->

      <!-- ios style 15 -->
      <div id="notification-15" class="notification-box">
        <div class="notification-dialog ios-style bg-success">
          <div class="notification-header">
            <div class="in">
              <img src="../../template_html/assets/img/sample/avatar/avatar3.jpg" alt="image" class="imaged w24 rounded">
              <strong>John Pacheco</strong>
            </div>
            <div class="right">
              <span>5 mins ago</span>
              <a href="#" class="close-button">
                <ion-icon name="close-circle"></ion-icon>
              </a>
            </div>
          </div>
          <div class="notification-content">
            <div class="in">
              <h3 class="subtitle">Success Color</h3>
              <div class="text">
                Notification text.
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- * ios style 15 -->

      <!-- ios style 16 -->
      <div id="notification-16" class="notification-box">
        <div class="notification-dialog ios-style bg-danger">
          <div class="notification-header">
            <div class="in">
              <img src="../../template_html/assets/img/sample/avatar/avatar3.jpg" alt="image" class="imaged w24 rounded">
              <strong>John Pacheco</strong>
            </div>
            <div class="right">
              <span>5 mins ago</span>
              <a href="#" class="close-button">
                <ion-icon name="close-circle"></ion-icon>
              </a>
            </div>
          </div>
          <div class="notification-content">
            <div class="in">
              <h3 class="subtitle">Danger Color</h3>
              <div class="text">
                Notification text.
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- * ios style 16 -->

      <!-- ios style 17 -->
      <div id="notification-17" class="notification-box">
        <div class="notification-dialog ios-style bg-warning">
          <div class="notification-header">
            <div class="in">
              <img src="../../template_html/assets/img/sample/avatar/avatar3.jpg" alt="image" class="imaged w24 rounded">
              <strong>John Pacheco</strong>
            </div>
            <div class="right">
              <span>5 mins ago</span>
              <a href="#" class="close-button">
                <ion-icon name="close-circle"></ion-icon>
              </a>
            </div>
          </div>
          <div class="notification-content">
            <div class="in">
              <h3 class="subtitle">Warning Color</h3>
              <div class="text">
                Notification text.
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- * ios style 17 -->

      <!-- ios style 18 -->
      <div id="notification-18" class="notification-box">
        <div class="notification-dialog ios-style bg-info">
          <div class="notification-header">
            <div class="in">
              <img src="../../template_html/assets/img/sample/avatar/avatar3.jpg" alt="image" class="imaged w24 rounded">
              <strong>John Pacheco</strong>
            </div>
            <div class="right">
              <span>5 mins ago</span>
              <a href="#" class="close-button">
                <ion-icon name="close-circle"></ion-icon>
              </a>
            </div>
          </div>
          <div class="notification-content">
            <div class="in">
              <h3 class="subtitle">Info Color</h3>
              <div class="text">
                Notification text.
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- * ios style 18 -->



    </div>
    <!-- * App Capsule -->

    <!-- App Bottom Menu -->
    <div class="appBottomMenu">
      <a href="index.html" class="item">
        <div class="col">
          <ion-icon name="pie-chart-outline"></ion-icon>
          <strong>Overview</strong>
        </div>
      </a>
      <a href="app-pages.html" class="item">
        <div class="col">
          <ion-icon name="document-text-outline"></ion-icon>
          <strong>Pages</strong>
        </div>
      </a>
      <a href="app-components.html" class="item">
        <div class="col">
          <ion-icon name="apps-outline"></ion-icon>
          <strong>Components</strong>
        </div>
      </a>
      <a href="app-cards.html" class="item">
        <div class="col">
          <ion-icon name="card-outline"></ion-icon>
          <strong>My Cards</strong>
        </div>
      </a>
      <a href="app-settings.html" class="item">
        <div class="col">
          <ion-icon name="settings-outline"></ion-icon>
          <strong>Settings</strong>
        </div>
      </a>
    </div>
    <!-- * App Bottom Menu -->




    <!-- ========= JS Files =========  -->
    <!-- Bootstrap -->
    <script src="../../template_html/assets/js/lib/bootstrap.bundle.min.js"></script>
    <!-- Ionicons -->
    <!--<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>-->
    <script type="module" src="../../template_html/assets/js/ionicons.js"></script>
    <!-- Splide -->
    <script src="../../template_html/assets/js/plugins/splide/splide.min.js"></script>
    <!-- Base Js File -->
    <script src="../../template_html/assets/js/base.js"></script>


  </body>

</html>