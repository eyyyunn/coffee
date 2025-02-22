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