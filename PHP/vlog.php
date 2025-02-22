<!DOCTYPE html>
<html lang="en">
<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="My Vlog - A personal video blog about my travels, experiences, and daily life.">
		<link rel="stylesheet" href="../CSS/vlog.css">
		<title>My Vlog</title>
		<style>
			
		.scroll-container {
            display: flex;
            overflow-x: auto; /* Enables horizontal scrolling */
            gap: 20px; /* Adds space between items */
            padding: 10px;
            white-space: nowrap; /* Prevents wrapping */
            scroll-snap-type: x mandatory; /* Smooth snapping */
            border: 1px solid #ccc;
        }

        .scroll-container::-webkit-scrollbar {
            height: 8px;
        }

        .scroll-container::-webkit-scrollbar-thumb {
            background: #888;
            border-radius: 4px;
        }

        .scroll-item {
            flex: 0 0 auto; /* Prevents shrinking */
            width: 200px; /* Set a fixed width */
            text-align: center;
            scroll-snap-align: start;
            background: #f8f8f8;
            padding: 10px;
            border-radius: 10px;
        }

        .scroll-item img {
            width: 100%; /* Make image fill the div */
            height: 150px;
            object-fit: cover;
            border-radius: 8px;
        }

		</style>

</head>
<body>
		<header>
			<nav>
				<img class="logo" src="../MEDIA/logo.png" alt="">
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
							<a class="nav sidetexts" href="contact.php"   style="margin-left: -30px;">Contact</a>
							<hr>
				 			
							<a class="nav sidetexts" href="home.php"  id="sidetexts3">About</a>
					 </div>
				
			</div>
		</label>
	</nav>
		</header>

		<section id="home" class="remove">
				<h1 style="color: black;">Dianne's Coffee Shop</h1>
				
			
		</section>

		

		<section id="videos">
			<h2>Coffees</h2>
				<div class="cof_cont">
					<div class="product">
						
						
						<img src="../MEDIA/feat_cof.webp" alt="" srcset="" class="feat">
						<div class="cof_dec">
							<h2 style="color: white;">Stone Street</h2>
							<p>Price: $99.99</p>
							<button id="buyButton">Buy Now</button>
						</div>
						<br>
					</div>
					
					
					<div class="product">
					
						
						<img src="../MEDIA/feat_cof.webp" alt="" srcset="" class="feat">
						<div class="cof_dec">
							<h2 style="color: white;">Stone Street</h2>
							<p>Price: $99.99</p>
							<button id="buyButton">Buy Now</button>
						</div>
						<br>
					</div>
					<br>

					<div class="product">
					
						
						<img src="../MEDIA/feat_cof.webp" alt="" srcset="" class="feat">
						<div class="cof_dec">
							<h2 style="color: white;">Stone Street</h2>
							<p>Price: $99.99</p>
							<button id="buyButton">Buy Now</button>
						</div>
						<br>
					</div>
					<br>
					<div class="product">
					
						
						<img src="../MEDIA/feat_cof.webp" alt="" srcset="" class="feat">
						<div class="cof_dec">
							<h2 style="color: white;">Stone Street</h2>
							<p>Price: $99.99</p>
							<button id="buyButton">Buy Now</button>
						</div>
						<br>
					</div>
					<br>
					<div class="product">
					
						
						<img src="../MEDIA/feat_cof.webp" alt="" srcset="" class="feat">
						<div class="cof_dec">
							<h2 style="color: white;">Stone Street</h2>
							<p>Price: $99.99</p>
							<button id="buyButton">Buy Now</button>
						</div>
						<br>
					</div>
					<br>

				</div>

<div class="scroll-container">
        <div class="scroll-item">
            <img src="../MEDIA/feat_cof.webp" alt="Apple">
            <p>cof</p>
			<p>Price: $99.99</p>
			<button id="buyButton">Buy Now</button>
        </div>
        <div class="scroll-item">
            <img src="../MEDIA/feat_cof.webp" alt="Banana">
            <p>cof</p>
			<p>Price: $99.99</p>
			<button id="buyButton">Buy Now</button>
        </div>
        <div class="scroll-item">
            <img src="../MEDIA/feat_cof.webp" alt="Grapes">
            <p>cof</p>
			<p>Price: $99.99</p>
			<button id="buyButton">Buy Now</button>
        </div>
        <div class="scroll-item">
            <img src="../MEDIA/feat_cof.webp" alt="Orange">
            <p>cof</p>
			<p>Price: $99.99</p>
			<button id="buyButton">Buy Now</button>
        </div>
        <div class="scroll-item">
            <img src="../MEDIA/feat_cof.webp" alt="Strawberry">
            <p>cof</p>
			<p>Price: $99.99</p>
			<button id="buyButton">Buy Now</button>
        </div>
    </div>



				

				<div id="loginModal" class="modal">
							<div class="modal-content">
								<span id="closeModal" class="close">&times;</span>
								<h2>Please log in to proceed with the purchase</h2>
								<form id="loginForm">
									<label for="email">Email:</label>
									<input type="email" id="email" name="email" required><br>
									<label for="password">Password:</label>
									<input type="password" id="password" name="password" required>
									<button type="submit" class="login">Login</button>
										<div class="dont">	
											<p class="d_col">Don't have an account?</p>
											<a href="Reg.php" class="reg">Register</a>
										</div>
								</form>
							</div>
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

		



		<script >
			// script.js
			document.addEventListener('DOMContentLoaded', function() {
				// Get elements
				const buyButton = document.getElementById('buyButton');
				const loginModal = document.getElementById('loginModal');
				const closeModal = document.getElementById('closeModal');
				const loginForm = document.getElementById('loginForm');
				
				// Simulate user login state (for demonstration)
				let isLoggedIn = false;  // Set to true if the user is logged in
			
				// Show modal when "Buy Now" is clicked
				buyButton.addEventListener('click', function() {
					if (!isLoggedIn) {
						loginModal.style.display = 'block';  // Show modal if not logged in
					} else {
						// Proceed to checkout or other steps for logged-in users
						alert('Proceeding to checkout...');
					}
				});
			
				// Close the modal when the "x" is clicked
				closeModal.addEventListener('click', function() {
					loginModal.style.display = 'none';
				});
			
				// Close the modal if the user clicks outside of the modal content
				window.addEventListener('click', function(event) {
					if (event.target === loginModal) {
						loginModal.style.display = 'none';
					}
				});
			
				// Handle login form submission
				loginForm.addEventListener('submit', function(event) {
					event.preventDefault();  // Prevent the form from submitting the traditional way
					// Assume login is successful for demonstration
					isLoggedIn = true;
					loginModal.style.display = 'none';  // Hide the modal
					alert('Logged in successfully! Proceeding to checkout...');
					// Redirect to checkout or update the page state as necessary
				});
			});
		</script>
	

		
</body>
</html>
