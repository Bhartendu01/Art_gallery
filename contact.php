<?php include 'includes/header.php'; ?>

<div class="gallery-container" style="max-width: 800px; margin: 4rem auto;">
    <h2 style="margin-bottom: 2rem; font-family: 'Playfair Display', serif;">Contact Us</h2>
    <div class="modal-content" style="background: var(--glass-bg); padding: 3rem; border-radius: 16px;">
        <form onsubmit="event.preventDefault(); if(app && app.showToast) app.showToast('Thank you for your message! We will get back to you soon.');">
            <div class="form-group">
                <label>Name</label>
                <input type="text" required style="width: 100%; padding: 0.8rem; background: rgba(255,255,255,0.05); border: 1px solid var(--border-color); color: var(--text-primary); border-radius: 4px;">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" required style="width: 100%; padding: 0.8rem; background: rgba(255,255,255,0.05); border: 1px solid var(--border-color); color: var(--text-primary); border-radius: 4px;">
            </div>
            <div class="form-group">
                <label>Message</label>
                <textarea required style="width: 100%; padding: 0.8rem; background: rgba(255,255,255,0.05); border: 1px solid var(--border-color); color: var(--text-primary); border-radius: 4px; min-height: 150px; resize: vertical;"></textarea>
            </div>
            <button type="submit" class="primary-btn full-width-btn">Send Message</button>
        </form>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
