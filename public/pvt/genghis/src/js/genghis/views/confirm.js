Genghis.Views.Confirm = Backbone.View.extend({
    className: 'modal confirm-modal',
    template: Genghis.Templates.Confirm,
    events: {
        'click button.dismiss': 'dismiss',
        'click button.confirm': 'confirm',
        'keyup .confirm-input': 'validateInput'
    },
    defaults: {
        header:      null,
        body:        'Really? There is no undo.',
        confirmText: 'Okay',
        dismissText: 'Cancel'
    },
    initialize: function() {
        _.bindAll(this, 'render', 'confirm', 'validateInput', 'dismiss', 'remove');

        this.onConfirm = this.options.confirm || function() {};

        this.confirmInput  = this.options.confirmInput;
        this.modalOptions  = _.pick(this.options, 'backdrop', 'keyboard');
        this.renderContext = _.defaults(
            _.pick(this.options, 'header', 'body', 'confirmText', 'confirmInput', 'dismissText'),
            this.defaults
        );

        if (this.options.show !== false) {
            this.render();
        }
    },
    render: function() {
        var el = this.$el.html(this.template.render(this.renderContext));

        if (this.confirmInput) {
            el.on('shown', function() {
                el.find('.confirm-input').focus();
            });
        }

        el.modal(this.modalOptions);

        return this;
    },
    confirm: function() {
        this.onConfirm();
        this.dismiss();
    },
    validateInput: function(e) {
        var btn = this.$('button.confirm');

        if ($(e.target).val() == this.confirmInput) {
            btn.removeAttr('disabled');

            // handle enter
            if (e.keyCode == 13) {
                e.preventDefault();
                btn.click();
            }
        } else {
            btn.attr('disabled', true);
        }
    },
    dismiss: function() {
        this.$el.on('hidden', this.remove).modal('hide');
    },
    remove: function() {
        this.$el.remove();
    }
});
