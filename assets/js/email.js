function FormValidation()
{
	var name=document.getElementById('name').value;
	//name validation
	if (name.replace(/\s/g, '').length== 0 ||name.length <=4 ||/^[a-zA-Z\s]+$/.test(name)==false)
	{
        document.getElementById('name').style.borderColor = "red";
        return false;
    }
	
	else
	{
		document.getElementById('name').style.borderColor = "green";
	}
	var email=document.getElementById('email').value;
    //email validation
	 if (email.replace(/\s/g, '').length== 0||/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email)==false)
	{
        document.getElementById('email').style.borderColor = "red";
        return false;
	}
	
	else
	{
		document.getElementById('email').style.borderColor = "green";
	}
	var subject=document.getElementById('subject').value;
	//subject validation
	if (subject.replace(/\s/g, '').length== 0)
	{
        document.getElementById('subject').style.borderColor = "red";
        return false;
    }
	else
	{
		document.getElementById('subject').style.borderColor = "green";
	}
	var message=document.getElementById('message').value;
	//message validation
	if (message.replace(/\s/g, '').length== 0)
	{
        document.getElementById('message').style.borderColor = "red";
        return false;
    }
	else
	{
		document.getElementById('message').style.borderColor = "green";	
	}
		return true; 
}
