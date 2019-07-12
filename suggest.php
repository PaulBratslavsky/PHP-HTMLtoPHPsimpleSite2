<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require './_Vendor/mailer/src/PHPMailer.php'; 
require './_Vendor/mailer/src/Exception.php';
require './_Vendor/mailer/src/SMTP.php';

?>

<?php $error = null; ?>

<?php // HANDLE EMAIL

      if ( $_SERVER['REQUEST_METHOD'] == 'POST') {

        // USE filter_input() to sanatize input
        $name     = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
        $email    = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        $details  = filter_input(INPUT_POST, 'details', FILTER_SANITIZE_SPECIAL_CHARS);

        if ( $name == '' || $email == '' || $details == '' ) {

          $errorMessage = "Please Complete All Fields";
          $error = true;

        } else {

          if ( !PHPMailer::validateAddress($email) ) {

            $errorMessage = "Not Valid Email";
            $error = true;

          } else {

            $preview = "From: {$name}<br> Email: {$email}<br> Message: {$details}";
            $error = false;
            
            // Create New Email
            $mail = new PHPMailer();

            //Server settings
            $mail->SMTPDebug = 2;                                       // Enable verbose debug output
            $mail->isSMTP();                                            // Set mailer to use SMTP
            $mail->Host       = 'smtp.gmail.com';                       // Specify main and backup SMTP servers
            $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
            $mail->Username   = 'paul.bratslavsky@gmail.com';           // SMTP username
            $mail->Password   = 'xtcuywqgkkbvbszo';                     // SMTP password
            $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
            $mail->Port       = 587; 
            

            // Recipeint
            $mail->setFrom('paul.bratslavsky@gmail.com', $name);
            $mail->addReplyTo($email, $name);
            $mail->addAddress('paul.bratslavsky@gmail.com', 'Paul');
            $mail->Subject = "New Suggestion from {$name}.";
            $mail->Body = $details;

            if ( !$mail->send() ) {

              $errorMessage = "There was an error :(";
              $error = true;
              
            } else {

              header("location:suggest.php?status=thankyou&preview={$preview}");

            }



          }
          
        }

      }
?>

<?php $pageTitle = 'suggest'; ?>
<?php $whichSection = 'suggest'; ?>

<?php include './_Components/header.php'; ?>
  
<div class="suggest-page flex">
  <div class="container flex-main">
    <div class="flex-col flex1 box gray-background">

    <div class="verticle-line-left">
      <h1>Suggest A Media Item</h1>
    </div>

    <p class="margin-left-21">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nibh neque, convallis ut interdum a, consequat sit amet mauris. Vivamus sed tincidunt enim.</p>    
    
  </div>
  

  <div class="flex-col flex1 box gray-background">
    <div class="formWrapper">
    
    <?php if ( isset($_GET['status']) && $_GET['status'] == 'thankyou'  ) : ?> 
      
      <div class="verticle-line-left">
        <h1>Your Suggestion Has Been Sent</h1>
      </div>

      <p class="margin-left-21"><?php echo $_GET['preview']; ?></p>

    <?php else : ?>

      <form method="POST" action="suggest.php">

        <?php if ( $error ) : ?>

        <div>
          <p class="error-message"><?php echo $errorMessage; ?></p>
        </div>

        <?php endif; ?>
      
        <div class="name-group">
          <label for="name" >Name:</label>
          <input type="text" id="name" name="name"/>
        </div>

        <div class="name-group">
          <label for="email" >Email:</label>
            <input type="text" id="email" name="email"/>
        </div>

        <div class="name-group">
          <label for="details" >Enter Your Suggestion:</label>
          <textarea id="details" name="details"></textarea>
        </div>

        <input class="submit" name="submit" type="submit" value="Send Suggestion" />
        
      </form>

      <?php endif; ?>
    </div>
  </div>

</div>

</div>


  <div class="white-bg show-random-container"> 
  <div class="container">

  <h2><span>Show Suggested<span></h2>

  <div class="show-random">
    <?php $random = array_rand($catalog, 6); ?>
    <?php foreach ( $random as $id ) : ?>
      <?php echo showSingleItemFunc($id, $catalog[$id]); ?> 
    <?php endforeach; ?>
  </div>

  </div>
</div>

<?php include './_Components/footer.php'; ?>