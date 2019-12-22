
/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.btn2')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}

//display tabcontent when click
  function openPage(pageName, elmnt, color)
	{
			var i, tabcontent, tablinks;
			tabcontent=document.getElementsByClassName("tabcontent");
			for(i=0; i<tabcontent.length; i++)
			{
				tabcontent[i].style.display="none";
			}


		tablinks=document.getElementsByClassName("tablink");
		for(i=0; i<tablinks.length;i++)	{
			tablinks[i].style.backgroundColor="";
		}

		document.getElementById(pageName).style.display="block";
		elmnt.style.backgroundColor=color;
	}

  function activeBtn()//carol
  {
    var login=document.getElementById("loginBtn");
    var signup=document.getElementById("signupBtn");
    var dispSignup=document.getElementById("dispSignup");
    var dispLogin=document.getElementById("dispLogin");
    var signupInfo=document.getElementById("signupInfo");
    var loginInfo=document.getElementById("loginInfo");

    if(login.style.backgroundColor="black")
    {
      signup.style.backgroundColor="black";
      login.style.backgroundColor="#2c9069";
      login.style.cursor="default";
      signup.style.cursor="pointer";
      dispLogin.style.display="block";
      dispSignup.style.display="none";
      loginInfo.style.display="block";
      signupInfo.style.display="none";
    }
  }

  function chkPassword()
  {
    var pw=document.getElementsByName("newPw")[0].value;
    var pw1=document.getElementsByName("newPw1")[0].value;

    if(pw!=pw1)
    {
      alert('Password entered is not identical with confirmed password.');
    }
  }

  function activeBtn1()//carol
  {
    var login=document.getElementById("loginBtn");
    var signup=document.getElementById("signupBtn");
    var dispSignup=document.getElementById("dispSignup");
    var dispLogin=document.getElementById("dispLogin");
    var signupInfo=document.getElementById("signupInfo");
    var loginInfo=document.getElementById("loginInfo");


    if(signup.style.backgroundColor="black")
    {
      signup.style.backgroundColor="#2c9069";
      login.style.backgroundColor="black";
      signup.style.cursor="default";
      login.style.cursor="pointer";
      dispLogin.style.display="none";
      dispSignup.style.display="block";
      loginInfo.style.display="none";
      signupInfo.style.display="block";
    }
  }
  function chkSignUpInput()//carol
  {
    var email=document.getElementsByName('email')[0].value;
    var userName=document.getElementsByName('userName')[0].value;
    var ic=document.getElementsByName('ic')[0].value;
    var phone=document.getElementsByName('phone')[0].value;
    var pw=document.getElementsByName('passWord')[0].value;
    var pw1=document.getElementsByName('passWord1')[0].value;
    var format = /[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]/;
    var pattern = /[0-9]{12}/;

    if(!/student.utem.edu.my/.test(email))
    {
      document.getElementsByName('email')[0].style.borderColor = "#a72626";
      document.getElementById('errEmail').innerHTML="Please use UTeM student mail to sign up.";
    }
    else if(pw!=pw1)
    {
      document.getElementsByName('passWord')[0].style.borderColor = "#a72626";
      document.getElementsByName('passWord1')[0].style.borderColor = "#a72626";
      document.getElementById('errPw1').innerHTML="Passwords are not identical.";
    }
    else if(!pattern.test(ic))
    {
      document.getElementsByName('ic')[0].style.borderColor = "#a72626";
      document.getElementById('errIc').innerHTML="IC number is not in the correct format.";
    }
    else if(format.test(userName))
    {
      document.getElementsByName('userName')[0].style.borderColor = "#a72626";
      document.getElementById('errUserName').innerHTML="Name cannot contain special characters.";
    }
    else if(pw.length<6)
    {
      document.getElementsByName('passWord')[0].style.borderColor = "#a72626";
      document.getElementById('errPw').innerHTML="Password must be at least 6 characters.";
    }
    else if(!/^[0-9]+$/.test(phone))
    {
      document.getElementsByName('phone')[0].style.borderColor = "#a72626";
      document.getElementById('errPhone').innerHTML="Only numbers are allowed.";
    }
    else
    {
      document.getElementById('signUp').disabled=false;
    }

    if(/student.utem.edu.my/.test(email))
    {
      document.getElementsByName('email')[0].style.borderColor = "#26a747";
      document.getElementById('errEmail').innerHTML="";
    }

    if(pattern.test(ic))
    {
      document.getElementsByName('ic')[0].style.borderColor = "#26a747";
      document.getElementById('errIc').innerHTML="";
    }

    if(!format.test(userName))
    {
      document.getElementsByName('userName')[0].style.borderColor = "#26a747";
      document.getElementById('errUserName').innerHTML="";
    }

    if(/^[0-9]+$/.test(phone) && phone.length>=10)
    {
      document.getElementsByName('phone')[0].style.borderColor = "#26a747";
      document.getElementById('errPhone').innerHTML="";
    }

    if(pw.length>=6)
    {
      document.getElementsByName('passWord')[0].style.borderColor = "#26a747";
      document.getElementById('errPw').innerHTML="";
    }

    if(pw=pw1 && pw.length>=6)
    {
      document.getElementsByName('passWord1')[0].style.borderColor = "#26a747";
      document.getElementById('errPw1').innerHTML="";
    }
  }


	document.getElementById("defaultOpen").click();

  function fltHistTable() //sw
  {
    document.getElementById("historyTable").innerHTML = document.getElementById("historyTableFilter").innerHTML;
  }
