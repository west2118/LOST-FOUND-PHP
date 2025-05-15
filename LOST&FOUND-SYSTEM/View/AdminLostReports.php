<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../Styles/adminLostReports.css">
</head>

<body>
    <?php include "../Includes/AdminSidebar.php" ?>

    <!-- Main Content -->
    <div class="main-content">
        <div class="content-header">
            <h2>Lost Item Reports</h2>
            <div class="search-filter">
                <div class="search-box">
                    <input type="text" placeholder="Search reports...">
                    <button><i class="fa fa-search"></i></button>
                </div>
                <select class="filter-select">
                    <option>All Status</option>
                    <option>Pending</option>
                    <option>Verified</option>
                    <option>Found</option>
                    <option>Returned</option>
                </select>
            </div>
        </div>

        <div class="reports-table-container">
            <table class="reports-table">
                <thead>
                    <tr>
                        <th>Report ID</th>
                        <th>Item Name</th>
                        <th>Category</th>
                        <th>Date Lost</th>
                        <th>Location</th>
                        <th>Status</th>
                        <th>Reported By</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>#LF-2023-001</td>
                        <td>Black Wallet</td>
                        <td>Personal Items</td>
                        <td>2023-10-15</td>
                        <td>Cafeteria</td>
                        <td><span class="status-badge pending">Pending</span></td>
                        <td>john.doe@email.com</td>
                        <td class="actions">
                            <button class="btn-view" title="View Details"><i class="fa fa-eye"></i></button>
                            <button class="btn-edit" title="Edit"><i class="fa fa-edit"></i></button>
                            <button class="btn-delete" title="Delete"><i class="fa fa-trash"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>#LF-2023-002</td>
                        <td>iPhone 13 Pro</td>
                        <td>Electronics</td>
                        <td>2023-10-16</td>
                        <td>Library</td>
                        <td><span class="status-badge verified">Verified</span></td>
                        <td>sarah.smith@email.com</td>
                        <td class="actions">
                            <button class="btn-view" title="View Details"><i class="fa fa-eye"></i></button>
                            <button class="btn-edit" title="Edit"><i class="fa fa-edit"></i></button>
                            <button class="btn-delete" title="Delete"><i class="fa fa-trash"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>#LF-2023-003</td>
                        <td>Student ID Card</td>
                        <td>Documents</td>
                        <td>2023-10-17</td>
                        <td>Building A</td>
                        <td><span class="status-badge found">Found</span></td>
                        <td>mike.johnson@email.com</td>
                        <td class="actions">
                            <button class="btn-view" title="View Details"><i class="fa fa-eye"></i></button>
                            <button class="btn-edit" title="Edit"><i class="fa fa-edit"></i></button>
                            <button class="btn-delete" title="Delete"><i class="fa fa-trash"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>#LF-2023-004</td>
                        <td>Silver Keychain</td>
                        <td>Personal Items</td>
                        <td>2023-10-18</td>
                        <td>Parking Lot</td>
                        <td><span class="status-badge returned">Returned</span></td>
                        <td>emily.wilson@email.com</td>
                        <td class="actions">
                            <button class="btn-view" title="View Details"><i class="fa fa-eye"></i></button>
                            <button class="btn-edit" title="Edit"><i class="fa fa-edit"></i></button>
                            <button class="btn-delete" title="Delete"><i class="fa fa-trash"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>#LF-2023-005</td>
                        <td>Backpack</td>
                        <td>Personal Items</td>
                        <td>2023-10-19</td>
                        <td>Lecture Hall B</td>
                        <td><span class="status-badge pending">Pending</span></td>
                        <td>david.brown@email.com</td>
                        <td class="actions">
                            <button class="btn-view" title="View Details"><i class="fa fa-eye"></i></button>
                            <button class="btn-edit" title="Edit"><i class="fa fa-edit"></i></button>
                            <button class="btn-delete" title="Delete"><i class="fa fa-trash"></i></button>
                        </td>
                    </tr>
                </tbody>
            </table>

            <div class="table-footer">
                <div class="pagination-info">
                    Showing 1 to 5 of 23 entries
                </div>
                <div class="pagination-controls">
                    <button class="pagination-btn" disabled>Previous</button>
                    <button class="pagination-btn active">1</button>
                    <button class="pagination-btn">2</button>
                    <button class="pagination-btn">3</button>
                    <button class="pagination-btn">4</button>
                    <button class="pagination-btn">5</button>
                    <button class="pagination-btn">Next</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Add functionality for search and filter
        document.querySelector('.search-box button').addEventListener('click', function() {
            const searchTerm = document.querySelector('.search-box input').value;
            // Implement search functionality
            console.log('Searching for:', searchTerm);
        });

        document.querySelector('.filter-select').addEventListener('change', function() {
            const filterValue = this.value;
            // Implement filter functionality
            console.log('Filtering by:', filterValue);
        });

        // Add click handlers for action buttons
        document.querySelectorAll('.btn-view').forEach(btn => {
            btn.addEventListener('click', function() {
                const reportId = this.closest('tr').querySelector('td:first-child').textContent;
                // Implement view functionality
                console.log('View report:', reportId);
            });
        });

        document.querySelectorAll('.btn-edit').forEach(btn => {
            btn.addEventListener('click', function() {
                const reportId = this.closest('tr').querySelector('td:first-child').textContent;
                // Implement edit functionality
                console.log('Edit report:', reportId);
            });
        });

        document.querySelectorAll('.btn-delete').forEach(btn => {
            btn.addEventListener('click', function() {
                const reportId = this.closest('tr').querySelector('td:first-child').textContent;
                // Implement delete functionality (with confirmation)
                if (confirm(`Are you sure you want to delete report ${reportId}?`)) {
                    console.log('Delete report:', reportId);
                }
            });
        });

        // Pagination functionality
        document.querySelectorAll('.pagination-btn:not(:disabled)').forEach(btn => {
            btn.addEventListener('click', function() {
                if (!this.classList.contains('active')) {
                    document.querySelector('.pagination-btn.active').classList.remove('active');
                    this.classList.add('active');
                    // Implement pagination
                    console.log('Go to page:', this.textContent);
                }
            });
        });
    </script>
</body>

</html>