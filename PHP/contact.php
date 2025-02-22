<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../CSS/contact.css">
  <title>Contact Us</title>
</head>
<body>
  <header>
    <nav>
      <img class="logo" src="logo-removebg-preview (3).png" alt="">
    <label for="sidebar-toggle">
      <span class="menu_icon">
        <svg viewBox="0 0 18 15" width="18px" height="15px">
          <path d="M18,1.484c0,0.82-0.665,1.484-1.484,1.484H1.484C0.665,2.969,0,2.304,0,1.484l0,0C0,0.665,0.665,0,1.484,0 h15.032C17.335,0,18,0.665,18,1.484L18,1.484z M18,7.516C18,8.335,17.335,9,16.516,9H1.484C0.665,9,0,8.335,0,7.516l0,0 c0-0.82,0.665-1.484,1.484-1.484h15.032C17.335,6.031,18,6.696,18,7.516L18,7.516z M18,13.516C18,14.335,17.335,15,16.516,15H1.484 C0.665,15,0,14.335,0,13.516l0,0c0-0.82,0.665-1.483,1.484-1.483h15.032C17.335,12.031,18,12.695,18,13.516L18,13.516z">
          </path>
        </svg>
     </span>
   
    <input type="checkbox" id="sidebar-toggle" class="sidebar-toggle"/>
    
    <div class="overlay"></div>

    <div class="sidebar">
      
       <label class="close-btn" for="sidebar-toggle">&times;</label>
           <div class="study1">
            <a class="nav sidetexts" href="vlog.php" >Home</a>
            <hr>
            <a class="nav sidetexts" href="contact.php" style="margin-left: -30px;" >Contact</a>
            <hr>
            
            <a class="nav sidetexts" href="home.php"  id="sidetexts3">About</a>
         </div>
      
    </div>
  </label>
</nav>
  </header>
  <section>
    
    <form action="/submit-form" method="POST">
      <label class="name" for="name">Name</label>
      <input type="text" id="name" name="name" required placeholder="Your Name">

      <label class="email" for="email">Email</label>
      <input type="email" id="email" name="email" required placeholder="Your Email">

      <label for="message">Message</label>
      <textarea id="message" name="message" required placeholder="Your Message" rows="5"></textarea>

      <button type="submit">Send Message</button>
    </form>
    <div class="you">
      <h2 class="we">We'd love to hear from you!</h2>
      <h1 class="opinion">YOUR OPINION MATTERS TO US THE MOST</h1>
    </div>
  </section>

  <footer class="footer">
		<div class="container">
			
			
			<div class="column">
				<h3>Contact Us</h3>
				<ul>
					<li>Daro, Dumaguete City</li>
				</ul>
			</div>
			
			
			
		</div>
		<div class="bottom-bar">
			&copy; 2024 Black Fox. All rights reserved.
		</div>
	</footer>
  

</body>
</html>
