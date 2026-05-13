<?php include 'includes/header.php'; ?>

<div class="gallery-container" style="max-width: 500px; margin: 4rem auto;">
    
    <div id="loginSection" class="modal-content" style="background: var(--glass-bg); padding: 3rem; border-radius: 16px;">
        <h3 class="modal-title">Sign In</h3>
        <form id="loginForm" onsubmit="app.handleLogin(event)">
            <div class="form-group">
                <label>Username</label>
                <input type="text" id="loginUsername" required style="width: 100%; padding: 0.8rem; background: rgba(255,255,255,0.05); border: 1px solid var(--border-color); color: var(--text-primary); border-radius: 4px;">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" id="loginPassword" required style="width: 100%; padding: 0.8rem; background: rgba(255,255,255,0.05); border: 1px solid var(--border-color); color: var(--text-primary); border-radius: 4px;">
            </div>
            <button type="submit" class="primary-btn full-width-btn">Sign In</button>
            <div class="switch-form" style="margin-top: 1rem; text-align: center;">
                New here? <a href="#" onclick="event.preventDefault(); document.getElementById('loginSection').style.display='none'; document.getElementById('registerSection').style.display='block';">Create an account</a>
            </div>
        </form>
    </div>

    <div id="registerSection" class="modal-content" style="background: var(--glass-bg); padding: 3rem; border-radius: 16px; display: none;">
        <h3 class="modal-title">Create Account</h3>
        <form id="registerForm" onsubmit="app.handleRegister(event)">
            <div class="form-group">
                <label>Username</label>
                <input type="text" id="regUsername" required style="width: 100%; padding: 0.8rem; background: rgba(255,255,255,0.05); border: 1px solid var(--border-color); color: var(--text-primary); border-radius: 4px;">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" id="regEmail" required style="width: 100%; padding: 0.8rem; background: rgba(255,255,255,0.05); border: 1px solid var(--border-color); color: var(--text-primary); border-radius: 4px;">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" id="regPassword" required style="width: 100%; padding: 0.8rem; background: rgba(255,255,255,0.05); border: 1px solid var(--border-color); color: var(--text-primary); border-radius: 4px;">
            </div>
            <button type="submit" class="primary-btn full-width-btn">Sign Up</button>
            <div class="switch-form" style="margin-top: 1rem; text-align: center;">
                Already have an account? <a href="#" onclick="event.preventDefault(); document.getElementById('registerSection').style.display='none'; document.getElementById('loginSection').style.display='block';">Sign in</a>
            </div>
        </form>
    </div>

</div>

<?php include 'includes/footer.php'; ?>
