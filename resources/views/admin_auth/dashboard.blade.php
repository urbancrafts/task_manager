<html lang="en">
<head>
<meta charset="utf-8">
<link rel="icon" href="/favicon.ico">
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="theme-color" content="#000000">
<meta name="description" content="Web site created using create-react-app">
<link rel="apple-touch-icon" href="/logo192.png">
<link href="https://api.fontshare.com/v2/css?f[]=general-sans@200&amp;f[]=clash-display@400,500&amp;f[]=satoshi@900,700,500,301,701,300,501,401,901,400&amp;display=swap" rel="stylesheet">
<link rel="manifest" href="/manifest.json">
<title>Admin Task</title>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<link href='{{ asset('css/bootstrap.css') }}' type='text/css' media='all' />
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
<!-- SweetAlert2 -->
<link rel="stylesheet" href="{{ asset('plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css')}}">
<!-- Toastr -->
<link rel="stylesheet" href="{{ asset('plugins/toastr/toastr.min.css')}}">
<!-- Theme style -->
<link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css')}}">


<style>


/* BASIC */

html {
  
}

body {
  font-family: "Poppins", sans-serif;
  height: 100vh;
}

a {
  color: #92badd;
  display:inline-block;
  text-decoration: none;
  font-weight: 400;
}

h2 {
  text-align: center;
  font-size: 16px;
  font-weight: 600;
  text-transform: uppercase;
  display:inline-block;
  margin: 40px 8px 10px 8px; 
  color: #cccccc;
}



/* STRUCTURE */

.wrapper {
  display: flex;
  align-items: center;
  flex-direction: column; 
  justify-content: center;
  width: 100%;
  min-height: 100%;
  padding: 20px;
}

#formContent {
  -webkit-border-radius: 10px 10px 10px 10px;
  border-radius: 10px 10px 10px 10px;
  background: #fff;
  padding: 30px;
  width: 90%;
  max-width: 450px;
  position: relative;
  padding: 0px;
  -webkit-box-shadow: 0 30px 60px 0 rgba(0,0,0,0.3);
  box-shadow: 0 30px 60px 0 rgba(0,0,0,0.3);
  text-align: center;
}

#formFooter {
  background-color: #f6f6f6;
  border-top: 1px solid #dce8f1;
  padding: 25px;
  text-align: center;
  -webkit-border-radius: 0 0 10px 10px;
  border-radius: 0 0 10px 10px;
}



/* TABS */

h2.inactive {
  color: #cccccc;
}

h2.active {
  color: #0d0d0d;
  border-bottom: 2px solid #5fbae9;
}



/* FORM TYPOGRAPHY*/

input[type=button], input[type=submit], input[type=reset], button.aut-btn  {
  background-color: #56baed;
  border: none;
  color: white;
  padding: 15px 80px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  text-transform: uppercase;
  font-size: 13px;
  -webkit-box-shadow: 0 10px 30px 0 rgba(95,186,233,0.4);
  box-shadow: 0 10px 30px 0 rgba(95,186,233,0.4);
  -webkit-border-radius: 5px 5px 5px 5px;
  border-radius: 5px 5px 5px 5px;
  margin: 5px 20px 40px 20px;
  -webkit-transition: all 0.3s ease-in-out;
  -moz-transition: all 0.3s ease-in-out;
  -ms-transition: all 0.3s ease-in-out;
  -o-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}

input[type=button]:hover, input[type=submit]:hover, input[type=reset]:hover, button.aut-btn:hover  {
  background-color: #39ace7;
}

input[type=button]:active, input[type=submit]:active, input[type=reset]:active, button.aut-btn:active  {
  -moz-transform: scale(0.95);
  -webkit-transform: scale(0.95);
  -o-transform: scale(0.95);
  -ms-transform: scale(0.95);
  transform: scale(0.95);
}

input[type=text], input[type=password]{
  background-color: #f6f6f6;
  border: none;
  color: #0d0d0d;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 5px;
  width: 85%;
  border: 2px solid #f6f6f6;
  -webkit-transition: all 0.5s ease-in-out;
  -moz-transition: all 0.5s ease-in-out;
  -ms-transition: all 0.5s ease-in-out;
  -o-transition: all 0.5s ease-in-out;
  transition: all 0.5s ease-in-out;
  -webkit-border-radius: 5px 5px 5px 5px;
  border-radius: 5px 5px 5px 5px;
}

input[type=text]:focus {
  background-color: #fff;
  border-bottom: 2px solid #5fbae9;
}

input[type=text]:placeholder {
  color: #cccccc;
}



/* ANIMATIONS */

/* Simple CSS3 Fade-in-down Animation */
.fadeInDown {
  -webkit-animation-name: fadeInDown;
  animation-name: fadeInDown;
  -webkit-animation-duration: 1s;
  animation-duration: 1s;
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both;
}

@-webkit-keyframes fadeInDown {
  0% {
    opacity: 0;
    -webkit-transform: translate3d(0, -100%, 0);
    transform: translate3d(0, -100%, 0);
  }
  100% {
    opacity: 1;
    -webkit-transform: none;
    transform: none;
  }
}

