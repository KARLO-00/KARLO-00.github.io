<?php 
$url = basename($_SERVER['SCRIPT_NAME']);
?>
 <div class="se-pre-con"></div>
<div class="sidebar" data-color="azure" data-background-color="white" data-image="public/theme/img/sidebar-1.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text logo-normal">
          MIS SYSTEM
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item <?php echo (($url == 'index.php') ? 'active' : ''); ?>">
            <a class="nav-link" href="index.php">
              <i class="material-icons">dashboard</i>
              <b><p>PRINT STICKER</p></b>
            </a>
          </li>

       <!--    <li class="nav-item <?php echo (($url == 'user.php') ? 'active' : ''); ?>">
            <a class="nav-link" href="user.php">
              <i class="material-icons">people</i>
              <b><p>USER MANAGEMENT</p></b>
            </a>  
          </li> -->
<!--           <li class="nav-item <?php echo (($url == 'index.php') ? 'active' : ''); ?>">
            <a class="nav-link" href="index.php">
              <i class="material-icons">settings_backup_restore</i>
              <b><p>REVERSE</p></b>
            </a>
          </li> -->
         
          <li class="nav-item active-pro ">
            <a class="nav-link" href="javascript:void(0)" id="btnSupport">
              <i class="material-icons">headset_mic</i>
              <p>NEED A ASSISTANCE?</p>
            </a>
          </li>
        </ul>
      </div>
    </div>

<!-- Modal -->
<div class="modal fade" id="modalSupport" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">SUPPORT CONTACT DETAILS</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div  class ='mr-auto ml-auto'>
        
        Support: Kaye Ann Piñas | MIS <br>
        Local: 267 <br>
        Email: kaye.pinas@teamglac.com
        
        </div>
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-link btn-info" data-dismiss="modal">Got it!</button>
      </div>
    </div>
  </div>
</div>

    <script>
      $('#btnSupport').on('click', function(){
        $('#modalSupport').modal('show');
      })
    </script>