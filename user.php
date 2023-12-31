<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html><html  lang="en-us"><head><title>PimaBima</title><meta property="og:type" content="website" /><meta property="og:title" content="Acorns - Invest, Earn, Grow, Spend, Later | Acorns" /><meta name="twitter:title" content="Acorns - Invest, Earn, Grow, Spend, Later | Acorns"><meta property="og:description" content="Acorns helps you save &amp; invest. Invest spare change, bank smarter, earn bonus investments, and more! Get started." /><meta property="twitter:description" content="Acorns helps you save &amp; invest. Invest spare change, bank smarter, earn bonus investments, and more! Get started." /><meta property="og:url" content="https://www.acorns.com/" /><meta name="twitter:card" content="summary_large_image"><meta property="og:image" content="https://sqy7rm.media.zestyio.com/Envoy-Home-CLIR-1.png?width=1200&height=630&fit=crop" /><meta property="og:image:url" content="https://sqy7rm.media.zestyio.com/Envoy-Home-CLIR-1.png?width=1200&height=630&fit=crop" /><meta property="og:image:width" content="1200" /><meta property="og:image:height" content="630" /><meta property="twitter:image:src" content="https://sqy7rm.media.zestyio.com/Envoy-Home-CLIR-1.png?width=1200&height=630&fit=crop" /><meta property="twitter:image:width" content="1200" /><meta property="twitter:image:height" content="630" /><meta property="og:site_name" content="Acorns" /><meta name="description" content="Acorns helps you save &amp; invest. Invest spare change, bank smarter, earn bonus investments, and more! Get started." /><meta  http-equiv="Content-Type" content="text/html;charset=utf-8"><meta  name="viewport" content="width=device-width, initial-scale=1.0"><meta  name="apple-itunes-app" content="app-id=883324671"><meta  name="google-site-verification" content="zz28cwlpNcO2KtqaUTVAV7JAqbInQ_j31p-xl04pBbo"><meta  name="google-site-verification" content="HEhKySN8QOgvY_TgjTyHpYW6rbfTFwmLfWJvc-J5GCA"><meta  http-equiv="Content-Security-Policy" content="default-src https: wss: 'unsafe-inline' 'unsafe-eval' data:;"><meta  name="version" content="CV"><meta  http-equiv="strict-transport-security" content="max-age=31536000; includeSubDomains; preload"><meta  http-equiv="x-content-type-options" content="nosniff"><meta  http-equiv="referrer-policy" content="no-referrer"><meta  http-equiv="referrer-policy" content="strict-origin-when-cross-origin"><meta name="feature-policy" content="midi 'none';sync-xhr 'none';microphone 'none';camera 'none';magnetometer 'none';gyroscope 'none';speaker 'self';vibrate 'none';fullscreen 'self';"  />
<link rel="icon" href="https://freesvg.org/img/heartbeatw.png" type="image/png" sizes="196x196"  />
<meta name="apple-mobile-web-app-status-bar-style" content="black"  />
<meta content="IE=edge" http-equiv="X-UA-Compatible"  />
<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0"  />
<meta name="apple-mobile-web-app-capable" content="yes"  />
<meta name="facebook-domain-verification" custom="true" content="u6lwypb2enhceo6riymov3yga2pk4p"  />
<link rel="canonical" href="index.html" /><link type="text/css" href="https://www.acorns.com/site.css?v=f21fc9bb6e2f2a9301b405e4849de9dd" rel="stylesheet" media="screen" /><script type="text/javascript" src="https://www.acorns.com/site.js?v=a36b52748be73088c99777df73c8cc7a"></script><link rel="dns-prefetch" href="index.html" /><!-- Google Analytics --><script>(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)})(window,document,'script','//www.google-analytics.com/analytics.js','ga');ga('create', 'UA-46142661-9', 'auto');ga('send', 'pageview');</script><!-- Google Analytics --></head><body class="view-envoy_home" itemscope="" itemtype="https://schema.org/WebPage">
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script src="https://cdn.optimizely.com/js/9730220283.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


<script src="https://sqy7rm.media.zestyio.com/main-min.ryQgJnztE.js"></script>
<link rel=”stylesheet” href=”https://pyscript.net/alpha/pyscript.css" />
<script defer src=”https://pyscript.net/alpha/pyscript.js"></script>
<style>
  .container {
      display: flex;
    }
    
    .container section {
      flex: 1;
      margin-right: 20px;
    }
    
    .container aside {
      flex: 0.5;
      margin-top: 50px;
    }
