const app = new Vue({
    el: '#app',
    data: {
        claim: null,
        coffee_shop_info: null,
        voucher_number: null,
        locale: locale,
        coffee_shops: coffee_shops,
        coffee_shop_chosen: null,
        coffee_shop_invalid: false,
    },
    methods: {
        onCoffeeShopClick: function (index) {
            this.coffee_shop_chosen = index;
            this.coffee_shop_invalid = false;
        },
        onFormSubmit: function () {
            var data = $('form').serializeArray().reduce(function (obj, item) {
                obj[item.name] = item.value;
                return obj;
            }, {});

            data.coffee_shop = this.coffee_shop_chosen !== null ? this.coffee_shops[this.coffee_shop_chosen].value : null;

            if (data.coffee_shop === null) {
                this.coffee_shop_invalid = true;
            }

            if (!data.name || !data.email || data.coffee_shop === null) {
                return;
            }

            if (!document.getElementById('form').checkValidity()) {
                return;
            }

            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('form input[name="_token"]').val(),
                },
                url: claim_url,
                dataType: 'json',
                method: 'POST',
                data: data,
            }).done((response) => {
                this.claim = response.claim;
                this.coffee_shop_info = response.coffee_shop;

                if (this.claim && this.coffee_shop_info) {
                    let zeros = 4;
                    let numbers_length = this.claim.voucher_number.toString().length;
                    let zeroes_needed_length = zeros - numbers_length;
                    let output = this.coffee_shop_info.short_title + "-";

                    if (zeroes_needed_length > 0) {
                        for (let i = 0; i < zeroes_needed_length; i++) {
                            output += "0";
                        }
                    }

                    output += this.claim.voucher_number;

                    this.voucher_number = output;
                }
            }).fail(() => {
                alert('Error occurred, please try again later.');
            });
        },
    },
})
