<?php 

add_action( 'wp_footer', 'my_footer_scripts' );

function my_footer_scripts(){
  ?>
    <script type="text/javascript">
        if ( undefined !== window.fbq ) {
            console.log('The FB Pixel was detected');

            jQuery("input#give-purchase-button").click(function($){
                fbq('track', 'Donate')
            } );
        
            jQuery(window).load(setTimeout(givewpTriggerPurchaseEvent, 5500));

            function givewpTriggerPurchaseEvent(){

                var donationReceipt = jQuery('#give_donation_receipt').length;

                var successPage = jQuery('p.give_notice.give_success').length;

                var verifyTotalDonation = jQuery('#totaldonation').length;

                console.log(donationReceipt, successPage, verifyTotalDonation)

                if(successPage) {
                    console.log('This is a Donation Confirmation Page');
                    var data =  jQuery('#givewppt4fb').html();
                    var jsonld = JSON.parse(data);
                    fbq('track', 'Purchase', {currency: jsonld.priceCurrency, value: jsonld.price});
                }
            }
        }
    </script>
  <?php
}

add_action('give_payment_receipt_after_table', 'givewppt4fb_jsonld_output');

function givewppt4fb_jsonld_output() {

    global $give_receipt_args, $donation;
    $meta = get_post_meta($donation->ID);
    $amount = number_format($meta['_give_payment_total'][0], 2, '.',',');
    $currency = $meta['_give_payment_currency'][0];
    $firstname = $meta['_give_donor_billing_first_name'][0];
    $lastname = $meta['_give_donor_billing_last_name'][0];

    var_dump($meta);

    ?>
        <script type="application/ld+json" id="givewppt4fb">
        {
            "@context": "http://schema.org",
            "@type": "DonateAction",
            "agent": {
                "@type": "Person", // Check for company/individual
                "name": "<?php echo $firstname . ' ' . $lastname; ?>"
            },
            "price": "<?php echo $amount; ?>",
            "priceCurrency": "<?php echo $currency; ?>",
            "recipient": {
                "@type": "Person", // Create setting to switch person/organization 
                "name": "Steve" // Pull from Settings
            }
        }
        </script>
    <?php 
}