.bg-blue {
      background-color: #61B0B7;
    }
    .a5-cta {
      background-color: #61B0B7;
      margin: 20px;
      margin-top: 10px;
    }
    
    
    .footer-cta1 {
  background-color: #61B0B7;
  color: white; /* Set the text color to ensure readability */
  padding: 20px 20px; /* Adjust padding as needed */
  display: inline-block;
  border-radius: 4px;
  text-decoration: none;
  /* Additional styling properties */
}

.button-label {
  margin-right: 10px; /* Adjust spacing between the button and text */
  margin-top: 10px;
}
.sticky-action-cta1 {
  background-color: #61B0B7;
  color: white;
  padding: 10px 20px;
  display: inline-block;
  border-radius: 4px;
  text-decoration: none;
  /* Additional styling properties */
}

    .logo-wrapper{
      color:blue;
    }
    .envoy-hero-wrapper{
      font-size: large;
    }
    .myChart{
      
      position: absolute;
      top:50%;
      left:50%;
      transform: translate(-50%,-50%);


    }
    canvas {
      max-width: 600px;
      margin: 20px auto;
      height: 400px;
    }
    .battery-container {
      width: 200px;
      height: 80px;
      border: 2px solid #000;
      border-radius: 5px;
      position: relative;
      overflow: hidden;
    }
    
    .battery-level {
      width: 100%;
      height: 100%;
      background-color: #61c9e6;
      position: absolute;
      bottom: 0;
    }
    
    .battery-level.empty {
      background-color: #61B0B7;
    }
    
    .battery-level-text {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      font-size: 18px;
      font-weight: bold;
      color: #000;
    }
    .calendar-container {
      display: flex;
      flex-wrap: wrap;
      max-width: 300px;
      margin: 0 auto;
    }

    .calendar-day {
      width: 30px;
      height: 30px;
      border: 1px solid #ccc;
      text-align: center;
      line-height: 30px;
      font-size: 12px;
    }

    .calendar-day.past {
      text-decoration: line-through;
      background-color: #eee;
    }
    
</style>
<body id="body">
<div id="envoy-home">
  
<div id="header-nav-desktop" class="hide-on-md">

  <div class="main-content-wrapper">
    <div class="header-nav-left">
      <a class="logo-wrapper" href="index.html">
        <img src="https://img.icons8.com/?size=2x&id=iD4h0fo5IvAd&format=png" alt="PimaBima-logos_transparent" />
      </a>

      

        
          <div class="header-nav-item nav-item-with-children" href="index.html">
            Home
            

          </div>
              

                

      

        
          <a class="header-nav-item" href="solutions.html" data-track-id="redesignedHeaderSpend">
            Solutions
            <div class="hover-bottom-border"></div>
          </a>
        

      

        
          <a class="header-nav-item" href="map.html" data-track-id="redesignedHeaderEarn">
            Medical service providers
            <div class="hover-bottom-border"></div>
          </a>
        

      

        
          <a class="header-nav-item" href="packages.html" data-track-id="">
            Packages
            <div class="hover-bottom-border"></div>
          </a>
        

      

        
          <a class="header-nav-item" href="about.html" data-track-id="redesignedHeaderPricing">
            About us
            <div class="hover-bottom-border"></div>
          </a>
        

      
    </div>
    <div class="header-nav-right">
      
      <a class="a5-cta" href="form.html" data-track-id="headerGetStarted">
        Log out
      </a>
    </div>
  </div>
  
</div>

 
</div>
<div class="added-mobile-spacing hide-on-desktop"></div>


