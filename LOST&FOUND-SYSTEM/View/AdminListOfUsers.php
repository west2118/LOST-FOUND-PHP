<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../Styles/adminListOfUsers.css">
</head>

<body>
    <?php include "../Includes/AdminSidebar.php" ?>

    <!-- Main Content -->
    <div class="main-content">
        <div class="content-header">
            <h2>User Management</h2>
            <div class="user-controls">
                <div class="search-filter">
                    <div class="search-box">
                        <input type="text" placeholder="Search users...">
                        <button><i class="fa fa-search"></i></button>
                    </div>
                    <select class="filter-select">
                        <option>All Users</option>
                        <option>Administrators</option>
                        <option>Staff</option>
                        <option>Students</option>
                        <option>Active</option>
                        <option>Inactive</option>
                    </select>
                </div>
                <button class="btn-add-user">
                    <i class="fa fa-user-plus"></i> Add User
                </button>
            </div>
        </div>

        <div class="users-table-container">
            <table class="users-table">
                <thead>
                    <tr>
                        <th class="user-avatar">User</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Status</th>
                        <th>Last Active</th>
                        <th>Registered</th>
                        <th class="actions-header">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Admin User -->
                    <tr>
                        <td class="user-avatar">
                            <div class="avatar">
                                <img src="https://via.placeholder.com/40" alt="Admin User">
                            </div>
                            <div class="user-info">
                                <span class="user-name">John Doe</span>
                                <span class="user-id">ID: ADM001</span>
                            </div>
                        </td>
                        <td>john.doe@admin.edu</td>
                        <td><span class="role-badge admin">Administrator</span></td>
                        <td><span class="status-badge active">Active</span></td>
                        <td>Today, 09:45</td>
                        <td>Jan 15, 2022</td>
                        <td class="actions">
                            <button class="btn-edit" title="Edit User"><i class="fa fa-edit"></i></button>
                            <button class="btn-delete" title="Delete User"><i class="fa fa-trash"></i></button>
                            <button class="btn-more" title="More Options"><i class="fa fa-ellipsis-v"></i></button>
                        </td>
                    </tr>

                    <!-- Staff User -->
                    <tr>
                        <td class="user-avatar">
                            <div class="avatar">
                                <img src="https://via.placeholder.com/40" alt="Staff User">
                            </div>
                            <div class="user-info">
                                <span class="user-name">Sarah Johnson</span>
                                <span class="user-id">ID: STF205</span>
                            </div>
                        </td>
                        <td>s.johnson@staff.edu</td>
                        <td><span class="role-badge staff">Staff</span></td>
                        <td><span class="status-badge active">Active</span></td>
                        <td>Yesterday, 16:30</td>
                        <td>Mar 3, 2023</td>
                        <td class="actions">
                            <button class="btn-edit" title="Edit User"><i class="fa fa-edit"></i></button>
                            <button class="btn-delete" title="Delete User"><i class="fa fa-trash"></i></button>
                            <button class="btn-more" title="More Options"><i class="fa fa-ellipsis-v"></i></button>
                        </td>
                    </tr>

                    <!-- Student User -->
                    <tr>
                        <td class="user-avatar">
                            <div class="avatar">
                                <img src="https://via.placeholder.com/40" alt="Student User">
                            </div>
                            <div class="user-info">
                                <span class="user-name">Michael Chen</span>
                                <span class="user-id">ID: STD478</span>
                            </div>
                        </td>
                        <td>michael.chen@student.edu</td>
                        <td><span class="role-badge student">Student</span></td>
                        <td><span class="status-badge active">Active</span></td>
                        <td>2 days ago</td>
                        <td>Aug 20, 2023</td>
                        <td class="actions">
                            <button class="btn-edit" title="Edit User"><i class="fa fa-edit"></i></button>
                            <button class="btn-delete" title="Delete User"><i class="fa fa-trash"></i></button>
                            <button class="btn-more" title="More Options"><i class="fa fa-ellipsis-v"></i></button>
                        </td>
                    </tr>

                    <!-- Inactive User -->
                    <tr>
                        <td class="user-avatar">
                            <div class="avatar">
                                <img src="https://via.placeholder.com/40" alt="Inactive User">
                            </div>
                            <div class="user-info">
                                <span class="user-name">Emily Wilson</span>
                                <span class="user-id">ID: STD512</span>
                            </div>
                        </td>
                        <td>emily.w@student.edu</td>
                        <td><span class="role-badge student">Student</span></td>
                        <td><span class="status-badge inactive">Inactive</span></td>
                        <td>3 weeks ago</td>
                        <td>Sep 5, 2022</td>
                        <td class="actions">
                            <button class="btn-edit" title="Edit User"><i class="fa fa-edit"></i></button>
                            <button class="btn-delete" title="Delete User"><i class="fa fa-trash"></i></button>
                            <button class="btn-more" title="More Options"><i class="fa fa-ellipsis-v"></i></button>
                        </td>
                    </tr>

                    <!-- New User -->
                    <tr>
                        <td class="user-avatar">
                            <div class="avatar">
                                <img src="https://via.placeholder.com/40" alt="New User">
                            </div>
                            <div class="user-info">
                                <span class="user-name">David Brown</span>
                                <span class="user-id">ID: STD789</span>
                            </div>
                        </td>
                        <td>david.b@student.edu</td>
                        <td><span class="role-badge student">Student</span></td>
                        <td><span class="status-badge pending">Pending</span></td>
                        <td>Never</td>
                        <td>Today</td>
                        <td class="actions">
                            <button class="btn-edit" title="Edit User"><i class="fa fa-edit"></i></button>
                            <button class="btn-delete" title="Delete User"><i class="fa fa-trash"></i></button>
                            <button class="btn-more" title="More Options"><i class="fa fa-ellipsis-v"></i></button>
                        </td>
                    </tr>
                </tbody>
            </table>

            <div class="table-footer">
                <div class="pagination-info">
                    Showing 1 to 5 of 128 users
                </div>
                <div class="pagination-controls">
                    <button class="pagination-btn" disabled>
                        <i class="fa fa-chevron-left"></i>
                    </button>
                    <button class="pagination-btn active">1</button>
                    <button class="pagination-btn">2</button>
                    <button class="pagination-btn">3</button>
                    <span>...</span>
                    <button class="pagination-btn">9</button>
                    <button class="pagination-btn">
                        <i class="fa fa-chevron-right"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>