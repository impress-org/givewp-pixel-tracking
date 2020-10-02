<?php 

add_action( 'wp_footer', 'givewppt4fb_footer_scripts' );
add_action( 'give_new_receipt', 'givewppt4fb_sequoia_scripts');

function givewppt4fb_footer_scripts(){
  ?>
    <script type="text/javascript">
        if ( undefined !== window.fbq ) {
            console.log('The FB Pixel was detected');
        
            jQuery(window).load(setTimeout(givewpTriggerPurchaseEvent, 1000));

            function givewpTriggerPurchaseEvent(){

                var donationReceipt = jQuery('#give_donation_receipt').length;
                var successPage = jQuery('p.give_notice.give_success').length;
                var verifyTotalDonation = jQuery('#totaldonation').length;

                console.log(donationReceipt, successPage, verifyTotalDonation);

                if(successPage) {
                    console.log('This is a Donation Confirmation Page');
                    var data =  jQuery('#givewppt4fb').html();
                    var jsonld = JSON.parse(data);

                    fbq('track', 'Donate')

                    fbq('track', 'Purchase', {currency: jsonld.priceCurrency, value: jsonld.price});

                    console.log(jsonld);
                }
            }
        }
    </script>
  <?php
}

function givewppt4fb_sequoia_scripts() {
    ?>
        <script type="text/javascript" id="givewppt4fb">
            var console = {
                    panel: jQuery(parent.document.body).append('<div>'),
                    log: function(m){
                    this.panel.prepend('<div>'+m+'</div>');
                }       
            };
            var multiStepDonateButton = jQuery('.give-viewing-form-in-iframe .give-submit').length;
            var isMultistep = false;

            if (jQuery('body.give-form-templates')[0]) {
                var isMultistep = true;
            }

            console.log('This is the Multi-Step Receipt page!');

            console.log('Is this is a multi-step form?' + isMultistep);

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

    //var_dump($meta);

    ?>
        <script type="application/ld+json" id="givewppt4fb">
            {
                "@context": "http://schema.org",
                "@type": "DonateAction",
                "agent": {
                    "@type": "Person",
                    "name": "<?php echo $firstname . ' ' . $lastname; ?>"
                },
                "price": "<?php echo $amount; ?>",
                "priceCurrency": "<?php echo $currency; ?>"
            }
        </script>
    <?php 
}