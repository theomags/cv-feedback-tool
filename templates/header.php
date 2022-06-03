<link rel="stylesheet" href="../templates/style.css"/>
<div class="Headban"></div>
<div class="header" id="myHeader">
  <?php
  $link = <<<link
  <button class="btn blue" onclick="window.location.href='
  link;
  $end = <<<endlink
  '">
  endlink;

if ($_SERVER["PHP_SELF"] !== '/loginWeb/index.php' && $_SERVER["PHP_SELF"] !== '/loginWeb/signup.php') {

  if($_SERVER["PHP_SELF"] !== '/upWeb/index.php') {
    print $link . 'http://localhost/upWeb/' . $end . "New Applicant</button>";
  }
  if($_SERVER["PHP_SELF"] !== '/editWeb/index.php') {
    print $link . 'http://localhost/editWeb/' . $end . "Edit Template</button>";
  }
  // if($_SERVER["PHP_SELF"] !== '/cvWeb/index.php') {
  //   print $link . 'http://localhost/cvWeb/' . $end . "Response</button>";
  // }
  if($_SERVER["PHP_SELF"] !== '/listWeb/index.php') {
    print $link . 'http://localhost/listWeb/index.php' . $end . "Applicant List</button>";
  }
  if($_SERVER["PHP_SELF"] !== '/loginWeb/logout.php') {
    print $link . 'http://localhost/loginWeb/logout.php' . $end . "Log Out</button>";
  }
}
   ?>
</div>
