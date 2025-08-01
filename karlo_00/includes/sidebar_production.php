<?php 
error_reporting(0);
$url = basename($_SERVER['SCRIPT_NAME']);
?>
<style>
   input[disabled] {
        background-color: #e9ecef !important; /* Light gray background */
        color: #6c757d !important; /* Gray text color */
    }
    .modal-footer {
     display: flex;
     align-items: center;
     justify-content: center;
    }
    .modal-footer .contact{
      margin-top: 15px;
      margin-bottom: 15px;
    }
    .nav-link:hover{
      transform: scale(1.1);
    }
</style>
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
          <li class="nav-item <?php echo (($url == 'prod_sticker_postgres.php') ? '' : ''); ?>">
            <a class="nav-link" href="prod_sticker_postgres.php" style="background: #800080 !important; color: #ffffff;">
              <i class="material-icons" style="color: #ffffff !important;">dashboard</i>
              <b><p>ODOO LABEL (PACK)</p></b>
            </a>
  </li>
          <li class="nav-item <?php echo (($url == 'prod_sticker.php') ? '' : ''); ?>">
            <a class="nav-link" href="prod_sticker.php" style="background: #FF7F50 !important; color: #ffffff;">
              <i class="material-icons" style="color: #ffffff !important;">dashboard</i>
              <b><p>ORACLE LABEL</p></b>
            </a>
          </li>
          <li class="nav-item <?php echo (($url == '') ? '' : ''); ?>">
            <a class="nav-link" href="#" style="background: #9e1b32 !important; color: #ffffff;">
              <i class="material-icons" style="color: #ffffff !important;">dashboard</i>
              <b><p>SEMIQ LABEL<span> (soon)</span></p></b>
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
              <i class="fa fa-headphones"></i>
              <p>Need assistance?</p>
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
        <h5 class="modal-title" id="exampleModalLabel">LABEL STICKER SUPPORT</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <h5 class="contact">Contact MIS 269/267 for additional support.</h5>
        <!-- <form id="ipForm" method="post" autocomplete="off">
          <div class="form-group">
            <label for="ipAddress">IP Address:</label>
            <input type="text" class="form-control" id="ipAddress" name="host" disabled>
          </div>
          <div class="form-group">
            <label for="port">Port:</label>
            <input type="text" class="form-control" id="port" name="port" disabled>
          </div>
            <button type="button" id="editButton" class="btn btn-link btn-warning">Enable Edit</button>
            <button type="submit" class="btn btn-link btn-info" disabled>Save</button>
        </form> -->
        <!-- <div class="modal-footer">
             
            </div> -->
      </div>
    </div>
  </div>
</div>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
      $('#btnSupport').on('click', function(){
        $('#modalSupport').modal('show');
      })

//       $(document).ready(function() {
//     $('#ipForm').submit(function(e) {
//         e.preventDefault(); // Prevent the default form submission
        
//         // Send the form data directly, let the server handle the IP and date
//         $.ajax({
//             type: 'POST',
//             url: 'ajax/printer_maintenance.php', 
//             data: $(this).serialize(), 
//             dataType: 'json',
//             success: function(response) {
//                 if (response.status == 1) {
//                     alert('Socket connected successfully!');
//                     window.location.reload()
//                 } else {
//                     alert('Socket connection failed.');
//                 }
//                 $('#modalSupport').modal('hide');
//             },
//             error: function() {
//                 alert('An error occurred while processing the request.');
//             }
//         });
//     });
// });

// $(document).ready(function() {
//     $.getJSON('ajax/printer_config.json', function(data) {
//         $('#ipAddress').val(data.host);
//         $('#port').val(data.port);
//     }).fail(function() {
//         console.error('Error loading the configuration.');
//     });

//     $('#editButton').on('click', function() {
//         var password = prompt("Enter password to edit:");
      
//         if (password) {
//             $.post('ajax/validate_password.php', { password: password }, function(response) {
//                 var result = JSON.parse(response);

//                 if (result.success) {
//                     $('#ipAddress').prop('disabled', false);
//                     $('#port').prop('disabled', false);
//                     $('#ipForm button[type="submit"]').prop('disabled', false);
//                 } else {
//                     alert(result.message);
//                 }
//             }).fail(function() {
//                 alert('Error validating password.');
//             });
//         }
//     });
// });
    </script>