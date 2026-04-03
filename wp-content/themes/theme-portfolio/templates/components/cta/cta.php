<?php
/**
 * Component: CTA Quête
 * Path: templates/components/cta/cta.php
 */
$cta_text = get_field('cta_title');
$cta_url  = get_field('cta_link');
?>

<?php if ($cta_url && $cta_text): ?>
    <div class="cta">
        <div class="cta__icon-container">
            <svg class="cta__icon" width="45" height="45" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M10 10L35 35M35 10L10 35" stroke="#FF0000" stroke-width="4" stroke-linecap="round"/>
            </svg>
        </div>
        <div class="cta__action">
            <a href="<?php echo esc_url($cta_url); ?>" class="cta__button">
                <?php echo esc_html($cta_text); ?>
            </a>
        </div>
    </div>
<?php endif; ?>