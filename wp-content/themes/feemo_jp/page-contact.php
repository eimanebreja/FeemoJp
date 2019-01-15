<?php get_header(); ?>

       <!--header image-->
       <div  class="contact-header">   
        <div class="container">
          <h2 class="header center white-text text-lighten-2 wow zoomIn">CONTACT</h2>
        
        </div>
        </div>
  <!-- end header image-->
  <?php 
if(isset($_POST['send'])){
    $to = "nimuel@feemo.jp"; 
    $from = $_POST['email']; 
    $name = $_POST['full_name'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $name . " "  . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $name . "\n\n" . $_POST['message'];
    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2);
    echo '<script type="text/javascript">alert("Thankyou to your suggestion!");</script>';
    
    }
?>

<div class="contact-body">
        <div class="container">
          <form method="POST">
            <ul class="form-style">
                <li><input type="text" name="full_name" class="field-divided" placeholder="Name" /></li>
                <li>
                    <input type="email" placeholder="Email" name="email" class="field-long" />
                </li>
                <li>
                   
                    <textarea name="message" id="field5" class="field-long field-textarea" placeholder="Message"></textarea>
                   
                </li>
                <p>
                    <input type="checkbox" id="test" class="checkbox-gold"  />
                    <label for="test">I accept the Terms of Service</label>
                  </p>
                  
                <li>
                  <br>
                  <br>
                   <center><input  type="submit"  name="send" value="SEND" /> </center> 
                </li>
            </ul>
            </form>
        </div>
</div>


<?php get_footer(); ?>