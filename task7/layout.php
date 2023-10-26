<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <header class="border-bottom lh-1 py-3">
    <div class="row flex-nowrap justify-content-between align-items-center">
      <div class="col-4 pt-1">
        <a class="link-secondary" href="#">Subscribe</a>
      </div>
      <div class="col-4 text-center">

        <a class="blog-header-logo text-body-emphasis text-decoration-none" href="#">
          <?php if(isset($_SESSION['welcome_name'])):?>
          <?=$_SESSION['welcome_name']?>
          <?php else:?>
            <h1>plz login</h1>
          <?php endif?>

        </a>
      </div>
      <div class="col-4 d-flex justify-content-end align-items-center">
        <form action="">
        <a class="link-secondary" href="#" aria-label="Search">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="mx-3" role="img" viewBox="0 0 24 24"><title>Search</title><circle cx="10.5" cy="10.5" r="7.5"></circle><path d="M21 21l-5.2-5.2"></path></svg>
        </a>
        <input type="text" placeholder='search'>
        </form>
       <?php if(isset($_SESSION['welcome_name'])):?>
        <a class="btn btn-sm btn-outline-secondary" href="logout.php">Logout</a>
         <?php else:?>
          <a class="btn btn-sm btn-outline-secondary" href="login.php">Log_in</a>
          <?php endif?>
      </div>
    </div>
  </header>
    <footer class="py-5 text-center text-body-secondary bg-body-tertiary">
  <p>Blog template built for <a href="https://getbootstrap.com/">Bootstrap</a> by <a href="https://twitter.com/mdo">@mdo</a>.</p>
  <p class="mb-0">
    <a href="#">Back to top</a>
  </p>
</footer>
</body>
</html>