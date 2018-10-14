# This will help you to generate CSRF token and prevent CSRF attack
### Usage: 
* Include this in your php file.
* put these lines in your html form ```html <input type="hidden" name="csrf_check" value='<?php echo generate(); ?>'>
					<input type="submit" name="submit_button"> ```