<script>
  var headerNav = document.querySelector('#header-nav-desktop')
  var headerNavItems = document.querySelectorAll('#header-nav-desktop .header-nav-item')
  var headerNavSubitems = document.querySelectorAll('#header-nav-desktop .header-nav-submenu-container')

  function handleNavMouseLeave(e, nav) {
    nav.classList.remove('active')
  }

  function handleNavItemMouseEnter(e, item) {
    item.classList.add('active')
    if (!item.closest('.header-nav-right')) {
      headerNav.classList.add('active')
    }
  }

  function handleNavItemMouseLeave(e, item) {
    item.classList.remove('active')
    if (!e.relatedTarget || !e.relatedTarget.closest('#header-nav-desktop')) {
      headerNav.classList.remove('active')
    }
    else {
      window.setTimeout(() => {
        if (!document.querySelector('.header-nav-item.active')) {
          headerNav.classList.remove('active')
        }
      }, 300)
    }
  }

  function handleNavSubitemMouseEnter(e, subitem) {
    subitem.classList.add('active')
  }

  function handleNavSubitemMouseLeave(e, subitem) {
    subitem.classList.remove('active')
  }

  headerNav.addEventListener('mouseleave', e => handleNavMouseLeave(e, headerNav))

  headerNavItems.forEach(navItem => {
    navItem.addEventListener('mouseenter', e => handleNavItemMouseEnter(e, navItem))
    navItem.addEventListener('mouseleave', e => handleNavItemMouseLeave(e, navItem))
  })

  headerNavSubitems.forEach(navSubitem => {
    navSubitem.addEventListener('mouseenter', e => handleNavSubitemMouseEnter(e, navSubitem))
    navSubitem.addEventListener('mouseleave', e => handleNavSubitemMouseLeave(e, navSubitem))
  })

  var headerNavMobile = document.querySelector('#header-nav-mobile')
  var headerNavMobileToggleWrapper = document.querySelector('.mobile-nav-toggle-wrapper')
  var headerNavMobileItems = document.querySelectorAll('#header-nav-mobile .nav-item-with-children')

  headerNavMobileToggleWrapper.addEventListener('click', () => {
    headerNavMobile && headerNavMobile.classList.toggle('nav-opened')
  })

  function toggleMobileNavItemActiveClass(e, item) {
    var currentlyActiveItem = document.querySelector('#header-nav-mobile .nav-item-with-children.active')
    if (currentlyActiveItem && currentlyActiveItem !== item) {
      currentlyActiveItem.classList.remove('active')

      var currentlyActiveItemSubitems = currentlyActiveItem.querySelectorAll('.header-nav-submenu-container')
      currentlyActiveItemSubitems.forEach(subitem => {
        subitem.style = "opacity: 0; transition-delay: 0ms;"
      })
    }

    item.classList.toggle('active')

    var subitems = item.querySelectorAll('.header-nav-submenu-container')
    if (item.classList.contains('active')) {
      subitems.forEach((subitem, i) => {
        var delayBeforeStart = 200
        var transitionDelay = i ? (delayBeforeStart + (i * 160)) : delayBeforeStart
        subitem.style = "opacity: 1; transition-delay: " + transitionDelay + "ms;"
      })
    }
    else if (e.target && e.target.closest('.nav-item-with-children-title')) {
      subitems.forEach(subitem => {
        subitem.style = "opacity: 0; transition-delay: 0ms;"
      })
    }
  }

  headerNavMobileItems.forEach(item => {
    item.addEventListener('click', e => toggleMobileNavItemActiveClass(e, item))
  })

  function initializeHideMobileNavOnScrollUp() {
    let lastScrollTop = 0
    let hasRun = false

    window.addEventListener("scroll", function() {
     const isMobileNavOpen = !!headerNavMobile.classList.contains('nav-opened')
     const documentBody = document && document.body
     if (isMobileNavOpen || !documentBody) return

     let st = window.pageYOffset || document.documentElement.scrollTop
     if (st > lastScrollTop) {
       if (!hasRun) {
         headerNavMobile && headerNavMobile.classList.remove('scroll-up-transition')
         documentBody.classList.remove('scroll-up-transition')
         headerNavMobile && headerNavMobile.classList.remove('scroll-up-no-transition')
         headerNavMobile && headerNavMobile.classList.remove('scroll-up')

         hasRun = true
       }
     } else {
       if (hasRun) {
         headerNavMobile.classList.remove('scroll-up-transition')
         documentBody.classList.remove('scroll-up-transition')
         headerNavMobile.classList.remove('scroll-up-no-transition')
         headerNavMobile.classList.add('scroll-up')
         if (st <= 60) {
           headerNavMobile.classList.add('scroll-up-no-transition')
         }
         else {
           window.setTimeout(function() {
             headerNavMobile.classList.add('scroll-up-transition')
             documentBody.classList.add('scroll-up-transition')
           }, 1)
         }
         hasRun = false
       }
     }
     lastScrollTop = st <= 0 ? 0 : st
    }, false)
  }

  initializeHideMobileNavOnScrollUp()
</script>
 



