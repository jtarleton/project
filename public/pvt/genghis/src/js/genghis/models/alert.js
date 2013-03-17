Genghis.Models.Alert = Backbone.Model.extend({
    defaults: {
        level: 'warning',
        block: false
    },
    block: function() {
        return !!this.get('block');
    },
    level: function() {
        return this.get('level');
    },
    msg: function() {
        return this.get('msg');
    }
});
