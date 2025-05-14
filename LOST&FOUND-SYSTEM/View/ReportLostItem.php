<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report Lost Item | Lost & Found</title>
    <style>
        :root {
            --primary-color: #4a6fa5;
            --secondary-color: #ff9a3c;
            --accent-color: #ff6b6b;
            --light-color: #f8f9fa;
            --dark-color: #333;
            --form-bg: #ffffff;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background: linear-gradient(135deg, #f5f7fa 0%, #e4e8f0 100%);
            color: var(--dark-color);
            line-height: 1.6;
            min-height: 100vh;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 2rem;
        }

        header {
            text-align: center;
            margin-bottom: 2rem;
        }

        .logo {
            font-size: 2rem;
            font-weight: 700;
            color: var(--primary-color);
            margin-bottom: 0.5rem;
        }

        .logo span {
            color: var(--accent-color);
        }

        .form-container {
            background-color: var(--form-bg);
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            padding: 2.5rem;
            position: relative;
            overflow: hidden;
        }

        .form-container::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 8px;
            background: linear-gradient(90deg, var(--primary-color), var(--secondary-color), var(--accent-color));
        }

        .form-header {
            text-align: center;
            margin-bottom: 2rem;
        }

        .form-header h1 {
            font-size: 1.8rem;
            color: var(--primary-color);
            margin-bottom: 0.5rem;
        }

        .form-header p {
            color: #666;
        }

        .form-group {
            margin-bottom: 1.5rem;
            position: relative;
        }

        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 600;
            color: #555;
        }

        .form-control {
            width: 100%;
            padding: 0.8rem 1rem;
            border: 2px solid #ddd;
            border-radius: 8px;
            font-size: 1rem;
            transition: all 0.3s ease;
        }

        .form-control:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 3px rgba(74, 111, 165, 0.2);
            outline: none;
        }

        textarea.form-control {
            min-height: 120px;
            resize: vertical;
        }

        .form-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 2rem;
        }

        .btn {
            display: inline-block;
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
            padding: 0.8rem 2rem;
            border: none;
            border-radius: 50px;
            font-size: 1rem;
            font-weight: 600;
            text-decoration: none;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        .btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
        }

        .btn-secondary {
            background: #f1f1f1;
            color: #666;
        }

        .btn-secondary:hover {
            background: #e1e1e1;
        }

        .category-selector {
            display: flex;
            flex-wrap: wrap;
            gap: 0.8rem;
            margin-bottom: 1rem;
        }

        .category-option {
            flex: 1 0 calc(33.333% - 0.8rem);
            min-width: 120px;
        }

        .category-option input[type="radio"] {
            display: none;
        }

        .category-option label {
            display: block;
            padding: 1rem;
            background-color: #f5f5f5;
            border-radius: 8px;
            text-align: center;
            cursor: pointer;
            transition: all 0.3s ease;
            border: 2px solid transparent;
        }

        .category-option input[type="radio"]:checked+label {
            background-color: var(--primary-color);
            color: white;
            border-color: var(--primary-color);
            transform: scale(1.05);
        }

        .category-option label:hover {
            background-color: #e9e9e9;
        }

        .category-option input[type="radio"]:checked+label:hover {
            background-color: var(--primary-color);
        }

        .icon {
            display: block;
            font-size: 1.8rem;
            margin-bottom: 0.5rem;
        }

        .progress-bar {
            display: flex;
            justify-content: space-between;
            margin-bottom: 2rem;
            position: relative;
        }

        .progress-step {
            display: flex;
            flex-direction: column;
            align-items: center;
            position: relative;
            z-index: 1;
        }

        .step-number {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: #ddd;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            color: #777;
            margin-bottom: 0.5rem;
            transition: all 0.3s ease;
        }

        .progress-step.active .step-number {
            background-color: var(--primary-color);
            color: white;
        }

        .progress-step.completed .step-number {
            background-color: var(--secondary-color);
            color: white;
        }

        .step-label {
            font-size: 0.9rem;
            color: #777;
            text-align: center;
        }

        .progress-step.active .step-label {
            color: var(--primary-color);
            font-weight: 600;
        }

        .progress-bar::before {
            content: '';
            position: absolute;
            top: 20px;
            left: 0;
            right: 0;
            height: 3px;
            background-color: #ddd;
            z-index: 0;
        }

        .progress-bar::after {
            content: '';
            position: absolute;
            top: 20px;
            left: 0;
            width: 50%;
            height: 3px;
            background: linear-gradient(90deg, var(--secondary-color), var(--primary-color));
            transition: width 0.5s ease;
        }

        @media (max-width: 768px) {
            .container {
                padding: 1rem;
            }

            .form-container {
                padding: 1.5rem;
            }

            .category-option {
                flex: 1 0 calc(50% - 0.8rem);
            }

            .form-footer {
                flex-direction: column;
                gap: 1rem;
            }

            .btn {
                width: 100%;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <header>
            <div class="logo">Lost<span>Found</span></div>
        </header>

        <div class="form-container">
            <div class="progress-bar">
                <div class="progress-step active">
                    <div class="step-number">1</div>
                    <div class="step-label">Item Details</div>
                </div>
                <div class="progress-step">
                    <div class="step-number">2</div>
                    <div class="step-label">Contact Info</div>
                </div>
                <div class="progress-step">
                    <div class="step-number">3</div>
                    <div class="step-label">Complete</div>
                </div>
            </div>

            <!-- <div class="form-header">
                <h1>Report Your Lost Item</h1>
                <p>Fill in the details below to help us identify your lost item</p>
            </div> -->

            <!-- <form id="lostItemForm" action="submit-form.html" method="POST">
                <div class="form-group">
                    <label for="itemName">Item Name</label>
                    <input type="text" id="itemName" name="itemName" class="form-control" placeholder="e.g. iPhone 13, Black Wallet" required>
                </div>

                <div class="form-group">
                    <label>Item Category</label>
                    <div class="category-selector">
                        <div class="category-option">
                            <input type="radio" id="electronics" name="category" value="electronics" required>
                            <label for="electronics">
                                <span class="icon">📱</span>
                                Electronics
                            </label>
                        </div>
                        <div class="category-option">
                            <input type="radio" id="wallet" name="category" value="wallet">
                            <label for="wallet">
                                <span class="icon">💳</span>
                                Wallet
                            </label>
                        </div>
                        <div class="category-option">
                            <input type="radio" id="keys" name="category" value="keys">
                            <label for="keys">
                                <span class="icon">🔑</span>
                                Keys
                            </label>
                        </div>
                        <div class="category-option">
                            <input type="radio" id="bag" name="category" value="bag">
                            <label for="bag">
                                <span class="icon">🎒</span>
                                Bag
                            </label>
                        </div>
                        <div class="category-option">
                            <input type="radio" id="jewelry" name="category" value="jewelry">
                            <label for="jewelry">
                                <span class="icon">💎</span>
                                Jewelry
                            </label>
                        </div>
                        <div class="category-option">
                            <input type="radio" id="other" name="category" value="other">
                            <label for="other">
                                <span class="icon">❓</span>
                                Other
                            </label>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea id="description" name="description" class="form-control" placeholder="Provide detailed description including color, size, brand, distinguishing marks, etc." required></textarea>
                </div>

                <div class="form-group">
                    <label for="dateLost">Date Lost (Approximate)</label>
                    <input type="date" id="dateLost" name="dateLost" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="color">Primary Color</label>
                    <input type="text" id="color" name="color" class="form-control" placeholder="e.g. Black, Red, Silver">
                </div>

                <div class="form-group">
                    <label for="photo">Upload Photo (Optional)</label>
                    <input type="file" id="photo" name="photo" class="form-control" accept="image/*">
                </div>

                <div class="form-footer">
                    <a href="index.html" class="btn btn-secondary">Cancel</a>
                    <button type="submit" class="btn">Next: Location Details</button>
                </div>
            </form> -->

            <!-- <h2>Your Contact Information</h2>
            <p>Please provide your details so we can contact you if your item is found</p>

            <form>
                <div class="form-group">
                    <label for="name">Full Name</label>
                    <input type="text" id="name" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="phone">Phone Number</label>
                    <input type="tel" id="phone" class="form-control" required>
                </div>
                <div class="form-footer">
                    <a href="index.html" class="btn btn-secondary">Cancel</a>
                    <button type="submit" class="btn">Submit Report</button>
                </div>
            </form> -->

            <div class="success-icon">✓</div>
            <h2>Report Successfully Submitted!</h2>
            <p>We've received your lost item report. You'll be notified if your item is found.</p>
            <p>Your reference number: <strong>LF2023-4567</strong></p>

            <a href="Home.php" class="btn">Back to Homepage</a>
        </div>
    </div>

    <script>
        // Simple script to animate the progress bar
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.getElementById('lostItemForm');
            const progressBar = document.querySelector('.progress-bar::after');

            // This would be expanded for multi-step forms
            // For now, it's just showing the first step as active
        });
    </script>
</body>

</html>