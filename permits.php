<?php include "template/header-dark.php"; ?>

<style>
    /* Shelf Layout Styles */
    .certificates-section { padding: 80px 0; background-color: #f9f9f9; }
    
    .cert-shelf {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
        gap: 40px;
        margin-top: 50px;
    }

    .cert-card {
        background: #fff;
        border-radius: 8px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.08);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        overflow: hidden;
        position: relative;
        text-align: center;
        border-bottom: 4px solid #12253f;
        cursor: pointer;
    }

    .cert-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 40px rgba(0,0,0,0.15);
    }

    .cert-thumb {
        height: 250px;
        width: 100%;
        object-fit: contain;
        background-color: #eef2f5;
        padding: 20px;
    }

    .cert-title {
        padding: 20px 15px;
        font-weight: 700;
        color: #12253f;
        text-transform: uppercase;
        font-size: 0.9rem;
        min-height: 80px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    /* --- ZOOM MODAL STYLES --- */
    .zoom-modal {
        display: none;
        position: fixed;
        z-index: 10000; /* Ensure it is above everything */
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0,0,0,0.9);
        overflow: hidden; /* Prevent body scroll bars */
    }

    .modal-content-wrapper {
        width: 100%;
        height: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        overflow: hidden;
    }

    .modal-image {
        max-width: 90%;
        max-height: 90%;
        cursor: grab;
        transition: transform 0.1s linear; /* Fast response for zooming */
        transform-origin: center center;
    }

    .modal-image:active {
        cursor: grabbing;
    }

    .close-modal {
        position: absolute;
        top: 20px;
        right: 30px;
        color: #f1f1f1;
        font-size: 40px;
        font-weight: bold;
        transition: 0.3s;
        cursor: pointer;
        z-index: 10001;
    }

    .close-modal:hover { color: #bbb; }

    .zoom-instruction {
        position: absolute;
        bottom: 20px;
        width: 100%;
        text-align: center;
        color: #fff;
        font-size: 14px;
        pointer-events: none;
        background: rgba(0,0,0,0.5);
        padding: 10px;
    }

    /* Download Section */
    .download-section {
        background: #12253f;
        color: white;
        padding: 60px 0;
        text-align: center;
        margin-top: 80px;
    }
    .download-btn {
        display: inline-block;
        border: 2px solid #fff;
        padding: 15px 40px;
        color: #fff;
        font-weight: bold;
        text-transform: uppercase;
        margin-top: 20px;
        transition: all 0.3s;
        text-decoration: none;
    }
    .download-btn:hover { background: #fff; color: #12253f; }
</style>

<div class="spacing"></div>

<section class="certificates-section">
    <div class="frm-cntnr width--85">
        <div class="pdct-frame1__title text-center">
            <h1 class="clr--green">Permits & Licenses</h1>
            <p style="max-width: 700px; margin: 20px auto; color: #666;">
                Click any document below to inspect it in high resolution.
            </p>
        </div>

        <div class="cert-shelf">
            <!-- CARDS (Click calls openZoomModal) -->
            <div class="cert-card" onclick="openZoomModal('assets/PERMITS, LICENSES & CERTIFICATES/PCAB License.jpg')">
                <img src="assets/PERMITS, LICENSES & CERTIFICATES/PCAB License.jpg" class="cert-thumb" alt="PCAB License">
                <div class="cert-title">PCAB License</div>
            </div>

            <div class="cert-card" onclick="openZoomModal('assets/PERMITS, LICENSES & CERTIFICATES/PHILGEPS.jpg')">
                <img src="assets/PERMITS, LICENSES & CERTIFICATES/PHILGEPS.jpg" class="cert-thumb" alt="PHILGEPS">
                <div class="cert-title">PHILGEPS Registration</div>
            </div>

            <div class="cert-card" onclick="openZoomModal('assets/PERMITS, LICENSES & CERTIFICATES/SEC REGISTRATION page 1.jpg')">
                <img src="assets/PERMITS, LICENSES & CERTIFICATES/SEC REGISTRATION page 1.jpg" class="cert-thumb" alt="SEC Registration">
                <div class="cert-title">SEC Registration</div>
            </div>

            <div class="cert-card" onclick="openZoomModal('assets/PERMITS, LICENSES & CERTIFICATES/BUSINESS PERMIT.jpg')">
                <img src="assets/PERMITS, LICENSES & CERTIFICATES/BUSINESS PERMIT.jpg" class="cert-thumb" alt="Business Permit">
                <div class="cert-title">Business Permit</div>
            </div>

            <div class="cert-card" onclick="openZoomModal('assets/PERMITS, LICENSES & CERTIFICATES/CERTIFICATE OF REGISTRATION page 1.jpg')">
                <img src="assets/PERMITS, LICENSES & CERTIFICATES/CERTIFICATE OF REGISTRATION page 1.jpg" class="cert-thumb" alt="BIR Registration">
                <div class="cert-title">BIR Certificate of Registration</div>
            </div>

            <div class="cert-card" onclick="openZoomModal('assets/PERMITS, LICENSES & CERTIFICATES/CERTIFICATE OF ACCREDITATION page 1.jpg')">
                <img src="assets/PERMITS, LICENSES & CERTIFICATES/CERTIFICATE OF ACCREDITATION page 1.jpg" class="cert-thumb" alt="Accreditation">
                <div class="cert-title">Certificate of Accreditation</div>
            </div>

            <div class="cert-card" onclick="openZoomModal('assets/PERMITS, LICENSES & CERTIFICATES/DEALER\'S PERMIT.jpg')">
                <img src="assets/PERMITS, LICENSES & CERTIFICATES/DEALER'S PERMIT.jpg" class="cert-thumb" alt="Dealer's Permit">
                <div class="cert-title">Dealer's Permit</div>
            </div>

            <div class="cert-card" onclick="openZoomModal('assets/PERMITS, LICENSES & CERTIFICATES/PERMIT TO IMPORT.jpg')">
                <img src="assets/PERMITS, LICENSES & CERTIFICATES/PERMIT TO IMPORT.jpg" class="cert-thumb" alt="Permit to Import">
                <div class="cert-title">Permit to Import</div>
            </div>
        </div>
    </div>
</section>

<!-- ZOOM MODAL STRUCTURE -->
<div id="myZoomModal" class="zoom-modal">
    <span class="close-modal" onclick="closeZoomModal()">&times;</span>
    <div class="modal-content-wrapper">
        <img class="modal-image" id="img01">
    </div>
    <div class="zoom-instruction">Scroll to Zoom &bull; Drag to Pan</div>
</div>

<section class="download-section">
    <div class="frm-cntnr width--85">
        <h2>Corporate Profile</h2>
        <p>Download our complete company profile to learn more about our capabilities and history.</p>
        <a href="assets/PERMITS%2C%20LICENSES%20%26%20CERTIFICATES/2026-TSAASICompanyProfile.PDF" class="download-btn" download>Download Profile (PDF)</a>
    </div>
</section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- Combined Scripts -->
<script>
    /* =========================================
       1. ZOOM & PAN LOGIC
       ========================================= */
    const modal = document.getElementById("myZoomModal");
    const img = document.getElementById("img01");
    let scale = 1;
    let panning = false;
    let pointX = 0;
    let pointY = 0;
    let startX = 0;
    let startY = 0;

    function openZoomModal(src) {
        modal.style.display = "block";
        img.src = src;
        resetZoom();
        document.body.style.overflow = "hidden"; // Disable page scroll
    }

    function closeZoomModal() {
        modal.style.display = "none";
        document.body.style.overflow = "auto"; // Enable page scroll
    }

    function resetZoom() {
        scale = 1;
        pointX = 0;
        pointY = 0;
        updateTransform();
    }

    function updateTransform() {
        img.style.transform = `translate(${pointX}px, ${pointY}px) scale(${scale})`;
    }

    // Zoom on Wheel
    modal.onwheel = function(e) {
        e.preventDefault();
        const xs = (e.clientX - pointX) / scale;
        const ys = (e.clientY - pointY) / scale;
        const delta = -e.deltaY;
        
        (delta > 0) ? (scale *= 1.2) : (scale /= 1.2);
        
        // Limit Scale
        if(scale < 1) scale = 1;
        if(scale > 5) scale = 5; // Max zoom 5x

        pointX = e.clientX - xs * scale;
        pointY = e.clientY - ys * scale;

        // If zoomed out completely, center image
        if (scale === 1) { pointX = 0; pointY = 0; }

        updateTransform();
    }

    // Pan Logic
    img.onmousedown = function(e) {
        e.preventDefault();
        startX = e.clientX - pointX;
        startY = e.clientY - pointY;
        panning = true;
    }

    modal.onmouseup = function(e) { panning = false; }
    modal.onmousemove = function(e) {
        e.preventDefault();
        if (!panning) return;
        pointX = e.clientX - startX;
        pointY = e.clientY - startY;
        updateTransform();
    }

    /* =========================================
       2. BURGER MENU FIX
       ========================================= */
    $(document).ready(function() {
        // Unbind previous events to prevent double triggering
        $(".menu-button__hldr, .menu-btn").off('click').on('click', function(e) {
            e.preventDefault(); // STOP PAGE RELOAD
            e.stopPropagation(); // STOP BUBBLING

            var menu = $(".menu-hldr");
            
            if (menu.is(":visible")) {
                menu.fadeOut(300).removeClass("active");
            } else {
                menu.fadeIn(300).addClass("active");
                menu.css('display', 'block'); // Force display
            }
        });

        $(".menu-close, .close-text").off('click').on('click', function(e) {
            e.preventDefault();
            $(".menu-hldr").fadeOut(300).removeClass("active");
        });
    });
</script>

<?php include "template/footer.php"; ?>