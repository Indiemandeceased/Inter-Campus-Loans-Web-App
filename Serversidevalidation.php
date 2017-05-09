if(!empty($_POST['OK']))
{
	if(!checkMandatory('Student Name''))
	{
		$errors[] = "Please enter a name.";
	}
	elseif(!checkMaxLength('name',20))
	{
		$errors[] = "The name is too long, use a first initial and surname instead!";
	}
	if(!checkMandatory('email'))
	{
		$errors[] = "Please enter your email address";
		elseif(!checkEmail('email'))
		{
			$errors[] = "Enter the correct email address";
			
		}
		if(empty($errors))
		{
			/*Successful Validation*/
			header("Location: thankyou.html");
			exit();
		}
	}