@keyframes fadeInDown {
  0% {
    opacity: 0;
    -webkit-transform: translate3d(0, -100%, 0);
    transform: translate3d(0, -100%, 0);
  }
  100% {
    opacity: 1;
    -webkit-transform: none;
    transform: none;
  }
}

/* Simple CSS3 Fade-in Animation */
@-webkit-keyframes fadeIn { from { opacity:0; } to { opacity:1; } }
@-moz-keyframes fadeIn { from { opacity:0; } to { opacity:1; } }
@keyframes fadeIn { from { opacity:0; } to { opacity:1; } }

.fadeIn {
  opacity:0;
  -webkit-animation:fadeIn ease-in 1;
  -moz-animation:fadeIn ease-in 1;
  animation:fadeIn ease-in 1;

  -webkit-animation-fill-mode:forwards;
  -moz-animation-fill-mode:forwards;
  animation-fill-mode:forwards;

  -webkit-animation-duration:1s;
  -moz-animation-duration:1s;
  animation-duration:1s;
}

.fadeIn.first {
  -webkit-animation-delay: 0.4s;
  -moz-animation-delay: 0.4s;
  animation-delay: 0.4s;
}

.fadeIn.second {
  -webkit-animation-delay: 0.6s;
  -moz-animation-delay: 0.6s;
  animation-delay: 0.6s;
}

.fadeIn.third {
  -webkit-animation-delay: 0.8s;
  -moz-animation-delay: 0.8s;
  animation-delay: 0.8s;
}

.fadeIn.fourth {
  -webkit-animation-delay: 1s;
  -moz-animation-delay: 1s;
  animation-delay: 1s;
}

/* Simple CSS3 Fade-in Animation */
.underlineHover:after {
  display: block;
  left: 0;
  bottom: -10px;
  width: 0;
  height: 2px;
  background-color: #56baed;
  content: "";
  transition: width 0.2s;
}

.underlineHover:hover {
  color: #0d0d0d;
}

.underlineHover:hover:after{
  width: 100%;
}



/* OTHERS */

*:focus {
    outline: none;
} 

#icon {
  width:60%;
}



body {
  background: #eee;
}

.icons i {
  color: #b5b3b3;
  border: 1px solid #b5b3b3;
  padding: 6px;
  margin-left: 4px;
  border-radius: 5px;
  cursor: pointer;
}

.activity-done {
  font-weight: 600;
}

.list-group li {
  margin-bottom: 12px;
}

.list-group-item {
}

.list li {
  list-style: none;
  padding: 10px;
  border: 1px solid #e3dada;
  margin-top: 12px;
  border-radius: 5px;
  background: #fff;
}

.checkicon {
  color: green;
  font-size: 19px;
}

.date-time {
  font-size: 12px;
}

.profile-image img {
  margin-left: 3px;
}

</style>

<script src="{{ asset('js/jquery.js') }}"></script>



