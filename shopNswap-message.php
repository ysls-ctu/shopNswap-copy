<!DOCTYPE html>

<html lang="en">

    <head>

        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

        <title>shopNswap.</title>
        <link rel="icon" type="image/x-icon" href="shopNswap-images/shopNswapLogo.png">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.5.0/css/all.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="shopNswap-home.css">
        <script src="shopNswap-home.js"></script>
        
    </head>

    <body id="bodyCont">

        <section id="header">
            <div class="topnav" id="myTopnav">
                <a href="shopNswap-home.html" class="logo">
                    <img src="/shopNswap-images/shopNswapLogo2.svg" alt="">
                </a>
                <a href="shopNswap-home.html" class="siteName"><p>shopNswap.</p></a>
                <a href="#" class="icon1" onclick="showPopup()">
                    <i class="fa-solid fa-sign-out-alt"></i><span class="extra-content">Sign Out</span>
                </a>
                <div class="overlay" id="overlay" onclick="hidePopup()"></div>

                <div class="popup" id="popup">
                    <i class="fa-solid fa-face-frown fa-shake"></i>
                    <p>Are you sure you want to sign out?</p>
                    <div class="popup-buttons">
                        <button onclick="cancelSignOut()">No</button>
                        <button onclick="confirmSignOut()">Yes</button>
                    </div>
                </div>

                <a href="shopNswap-profile.html" class="icon1"><i class="fa-solid fa-user"></i><span class="extra-content">User Settings</span></a>
                <a href="shopNswap-cart.html" class="icon1"><i class="fa-solid fa-cart-shopping"></i><span class="extra-content">Shop Cart</span></a>
                <a href="shopNswap-heart.html" class="icon1"><i class="fa-solid fa-heart"></i><span class="extra-content">Liked Items</span></a>
                <a href="shopNswap-message.html" class="icon1"><i class="fa-solid fa-envelope"></i><span class="extra-content">Messages</span></a>
                <a href="javascript:void(0);" class="icon" onclick="toggleMenu()">
                  <i class="fa fa-bars"></i>
                </a>
            </div>
        </section>

        <section id="banner">
            <a href="shopNswap-underConstruction.html" class="container1">
                <div class="col1">
                    <i class="fas fa-share"></i>&nbsp;&nbsp;&nbsp;
                </div>
                <div class="col2">
                    <center>
                        <h3>SHARE & EARN</h3>
                        <p>up to 10% off</p>
                    </center>
                </div>
            </a>
            <a href="shopNswap-underConstruction.html" class="container2">
                <div class="col1">
                    <i class="fa-solid fa-tags"></i>&nbsp;&nbsp;&nbsp;
                </div>
                <div class="col2">
                    <center>
                        <h3>GET ₱100 OFF DISCOUNT</h3>
                        <p>on your first order</p>
                    </center>
                </div>
            </a>
            <a href="shopNswap-underConstruction.html" class="container2">
                <div class="col1">
                    <i class="fa-solid fa-credit-card"></i>&nbsp;&nbsp;&nbsp;
                </div>
                <div class="col2">
                    <center>
                        <h3>EXCLUSIVE OFFERS</h3>
                        <p>for bonafide students</p>
                    </center>
                </div>
            </a>
            <a href="shopNswap-underConstruction.html" class="container2">
                <div class="col1">
                    <i class="fa-solid fa-gift"></i>&nbsp;&nbsp;&nbsp;
                </div>
                <div class="col2">
                    <center>
                        <h3>EXCITING VOUCHERS</h3>
                        <p>student-friendly offers</p>
                    </center>
                </div>
            </a>
        </section>

        <section id="messageCont">
            <div class="chatList" oncl>
                <div class="chatRow">
                    <p>1</p>
                </div>
            </div>
            <div class="messageList">
                <div class="messageContents" id="messageContents">

                </div>
                <div class="messageInput">
                    <input type="text" name="" id="messageInput" placeholder="Send your message here">
                </div>
            </div>
        </section>

        <footer class="footerCont">
            <div class="footerCont2">
                <div class="footerCol">
                    <a href="shopNswap-home.html">
                        <div class="footerColHead">
                            <img src="shopNswap-images/shopNswapLogo2.svg" alt="">
                            <p>shopNswap.</p>
                        </div>
                    </a><br>
                    <a href="https://shorturl.at/pN028">
                        <p>Corner M.J. Cuenco Ave. & R. Palma St.,Cebu City, Philippines, 6000</p>
                    </a>
                    <p>123-1234</p>
                    <a href="https://www.google.com/gmail/about/">
                        <p>cs@shopnswap.com</p>
                    </a>
                    <span>Follow Us</span>
                    <div class="footerColHead">
                        <a href="https://www.facebook.com/edsel.lucanas">
                            <i class="fa-brands fa-facebook-f"></i>
                        </a>
                        <a href="https://www.twitter.com/">
                            <i class="fa-brands fa-twitter"></i>
                        </a>
                        <a href="https://www.instagram.com/">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                        <a href="https://www.pinterest.com/">
                            <i class="fa-brands fa-pinterest"></i>
                        </a>
                        <a href="https://www.youtube.com/">
                            <i class="fa-brands fa-youtube"></i>
                        </a>
                    </div>
                </div>
                <div class="footerCol">
                    <span>About</span>
                    <a href="shopNswap-team.html">
                        <p>About Us</p>
                    </a>
                    <a href="shopNswap-underConstruction.html">
                        <p>Delivery Information</p>
                    </a>
                    <a href="shopNswap-underConstruction.html">
                        <p>Shipping Rates and Policies</p>
                    </a>
                    <a href="shopNswap-underConstruction.html">
                        <p>Privacy Policy</p>
                    </a>
                    <a href="shopNswap-tnc.html">
                        <p>Terms and Conditions</p>
                    </a>
                    <a href="shopNswap-contactus.html">
                        <p>Contact Us</p>
                    </a>
                </div>
                <div class="footerCol">
                    <span>Account</span>
                    <a href="shopNswap-profile.html">
                        <p>Account Settings</p>
                    </a>
                    <a href="shopNswap-profile.html">
                        <p>Track My Order</p>
                    </a>
                    <a href="shopNswap-cart.html">
                        <p>View Cart</p>
                    </a>
                    <a href="shopNswap-heart.html">
                        <p>View Heart List</p>
                    </a>
                    <a href="shopNswap-cart.html">
                        <p>View Orders</p>
                    </a>
                </div>
            </div>
            <div class="footerCont2">
                <a href="#" class="backTop">Back to top&nbsp;&nbsp;<i class="fa-solid fa-arrow-up"></i></a>
                <div class="footDesign">
                    
                </div>
            </div>
        </footer>

        <script>
            function toggleMenu() {
                var x = document.getElementById("myTopnav");
                if (x.className === "topnav") {
                    x.className += " responsive";
                } else {
                    x.className = "topnav";
                }
            }

            document.addEventListener('DOMContentLoaded', function () {
                var messageInput = document.getElementById('messageInput');
                var messageContents = document.getElementById('messageContents');

                messageInput.addEventListener('keydown', function (event) {
                    if (event.key === 'Enter' && messageInput.value.trim() !== '') {
                        // Create a new div element for the message
                        var newMessageDiv = document.createElement('div');
                        newMessageDiv.className = 'message';

                        // Create a span for the message content
                        var messageContentSpan = document.createElement('span');
                        messageContentSpan.textContent = messageInput.value;

                        // Create a span for the timestamp
                        var timeStampSpan = document.createElement('span');
                        timeStampSpan.className = 'timestamp';
                        timeStampSpan.textContent = getFormattedTimestamp(); // Call a function to get formatted timestamp

                        // Append the message content and timestamp spans to the message div
                        newMessageDiv.appendChild(messageContentSpan);
                        newMessageDiv.appendChild(document.createElement('br')); // Add a line break
                        newMessageDiv.appendChild(timeStampSpan);

                        // Append the new message div to the messageContents
                        messageContents.appendChild(newMessageDiv);

                        // Clear the input field
                        messageInput.value = '';

                        // Scroll to the bottom
                        messageContents.scrollTop = messageContents.scrollHeight;
                    }
                });

                // Function to get formatted timestamp (HH:MM AM/PM format)
                function getFormattedTimestamp() {
                    var now = new Date();
                    var hours = now.getHours();
                    var minutes = now.getMinutes().toString().padStart(2, '0');
                    var ampm = hours >= 12 ? 'PM' : 'AM';
                    hours = hours % 12 || 12;
                    return hours + ':' + minutes + ' ' + ampm;
                }
            });







        </script>

    </body>
    
</html>