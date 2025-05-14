<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lost & Found - Report Lost Items</title>
    <style>
        :root {
            --primary-color: #4a6fa5;
            --secondary-color: #ff9a3c;
            --accent-color: #ff6b6b;
            --light-color: #f8f9fa;
            --dark-color: #333;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: var(--light-color);
            color: var(--dark-color);
            line-height: 1.6;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        header {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
            padding: 2rem 0;
            text-align: center;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        .logo {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 1rem;
        }

        .logo span {
            color: var(--accent-color);
        }

        .tagline {
            font-size: 1.2rem;
            opacity: 0.9;
            max-width: 600px;
            margin: 0 auto;
        }

        .hero {
            padding: 4rem 0;
            text-align: center;
            background: url('https://images.unsplash.com/photo-1517842645767-c639042777db?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80') no-repeat center center/cover;
            position: relative;
            color: white;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.6);
        }

        .hero-content {
            position: relative;
            z-index: 1;
            max-width: 800px;
            margin: 0 auto;
        }

        .hero h1 {
            font-size: 2.8rem;
            margin-bottom: 1.5rem;
        }

        .hero p {
            font-size: 1.2rem;
            margin-bottom: 2rem;
        }

        .btn {
            display: inline-block;
            background-color: var(--accent-color);
            color: white;
            padding: 0.8rem 2rem;
            border: none;
            border-radius: 50px;
            font-size: 1.1rem;
            font-weight: 600;
            text-decoration: none;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        }

        .btn:hover {
            background-color: #ff5252;
            transform: translateY(-3px);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.3);
        }

        .btn-large {
            padding: 1rem 3rem;
            font-size: 1.3rem;
        }

        .how-it-works {
            padding: 4rem 0;
            background-color: white;
        }

        .section-title {
            text-align: center;
            margin-bottom: 3rem;
            font-size: 2rem;
            color: var(--primary-color);
        }

        .steps {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            gap: 2rem;
        }

        .step {
            flex: 1;
            min-width: 250px;
            text-align: center;
            padding: 2rem;
            border-radius: 10px;
            background-color: var(--light-color);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s ease;
        }

        .step:hover {
            transform: translateY(-10px);
        }

        .step-icon {
            font-size: 3rem;
            color: var(--primary-color);
            margin-bottom: 1rem;
        }

        .step h3 {
            margin-bottom: 1rem;
            color: var(--dark-color);
        }

        .cta {
            padding: 4rem 0;
            text-align: center;
            background-color: var(--primary-color);
            color: white;
        }

        .cta h2 {
            margin-bottom: 2rem;
            font-size: 2rem;
        }

        footer {
            background-color: var(--dark-color);
            color: white;
            text-align: center;
            padding: 2rem 0;
            margin-top: 2rem;
        }

        @media (max-width: 768px) {
            .hero h1 {
                font-size: 2rem;
            }

            .steps {
                flex-direction: column;
                align-items: center;
            }

            .step {
                width: 100%;
                max-width: 350px;
            }
        }
    </style>
</head>

<body>
    <header>
        <div class="container">
            <div class="logo">Lost<span>Found</span></div>
            <p class="tagline">Helping you reunite with your lost belongings quickly and easily</p>
        </div>
    </header>

    <section class="hero">
        <div class="hero-content container">
            <h1>Lost Something Important?</h1>
            <p>Report your lost item now and increase your chances of getting it back. Our system helps track and match lost items with their owners.</p>
            <a href="ReportLostItem.php" class="btn btn-large">Report Lost Item</a>
        </div>
    </section>

    <section class="how-it-works">
        <div class="container">
            <h2 class="section-title">How It Works</h2>
            <div class="steps">
                <div class="step">
                    <div class="step-icon">1</div>
                    <h3>Report Your Lost Item</h3>
                    <p>Fill out our simple form with details about what you've lost and where you think you lost it.</p>
                </div>
                <div class="step">
                    <div class="step-icon">2</div>
                    <h3>We Store Your Information</h3>
                    <p>Your report is securely stored in our database with all the important details.</p>
                </div>
                <div class="step">
                    <div class="step-icon">3</div>
                    <h3>Get Notified if Found</h3>
                    <p>If someone finds your item and reports it, we'll notify you immediately.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="cta">
        <div class="container">
            <h2>Ready to Report Your Lost Item?</h2>
            <a href="report-lost.html" class="btn btn-large">Start Your Report Now</a>
        </div>
    </section>

    <footer>
        <div class="container">
            <p>&copy; 2023 LostFound System. All rights reserved.</p>
            <p>A simple solution for reporting lost items.</p>
        </div>
    </footer>
</body>

</html>