<script type="text/javascript">
    $(document).ready(function(){
    
      var site_url = "{{ url('') }}";//full site domain url
    
      var Toast = Swal.mixin({
          toast: true,
          position: 'top-end',
          showConfirmButton: false,
          timer: 9000
        });
    
    //alert('working...');
    load_task_list();
    
    function load_task_list(){
        var action = site_url+"/auth/admin/fetch_all_task";
        $.ajax({
            headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
             },
            type: "GET",
            dataType: "json",
            url: action,
            beforeSend:function(){
              Toast.fire({
              icon: 'info',
              title: 'Request processing...'
               });
              
                // jQuery('.status').html(" Attempting to fetch LGA data...");
            },
            complete:function(){
                
            },
            success:function(data){
                if(data.status == true){
    
              Toast.fire({
              icon: 'success',
              title: 'currencies fetched'
               });
                //   array.forEach(elements => as element{
                    
                //   });
    
                $(".activity-done").html("Active Tasks("+data.data.values.length+")");

                for(var i =0; i < data.data.values.length; i++){
                    $('#task_list').append("<li id=\'list_id_"+data.data.values[i].id+"\' class=\'d-flex justify-content-between\'><div class=\'d-flex flex-row align-items-center\'><i class=\'fa fa-check-circle checkicon\'><\/i><div class=\'ml-2\'><h6 class=\'mb-0\'>"+data.data.values[i].task_name+"<\/h6> <div class=\'d-flex flex-row mt-1 text-black-50 date-time\'><div><i class=\'fa fa-calendar-o\'><\/i><span class=\'ml-2'\>"+data.data.values[i].task_date_and_time+"<\/span><\/div><div class=\'ml-3\''><i class=\'fa fa-clock-o\'><\/i><span class=\'ml-2\'>6h<\/span><\/div><\/div><\/div><\/div><div class=\'d-flex flex-row align-items-center\'><div class=\'d-flex flex-column mr-2\'><div class=\'profile-image\'><img class=\'rounded-circle\' src=\'https://i.imgur.com/xbxOs06.jpg\' width=\'30\'><\/div><span class=\'date-time\'>"+data.data.values[i].updated_at+"<\/span><\/div><ul><li class=\'nav-item\'> <i class=\'nav-icon fa fa-ellipsis-h\'><\/i> <ul class=\'nav nav-opened\'> <li class=\'nav-item task-item\' id=\'edit_task_"+data.data.values[i].id+"\' data-id=\'"+data.data.values[i].id+"\'  data-text=\'"+data.data.values[i].task_name+"\' data-date=\'"+data.data.values[i].task_date_and_time+"\' data-toggle=\'modal\' data-target=\'#modal-lg-0\' onclick=\'editModal(this.id)\' > <i class=\'fas fa-edit\'></i> Edit   <\/li>  <li class=\'nav-item task-item\' id=\'delete_task_"+data.data.values[i].id+"\' data-id=\'"+data.data.values[i].id+"\'  data-text=\'"+data.data.values[i].task_name+"\' data-date=\'"+data.data.values[i].task_date_and_time+"\' onclick=\'deleteTask(this.id)\' > <i class=\'fas fa-trash\'></i> Delete   <\/li> <\/ul> <\/li> <\/ul> <\/div><\/li>");
                    // var opt = ;
                }
               
                    //console.log(opt);
                    //jQuery('.status').html(" ");
                    
                }else if(data.status == false){
                  Toast.fire({
                  icon: 'error',
                  title: data.message
                  });
                      
                        }else{
                  Toast.fire({
                  icon: 'error',
                  title: data
                  });
                            
                                  }
            },
    error:function(jqXHR, exception){
    
    if(jqXHR.status === 0){
    Toast.fire({
    icon: 'warning',
    title: 'Please check your internet connection.'
    });
    // jQuery(".login-status").hide();
    // jQuery(".login-alert-error").fadeIn('slow');
    // jQuery('.login-alert-error').html('Please check your internet connection.');	
    
    }else if(jqXHR.status == 404){
    Toast.fire({
    icon: 'info',
    title: 'Request route not found.'
    });
    // jQuery(".login-status").hide();
    // jQuery(".login-alert-error").fadeIn('slow');
    // jQuery('.login-alert-error').html('Request route not found.');
    }else if(jqXHR.status == 500){
    Toast.fire({
    icon: 'error',
    title: 'Internal Server Error [500]'
    });
    // jQuery(".login-status").hide();
    // jQuery(".login-alert-error").fadeIn('slow');
    // jQuery('.login-alert-error').html('Internal Server Error [500]');
    
    }else if(jqXHR.status == 422){
    var errors = jqXHR.responseJSON;
    // $.each(json.responseJSON, function (key, value) {
    //     $('.'+key+'-error').html(value);
    // });
    Toast.fire({
    icon: 'error',
    title: errors.message
    });
    // jQuery(".login-status").hide();
    // jQuery(".login-alert-error").fadeIn('slow');
    // jQuery('.login-alert-error').html(errors.data.errors);
    
    }else if(exception === 'parsererror'){
    Toast.fire({
    icon: 'info',
    title: 'Requested JSON parse failed'
    });
    // jQuery(".login-status").hide();
    // jQuery(".login-alert-error").fadeIn('slow');
    // jQuery('.login-alert-error').html('Requested JSON parse failed');
    
    }else if(exception === 'timeout'){
    Toast.fire({
    icon: 'info',
    title: 'Request time out'
    });
    // jQuery(".login-status").hide();
    // jQuery(".login-alert-error").fadeIn('slow');
    // jQuery('.login-alert-error').html('Time out error');
    
    }else if(exception === 'abort'){
    Toast.fire({
    icon: 'info',
    title: 'Ajax request aborted'
    });
    // jQuery(".login-status").hide();
    // jQuery(".login-alert-error").fadeIn('slow');
    // jQuery('.login-alert-error').html('Ajax request aborted');
    
    }
    
    }
          });
    }
    
      
    
      
$("#task_title").on('focus', function(e){
  $(this).css('border', 'solid 0px');
});
$("#task_time").on('focus', function(e){
  $(this).css('border', 'solid 0px');
});
    
    
      $('form#task_form').on('submit', function(e){
    e.preventDefault();
    var action = $(this).attr('action');
    //var uid = jQuery("#uid").val();
    //var name = jQuery("#name").val();
    //var title = jQuery("#title").val();
    //var content = jQuery("#blog-content").val();
    
    var formdata = new FormData(this);//create an instance for the form input fields
    
    if($.trim($('#task_title').val()) == ""){
         $('#task_title').css('border', 'solid 1px red');
         Toast.fire({
              icon: 'error',
              title: 'Task title required!'
        });
         
    }else if($.trim($('#task_time').val()) == ""){
         $('#task_time').css('border', 'solid 1px red');
         Toast.fire({
              icon: 'error',
              title: 'Set date & time for your task!'
        });
    
    }else{
         $.ajax({
              headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
           },
             type: "POST",
             dataType: "json",
             url: action,
             data: formdata,
             cache: false,
             contentType: false,
             processData: false,
             beforeSend:function(){
              Toast.fire({
              icon: 'info',
              title: 'Request processing...'
              });
                
             },
             complete:function(){
                 
             },
             
             success:function(data){
                if(data.status == true){
                 $("#sendEmail").prop('disabled', true);
                 Toast.fire({
                 icon: 'success',
                 title: data.message
                 });

                //  for(var i =0; i < data.data.values.length; i++){
                //     $('#task_list').append("<li id=\'list_id_"+data.data.values[i].id+"\' class=\'d-flex justify-content-between\'><div class=\'d-flex flex-row align-items-center\'><i class=\'fa fa-check-circle checkicon\'><\/i><div class=\'ml-2\'><h6 class=\'mb-0\'>"+data.data.values[i].task_name+"<\/h6> <div class=\'d-flex flex-row mt-1 text-black-50 date-time\'><div><i class=\'fa fa-calendar-o\'><\/i><span class=\'ml-2'\>"+data.data.values[i].task_date_and_time+"<\/span><\/div><div class=\'ml-3\''><i class=\'fa fa-clock-o\'><\/i><span class=\'ml-2\'>6h<\/span><\/div><\/div><\/div><\/div><div class=\'d-flex flex-row align-items-center\'><div class=\'d-flex flex-column mr-2\'><div class=\'profile-image\'><img class=\'rounded-circle\' src=\'https://i.imgur.com/xbxOs06.jpg\' width=\'30\'><\/div><span class=\'date-time\'>"+data.data.values[i].updated_at+"<\/span><\/div><ul><li class=\'nav-item\'> <i class=\'nav-icon fa fa-ellipsis-h\'><\/i> <ul class=\'nav nav-opened\'> <li class=\'nav-item task-item\' id=\'edit_task_"+data.data.values[i].id+"\' data-id=\'"+data.data.values[i].id+"\'  data-text=\'"+data.data.values[i].task_name+"\' data-date=\'"+data.data.values[i].task_date_and_time+"\' data-toggle=\'modal\' data-target=\'#modal-lg-0\' onclick=\'editModal(this.id)\' > <i class=\'fas fa-edit\'></i> Edit   <\/li>  <li class=\'nav-item task-item\' id=\'delete_task_"+data.data.values[i].id+"\' data-id=\'"+data.data.values[i].id+"\'  data-text=\'"+data.data.values[i].task_name+"\' data-date=\'"+data.data.values[i].task_date_and_time+"\' onclick=\'deleteTask(this.id)\' > <i class=\'fas fa-trash\'></i> Delete   <\/li> <\/ul> <\/li> <\/ul> <\/div><\/li>");
                //     // var opt = ;
                // }
                 
                 location.reload();         
                 
                }else if(data.status == false){
                  Toast.fire({
                 icon: 'error',
                 title: data.message
                 });
                  
                }else{
                 Toast.fire({
                 icon: 'error',
                 title: data
                 });
                }
                  
             },
    
    error:function(jqXHR, exception){
    if(jqXHR.status === 0){
    Toast.fire({
    icon: 'warning',
    title: 'Please check your internet connection.'
    });
    // jQuery(".login-status").hide();
    // jQuery(".login-alert-error").fadeIn('slow');
    // jQuery('.login-alert-error').html('Please check your internet connection.');	
    
    }else if(jqXHR.status == 404){
    Toast.fire({
    icon: 'info',
    title: 'Request route not found.'
    });
    // jQuery(".login-status").hide();
    // jQuery(".login-alert-error").fadeIn('slow');
    // jQuery('.login-alert-error').html('Request route not found.');
    }else if(jqXHR.status == 500){
    Toast.fire({
    icon: 'error',
    title: 'Internal Server Error [500]'
    });
    // jQuery(".login-status").hide();
    // jQuery(".login-alert-error").fadeIn('slow');
    // jQuery('.login-alert-error').html('Internal Server Error [500]');
    
    }else if(jqXHR.status == 422){
    var errors = jqXHR.responseJSON;
    // $.each(json.responseJSON, function (key, value) {
    //     $('.'+key+'-error').html(value);
    // });
    Toast.fire({
    icon: 'error',
    title: errors.message
    });
    // jQuery(".login-status").hide();
    // jQuery(".login-alert-error").fadeIn('slow');
    // jQuery('.login-alert-error').html(errors.data.errors);
    
    }else if(exception === 'parsererror'){
    Toast.fire({
    icon: 'info',
    title: 'Requested JSON parse failed'
    });
    // jQuery(".login-status").hide();
    // jQuery(".login-alert-error").fadeIn('slow');
    // jQuery('.login-alert-error').html('Requested JSON parse failed');
    
    }else if(exception === 'timeout'){
    Toast.fire({
    icon: 'info',
    title: 'Request time out'
    });
    // jQuery(".login-status").hide();
    // jQuery(".login-alert-error").fadeIn('slow');
    // jQuery('.login-alert-error').html('Time out error');
    
    }else if(exception === 'abort'){
    Toast.fire({
    icon: 'info',
    title: 'Ajax request aborted'
    });
    // jQuery(".login-status").hide();
    // jQuery(".login-alert-error").fadeIn('slow');
    // jQuery('.login-alert-error').html('Ajax request aborted');
    
    }
    
    }
    
             });
    
    }
    
    });
    

 
    

    });
    

