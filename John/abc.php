<?php

$a=$_POST["email"];
$b=$_POST["fname"];
$c=$_POST["psw"];
$d=$_POST["age"];
$e=$_POST["address"];

$username="root";
$password="admin";
$port="127.0.0.1";

$con=new mysqli("127.0.0.1","root","","javaProject");

if(!$con)
{
	echo "connection to mysql failed<br>";
}
else
{
	echo "connection successful<br>";
}

$db="use userDb;";

$el=mysqli_query($con,$db);

$db="insert into userDb values('$a','$b','$c','$d','$e');";

$el=mysqli_query($con,$db);

echo"<html>
<head>
    <title>2nd page</title>
    <link href='2css.css' rel='stylesheet' type='text/css'>   
    <link href='swiper.min.css' rel='stylesheet' >
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
</head>
   <body background='2798385.jpg' style='background-repeat: no-repeat;background-size: cover'>
    <header>
        <div class='navbar'>
			
            <a class='active' href='' style='margin-top:5px;'><i class='fa fa-fw fa-home'></i> Home </a>
            <a class='active' href='#' style='margin-top:5px;'><i class='fa fa-envelope'></i> Mail Box</a>
			<a onclick='document.getElementById('id01').style.display='block'' style='width:auto; cursor:pointer; color: white; float:right;top:8;
          position:relative;' ><i class='fa fa-user'> Hello $b</i> </a>
           <select class='custom-select'>
					<option value='0'>Select domain </option>
					<option value='1'>World wide</option>
					<option value='2'>Country wide</option>
					<option value='3'>State wide</option>
					<option value='4'>District</option>
					<option value='5'>Locality</option>
				</select>
            <div action='' class='search-box'>
				
				<input type='text' placeholder='search here for jobs, services and candidates' style='width:450px; '>
				
                <i class='fas-fa-search'></i>
				              
            </div>
            <label class='switch'>
                <input type='checkbox' >
                <span class='slider round' ></span>
            </label>
            
            
			
<script>
var x, i, j, selElmnt, a, b, c;

x = document.getElementsByClassName('custom-select');
for (i = 0; i < x.length; i++) {
  selElmnt = x[i].getElementsByTagName('select')[0];
  /* For each element, create a new DIV that will act as the selected item: */
  a = document.createElement('DIV');
  a.setAttribute('class', 'select-selected');
  a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
  x[i].appendChild(a);
  /* For each element, create a new DIV that will contain the option list: */
  b = document.createElement('DIV');
  b.setAttribute('class', 'select-items select-hide');
  for (j = 1; j < selElmnt.length; j++) {
    /* For each option in the original select element,
    create a new DIV that will act as an option item: */
    c = document.createElement('DIV');
    c.innerHTML = selElmnt.options[j].innerHTML;
    c.addEventListener('click', function(e) {
        /* When an item is clicked, update the original select box,
        and the selected item: */
        var y, i, k, s, h;
        s = this.parentNode.parentNode.getElementsByTagName('select')[0];
        h = this.parentNode.previousSibling;
        for (i = 0; i < s.length; i++) {
          if (s.options[i].innerHTML == this.innerHTML) {
            s.selectedIndex = i;
            h.innerHTML = this.innerHTML;
            y = this.parentNode.getElementsByClassName('same-as-selected');
            for (k = 0; k < y.length; k++) {
              y[k].removeAttribute('class');
            }
            this.setAttribute('class', 'same-as-selected');
            break;
          }
        }
        h.click();
    });
    b.appendChild(c);
  }
  x[i].appendChild(b);
  a.addEventListener('click', function(e) {
  
    e.stopPropagation();
    closeAllSelect(this);
    this.nextSibling.classList.toggle('select-hide');
    this.classList.toggle('select-arrow-active');
  });
}

function closeAllSelect(elmnt) {
 
  var x, y, i, arrNo = [];
  x = document.getElementsByClassName('select-items');
  y = document.getElementsByClassName('select-selected');
  for (i = 0; i < y.length; i++) {
    if (elmnt == y[i]) {
      arrNo.push(i)
    } else {
      y[i].classList.remove('select-arrow-active');
    }
  }
  for (i = 0; i < x.length; i++) {
    if (arrNo.indexOf(i)) {
      x[i].classList.add('select-hide');
    }
  }
}


