<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-PNM05H2BF7"></script>
  <script>
    setTimeout(function() {
      window.dataLayer = window.dataLayer || [];

      function gtag() {
        dataLayer.push(arguments);
      }
      gtag('js', new Date());
      gtag('config', 'G-PNM05H2BF7');
    }, 5000); // Delay in milliseconds
  </script>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?php echo $pageTitle; ?></title>
  <meta name="description" content="<?php echo $pageDescription; ?>">
  <link rel="apple-touch-icon" sizes="76x76" href="./images/fav-icon.png">
  <link rel="icon" type="image/png" sizes="16x16" href="./images/fav-icon.png">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Albert+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="./vendor/vendor.css?v=1">
  <link rel="stylesheet" href="./css/style.css?v=1">
  <link rel="stylesheet" href="./css/custom.css?v=1">
  <script>
    // Function to asynchronously load scripts
    function loadScript(src, callback) {
      var script = document.createElement('script');
      script.src = src;
      script.async = true;
      script.onload = callback;
      document.head.appendChild(script);
    }

    // Load Zendesk chat widget script asynchronously after a delay
    setTimeout(function() {
      loadScript('https://static.zdassets.com/ekr/snippet.js?key=18f85f41-59dc-49de-b277-7e774b3231f9');
    }, 5000); // Delay in milliseconds
  </script>
</head>

<body>