//     function editModal(elem){
//      var id = $("#"+elem).attr('data-id');
//      var data_text = $("#"+elem).attr('data-text');
//      var data_date = $("#"+elem).attr('data-date');
    
     

//      $("#list_id_"+id).html("<div class=\'d-flex flex-row align-items-center\'><form id=\'task_update_form_"+id+"\' onSubmit=\'updateTaskForm(this.id)\' ><input type=\'hidden\' id=\'task_id\' value=\'"+id+"\' \/><div class=\'modal-body\'><div class=\'row\'><div class=\'col-md-6\'><div class=\'form-group\'><label>Task title<\/label><input type=\'text\' id=\'task_title\' name=\'title\' class=\'form-control select2bs4\' style=\'width: 100%;\' value=\'"+data_text+"\' placeholder=\'Enter task title\' \/><\/div><\/div><div class=\'col-md-6\'><div class=\'form-group\'><label>Task date & time<\/label><input type=\'datetime-local\' id=\'task_time\' name=\'task_time\' class=\'form-control select2bs4\' style=\'width: 100%;\' value=\'"+data_date+"\' placeholder=\'Set date & time\' \/><\/div><\/div><\/div><\/div><div class=\'modal-footer justify-content-between\'><button type=\'submit\' class=\'btn btn-primary\'>Save<\/button><\/div><\/form><\/div><ul><li class=\'nav-item\'> <i class=\'nav-icon fa fa-ellipsis-h\'><\/i> <ul class=\'nav nav-opened\'> <li class=\'nav-item task-item\' id=\'edit_task_"+id+"\' data-id=\'"+id+"\'  data-text=\'"+data_text+"\' data-date=\'"+data_date+"\'  onclick=\'editModal(this.id)\' > <i class=\'fas fa-edit\'></i> Edit   <\/li>  <li class=\'nav-item task-item\' id=\'delete_task_"+id+"\' data-id=\'"+id+"\'  data-text=\'"+data_text+"\' data-date=\'"+data_date+"\' onclick=\'deleteTask(this.id)\' > <i class=\'fas fa-trash\'></i> Delete   <\/li> <\/ul> <\/li> <\/ul> <\/div>");


