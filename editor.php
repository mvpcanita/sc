<script src="ckeditor/ckeditor.js"></script>

<?php 
for($b=0;$b<18;$b++){
for($c=0;$c<5;$c++){?>

<textarea id='editor<?php echo $c;echo $b;?>' rows="3" cols="11"><?php echo $c;?></textarea>
        <script>
           
            CKEDITOR.replace( '<?php echo "editor".$c.$b;?>' );
        </script>

        <?php } }?>