<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../Styles/adminListOfItems.css">
</head>

<body>
    <?php include "../Includes/AdminSidebar.php" ?>

    <!-- Main Content -->
    <div class="main-content">
        <div class="content-header">
            <h2>Lost Item Inventory</h2>
            <div class="item-controls">
                <div class="search-filter">
                    <div class="search-box">
                        <input type="text" placeholder="Search items...">
                        <button><i class="fa fa-search"></i></button>
                    </div>
                    <select class="filter-select">
                        <option>All Categories</option>
                        <option>Electronics</option>
                        <option>Documents</option>
                        <option>Personal Items</option>
                        <option>Clothing</option>
                        <option>Accessories</option>
                    </select>
                    <select class="filter-select">
                        <option>All Locations</option>
                        <option>Cafeteria</option>
                        <option>Library</option>
                        <option>Lecture Halls</option>
                        <option>Parking Lot</option>
                        <option>Sports Complex</option>
                    </select>
                </div>
                <button class="btn-add-item">
                    <i class="fa fa-plus"></i> Add New Item
                </button>
            </div>
        </div>

        <div class="items-container">
            <div class="items-grid">
                <!-- Item Card 1 -->
                <div class="item-card">
                    <div class="item-image">
                        <img src="https://via.placeholder.com/150" alt="Wallet">
                        <span class="item-status found">Found</span>
                    </div>
                    <div class="item-details">
                        <h3>Black Leather Wallet</h3>
                        <p class="item-id">#LF-2023-001</p>
                        <div class="item-meta">
                            <span><i class="fa fa-calendar"></i> 2023-10-15</span>
                            <span><i class="fa fa-map-marker"></i> Cafeteria</span>
                        </div>
                        <p class="item-desc">Black leather wallet containing ID cards and credit cards</p>
                        <div class="item-actions">
                            <button class="btn-view"><i class="fa fa-eye"></i> View</button>
                            <button class="btn-edit"><i class="fa fa-edit"></i></button>
                            <button class="btn-delete"><i class="fa fa-trash"></i></button>
                        </div>
                    </div>
                </div>

                <!-- Item Card 2 -->
                <div class="item-card">
                    <div class="item-image">
                        <img src="https://via.placeholder.com/150" alt="Phone">
                        <span class="item-status returned">Returned</span>
                    </div>
                    <div class="item-details">
                        <h3>iPhone 13 Pro</h3>
                        <p class="item-id">#LF-2023-002</p>
                        <div class="item-meta">
                            <span><i class="fa fa-calendar"></i> 2023-10-16</span>
                            <span><i class="fa fa-map-marker"></i> Library</span>
                        </div>
                        <p class="item-desc">Silver iPhone with black case, found on study desk</p>
                        <div class="item-actions">
                            <button class="btn-view"><i class="fa fa-eye"></i> View</button>
                            <button class="btn-edit"><i class="fa fa-edit"></i></button>
                            <button class="btn-delete"><i class="fa fa-trash"></i></button>
                        </div>
                    </div>
                </div>

                <!-- Item Card 3 -->
                <div class="item-card">
                    <div class="item-image">
                        <img src="https://via.placeholder.com/150" alt="Backpack">
                        <span class="item-status pending">Pending</span>
                    </div>
                    <div class="item-details">
                        <h3>Blue Backpack</h3>
                        <p class="item-id">#LF-2023-003</p>
                        <div class="item-meta">
                            <span><i class="fa fa-calendar"></i> 2023-10-17</span>
                            <span><i class="fa fa-map-marker"></i> Lecture Hall B</span>
                        </div>
                        <p class="item-desc">Navy blue backpack with laptop compartment</p>
                        <div class="item-actions">
                            <button class="btn-view"><i class="fa fa-eye"></i> View</button>
                            <button class="btn-edit"><i class="fa fa-edit"></i></button>
                            <button class="btn-delete"><i class="fa fa-trash"></i></button>
                        </div>
                    </div>
                </div>

                <!-- Item Card 4 -->
                <div class="item-card">
                    <div class="item-image">
                        <img src="https://via.placeholder.com/150" alt="Keys">
                        <span class="item-status found">Found</span>
                    </div>
                    <div class="item-details">
                        <h3>Keychain with Keys</h3>
                        <p class="item-id">#LF-2023-004</p>
                        <div class="item-meta">
                            <span><i class="fa fa-calendar"></i> 2023-10-18</span>
                            <span><i class="fa fa-map-marker"></i> Parking Lot</span>
                        </div>
                        <p class="item-desc">Silver keychain with 3 keys and a car fob</p>
                        <div class="item-actions">
                            <button class="btn-view"><i class="fa fa-eye"></i> View</button>
                            <button class="btn-edit"><i class="fa fa-edit"></i></button>
                            <button class="btn-delete"><i class="fa fa-trash"></i></button>
                        </div>
                    </div>
                </div>

                <!-- Item Card 5 -->
                <div class="item-card">
                    <div class="item-image">
                        <img src="https://via.placeholder.com/150" alt="ID Card">
                        <span class="item-status verified">Verified</span>
                    </div>
                    <div class="item-details">
                        <h3>Student ID Card</h3>
                        <p class="item-id">#LF-2023-005</p>
                        <div class="item-meta">
                            <span><i class="fa fa-calendar"></i> 2023-10-19</span>
                            <span><i class="fa fa-map-marker"></i> Building A</span>
                        </div>
                        <p class="item-desc">Student ID for John Doe, Computer Science Department</p>
                        <div class="item-actions">
                            <button class="btn-view"><i class="fa fa-eye"></i> View</button>
                            <button class="btn-edit"><i class="fa fa-edit"></i></button>
                            <button class="btn-delete"><i class="fa fa-trash"></i></button>
                        </div>
                    </div>
                </div>

                <!-- Item Card 6 -->
                <div class="item-card">
                    <div class="item-image">
                        <img src="https://via.placeholder.com/150" alt="Watch">
                        <span class="item-status found">Found</span>
                    </div>
                    <div class="item-details">
                        <h3>Smart Watch</h3>
                        <p class="item-id">#LF-2023-006</p>
                        <div class="item-meta">
                            <span><i class="fa fa-calendar"></i> 2023-10-20</span>
                            <span><i class="fa fa-map-marker"></i> Sports Complex</span>
                        </div>
                        <p class="item-desc">Black smart watch with fitness tracking features</p>
                        <div class="item-actions">
                            <button class="btn-view"><i class="fa fa-eye"></i> View</button>
                            <button class="btn-edit"><i class="fa fa-edit"></i></button>
                            <button class="btn-delete"><i class="fa fa-trash"></i></button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="pagination-controls">
                <button class="pagination-btn" disabled>
                    <i class="fa fa-chevron-left"></i> Previous
                </button>
                <div class="page-numbers">
                    <button class="pagination-btn active">1</button>
                    <button class="pagination-btn">2</button>
                    <button class="pagination-btn">3</button>
                    <span>...</span>
                    <button class="pagination-btn">5</button>
                </div>
                <button class="pagination-btn">
                    Next <i class="fa fa-chevron-right"></i>
                </button>
            </div>
        </div>
    </div>

    <script>
        // Search functionality
        document.querySelector('.search-box button').addEventListener('click', function() {
            const searchTerm = document.querySelector('.search-box input').value;
            console.log('Searching for:', searchTerm);
            // Implement actual search functionality
        });

        // Filter functionality
        document.querySelectorAll('.filter-select').forEach(select => {
            select.addEventListener('change', function() {
                console.log('Filter changed:', this.value);
                // Implement actual filter functionality
            });
        });

        // Add item button
        document.querySelector('.btn-add-item').addEventListener('click', function() {
            console.log('Add new item clicked');
            // Redirect to add item page or show modal
        });

        // Item action buttons
        document.querySelectorAll('.item-card').forEach(card => {
            const viewBtn = card.querySelector('.btn-view');
            const editBtn = card.querySelector('.btn-edit');
            const deleteBtn = card.querySelector('.btn-delete');
            const itemId = card.querySelector('.item-id').textContent;

            viewBtn.addEventListener('click', function() {
                console.log('View item:', itemId);
                // Implement view functionality
            });

            editBtn.addEventListener('click', function() {
                console.log('Edit item:', itemId);
                // Implement edit functionality
            });

            deleteBtn.addEventListener('click', function() {
                if (confirm(`Are you sure you want to delete item ${itemId}?`)) {
                    console.log('Delete item:', itemId);
                    // Implement delete functionality
                }
            });
        });

        // Pagination
        document.querySelectorAll('.pagination-btn').forEach(btn => {
            if (!btn.disabled) {
                btn.addEventListener('click', function() {
                    if (!this.classList.contains('active')) {
                        const currentActive = document.querySelector('.pagination-btn.active');
                        if (currentActive) currentActive.classList.remove('active');

                        if (this.textContent.trim() !== '...') {
                            this.classList.add('active');
                        }

                        console.log('Go to page:', this.textContent.trim());
                        // Implement pagination
                    }
                });
            }
        });
    </script>
</body>

</html>