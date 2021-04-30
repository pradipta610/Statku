
<?php 
/*tadi ada warning kalo $errorsnya ga ke declare,,jadi tambahin global langsung mau hehe ////cara ini ternyata ribet*/ 
/*cara yang paling gampang yaitu declare var error di users.php sebagai array,,lebih jelas pindah ke file users.php*/
if(/*tadi benernya count////cara ini ternyata ribet*/count($errors) > 0): ?>
    <div class="msg success error">
        <?php foreach ($errors as $error): ?>
            <li> <?php echo $error; ?> </li>
        <?php endforeach; ?>
    </div>

<?php endif; ?>


 