<?php
/**
 * @Created by          : Waris Agung Widodo (ido.alit@gmail.com)
 * @Date                : 2019-01-29 23:33
 * @File name           : vegas.js.php
 */

if (!$sysconf['template']['classic_library_disableslide']):
?>
<script>
  $('.c-header, .vegas-slide').vegas({
        delay: <?= $sysconf['template']['classic_slide_delay']; ?>,
        timer: false,
        transition: '<?= $sysconf['template']['classic_slide_transition']; ?>',
        animation: '<?= $sysconf['template']['classic_slide_animation']; ?>',
        slides: [
            { src: "<?php echo CURRENT_TEMPLATE_DIR . v('assets/images/banner1.png'); ?>" },
            { src: "<?php echo CURRENT_TEMPLATE_DIR . v('assets/images/banner2.png'); ?>" },
            { src: "<?php echo CURRENT_TEMPLATE_DIR . v('assets/images/banner3.png'); ?>" },
            { src: "<?php echo CURRENT_TEMPLATE_DIR . v('assets/images/slide4.jpg'); ?>" }
        ]
    });
</script>
<?php
endif;
