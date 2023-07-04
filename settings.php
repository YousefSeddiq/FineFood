<?php
    $title = "settings";
    include_once 'header.php';

?>
<!--  your content starts here!!!  -->
<section class="userSet">
    <div class="user_options-containerSet">
		<div class="user_options-forms-set" id="user_options-forms-set">
			<div class="user_forms-login">
                <h2 class="forms_title">Update Account Info</h2>			
					
					<div class="forms_field">
						<form name="forms_form"  class="vali">
 <label id="Username">Username:</label>
 <input type="text"  name="Username" class="forms_field-input" /><br><br>

 <label  id="Address">Address:</label>
 <input  type="text" name="Address" class="forms_field-input" ><br /><br />

 <label  id="Email">Email:</label>
 <input type="email" name="Email" class="forms_field-input" ><br /><br />

<label for="credit">Credit Card:</label>
<input type="text" id="credit" class="forms_field-input" name="credit" value="**** **** **** ****"><br><br>

 <label for="password">Password:</label>
 <input type="password" id="password" name="password" class="forms_field-input" value="haya20" ><br><br>
 
 <label for="re-type">Re-type:</label>
 <input type="password" id="re-type" name="re-type" class="forms_field-input" value="haya20" ><br><br>
 
                     <div class="forms_buttons">

 <button class="user_unregistered-signup" type="submit" onclick="validateForm1()"> Update </button>
 </div>
 

 
 </form>
</div></div></div></div>
</section>
<!--  your content ends here!!!  -->
<?php 

    include_once 'footer.php';

?>