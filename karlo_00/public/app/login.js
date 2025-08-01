// $(function(){
// 	console.log('hi');
// })

$('#btnLogin').on('click', function(){

	var user = $('#txtusername').val();
	var pass = $('#txtpassword').val();

	$.ajax({
		type:'post',
        dataType:'json',
        url:'ajax/userLogin.php',
        data:{
        	user:user,
        	pass:pass
        },
        success: function(data){
            if(data == 1){
            	window.location.href="index.php";
            }else{
            	swal('Credentials do not match our records.','Please try again.','error');
            }
        }
	})
})

var input = document.getElementById("txtpassword");
        input.addEventListener("keyup", function(event) {
          event.preventDefault(); 
          if (event.keyCode === 13) {
            document.getElementById("btnLogin").click();
          }
        });