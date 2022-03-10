const app = new Vue({
    el: '#app',
    data: {
        claim: null,
        coffee_shop_info: null,
        voucher_number: null,
        locale: locale,
        coffee_shops: coffee_shops,
        coffee_shop_chosen: 0,
        coffee_shop_invalid: false,
        share_on: false,
    },
    methods: {
        toggleShare: function () {
            if (!this.share_on) {
                $('.shareon').fadeTo(200, 1);
            } else {
                $('.shareon').fadeTo(200, 0);
            }

            this.share_on = !this.share_on;
        },
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
                localStorage.setItem('claim_loaded', true);

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

                $('html, body').animate({ scrollTop: 0 }, 'fast');
            }).fail(() => {
                alert('Error occurred, please try again later.');
            });
        },
    },
    created() {
        if (localStorage.getItem('claim_loaded')) {
            window.location.href = welcome_url;
        }
    },
})
