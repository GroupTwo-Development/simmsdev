<?php
/**
 * Custom FacetWP select template
 */
?>
<div class="facetwp-facet">
    <select class="w-full appearance-none rounded-md border border-primary-green bg-primary-green px-4 py-2 text-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-black disabled:cursor-not-allowed disabled:opacity-75">
        <option value=""><?php esc_html_e('Select an option', 'your-text-domain'); ?></option>
        <?php foreach ( $facet['choices'] as $choice ) : ?>
            <option value="<?php echo esc_attr( $choice['value'] ); ?>" <?php selected( $choice['selected'] ); ?>>
                <?php echo esc_html( $choice['label'] ); ?>
            </option>
        <?php endforeach; ?>
    </select>
</div>
