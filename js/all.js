<script>
function chck_null_registration()
{
	if(document.getElementById('fname').value=="")
	{
		alert("First name cannot be blank!!");
		document.getElementById('fname').focus();
		return false;
	}
	else if
	{
		var letters = /^[A-Za-z]+\s[A-Za-z]+$/;  
	if(fname.value.match(letters))  
	{  
  	}  
	else  
	{  
		alert('Username must have alphabet characters only and must contain only one space');  
		fname.focus();
		return false;  
	}  
	}
	else if(document.getElementById('lname').value=="")
	{
		alert("Last name cannot be blank!!");
		document.getElementById('lname').focus();
					return false;
	}
	else if(document.getElementById('age').value=="")
	{
		alert("Age cannot be blank!!");
		document.getElementById('age').focus();
					return false;
	}
	else if(document.getElementById('sex').value=="")
	{
		alert("Sex cannot be blank!!");
		document.getElementById('sex').focus();
					return false;
	}
	else if(document.getElementById('blood_group').value=="")
	{
		alert("Blood Group cannot be blank!!");
		document.getElementById('blood_group').focus();
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
	else if(document.getElementById('user_aadhar').value=="")
	{
		alert("User's Aadhar Number cannot be blank!!");
		document.getElementById('user_aadhar').focus();
					return false;
	}
	else if(document.getElementById('father_name').value=="")
	{
		alert("Father's Name cannot be blank!!");
		document.getElementById('father_name').focus();
					return false;
	}
	else if(document.getElementById('father_aadhar').value=="")
	{
		alert("Father's Aadhar Number cannot be blank!!");
		document.getElementById('father_aadhar').focus();
					return false;
	}
	else if(document.getElementById('mother_name').value=="")
	{
		alert("Mother's Name cannot be blank!!");
		document.getElementById('mother_name').focus();
					return false;
	}
	else if(document.getElementById('mother_aadhar').value=="")
	{
		alert("Mother's Aadhar Number cannot be blank!!");
		document.getElementById('mother_aadhar').focus();
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
	else if(document.getElementById('uphoto').value=="")
	{
		alert("First name cannot be blank!!");
		document.getElementById('uphoto').focus();
					return false;
	}
	return true;
}
</script>