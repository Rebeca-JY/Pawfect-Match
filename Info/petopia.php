<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Petopia Product Page</title>
    <link rel="stylesheet" href="petopia.css">


    </head>
<body>
      <?php include '../components/header.php';?>


   
    <script src="https://cdn.tailwindcss.com"></script>
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    },
                },
            },
        };
    </script>
    
    <style>
        /* Apply the Inter font to the whole page */
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>
<body class="bg-white text-gray-900">

    <!-- Main Container -->
    <div class="container mx-auto max-w-6xl p-4 sm:p-8">
        <div class="w-full max-w-5xl mx-auto bg-white rounded-lg">
            
            <!-- Product Section -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 md:gap-12">
                
                <!-- Column 1: Product Image -->
                <div class="flex items-center justify-center p-4 rounded-lg">
                    <img 
                        src="../../foto/petopia-full-pack-dog-food.png" 
                        alt="Petopia dog food full pack" 
                        class="w-full h-auto max-w-md md:max-w-full object-cover rounded-lg"
                    >
                    <!-- Note: The image in the screenshot is a complex composite. 
                         I've used a placeholder. You would replace the 'src' 
                         with your actual product image URL. -->
                </div>
                
                <!-- Column 2: Product Details -->
                <div class="flex flex-col justify-center py-4">
                    <h1 class="text-3xl lg:text-4xl font-bold text-gray-800 mb-3">
                        Petopia Full pack dog food
                    </h1>
                    
                    <p class="text-3xl lg:text-4xl font-semibold text-gray-900 mb-5">
                        Rp450.000.000
                    </p>
                    
                    <p class="text-gray-600 mb-8 leading-relaxed">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                    </p>
                    
                    <!-- Quantity Selector -->
                    <div class="flex items-center mb-8">
                        <button id="minus-btn" class="bg-gray-800 text-white w-10 h-10 rounded-lg flex items-center justify-center text-2xl font-bold hover:bg-gray-700 transition-colors duration-300">
                            -
                        </button>
                        <span id="quantity" class="mx-5 text-2xl font-medium w-12 text-center">
                            1
                        </span>
                        <button id="plus-btn" class="bg-gray-800 text-white w-10 h-10 rounded-lg flex items-center justify-center text-2xl font-bold hover:bg-gray-700 transition-colors duration-300">
                            +
                        </button>
                    </div>
                    
                    <!-- Action Buttons -->
                    <div class="flex flex-col sm:flex-row gap-4">
                        <button class="w-full sm:w-auto flex-1 bg-white border-2 border-gray-800 text-gray-800 py-3 px-8 rounded-full font-semibold text-lg hover:bg-[#957B65] hover:text-[#ffffff] transition-all duration-300 shadow-sm">
                            Buy
                        </button>
                        <button class="w-full sm:w-auto flex-1 bg-gray-800 text-white py-3 px-8 rounded-full font-semibold text-lg hover:bg-[#b80e0e] transition-all duration-300 shadow-sm">
                            Cancel
                        </button>
                    </div>
                </div>
            </div>
            
            <!-- Horizontal Divider -->
            <hr class="my-12 border-t border-gray-200">
            
            <!-- Reviews Section -->
            <div>
                <!-- Overall Rating -->
                <div class="flex items-center mb-6">
                    <h2 class="text-xl font-semibold mr-4">Rating 4.3 ( 301 )</h2>
                    <div class="flex items-center text-yellow-400 text-xl">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                        <!-- Using 4.5 stars to represent 4.3 visually -->
                    </div>
                </div>
                
                <!-- Single Review -->
                <div class="flex gap-4">
                    <!-- Avatar -->
                    <img 
                        src="https://placehold.co/48x48/e0e0e0/777?text=S" 
                        alt="User avatar"
                        class="w-12 h-12 rounded-full flex-shrink-0"
                        onerror="this.src='https://placehold.co/48x48/e0e0e0/777?text=User'"
                    >
                    
                    <!-- Review Content -->
                    <div class="flex-grow">
                        <div class="flex items-center mb-1">
                            <span class="font-semibold mr-3">s****n</span>
                            <div class="flex items-center text-yellow-400 text-sm">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-regular fa-star text-gray-400"></i>
                            </div>
                        </div>
                        <p class="text-gray-600 leading-relaxed">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                        </p>
                    </div>
                </div>
            </div>
            
        </div>
    </div>

    <script>
        // JavaScript for the quantity selector
        document.addEventListener('DOMContentLoaded', () => {
            const minusBtn = document.getElementById('minus-btn');
            const plusBtn = document.getElementById('plus-btn');
            const quantitySpan = document.getElementById('quantity');
            
            let quantity = 1;
            
            // Function to update the quantity display
            function updateQuantity() {
                quantitySpan.textContent = quantity;
            }
            
            // Event listener for the plus button
            plusBtn.addEventListener('click', () => {
                quantity++;
                updateQuantity();
            });
            
            // Event listener for the minus button
            minusBtn.addEventListener('click', () => {
                if (quantity > 1) {
                    quantity--;
                    updateQuantity();
                }
            });
            
            // Initialize quantity display
            updateQuantity();
        });
    </script>

<!-- footer -->

<footer class="footer">
  <div class="footer-content">
    
    <div class="footer-top">
  <!-- Logo -->
  <div class="footer-logo">
    <img src="../../foto/paw.png" alt="Pawfect Match Logo">

  </div>

  <!-- Chart -->
  <div class="footer-chart">
    <img src="../../foto/statistic.png" alt="Statistics">
  </div>
</div>

    <!-- Company Links -->
    <div class="footer-links">
      <h2>Company</h2>
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
      </ul>
    </div>

    <!-- Members -->
    <div class="footer-members">
      <h2>Member</h2>
      <ul>
        <li>Deven</li>
        <li>Lionel</li>
        <li>Rebeca</li>
      </ul>
    </div>

    <!-- Social Media -->
    <div class="footer-social">
      <h4>Social Media</h4>
      <div class="social-icons">
        <a href="#"><img src="../../foto/wa.png" alt="WhatsApp"></a>
        <a href="#"><img src="../../foto/ig.png" alt="Instagram"></a>
        <a href="#"><img src="../../foto/tt.png" alt="TikTok"></a>
        <a href="#"><img src="../../foto/tele.png" alt="Telegram"></a>
      </div>
    </div>

  </div>

  <!-- Copyright -->
  <div class="footer-bottom">
    <p>© 2025 PawFect-Match</p>
  </div>
</footer>
</body>
</html>
