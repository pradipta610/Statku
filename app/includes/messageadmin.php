
<?php if (count($errors) > 0): ?>
<div class="msg success error show" id="show">
        <span class="fas fa-exclamation-circle"></span>
        <?php foreach ($errors as $error): ?>
        <span class="msg"><?php echo $error;?></span>
        <?php endforeach; ?>
        <span class="close-btn">
          <span class="fas fa-times">
        </span>
        </span>
      </div>
     

<?php endif; ?>
