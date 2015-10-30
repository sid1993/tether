<script>
function chck_null_registration()
{
	if(document.getElementById('fname').value=="")
	{
		alert("First name cannot be blank!!");
		document.getElementById('fname').focus();
					return false;
	}
	else if(document.getElementById('lname').value=="")
	{
		alert("Last name cannot be blank!!");
		document.getElementById('lname').focus();
					return false;
	}
	else if(document.getElementById('email').value=="")
	{
		alert("Email ID cannot be blank!!");
		document.getElementById('email').focus();
					return false;
	}
	else if(document.getElementById('cno').value=="")
	{
		alert("Contact Number cannot be blank!!");
		document.getElementById('cno').focus();
					return false;
	}
	else if(document.getElementById('address').value=="")
	{
		alert("Address cannot be blank!!");
		document.getElementById('address').focus();
					return false;
	}
	else if(document.getElementById('state').value=="")
	{
		alert("State Code cannot be blank!!");
		document.getElementById('state').focus();
					return false;
	}
	else if(document.getElementById('pincode').value=="")
	{
		alert("Pincode cannot be blank!!");
		document.getElementById('pincode').focus();
					return false;
	}
	else if(document.getElementById('prof').value=="")
	{
		alert("Profession cannot be blank!!");
		document.getElementById('prof').focus();
					return false;
	}
	else if(document.getElementById('uiid').value=="")
	{
		alert("User Identity Number cannot be blank!!");
		document.getElementById('uiid').focus();
					return false;
	}
	else if(document.getElementById('uiphoto').value=="")
	{
		alert("User Indentify Photo cannot be blank!!");
		document.getElementById('uiphoto').focus();
					return false;
	}
	else if(document.getElementById('uphoto').value=="")
	{
		alert("First name cannot be blank!!");
		document.getElementById('uphoto').focus();
					return false;
	}
	else if(document.getElementById('uname').value=="")
	{
		alert("Username cannot be blank!!");
		document.getElementById('uname').focus();
					return false;
	}
	else if(document.getElementById('pass').value=="")
	{
		alert("Password name cannot be blank!!");
		document.getElementById('pass').focus();
					return false;
	}
	else if(document.getElementById('repass').value=="")
	{
		alert("Re-type Password cannot be blank!!");
		document.getElementById('repass').focus();
					return false;
	}
	if(document.getElementById('pass').value!= document.getElementById('repass').value)
	{
		alert("Password mismatch!!");
		document.getElementById('repass').focus();
					return false;
	}

	
}
</script>