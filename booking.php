<!DOCTYPE html>
<html lang="zxx">

<head>
    <?php include './links/head.php'; ?>

</head>

<body>
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="offcanvas__logo">
            <a href="./index.html"><img src="img/logo.png" alt=""></a>
        </div>
        <div id="mobile-menu-wrap"></div>

        <div class="offcanvas__widget">
            <ul>
                <li><span class="icon_pin_alt"></span> 96 Ernser Vista Suite 437, NY, US</li>
                <li><span class="icon_phone"></span> (123) 456-78-910</li>
            </ul>
        </div>
        <div class="offcanvas__language">
            <img src="img/lan.png" alt="">
            <span>English</span>
            <i class="fa fa-angle-down"></i>
            <ul>
                <li>English</li>
                <li>Bangla</li>
            </ul>
        </div>
        <div class="offcanvas__auth">
            <ul>
                <li><a href="#">Login</a></li>
                <li><a href="#">Register</a></li>
            </ul>
        </div>
    </div>

    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <ul class="header__top__widget">
                            <li><span class="icon_pin_alt"></span> 96 Ernser Vista Suite 437, NY, US</li>
                            <li><span class="icon_phone"></span> (123) 456-78-910</li>
                        </ul>
                    </div>
                    <div class="col-lg-5">
                        <div class="header__top__right">
                            <div class="header__top__auth">
                                <ul>
                                    <li><a href="#">Login</a></li>
                                    <li><a href="#">Register</a></li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header__nav__option">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2">
                        <div class="header__logo">
                            <a href="./index.php"><img src="img/logo.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-10">
                        <div class="header__nav">
                            <nav class="header__menu">
                                <ul class="menu__class">
                                    <li><a href="./index.php">Home</a></li>
                                    <li><a href="./rooms.php">Rooms</a></li>
                                    <li><a href="./about.php">About Us</a></li>
                                    <li class="active"><a href="#">Pages</a>
                                        <ul class="dropdown">
                                            <li><a href="./about.php">About Us</a></li>
                                            <li><a href="./room-details.php">Room Details</a></li>
                                            <li><a href="./blog-details.php">Blog Details</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="./blog.php">News</a></li>
                                    <li><a href="./contact.php">Contact</a></li>
                                </ul>
                            </nav>

                        </div>
                    </div>
                </div>
                <div class="canvas__open">
                    <span class="fa fa-bars"></span>
                </div>
            </div>
        </div>
    </header>

    <div class="container my-5">
        <h3 class="text-center mb-4">Complete Your Booking</h3>
        <form action="./traitement/booking.php" method="POST">
            <!-- Hidden Field for Room ID -->
            <input type="hidden" name="room_id" value="<?php echo htmlspecialchars($_GET['room_id']); ?>">

            <!-- Guest Information -->
            <h5>Guest Information</h5>
            <div class="row g-3">
                <div class="col-md-6">
                    <label for="fullName" class="form-label">Full Name</label>
                    <input type="text" class="form-control" id="fullName" name="full_name" required>
                </div>
                <div class="col-md-6">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="col-md-6">
                    <label for="phone" class="form-label">Phone</label>
                    <input type="text" class="form-control" id="phone" name="phone_number" required>
                </div>
                <div class="col-md-6">
                    <label for="address" class="form-label">Address</label>
                    <input type="text" class="form-control" id="address" name="address" required>
                </div>
                <div class="col-md-6">
                    <label for="nationality" class="form-label">Nationality</label>
                    <input type="text" class="form-control" id="nationality" name="nationality" required>
                </div>
                <div class="col-md-6">
                    <label for="passportNumber" class="form-label">Passport Number</label>
                    <input type="text" class="form-control" id="passportNumber" name="passport_number" required>
                </div>
                <div class="col-md-6">
                    <label for="dateOfBirth" class="form-label">Date of Birth</label>
                    <input type="date" class="form-control" id="dateOfBirth" name="date_of_birth" required>
                </div>
                <div class="col-md-6">
                    <label for="gender" class="form-label">Gender</label>
                    <select class="form-select" id="gender" name="gender" required>
                        <option selected disabled>Select Gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Other">Other</option>
                    </select>
                </div>
            </div>
            <hr class="my-4">

            <!-- Booking Information -->
            <h5>Booking Information</h5>
            <div class="row g-3">
                <div class="col-md-6">
                    <label for="checkinDate" class="form-label">Check-In Date</label>
                    <input type="date" class="form-control" id="checkinDate" name="checkin_date" required>
                </div>
                <div class="col-md-6">
                    <label for="checkoutDate" class="form-label">Check-Out Date</label>
                    <input type="date" class="form-control" id="checkoutDate" name="checkout_date" required>
                </div>
                <div class="col-md-6">
                    <label for="numberOfGuests" class="form-label">Number of Guests</label>
                    <input type="number" class="form-control" id="numberOfGuests" name="number_of_guests" required>
                </div>
            </div>
            <hr class="my-4">

            <!-- Payment Information -->
            <h5>Payment Information</h5>
            <div class="row g-3">
                <div class="col-md-6">
                    <label for="totalAmount" class="form-label">Total Amount</label>
                    <input type="text" class="form-control" id="totalAmount" name="total_amount" readonly>
                </div>
                <div class="col-md-6">
                    <label for="paymentMethod" class="form-label">Payment Method</label>
                    <select class="form-select" id="paymentMethod" name="payment_method" required>
                        <option selected disabled>Select Payment Method</option>
                        <option value="credit_card">Credit Card</option>
                        <option value="paypal">PayPal</option>
                        <option value="bank_transfer">Bank Transfer</option>
                    </select>
                </div>
            </div>
            <div class="d-grid gap-2 col-6 mx-auto mt-4">
                <button type="submit" class="primary-btn">Complete Booking</button>
            </div>
        </form>
    </div>









    <?php

    include './links/footer.php';
    ?>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.7/umd/popper.min.js" integrity="sha384-oBqDVmMz0kHpzTcrCw3rKK3LfCET8pFw7jScopXBk/HmHdN+ZxBYfBYcpZR7o2l6" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9jD6gSA/Y7fF/yL4sE9RbOGtXABabJMRUibXmJNMEu6/6IYkYVQVskg" crossorigin="anonymous"></script>
    <script>
        document.getElementById("nextBtn").addEventListener("click", function() {
            document.getElementById("paymentSection").style.display = "block";
            this.style.display = "none";
        });
    </script>

</body>

</html>