<div class="envoy-hero-wrapper add-header-padding">
  <div class="hero-subheadline envoy-body-large black">
     
    <p><strong>Karibu kwenye Boma</strong> <span id="name"></span></p>
    
</div>
 
  <div class="copy-wrapper">
    <div class="buttonsuser">
      <a href="deposits.html" class="a5-cta">
        Make deposit
      </a>
      <a href="marketplace.html" class="a5-cta">
        Bima Marketplace
      </a>
      <a href="bongapoints.html" class="a5-cta">
        Challenges
      </a>
      <a href="history.html" class="a5-cta">
        History
      </a>
      
    </div>
   
    

    
      
      

    

    
   
  
    <div class="container">
      <section>
        <canvas id="contributionsChart"></canvas>
        <div class="calendar-container" id="calendarContainer"></div>
  
      </section>
  
      <aside>
        <div class="battery-container">
          <div class="battery-level" id="batteryLevel"></div>
          <div class="battery-level-text" id="batteryLevelText"></div>
        </div>
      </aside>
      
  <script>
    // Sample data for contributions made in a year
    const contributionsData = [
      { month: 'January', amount: 150 },
      { month: 'February', amount: 200 },
      { month: 'March', amount: 180 },
      { month: 'April', amount: 220 },
      { month: 'May', amount: 170 },
      { month: 'June', amount: 190 },
      { month: 'July', amount: 210 },
      { month: 'August', amount: 240 },
      { month: 'September', amount: 230 },
      { month: 'October', amount: 200 },
      { month: 'November', amount: 250 },
      { month: 'December', amount: 280 }
    ];

    // Prepare the data for Chart.js
    const chartLabels = contributionsData.map(data => data.month);
    const chartData = contributionsData.map(data => data.amount);

    // Create the chart using Chart.js
    const ctx = document.getElementById('contributionsChart').getContext('2d');
    new Chart(ctx, {
      type: 'bar',
      data: {
        labels: chartLabels,
        datasets: [{
          label: 'Contributions',
          data: chartData,
          backgroundColor: 'rgba(54, 162, 235, 0.5)',
          borderColor: 'rgba(54, 162, 235, 1)',
          borderWidth: 1
        }]
      },
      options: {
        responsive: true,
        scales: {
          y: {
            beginAtZero: true
          }
        },
        onClick: (event, chartElements) => {
          if (chartElements && chartElements.length > 0) {
            const selectedMonthIndex = chartElements[0].index;
            const selectedData = contributionsData[selectedMonthIndex];
            updateBatteryLevel(selectedData.amount);
          }
        }
      }
    });

    // Function to update the battery level
    function updateBatteryLevel(userAmount) {
      const targetAmount = 500;
      Math.trunc ().batteryLevel;
      batteryLevel = (userAmount / targetAmount) * 100;

      const batteryLevelElement = document.getElementById('batteryLevel');
      batteryLevelElement.style.height = `${batteryLevel}%`;

      const batteryLevelTextElement = document.getElementById('batteryLevelText');
      batteryLevelTextElement.textContent = `${batteryLevel}%`;

      if (userAmount < targetAmount) {
        batteryLevelElement.classList.add('empty');
      } else {
        batteryLevelElement.classList.remove('empty');
      }
    }
    
  </script>
  <script>
    const calendarContainer = document.getElementById('calendarContainer');
  
  // Get the current date
  const currentDate = new Date();
  
  // Generate the calendar
  for (let i = 0; i < 12; i++) {
    const calendarDay = document.createElement('div');
    calendarDay.classList.add('calendar-day');
  
    // Get the month name and amount
    const { month, amount } = contributionsData[i];
  
    calendarDay.textContent = month.slice(0, 3);
  
    // Add a class to mark past months
    if (i < currentDate.getMonth()) {
      calendarDay.classList.add('past');
    }
  
    // Add the calendar day to the container
    calendarContainer.appendChild(calendarDay);
  }
  </script>
  </div>
</div>


   
</div>
</div>
<script>
    // Retrieve user data from local storage
    var name = localStorage.getItem("name");
    var nhifNumber = localStorage.getItem("nhifNumber");
    var idNumber = localStorage.getItem("idNumber");

    // Display user data in the profile
    document.getElementById("name").textContent = name;
    document.getElementById("nhifNumber").textContent = nhifNumber;
    document.getElementById("idNumber").textContent = idNumber;
  </script>
  </body>
  </html>
