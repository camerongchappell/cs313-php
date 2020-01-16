<?php
for ($i = 0; $i <= 10; $i++) { ?>
    <div style="width: 50%; float:left" id="<?php echo $i; ?>" class="numberedDivs"
        <?php if($i % 2 == 0){echo "style='color:red'";}?>>
    	This is a div #<?php echo $i; ?></div>
<?php }?>