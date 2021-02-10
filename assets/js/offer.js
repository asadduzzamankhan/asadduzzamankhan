$(document).ready(function() {
        $item_id = $("input[name=item_id]").val(); //product that is being offered on 
        $offer_price = $("input[name=offer_price]").val();
        $form = $("#offer-form");

        $form.validate({
          rules: {
            offer_price: {
              required: true
            },
          }
        });

        $("input[name=submit_offer]").on("click", function(e) {
                e.preventDefault();
                if($form.valid() == true) {
                         $offer_price = $("input[name=offer_price]").val();
                         $.post("includes/form_handlers/submit_offer.php", {offer_price: $offer_price, item_id: $item_id}, function(response) {
                              console.log(response); 
                             //window.location = "your_offers.php";
                         });     
                } else {
                        $form.valid();
                }
        });

    //Accept offer
    $(".accept-offer--btn").on("click", function() {
        $offer_id = $(this).data("offer-id");
        var conf = confirm("Are you sure you want to accept this offer?");
        if(conf == 1) {
                $.post("includes/form_handlers/accept_offer.php", {offer_id: $offer_id}, function(response) {
                       window.location = "received_offers.php";
                });
        } else {

        }
    });
});