//     }


//     function updateTaskForm(elem) {
//     // Assuming elem is the form ID
//     var form = $("#" + elem); // Get the form by ID

//     form.on("submit", function(event) {
//         // Prevent the default form submission
//         event.preventDefault();

//         // Your custom code goes here
//         alert("Working...");

//         // Access the form data using FormData
//         var formdata = new FormData(this);

//         // Perform additional actions with form data as needed
//     });
// }



function editModal(elem) {
    var id = $("#" + elem).attr('data-id');
    var data_text = $("#" + elem).attr('data-text');
    var data_date = $("#" + elem).attr('data-date');

    $("#list_id_" + id).html("<div class=\'d-flex flex-row align-items-center\'><form id=\'task_update_form_" + id + "\' data-id=\'"+ id +"\'><input type=\'hidden\' id=\'task_id\' value=\'" + id + "\' /><div class=\'modal-body\'><div class=\'row\'><div class=\'col-md-6\'><div class=\'form-group\'><label>Task title<\/label><input type=\'text\' id=\'task_title_" + id + "\' name=\'title\' class=\'form-control select2bs4\' style=\'width: 100%;\' value=\'" + data_text + "\' placeholder=\'Enter task title\' /><\/div><\/div><div class=\'col-md-6\'><div class=\'form-group\'><label>Task date & time<\/label><input type=\'datetime-local\' id=\'task_time_" + id + "\' name=\'task_time\' class=\'form-control select2bs4\' style=\'width: 100%;\' value=\'" + data_date + "\' placeholder=\'Set date & time\' /><\/div><\/div><\/div><\/div><div class=\'modal-footer justify-content-between\'><button type=\'button\' class=\'btn btn-primary\' onclick=\'updateTaskForm(\"task_update_form_" + id + "\")\'>Save<\/button><\/div><\/form><\/div><ul><li class=\'nav-item\'> <i class=\'nav-icon fa fa-ellipsis-h\'><\/i> <ul class=\'nav nav-opened\'> <li class=\'nav-item task-item\' id=\'edit_task_" + id + "\' data-id=\'" + id + "\'  data-text=\'" + data_text + "\' data-date=\'" + data_date + "\'  onclick=\'editModal(this.id)\' > <i class=\'fas fa-edit\'></i> Edit   <\/li>  <li class=\'nav-item task-item\' id=\'delete_task_" + id + "\' data-id=\'" + id + "\'  data-text=\'" + data_text + "\' data-date=\'" + data_date + "\' onclick=\'deleteTask(this.id)\' > <i class=\'fas fa-trash\'></i> Delete   <\/li> <\/ul> <\/li> <\/ul> <\/div>");

}

