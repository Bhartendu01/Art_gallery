<?php include 'includes/header.php'; ?>

<div class="gallery-container">
    <div class="gallery-header">
        <h2>The Collection</h2>
        <div class="filters" id="gallery-filters">
            <!-- Populated dynamically by app.js -->
            <p>Loading filters...</p>
        </div>
    </div>
    <div class="art-grid" id="gallery-grid">
        <!-- Populated dynamically by app.js -->
        <p style="text-align:center; grid-column: 1/-1; color: var(--text-secondary);">Loading artworks...</p>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
