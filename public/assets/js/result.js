const app = new Vue({
    el: '#app',
    data: {
        claim: null,
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
            }).fail(() => {
                alert('Error occurred, please try again later.');
            });
        },
    },
})
