<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Coding Skul is a Raipur Based Web Development and Technical Training and Internship Provider. Our aim is to make people skillfull according to industry demand. We provides complete practical oriented training and Internship in Raipur Chhattisgarh." />
    <meta name="keywords" content="coding skul,Web Development and Technical Internship Provider in Raipur, web designing training center in raipur, web development training in raipur, seo training institute in raipur" />
    <title>Coding Skul</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .photo{
            height:500px;
        }
       
    </style>
</head>
<body>
   <?php include("menu.php"); ?>
     
      <div class="row m-2">
        <h1>Contact Us</h1>
        <div class="col-sm-12">
            <form>
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" placeholder="Enter Your Name" class="form-control" name="name" id="name">
                    <span id="nameError" class="error">Enter Your Name</span>
                </div>
                <div class="mb-3">
                    <label for="mobile_no" class="form-label">Mobile No.</label>
                    <input type="email" placeholder="Enter Your Mobile No." class="form-control" name="mobile_no" id="mobile_no">
                    <span id="mobileNoError" class="error">Enter Your Mobile No.</span>
                </div>
                <div class="mb-3">
                  <label for="message" class="form-label">Message</label>
                  <textarea  class="form-control" name="message" id="message" placeholder="Enter Your Message"></textarea>
                  <span id="messageError" class="error">Enter Your Message</span>
                </div>
                <button type="button" class="btn btn-primary" onclick="formValidation();">Submit</button>
              </form>
        </div>
      </div>
      <footer class="footer mt-auto py-3 bg-light">
        <div class="container">
          <p class="text-center">All &copy; 2022 are reserved by <a href="https://bdidi.in">bdidi.in</a></p>
        </div>
      </footer>
      <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script>
  $(document).ready(function(){
    $(".error").hide();
  });

  function formValidation(){
   var name = $("#name").val();
   var mobile_no = $("#mobile_no").val();
   var message = $("#message").val();
   if(name == ""){
    $("#nameError").show();
   }else{
    $("#nameError").hide();
   }

   if(mobile_no == ""){
    $("#mobileNoError").show();
   }else{
    $("#mobileNoError").hide();
   }

   if(message == ""){
    $("#messageError").show();
   }else{
    $("#messageError").hide();
   }

  }
</script>

    </body>
</html>