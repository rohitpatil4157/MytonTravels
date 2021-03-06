<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="generator" content="">
    <title>Shree Tours and Travels</title>

    <link rel="canonical" href="">
<link rel="stylesheet" type="text/css" href="css/style.css">
    

    <!-- Bootstrap core CSS -->
<link href="https://getbootstrap.com/docs/5.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  
<link rel="manifest" href="https://getbootstrap.com/docs/5.1/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="https://getbootstrap.com/docs/5.1/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">

<link rel="stylesheet" type="text/css" href="css/slick.css">
    <link rel="stylesheet" type="text/css" href="css/slick-theme.css">



<meta name="theme-color" content="#7952b3">

  
    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">

<style type="text/css">
    html{
  transition: 0.5s cubic-bezier(0.55, 0.055, 0.675, 0.19);
}
html a{
  text-decoration : none;
}
html::-webkit-scrollbar {
    width: 8px;
    border-radius: 5px;

}

html::-webkit-scrollbar-thumb {
    background: rgba(0, 0, 0, 0.839);
    border-radius: 5px;
}

html::-webkit-scrollbar-thumb:hover {
    transition: 2s cubic-bezier(0.55, 0.055, 0.675, 0.19);
    background: rgb(18, 252, 135);
    background: var(--theme-color);
}

::selection {
    background: var(--theme-color);
    color: white;
    cursor: pointer;
}

:root {
    --theme-color: #00095E;
    --txt-color: whitesmoke;
}
.navbar{
  border-bottom: 3.2px solid #7dffbf;
  margin: 0px;
}
.navbar .container-fluid{
  margin: 0px 50px;
}
.navbar-brand {
  padding-top: .3125rem;
  padding-bottom: .3125rem;
  margin-right: 17rem !important;
  font-size: 1.25rem;
  text-decoration: none;
  white-space: nowrap;
}
.btn-primary {
  color: #fff;
  background-color: #0d6efd;
  border-color: #0d6efd;
  margin-top: -39rem;
  margin-left: -1rem;
}

</style>

  </head>
  <body>
    
<header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php"><h1>Travel Listing</h1></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="index.html">Home</a>
          </li>
           <li class="nav-item">
            <a class="nav-link" href="domestic.html">Domestic Holidays</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="international.hrml">International Holidays</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./admin/index.php">Login</a>
          </li>
        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
</header>

<main>

   <section class="topheader">
  <div class="container">
        <div class="row">
        
            <h3 class="mt-4 mb-4 theader">International Holiday - <?php echo $_SERVER['QUERY_STRING']; ?></h3>
            
          </div>
        </div>

</section>


<div class="container">

<div class="row">
                  <?php
        
        include("connect.php");
        $qs=$_SERVER['QUERY_STRING'];         
        $data=mysql_query("select * from tripinfo where destination='$qs'");
        $file_path = "admin/header/";
                  
        while($rec=mysql_fetch_row($data))
        {
          $a=$rec[8];
          $src=$file_path.$a;
          
          $pcode=$rec[0];
          $_SESSION['pcode']=$pcode;
          $pcode=$_SESSION['pcode'];
          $destination=$rec[9];
          $_SESSION['destination']=$destination;
          $destination=$_SESSION['destination']; 

echo "<div class='col-md-4 col-sm-6 mb-3'>
<div class='card' style='width: 100%;'>
  <img class='card-img-top' src='$src' alt='' style='width:100%; height:150px'>
  <div class='card-body'>
   <a href='international-view.php?$pcode'> <h5 class='card-title'>$rec[1]</h5></a>
    <span style='float:right'><i class='fa fa-map-marker'></i> <a href='interndestination.php?$destination'>$rec[9]</a></span><br>
    <span style='text-align:left'><i class='fa fa-clock-o'></i> Package Code: $rec[0]</span><br><br>
     <span style='text-align:left'><i class='fa fa-calendar'></i> $rec[4]</span><br>

     <span><i class='fa fa-map-marker'></i> From : $rec[5] <i class='fa fa-map-marker'></i> To : $rec[6]</span><br>
    <a href='#' class='btn btn-primary'><i class='fa fa-inr'></i> $rec[3]</a>
  </div>
</div></div>";

    }
        ?>
    </div>
</div>


<p>&nbsp;</p>

  <!-- FOOTER -->
  <footer class="container">
    <p class="float-end"><a href="#">Back to top</a></p>
    <p>&#169; All right Reserved &#124; Shree Tours & Travels</p>
  </footer>
</main>


    <script src="https://getbootstrap.com/docs/5.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

      <script src="js/slick.min.js"></script>
<!-- Wow Animation JS -->
<script src="js/wow.min.js"></script>
<script src="js/custom.js"></script>

  </body>
</html>
