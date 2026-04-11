<?php
/**
 * Component: CTA Quête
 * Path: templates/components/cta/cta.php
 */
$cta_title = get_field('cta_title');
$cta_link  = get_field('cta_link');
?>

<?php if ($cta_link && $cta_title): ?>
    <div class="cta">
        <div class="cta__action">
            <a href="<?php echo esc_url($cta_link); ?>" class="cta__button">
                <?php echo esc_html($cta_title); ?>
            </a>
        </div>
    </div>
<?php endif; ?>