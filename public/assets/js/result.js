const app = new Vue({
    el: '#app',
    data: {
        claim: null,
    },
    methods: {
        onFormSubmit: function () {
            var data = $('form').serializeArray().reduce(function (obj, item) {
                obj[item.name] = item.value;
                return obj;
            }, {});

            if (!data.name || !data.email || !data.coffee_shop) {
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
