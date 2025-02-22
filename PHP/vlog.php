<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="My Vlog - A personal video blog about my travels, experiences, and daily life.">
    <link rel="stylesheet" href="../CSS/vlog.css?v=<?php echo time(); ?>">
    <title>My Vlog</title>
    <style>
        .scroll-container-wrapper {
            position: relative;
        }
        .scroll-container {
            display: flex;
            overflow-x: auto;
            gap: 20px;
            padding: 10px;
            white-space: nowrap;
            scroll-snap-type: x mandatory;
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
            flex: 0 0 auto;
            width: 200px;
            text-align: center;
            scroll-snap-align: start;
            background: #f8f8f8;
            padding: 10px;
            border-radius: 10px;
        }
        .scroll-item img {
            width: 100%;
            height: 150px;
            object-fit: cover;
            border-radius: 8px;
        }
        .scroll-button {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background: rgba(0, 0, 0, 0.5);
            color: white;
            border: none;
            padding: 10px;
            cursor: pointer;
            font-size: 18px;
            border-radius: 5px;
        }
        .scroll-button.left {
            left: 0;
        }
        .scroll-button.right {
            right: 0;
        }
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .modal-content {
            background: white;
            padding: 20px;
            border-radius: 5px;
            text-align: center;
        }
        .close {
            cursor: pointer;
            color: red;
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
        <div class="scroll-container-wrapper">
            <button class="scroll-button left">&#9664;</button>
            <div class="scroll-container">
                <div class="scroll-item">
                    <img src="../MEDIA/feat_cof.webp" alt="Apple">
                    <p>cof</p>
                    <p>Price: $99.99</p>
                    <button class="buyButton">Buy Now</button>
                </div>
                <div class="scroll-item">
                    <img src="../MEDIA/feat_cof.webp" alt="Banana">
                    <p>cof</p>
                    <p>Price: $99.99</p>
                    <button class="buyButton">Buy Now</button>
                </div>
                <div class="scroll-item">
                    <img src="../MEDIA/feat_cof.webp" alt="Grapes">
                    <p>cof</p>
                    <p>Price: $99.99</p>
                    <button class="buyButton">Buy Now</button>
                </div>
                <div class="scroll-item">
                    <img src="../MEDIA/feat_cof.webp" alt="Orange">
                    <p>cof</p>
                    <p>Price: $99.99</p>
                    <button class="buyButton">Buy Now</button>
                </div>
                <div class="scroll-item">
                    <img src="../MEDIA/feat_cof.webp" alt="Strawberry">
                    <p>cof</p>
                    <p>Price: $99.99</p>
                    <button class="buyButton">Buy Now</button>
                </div>
				<div class="scroll-item">
                    <img src="../MEDIA/feat_cof.webp" alt="Orange">
                    <p>cof</p>
                    <p>Price: $99.99</p>
                    <button class="buyButton">Buy Now</button>
                </div>
                <div class="scroll-item">
                    <img src="../MEDIA/feat_cof.webp" alt="Strawberry">
                    <p>cof</p>
                    <p>Price: $99.99</p>
                    <button class="buyButton">Buy Now</button>
                </div>
				<div class="scroll-item">
                    <img src="../MEDIA/feat_cof.webp" alt="Orange">
                    <p>cof</p>
                    <p>Price: $99.99</p>
                    <button class="buyButton">Buy Now</button>
                </div>
                <div class="scroll-item">
                    <img src="../MEDIA/feat_cof.webp" alt="Strawberry">
                    <p>cof</p>
                    <p>Price: $99.99</p>
                    <button class="buyButton">Buy Now</button>
                </div>
				<div class="scroll-item">
                    <img src="../MEDIA/feat_cof.webp" alt="Orange">
                    <p>cof</p>
                    <p>Price: $99.99</p>
                    <button class="buyButton">Buy Now</button>
                </div>
                <div class="scroll-item">
                    <img src="../MEDIA/feat_cof.webp" alt="Strawberry">
                    <p>cof</p>
                    <p>Price: $99.99</p>
                    <button class="buyButton">Buy Now</button>
                </div>
            </div>
            <button class="scroll-button right">&#9654;</button>
        </div>
    </section>
    
    <div id="loginModal" class="modal">
    <div class="modal-content">
        <span class="close" id="closeModal">&times;</span>
        <h2 id="formTitle">Login</h2>

        <!-- Login Form -->
        <form id="loginForm">
            <input type="text" placeholder="Username" required>
            <input type="password" placeholder="Password" required>
            <button type="submit">Login</button>
            <p>Don't have an account? <a href="#" id="showRegister">Sign up</a></p>
        </form>

        <!-- Registration Form (Hidden Initially) -->
        <form id="registerForm" style="display: none;">
            <input type="text" placeholder="Full Name" required>
            <input type="email" placeholder="Email" required>
            <input type="text" placeholder="Username" required>
            <input type="password" placeholder="Password" required>
            <button type="submit">Register</button>
            <p>Already have an account? <a href="#" id="showLogin">Login</a></p>
        </form>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const loginModal = document.getElementById('loginModal');
    const closeModal = document.getElementById('closeModal');
    const loginForm = document.getElementById('loginForm');
    const registerForm = document.getElementById('registerForm');
    const formTitle = document.getElementById('formTitle');

    const showRegister = document.getElementById('showRegister');
    const showLogin = document.getElementById('showLogin');

    let isLoggedIn = false;

    // Show login modal on Buy button click if not logged in
    document.querySelectorAll('.buyButton').forEach(button => {
        button.addEventListener('click', function() {
            if (!isLoggedIn) {
                loginModal.style.display = 'flex';
            } else {
                alert('Proceeding to checkout...');
            }
        });
    });

    closeModal.addEventListener('click', function() {
        loginModal.style.display = 'none';
    });

    window.addEventListener('click', function(event) {
        if (event.target === loginModal) {
            loginModal.style.display = 'none';
        }
    });

    // Handle Login
    loginForm.addEventListener('submit', function(event) {
        event.preventDefault();
        isLoggedIn = true;
        loginModal.style.display = 'none';
        alert('Logged in successfully! Proceeding to checkout...');
    });

    // Handle Registration
    registerForm.addEventListener('submit', function(event) {
        event.preventDefault();
        alert('Registered successfully! You can now log in.');
        registerForm.style.display = 'none';
        loginForm.style.display = 'block';
        formTitle.textContent = 'Login';
    });

    // Toggle to Registration Form
    showRegister.addEventListener('click', function(event) {
        event.preventDefault();
        loginForm.style.display = 'none';
        registerForm.style.display = 'block';
        formTitle.textContent = 'Register';
    });

    // Toggle to Login Form
    showLogin.addEventListener('click', function(event) {
        event.preventDefault();
        registerForm.style.display = 'none';
        loginForm.style.display = 'block';
        formTitle.textContent = 'Login';
    });
});
</script>

</body>
</html>
