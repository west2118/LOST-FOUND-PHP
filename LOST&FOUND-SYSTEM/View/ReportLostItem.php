<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report Lost Item | Lost & Found</title>
    <link rel="stylesheet" href="../Styles/reportLostItem.css">
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