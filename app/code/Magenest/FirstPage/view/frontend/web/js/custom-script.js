define(['jquery', 'Magento_Ui/js/modal/alert', 'Magento_Ui/js/modal/modal'], function($, alert, modal) {
    'use strict';

    $(document).ready(function() {
        $('#hello-world').on('click', function() {
            alert('Hello World!');
        });

        $('#alert-model').on('click', function () {
            alert({
                title: 'Thông báo',
                content: 'Hello World',
                actions : {
                    always : function (){}
                }
            })
        })


            var options = {
                type: 'popup',
                title: 'Login',
                responsive: true,
                innerScroll: true,
                buttons: [{
                    text: $.mage.__('Submit'),
                    class: '',
                    click: function () {
                        this.closeModal();
                    }
                }]
            };

            var popup = modal(options, $('#login-modal'));

            $('#login-button').on('click', function() {
                $('#login-modal').modal('openModal');
            });
        });
});
