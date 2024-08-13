<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Poultry Management System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .hero-section {
            background-color: #f8f9fa;
            padding: 60px 0;
            text-align: center;
        }
        .features-section {
            padding: 60px 0;
            background-color: #ffffff;
        }
        .testimonial-section {
            padding: 60px 0;
            background-color: #f8f9fa;
        }
        .footer {
            background-color: #343a40;
            color: #ffffff;
            padding: 30px 0;
            text-align: center;
        }
    </style>
</head>
<body>

    <!-- Header -->
    <header class="p-3 bg-dark text-white">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-between">
                <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                <img src="{{ asset('logo.jpg') }}" alt="Poultry Logo" height="40">
                </a>
                <ul class="nav me-auto">
                    <li><a href="#" class="nav-link px-2 text-white">Features</a></li>
                    <li><a href="#" class="nav-link px-2 text-white">Pricing</a></li>
                    <li><a href="#" class="nav-link px-2 text-white">Contact</a></li>
                </ul>
                <a href="#" class="btn btn-outline-light">Get Started</a>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <h1 class="display-4">Manage Your Poultry Farm with Ease</h1>
            <p class="lead">Track, Analyze, and Improve Your Poultry Operations</p>
            <img src="path/to/hero-image.png" alt="Dashboard Interface" class="img-fluid mt-4">
        </div>
    </section>

    <!-- Features Section -->
    <section class="features-section">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-4">
                    <img src="path/to/icon1.png" alt="Feature 1" class="mb-3">
                    <h3>Inventory Management</h3>
                    <p>Keep track of your poultry stock and resources.</p>
                </div>
                <div class="col-md-4">
                    <img src="path/to/icon2.png" alt="Feature 2" class="mb-3">
                    <h3>Feed Scheduling</h3>
                    <p>Automate and manage your feed schedule effectively.</p>
                </div>
                <div class="col-md-4">
                    <img src="path/to/icon3.png" alt="Feature 3" class="mb-3">
                    <h3>Health Monitoring</h3>
                    <p>Monitor the health of your poultry and receive alerts.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonial Section -->
    <section class="testimonial-section">
        <div class="container text-center">
            <h2>What Our Customers Say</h2>
            <blockquote class="blockquote mt-4">
                <p class="mb-0">"This system has revolutionized the way we manage our farm. Highly recommend!"</p>
                <footer class="blockquote-footer">John Doe, <cite title="Source Title">Farm Owner</cite></footer>
            </blockquote>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <p>Contact us: +1 234 567 890 | info@poultrysystem.com</p>
            <p>Follow us on: 
                <a href="#" class="text-white ms-2">Facebook</a> | 
                <a href="#" class="text-white ms-2">Twitter</a> | 
                <a href="#" class="text-white ms-2">LinkedIn</a>
            </p>
            <form class="d-inline-block mt-3">
                <input type="email" class="form-control" placeholder="Enter your email">
                <button type="submit" class="btn btn-primary mt-2">Subscribe</button>
            </form>
        </div>
    </footer>

</body>
</html>