function updateTaskForm(formId) {
    var form = $("#" + formId);

    var site_url = "{{ url('') }}";//full site domain url
      var Toast = Swal.mixin({
          toast: true,
          position: 'top-end',
          showConfirmButton: false,
          timer: 9000
        });

    form.on("submit", function (event) {
        event.preventDefault();
       var id = $(this).attr("data-id");
        // Access the form data using FormData
        var formdata = new FormData(this);
        // Perform additional actions with form data as needed

        var title = $('#task_title_'+id).val();
        var date_time = $('#task_time_'+id).val();

        if($.trim($('#task_title_'+id).val()) == ""){
         $('#task_title_'+id).css('border', 'solid 1px red');
         Toast.fire({
              icon: 'error',
              title: 'Task title required!'
        });
         
    }else if($.trim($('#task_time_'+id).val()) == ""){
         $('#task_time_'+id).css('border', 'solid 1px red');
         Toast.fire({
              icon: 'error',
              title: 'Set date & time for your task!'
        });
    
    }else{
         $.ajax({
              headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
           },
             type: "PUT",
             dataType: "json",
             url: site_url+"/auth/admin/task/"+id,
             data: {"title": title, "task_time": date_time},
            //  cache: false,
            //  contentType: false,
            //  processData: false,
             beforeSend:function(){
              Toast.fire({
              icon: 'info',
              title: 'Request processing...'
              });
                
             },
             complete:function(){
                 
             },
             
             success:function(data){
                if(data.status == true){
                 $("#sendEmail").prop('disabled', true);
                 Toast.fire({
                 icon: 'success',
                 title: data.message
                 });

                //  for(var i =0; i < data.data.values.length; i++){
                //     $('#task_list').append("<li id=\'list_id_"+data.data.values[i].id+"\' class=\'d-flex justify-content-between\'><div class=\'d-flex flex-row align-items-center\'><i class=\'fa fa-check-circle checkicon\'><\/i><div class=\'ml-2\'><h6 class=\'mb-0\'>"+data.data.values[i].task_name+"<\/h6> <div class=\'d-flex flex-row mt-1 text-black-50 date-time\'><div><i class=\'fa fa-calendar-o\'><\/i><span class=\'ml-2'\>"+data.data.values[i].task_date_and_time+"<\/span><\/div><div class=\'ml-3\''><i class=\'fa fa-clock-o\'><\/i><span class=\'ml-2\'>6h<\/span><\/div><\/div><\/div><\/div><div class=\'d-flex flex-row align-items-center\'><div class=\'d-flex flex-column mr-2\'><div class=\'profile-image\'><img class=\'rounded-circle\' src=\'https://i.imgur.com/xbxOs06.jpg\' width=\'30\'><\/div><span class=\'date-time\'>"+data.data.values[i].updated_at+"<\/span><\/div><ul><li class=\'nav-item\'> <i class=\'nav-icon fa fa-ellipsis-h\'><\/i> <ul class=\'nav nav-opened\'> <li class=\'nav-item task-item\' id=\'edit_task_"+data.data.values[i].id+"\' data-id=\'"+data.data.values[i].id+"\'  data-text=\'"+data.data.values[i].task_name+"\' data-date=\'"+data.data.values[i].task_date_and_time+"\' data-toggle=\'modal\' data-target=\'#modal-lg-0\' onclick=\'editModal(this.id)\' > <i class=\'fas fa-edit\'></i> Edit   <\/li>  <li class=\'nav-item task-item\' id=\'delete_task_"+data.data.values[i].id+"\' data-id=\'"+data.data.values[i].id+"\'  data-text=\'"+data.data.values[i].task_name+"\' data-date=\'"+data.data.values[i].task_date_and_time+"\' onclick=\'deleteTask(this.id)\' > <i class=\'fas fa-trash\'></i> Delete   <\/li> <\/ul> <\/li> <\/ul> <\/div><\/li>");
                //     // var opt = ;
                // }
                 
                 location.reload();         
                 
                }else if(data.status == false){
                  Toast.fire({
                 icon: 'error',
                 title: data.message
                 });
                  
                }else{
                 Toast.fire({
                 icon: 'error',
                 title: data
                 });
                }
                  
             },
    
    error:function(jqXHR, exception){
    if(jqXHR.status === 0){
    Toast.fire({
    icon: 'warning',
    title: 'Please check your internet connection.'
    });
    // jQuery(".login-status").hide();
    // jQuery(".login-alert-error").fadeIn('slow');
    // jQuery('.login-alert-error').html('Please check your internet connection.');	
    
    }else if(jqXHR.status == 404){
    Toast.fire({
    icon: 'info',
    title: 'Request route not found.'
    });
    // jQuery(".login-status").hide();
    // jQuery(".login-alert-error").fadeIn('slow');
    // jQuery('.login-alert-error').html('Request route not found.');
    }else if(jqXHR.status == 500){
    Toast.fire({
    icon: 'error',
    title: 'Internal Server Error [500]'
    });
    // jQuery(".login-status").hide();
    // jQuery(".login-alert-error").fadeIn('slow');
    // jQuery('.login-alert-error').html('Internal Server Error [500]');
    
    }else if(jqXHR.status == 422){
    var errors = jqXHR.responseJSON;
    // $.each(json.responseJSON, function (key, value) {
    //     $('.'+key+'-error').html(value);
    // });
    Toast.fire({
    icon: 'error',
    title: errors.message
    });
    // jQuery(".login-status").hide();
    // jQuery(".login-alert-error").fadeIn('slow');
    // jQuery('.login-alert-error').html(errors.data.errors);
    
    }else if(exception === 'parsererror'){
    Toast.fire({
    icon: 'info',
    title: 'Requested JSON parse failed'
    });
    // jQuery(".login-status").hide();
    // jQuery(".login-alert-error").fadeIn('slow');
    // jQuery('.login-alert-error').html('Requested JSON parse failed');
    
    }else if(exception === 'timeout'){
    Toast.fire({
    icon: 'info',
    title: 'Request time out'
    });
    // jQuery(".login-status").hide();
    // jQuery(".login-alert-error").fadeIn('slow');
    // jQuery('.login-alert-error').html('Time out error');
    
    }else if(exception === 'abort'){
    Toast.fire({
    icon: 'info',
    title: 'Ajax request aborted'
    });
    // jQuery(".login-status").hide();
    // jQuery(".login-alert-error").fadeIn('slow');
    // jQuery('.login-alert-error').html('Ajax request aborted');
    
    }
    
    }
    
             });

            }
    });

    // Trigger the form submission programmatically
    form.submit();
}


    
    function deleteTask(elem){
    var id = $("#"+elem).attr('data-id');
     var data_text = $("#"+elem).attr('data-text');
     var data_date = $("#"+elem).attr('data-date');

     $("#list_id_"+id).show();

      var site_url = "{{ url('') }}";//full site domain url
      var Toast = Swal.mixin({
          toast: true,
          position: 'top-end',
          showConfirmButton: false,
          timer: 9000
        });
      var str = confirm('Do you really want to delete '+data_text+'?');
      if(str == true){
        $.ajax({
              headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
           },
             type: "DELETE",
             dataType: "json",
             url: site_url+"/auth/admin/task/"+id,
             beforeSend:function(){  
              Toast.fire({
              icon: 'info',
              title: 'Request processing...'
               });
             },
             complete:function(){  
             },
             
             success:function(data){
                if(data.status == true){
                  Toast.fire({
                  icon: 'success',
                  title: data.message
                  });
                  $("#list_id_"+id).html('');
                  $("#list_id_"+id).hide();
                }else if(data.status == false){
                  Toast.fire({
                  icon: 'error',
                  title: data.message
                  });
                
                }else{
                  Toast.fire({
                  icon: 'error',
                  title: data
                  });
                }
                  
             },
    
    error:function(jqXHR, exception){
    if(jqXHR.status === 0){
    Toast.fire({
    icon: 'warning',
    title: 'Please check your internet connection.'
    });
    // jQuery(".login-status").hide();
    // jQuery(".login-alert-error").fadeIn('slow');
    // jQuery('.login-alert-error').html('Please check your internet connection.');	
    
    }else if(jqXHR.status == 404){
    Toast.fire({
    icon: 'info',
    title: 'Request route not found.'
    });
    // jQuery(".login-status").hide();
    // jQuery(".login-alert-error").fadeIn('slow');
    // jQuery('.login-alert-error').html('Request route not found.');
    }else if(jqXHR.status == 500){
    Toast.fire({
    icon: 'error',
    title: 'Internal Server Error [500]'
    });
    // jQuery(".login-status").hide();
    // jQuery(".login-alert-error").fadeIn('slow');
    // jQuery('.login-alert-error').html('Internal Server Error [500]');
    
    }else if(jqXHR.status == 422){
    var errors = jqXHR.responseJSON;
    // $.each(json.responseJSON, function (key, value) {
    //     $('.'+key+'-error').html(value);
    // });
    Toast.fire({
    icon: 'error',
    title: errors.message
    });
    // jQuery(".login-status").hide();
    // jQuery(".login-alert-error").fadeIn('slow');
    // jQuery('.login-alert-error').html(errors.data.errors);
    
    }else if(exception === 'parsererror'){
    Toast.fire({
    icon: 'info',
    title: 'Requested JSON parse failed'
    });
    // jQuery(".login-status").hide();
    // jQuery(".login-alert-error").fadeIn('slow');
    // jQuery('.login-alert-error').html('Requested JSON parse failed');
    
    }else if(exception === 'timeout'){
    Toast.fire({
    icon: 'info',
    title: 'Request time out'
    });
    // jQuery(".login-status").hide();
    // jQuery(".login-alert-error").fadeIn('slow');
    // jQuery('.login-alert-error').html('Time out error');
    
    }else if(exception === 'abort'){
    Toast.fire({
    icon: 'info',
    title: 'Ajax request aborted'
    });
    // jQuery(".login-status").hide();
    // jQuery(".login-alert-error").fadeIn('slow');
    // jQuery('.login-alert-error').html('Ajax request aborted');
    
    }
    
    }
    
             }); 
      }
    }
    </script>


