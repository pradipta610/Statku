
<?php if(isset($_SESSION['message'])): ?>
<div class="<?php echo $_SESSION['type']; ?> show" id="show">
        <span class="fas fa-exclamation-circle"></span>
        <span class="msg"><?php echo $_SESSION['message'];?></span>
        <span class="close-btn">
          <span class="fas fa-times">
        </span>
        </span>

        <?php
          unset($_SESSION['message']);
          unset($_SESSION['type']);
        ?>
      </div>

<?php endif; ?>