document.addEventListener('click', closeAllSelect);
</script>
         
        </div>
        <div class='swiper-container'>
            <div class='swiper-wrapper'>
               <div class='swiper-slide'>
                    <div class='card'>
                         <div class='sliderText'>
                             <h3>Result 1</h3>
                         </div>
                         <div class='content'>
                         <p>Website builder
                         </p>
						<a href='#'>See profile</a>
                         </div>
                    </div>
              </div>
              <div class='swiper-slide'>
                    <div class='card'>
                         <div class='sliderText'>
                             <h3>Result 2</h3>
                         </div>
                         <div class='content'>
                         <p>Multimedia services
                         </p>
                         <a href='#'>See profile</a>
                         </div>
                    </div>
              </div>
              <div class='swiper-slide'>
                    <div class='card'>
                         <div class='sliderText'>
                             <h3>Result 3</h3>
                         </div>
                         <div class='content'>
                         <p>Carpenter
                         </p>
                         <a href='#'>See profile</a>
                         </div>
                    </div>
              </div>
              <div class='swiper-slide'>
                    <div class='card'>
                         <div class='sliderText'>
                             <h3>Result 4</h3>
                         </div>
                         <div class='content'>
                         <p>Carpenter
                         </p>
                         <a href='#'>See profile</a>
                         </div>
                    </div>
              </div>
              <div class='swiper-slide'>
                    <div class='card'>
                         <div class='sliderText'>
                             <h3>Result 5</h3>
                         </div>
                         <div class='content'>
                         <p>Plumber
                         </p>
                         <a href='#'>See profile</a>
                         </div>
                    </div>
              </div>
           </div>
      </div>
        <script src='swiper.min.js'></script>
        <script>
    var swiper = new Swiper('.swiper-container', {
      effect: 'coverflow',
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: 'auto',
      coverflowEffect: {
        rotate: 30,
        stretch: 0,
        depth: 200,
        modifier: 1,
        slideShadows : true,
      },
      pagination: {
        el: '.swiper-pagination',
      },
    });
  </script>
      
  <div id='id01' class='modal'>
  <form class='modal-content animate' action='abc.php' method='post'>
    <div class='imagecontainer'>
      <span onclick='document.getElementById('id01').style.display='none'' class='close' title='Close Modal'>&times;</span>
      <img src='avatardefault.jpg' alt='Avatar' class='avatar'>
    </div>
    <div class='container'>
        
      <p>Please fill in this form to create an account.</p>
      <hr>
      <label for='email'><b>Email</b></label>
      <input type='text' placeholder='Enter Email' name='email' required>
      <br>
      <label for='fname'><b>Full Name</b></label>
      <input type='text' placeholder='Enter Full Name' name='fname' required>
      <br>
      <label for='Choose'><b>Choose Type</b></label>
      <div class='container1'>
      <div class='round'>
      <p style='position: relative;left:33;top:10;'>         Enterpreneur</p>
      <input type='checkbox' id='checkbox1' />
      <label for='checkbox1'></label>
      </div>
      <br>
      <div class='round'>
      <p style='position: relative;left:33;top:10;'> Worker</p><input type='checkbox' id='checkbox2' />
      <label for='checkbox2'></label>
      </div>
      <br>
      <label for='psw'><b>Password</b></label>
      <input type='password' placeholder='Enter Password' name='psw' required>
      <br>
      <label for='psw-repeat'><b>Repeat Password</b></label>
      <input type='password' placeholder='Repeat Password' name='psw-repeat' required>
      <br>
      <label for='Age'><b>Age</b></label>
      <input type='age' placeholder='Enter age' name='age' required>
      <br>
      <label for='Address'><b>Address</b></label>
      <input type='address' placeholder='Enter Address' name='address' required>
      <br>
      <label>
        <input type='checkbox' checked='checked' name='remember'> Remember me
      </label>
      <p>By creating an account you agree to our <a href='#' style='color:dodgerblue'>Terms & Privacy</a>.</p>

      <div class='clearfix'>
	    <button type='submit' class='signupbtn' onsubmit='abc.php'>Sign Up</button>
		</form>
       <button class='loginBtn loginBtn--facebook'>Login with Facebook</button>
      <button class='loginBtn loginBtn--google'>Login with Google</button>
      </div>
    </div>

    <div class='container' style='background-color:#f1f1f1'>
      <button type='button' onclick='document.getElementById('id01').style.display='none'' class='cancelbtn'>Cancel</button>
      <span class='psw'>Forgot <a href='#'>password?</a></span>
    </div>
   
   </div>
       </header>
    </body>
</html>";

?>