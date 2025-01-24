<?php include 'header.php'; ?>

<div class="recommend-item">
    <a href="shop1.php">
        <img src="shop.jpg" alt="shop">
    </a>
</div>

<div class="recommend-item">
    <a href="shop2.php">
        <img src="shop2.gif" alt="shop">
    </a>
</div>

<div class="recommend-item">
    <a href="#" onclick="showPopup()">
        <img src="shop3.jpg" alt="shop">
    </a>
</div>

<!-- The Modal -->
<div id="myModal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="hidePopup()">&times;</span>
        <p>สินค้าหมด T-T</p>
    </div>
</div>
