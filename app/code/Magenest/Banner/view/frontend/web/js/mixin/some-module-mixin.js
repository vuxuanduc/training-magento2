define([
    'jquery'
], function($) {
    'use strict';

    return function(target) {
        return target.extend({
            someMethod: function() {
                // Gọi phương thức gốc
                var result = this._super();

                // Thêm logic tùy chỉnh của bạn ở đây
                console.log('Custom logic added to someMethod.');

                return result;
            }
        });
    };
});
