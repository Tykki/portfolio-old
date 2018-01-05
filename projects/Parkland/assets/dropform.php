<style>
.active-links {
    position: absolute;
    right: 8px;
    top: 0;
}

#container {
font-family: 'RobotoCondensed-Regular', sanserif;
    width: 780px;
    position: relative;
}

#topnav {
    text-align: right;
}

#session {
    cursor: pointer;
    display: inline-block;
    padding: 7px 21px;
    vertical-align: top;
    white-space: nowrap;
	background-color:#008951;
}

#session.active, #session:hover {
    background: rgba(77, 172, 133, 1);
    color: fff;
}

a#form-link {
    color: white;
    position: relative;
	text-decoration: none;
	font-size: 14px;
}

#form-dropdown {
    background-color: #202020;
    min-height: 200px;
    min-width: 160px;
    position: absolute;
    right: 0;
    display: none;
	z-index: 1;
}

#form-dropdown form {
    padding: 5px;
    text-align: center;
}

#form-dropdown .textbox input,textarea{
    width: 200px;
}

fieldset {
    border: none;
}

form.request .textbox label {
    display: block;
	padding: 1px; 0px;
}

form.request .textbox input,textarea {
	font-family:inherit;
	background: white;
    color: black;
    padding: 6px 6px 4px;
}

#button-info {
  color: #ffffff;
  font-size: 14px;
  background: #008951;
  padding: 5px 5px;
  padding-top: 5px;
  border-style:none;
  cursor: pointer;
}

#button-info:hover {
  background: #4DAC85;
}

#comment {
    resize: none;
}

</style>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function () {
$('.active-links').click(function () {
        if ($('#form-dropdown').is(":visible")) {
            $('#form-dropdown').hide()
			$('#session').removeClass('active');
        } else {
            $('#form-dropdown').show()
			$('#session').addClass('active');
        }
		return false;
    });
	$('#form-dropdown').click(function(e) {
        e.stopPropagation();
    });
    $(document).click(function() {
        $('#form-dropdown').hide();
		$('#session').removeClass('active');
    });
});     
</script>

<div id="container">
<div id="topnav">
<div class="active-links">
    <div id="session">
		<a id="form-link" href="#">Request Information &#9660</a>
    </div>
	<div id="form-dropdown">    
		<form method="post" class="request" action="#">
			<fieldset class="textbox">
				<label>
					<input name="lastname" value="" type="text" placeholder="Last Name*" required>
				</label>
				<label>
					<input name="firstname" value="" type="text" placeholder="First Name*" required>
				</label>
				<br>
				<label>
					<input name="phone" value="" type="tel" placeholder="Phone*">
				</label>
				<label>
					<input name="email" value="" type="email" placeholder="Email*" required>
				</label>
				<br>
				<label>	
					<textarea rows="6" id="comment" name="comment" value="" placeholder="Questions or comments"></textarea>
				</label>
			</fieldset>
			<label style="display:inline-block; color:white;">
				<input style="vertical-align:bottom; color:white;" type="checkbox" name="signup" value="signup" checked="checked">Send me Parkland's newsletter
			</label>
			<br> <br>
			<input id="button-info" type="submit" value="SUBMIT">				
		</form>
	</div>
</div>
</div>
</div>