</head>
<body class="hold-transition sidebar-mini layout-fixed">
    
   



      <!-- Navbar -->
      <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
          </li>
          
        </ul>
      
      
        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
          <!-- Navbar Search -->
          <li class="nav-item">
            <a class="nav-link" data-widget="navbar-search" href="#" role="button">
              <i class="fas fa-search"></i>
            </a>
            <div class="navbar-search-block">
              <form class="form-inline">
                <div class="input-group input-group-sm">
                  <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                  <div class="input-group-append">
                    <button class="btn btn-navbar" type="submit">
                      <i class="fas fa-search"></i>
                    </button>
                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                      <i class="fas fa-times"></i>
                    </button>
                  </div>
                </div>
              </form>
            </div>
          </li>
      
          
      
          
          <!-- Notifications Dropdown Menu -->
      
          
      
      
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">
              <i class="far fa-bell"></i>
              <span class="badge badge-warning navbar-badge note-counter"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right load-note-bar">
              
            </div>
          </li>
      
          
      
      
      
           <!-- User Account: style can be found in dropdown.less -->
           <li class="nav-item dropdown user user-menu">
            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
              
              <img src="{{asset('storage/img/users/default.png')}}" class="user-image" >   
              
              
              <span class="hidden-xs">{{Auth::user()->name}}</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                
              <img src="{{asset('storage/img/users/default.png')}}" class="img-circle" >   
              
                
      
                <p>
                 {{auth::user()->name}}
                 <small>Joined: {{Auth::user()->created_at}}</small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="float-left">
                 
                <a href="{{ url('auth/admin/profile/'.Auth::user()->id) }}" class="btn btn-default btn-flat">Profile</a>
                
                </div>
                <div class="float-right">
                  <a href="{{ route('logout') }}" class="btn btn-default btn-flat" 
                    onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="GET" style="display: none;">
                      @csrf
                  </form>
                </div>
              </li>
            </ul>
          </li>
      
      
      
          <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
              <i class="fas fa-expand-arrows-alt"></i>
            </a>
          </li>
         
        </ul>
      </nav>
      <!-- /.navbar -->

      <!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    
    
  
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
         
              <img src="{{asset('storage/img/users/default.png')}}" class="img-circle elevation-2" alt="{{Auth::user()->name}}">   
             
          
        </div>
        <div class="info">
          <a href="#" class="d-block">{{Auth::user()->name}}</a>
        </div>
      </div>
  
      <!-- SidebarSearch Form -->
      
  
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          
               <li class="nav-item">
                
                <a class="nav-link {{ request()->is('auth/admin/dashboard*') ? 'active' : '' }}" href="{{ url('auth/admin/dashboard') }}">
                  <i class="nav-icon fas fa-tachometer-alt"></i> <span>Dashboard</span>
                    
                  </a>  
                
                
              
            </li>
          
         
            
          
          
  
  
          
              
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
   
      
      
      <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper ">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Admin Task
        <small>Dashboard</small>
      </h1>
      
    </section>


