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
</style>
 <div class="se-pre-con"></div>
<div class="sidebar" data-color="azure" data-background-color="white" data-image="public/theme/img/sidebar-1.jpg" id="sidebar_approval">
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
          <!-- <li class="nav-item <?php echo (($url == 'shipping.php') ? 'active' : ''); ?>">
            <a class="nav-link" href="shipping.php" style="background: #000000 !important;">
              <i class="material-icons">dashboard</i>
              <b><p>ODOO LABEL (SHIPPING)</p></b>
            </a>
          </li> -->
          
          <li class="nav-item <?php echo (($url == 'index_approval_sys.php') ? 'active' : ''); ?>">
            <a class="nav-link" href="index_approval_sys.php" style="background:rgb(123, 124, 170) !important; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2) !important;">
              <!-- <i class="material-icons">dashboard</i> -->
              <b><p class="text-white text-center">Document Request</p></b>
            </a>
          </li>

          <li class="nav-item <?php echo (($url == 'approve_docs.php') ? 'active' : ''); ?>">
            <a class="nav-link" href="approve_docs.php" style="background:rgb(123, 124, 170) !important; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2) !important;">
              <!-- <i class="material-icons">people</i> -->
               <b><p class="text-white text-center">Approve Documents</p></b>
            </a>
          </li>

<!--           <li class="nav-item <?php echo (($url == 'index.php') ? 'active' : ''); ?>">
            <a class="nav-link" href="index.php">
              <i class="material-icons">settings_backup_restore</i>
              <b><p>REVERSE</p></b>
            </a>
          </li> -->
         
          <li class="nav-item active-pro ">
            <a class="nav-link" href="javascript:void(0)" id="btnSupport">
              <i class="fa fa-wrench"></i>
              <p>MAINTENANCE</p>
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
        <h5 class="modal-title" id="exampleModalLabel">PRINTER IP ADDRESS</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="ipForm" method="post" autocomplete="off">
          <div class="form-group">
            <label for="ipAddress">IP Address:</label>
            <input type="text" class="form-control" id="ipAddress" name="host" disabled>
          </div>
          <div class="form-group">
            <label for="port">Port:</label>
            <input type="text" class="form-control" id="port" name="port" disabled>
          </div>
          <!-- <div class="modal-footer"> -->
            <button type="button" id="editButton" class="btn btn-link btn-warning">Enable Edit</button>
            <button type="submit" class="btn btn-link btn-info" disabled>Save</button>
            <div class="modal-footer">
              <h5 class="contact">Contact MIS 269/267 for additional support.</h5>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
      $('#btnSupport').on('click', function(){
        $('#modalSupport').modal('show');
      })

      $(document).ready(function() {
    $('#ipForm').submit(function(e) {
        e.preventDefault(); // Prevent the default form submission
        
        // Send the form data directly, let the server handle the IP and date
        $.ajax({
            type: 'POST',
            url: 'ajax/printer_maintenance.php', 
            data: $(this).serialize(), 
            dataType: 'json',
            success: function(response) {
                if (response.status == 1) {
                    alert('Socket connected successfully!');
                    window.location.reload()
                } else {
                    alert('Socket connection failed.');
                }
                $('#modalSupport').modal('hide'); 
            },
            error: function() {
                alert('An error occurred while processing the request.');
            }
        });
    });
});

$(document).ready(function() {
    // Fetch and populate the form with data from JSON
    $.getJSON('ajax/printer_config.json', function(data) {
        $('#ipAddress').val(data.host);
        $('#port').val(data.port);
    }).fail(function() {
        console.error('Error loading the configuration.');
    });

    // Handle the Edit button click with password prompt
    $('#editButton').on('click', function() {
        var password = prompt("Enter password to edit:");
      
        if (password) {
            $.post('ajax/validate_password.php', { password: password }, function(response) {
                var result = JSON.parse(response);

                if (result.success) {
                    $('#ipAddress').prop('disabled', false);
                    $('#port').prop('disabled', false);
                    $('#ipForm button[type="submit"]').prop('disabled', false);
                } else {
                    alert(result.message);
                }
            }).fail(function() {
                alert('Error validating password.');
            });
        }
    });
});
    </script>