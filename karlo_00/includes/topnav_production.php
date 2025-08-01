<!--  
<nav class="navbar navbar-expand-lg fixed-top bg-dark">
  <div class="container">

    <a class="navbar-brand" href="index.php" style="letter-spacing: 2px;"><b>ITEM UPDATING SYSTEM</b></a>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img  class ='rounded mx-auto ' src="<?php echo ($_SESSION['IE_display_pic']); ?>" alt="User" width ="33" height="33"> &nbsp;
              <?php echo ($_SESSION['IE_empname']); ?> <i class="material-icons">person</i>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" id ='btnLogout'>Logout</a>
            
          </div>
        </li>
      </ul>
    </div>
  </div>
</nav> -->

<nav class="navbar navbar-expand-lg navbar-absolute fixed-top bg-dark " style="background-color: #7C7BAD !important;">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="index.php" style="letter-spacing: 2px;"><b>BARCODE/QR PRINTING SYSTEM</b></a>
            
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <div class="navbar-form">
            </div>
            <ul class="navbar-nav">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <!-- <img  class ='rounded mx-auto ' src="<?php echo ($_SESSION['IE_display_pic']); ?>" alt="User" width ="33" height="33"> -->
                   <!-- &nbsp; -->
                   WELCOME, USER!
               <i class="material-icons">person</i>
                </a>
                <!-- <a class="nav-link dropdown-toggle">WELCOME!</a> -->
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                  <!-- <a class="dropdown-item"id='btnLogout'>Log out</a> -->
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>

<script>

  $('#btnLogout').on('click', function(){
          swal({
             type: "warning",
             title: "Do you want to logout?",
             text:"Your session will end.",
             confirmButtonText: "YES!",
             showCancelButton:true,
             html: true
              },function () {
                $.ajax({
                      type:'post',
                      dataType:'json',
                      url:'ajax/userLogout.php',
                      success: function(data){
                          if(data == 1){
                            window.location.href="login.php";
                          }else{
                            swal('Oops, something went wrong.','Please contact support.','error');
                          }
                      }
                })
                
           });
  })

</script>
