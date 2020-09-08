const SELECTOR = '.snipcart-stock-quantity';
const ATTRIBUTE = 'item-id';
const MSG_UNAVAILABLE = 'Unavailable';
const MSG_UNKNOWN = 'Stock quantity unknown';
const MSG_UNLIMITED = 'Available';

jQuery(document).ready(function() {
    jQuery(SELECTOR).each(function() {
        fetchStock($(this))
    })

    // Remove "Citofono" field
    document.addEventListener('snipcart.ready', () => {
        Snipcart.store.subscribe(() => {
        // aggiungo leggero delay per permettere a Vue di renderizzarmi gli elementi HTML nel DOM
        setTimeout(() => {
            // rimuovo margine destro indirizzo
            const indirizzo = document.querySelector('#address1')
            if (indirizzo) {
            indirizzo.parentNode.parentNode.style.marginRight = '0'
            }

            // nascondo citofono
            const citofonoInput = document.querySelector('#address2')
            if (citofonoInput) {
            citofonoInput.parentNode.parentNode.style.display = 'none'
            }
        }, 200)
        })

        // traduzione payment form: in italiano aggiorno la label Expiration
        // modifica label "Fatturazione" in "Dati personali"
        const locale = document.documentElement.lang
        if(locale === 'it-IT' || locale === 'it') {
            Snipcart.api.session.setLanguage('it', {
                "payment": {
                    "form": {
                        "card_expiration_label": "Scadenza"
                    }
                },
                "billing": {
                    "title": "Dati personali",
                }
            });
        }
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