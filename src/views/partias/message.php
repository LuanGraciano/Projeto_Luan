<?php if($_messages) {?>
        <div class="container-message">
            <?php foreach($_messages as $message) {?>
                <div class="content-message <?= $_messages["type"]?>-message">
                    <?= $_messages["message"] ?>
                </div>
            <?php } ?>
        </div>
<?php }?>    
<script src="/PROJETO_LUAN/public/js/message.js">

</script>