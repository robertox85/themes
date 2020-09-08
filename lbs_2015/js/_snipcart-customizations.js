const SELECTOR = '.snipcart-stock-quantity';
const ATTRIBUTE = 'item-id';
const MSG_UNAVAILABLE = 'Unavailable';
const MSG_UNKNOWN = 'Stock quantity unknown';
const MSG_UNLIMITED = 'Available';

$(document).ready(function() {
    $(SELECTOR).each(function() {
        fetchStock($(this))
    })
});

var fetchStock = function($element) {
    var itemId = $element.data(ATTRIBUTE);

    if (itemId) {
        $.get(window.SNIPCART_STOCK_LAMBDA_URL, {
            productId: itemId,
        }).done(function(data) {
            if (!data.stock) {
                $element.text(MSG_UNKNOWN);
            } else {
                switch (data.stock) {
                    case -1: $element.text(MSG_UNLIMITED); break;
                    case 0: $element.text(MSG_UNAVAILABLE); break;
                    default: $element.text(data.stock); break;
                }
            }
        }).fail(function(data) {
            $element.text(MSG_UNKNOWN);
        })
    } else {
        $element.text('');
    }
}
