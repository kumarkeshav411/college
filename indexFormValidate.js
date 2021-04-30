function validate()
			{
				
				
				if(document.getElementById("sname").value=="")
				{
					alert("Please enter Name:");
					document.getElementById("sname").focus()
					return false;					
				}
				if(document.getElementById("fname").value=="")
				{
					alert("Please enter father's name:");
					document.getElementById("fname").focus()
					return false;					
				}
				if(document.getElementById("mname").value=="")
				{
					alert("Please enter Mother's name:");
					document.getElementById("mname").focus()
					return false;					
				}
				
				if(document.getElementById("dob").value=="")
				  {
					alert("Please enter date of birth:");
					document.getElementById("dob").focus()
					return false;					
				}
				
				
				if(document.getElementById("mob").value=="")
				{
					alert("Please enter mobile number");
					document.getElementById("mob").focus()
					return false;					
				}
				else
					{
						mobno=document.getElementById("mob").value;
						if(isNaN(mobno))
							{
							alert("The mobile number must be number");
							document.getElementById("mob").focus()
							return false;	
							}
						if(mobno.length<10)
							{
							alert("The mobile number must be 10 digits.");
							document.getElementById("mob").focus()
							return false;
							}
						if(Number(mobno.substr(0,1))<6)
							{
							alert("The mobile number must start with 6 onward.");
							document.getElementById("mob").focus()
							return false;
							}
						
					}
				
				if(document.getElementById("email").value=="")
				{
					alert("Please enter Email id:");
					document.getElementById("email").focus()
					return false;					
				}
				
				else
					{
						//alert("test1");
						email=document.getElementById("email").value;
						//alert("test2");
						atPos=email.indexOf("@");
						dotPos=email.indexOf(".");
						//alert("test3");
						//alert(email+" "+atPos+" "+dotPos);
						if(atPos==-1)
							{
								alert("The @ sign is missing in email.");
								document.getElementById("email").focus()
								return false;
							}
						if(dotPos==-1)
							{
								alert("Domain is missing in email.");
								document.getElementById("email").focus()
								return false;
							}
						if(atPos==0 || dotPos==0)
							{
						alert("The @ or . sign must not be at first pos.");
								document.getElementById("email").focus()
								return false;
							}
						if((email.length - email.lastIndexOf("."))<3)
							{
								alert("Domain is invalid in Email.");
								document.getElementById("email").focus()
								return false;							
							}
						if(atPos!=email.lastIndexOf("@"))
							{
								alert("Email must have only one @ sign.");
								document.getElementById("email").focus()
								return false;
							}
							
					}
					
				
				if(document.getElementById("addr").value=="")
				{
					alert("Please enter addrese:");
					document.getElementById("addr").focus()
					return false;					
				}
				
				
				//if(course=="")
				//{
					//alert("Please select any course:");
					//document.getElementById("course").focus()
					//return false;					
				//}
				if(document.getElementById("photo").value=="")
				{
					alert("Please select any photo:");
					document.getElementById("photo").focus()
					return false;					
				}
				if(!document.getElementById("confirm").checked)
				{
					alert("Please select the agreement option");
					document.getElementById("confirm").focus()
					return false;					
				}
			}
		
		function setData()
			{
				document.getElementById("cocurri").value="";
				
				if (document.getElementById("chkCoding").checked)
					document.getElementById("cocurri").value=document.getElementById("chkCoding").value;
					
				if(document.getElementById("chkDance").checked)
					document.getElementById("cocurri").value=document.getElementById("cocurri").value + ", " + document.getElementById("chkDance").value;
					
				if(document.getElementById("chksinging").checked)
					document.getElementById("cocurri").value=document.getElementById("cocurri").value + ", " + document.getElementById("chksinging").value;			
					
		if(document.getElementById("cocurri").value.substr(0,1)==",")
			{
			document.getElementById("cocurri").value=document.getElementById("cocurri").value.substr(2);	
			}
			
					
					
			}
			
			
			
			/*function funHome()
  {
  location.replace('..')
  }*/