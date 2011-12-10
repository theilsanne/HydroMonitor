    <form method="post" action="form-process.php">

    <p>Your Name (required):</p>
    <p><input type="text" name="name" /></p>
    <p>Your Email (required):</p>
    <p><input type="text" name="email" /></p>
    <p>Subject:</p>
    <p><input type="text" name="subject" /></p>
    <p>Your Message (required):</p>
    <p><textarea name="message" rows="10" cols="30"></textarea></p>
    <p>Verification:</p>
    <p><input name="verif_box" type="text" id="verif_box"/>
<img src="verificationimage.php?<?php echo rand(0,9999);?>" alt="verification image, type it in the box" width="50" height="24" align="absbottom" /></p>
</p>

<!-- if the variable "wrong_code" is sent from previous page then display the error field -->
<?php if(isset($_GET['wrong_code'])){?>
<p><div style="border:1px solid #990000; background-color:#D70000; color:#FFFFFF; padding:4px; padding-left:6px;width:295px;">Wrong verification code</div></p> 
<?php ;}?>

    <p><input type="submit" class="bigButton submit" value="Send" name="submit"></p>

    </form>

