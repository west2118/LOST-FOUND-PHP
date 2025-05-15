<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../Styles/adminAddItem.css">
</head>

<body>
    <?php include "../Includes/AdminSidebar.php" ?>

    <!-- Main Content -->
    <div class="main-content">
        <div class="form-container">
            <form id="addItemForm">
                <div class="form-section">
                    <h3><i class="fa fa-info-circle"></i> Basic Information</h3>
                    <div class="form-grid">
                        <div class="form-group">
                            <label for="itemName">Item Name*</label>
                            <input type="text" id="itemName" name="itemName" required placeholder="e.g. Black Wallet, iPhone 12">
                        </div>

                        <div class="form-group">
                            <label for="itemCategory">Category*</label>
                            <select id="itemCategory" name="itemCategory" required>
                                <option value="">Select Category</option>
                                <option value="electronics">Electronics</option>
                                <option value="documents">Documents</option>
                                <option value="personal">Personal Items</option>
                                <option value="clothing">Clothing</option>
                                <option value="accessories">Accessories</option>
                                <option value="other">Other</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="lostDate">Date Lost*</label>
                            <input type="date" id="lostDate" name="lostDate" required>
                        </div>

                        <div class="form-group">
                            <label for="lostLocation">Location Lost*</label>
                            <select id="lostLocation" name="lostLocation" required>
                                <option value="">Select Location</option>
                                <option value="cafeteria">Cafeteria</option>
                                <option value="library">Library</option>
                                <option value="lecture_hall">Lecture Hall</option>
                                <option value="parking">Parking Lot</option>
                                <option value="sports">Sports Complex</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="form-section">
                    <h3><i class="fa fa-image"></i> Item Image</h3>
                    <div class="image-upload-container">
                        <div class="image-preview" id="imagePreview">
                            <img id="previewImage" src="#" alt="Preview" style="display: none;">
                            <div class="default-text">
                                <i class="fa fa-camera"></i>
                                <span>No image selected</span>
                            </div>
                        </div>
                        <div class="upload-controls">
                            <input type="file" id="itemImage" name="itemImage" accept="image/*" style="display: none;">
                            <button type="button" class="btn-upload" onclick="document.getElementById('itemImage').click()">
                                <i class="fa fa-upload"></i> Upload Image
                            </button>
                            <button type="button" class="btn-remove" id="removeImageBtn" style="display: none;">
                                <i class="fa fa-trash"></i> Remove
                            </button>
                        </div>
                    </div>
                </div>

                <div class="form-section">
                    <h3><i class="fa fa-align-left"></i> Detailed Description</h3>
                    <div class="form-group">
                        <label for="itemDescription">Description*</label>
                        <textarea id="itemDescription" name="itemDescription" rows="4" required
                            placeholder="Provide detailed description including color, brand, distinguishing features, contents if applicable"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="specialFeatures">Special Features/Identifying Marks</label>
                        <textarea id="specialFeatures" name="specialFeatures" rows="2"
                            placeholder="Scratches, engravings, stickers, etc."></textarea>
                    </div>
                </div>

                <div class="form-section">
                    <h3><i class="fa fa-user"></i> Reporter Information</h3>
                    <div class="form-grid">
                        <div class="form-group">
                            <label for="reporterName">Reporter Name*</label>
                            <input type="text" id="reporterName" name="reporterName" required>
                        </div>

                        <div class="form-group">
                            <label for="reporterEmail">Email*</label>
                            <input type="email" id="reporterEmail" name="reporterEmail" required>
                        </div>

                        <div class="form-group">
                            <label for="reporterPhone">Phone Number</label>
                            <input type="tel" id="reporterPhone" name="reporterPhone">
                        </div>

                        <div class="form-group">
                            <label for="reporterRelation">Relation to Item</label>
                            <select id="reporterRelation" name="reporterRelation">
                                <option value="owner">Owner</option>
                                <option value="finder">Finder</option>
                                <option value="staff">Staff</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="form-actions">
                    <button type="button" class="btn-cancel">Cancel</button>
                    <button type="submit" class="btn-submit">
                        <i class="fa fa-plus"></i> Add Item
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>