<section class="content fadeInDown">

    

    
    <div class="card card-default">
        <div class="card-header">
          <h3 class="card-title">Create task</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          
            <form id="task_form" action="{{ action('App\Http\Controllers\AdminController@create_new_task') }}" method="post" enctype="multipart/form-data">
                <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Task title</label>
                <input type="text" id="task_title" name="title" class="form-control select2bs4" style="width: 100%;" placeholder="Enter task title" />
                
              </div>
              
            </div>
            <!-- /.col -->
            <div class="col-md-6">
                <div class="form-group">
                    <label>Task date & time</label>
                    <input type="datetime-local" id="task_time" name="task_time" class="form-control select2bs4" style="width: 100%;" placeholder="Set date & time" />
                    
                  </div>
            </div>

            <!-- /.col -->
        </div>

        <button type="submit" class="fadeIn fourth aut-btn">Create</button> 
        <!-- /.row -->
            </form>
          
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          
        </div>
      </div>
      <!-- /.card -->

    <div class="container mt-5">

        

        <div class="row">

            

            <div class="col-md-12">

                

                <div class="d-flex justify-content-between align-items-center activity">
                    <div><i class="fa fa-clock-o"></i><span class="ml-2">11h 25m</span></div>
                    <div><span class="activity-done"></span></div>
                    <div class="icons"><i class="fa fa-search"></i><i class="fa fa-ellipsis-h"></i></div>
                </div>
                <div class="mt-3">
                    <ul id="task_list" class="list list-inline">

                        


                        
                    </ul>
                </div>
            </div>
        </div>
    </div>






</section>

 </div>
 

 
     




 <!-- /.content-wrapper -->
<footer class="main-footer">
    <div class="pull-right hidden-xs">

    </div>
    <strong>Copyright &copy; <?php echo date('Y');?>  All rights
    reserved Task manager</a>.</strong> 
  </footer>

<!-- ./wrapper -->








    
    <script src="{{ asset('plugins/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- SweetAlert2 -->
    <script src="{{ asset('plugins/sweetalert2/sweetalert2.min.js')}}"></script>
    <!-- Toastr -->
    <script src="{{ asset('plugins/toastr/toastr.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('dist/js/adminlte.min.js')}}"></script>
    <!-- AdminLTE for demo purposes -->
    
</body>
</html>