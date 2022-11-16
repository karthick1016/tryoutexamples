define(
    [
        'ko',
        'uiComponent',
        'underscore',
        'Magento_Checkout/js/model/step-navigator',
        'Magento_Checkout/js/action/select-shipping-method',
    ],
    function(
        ko,
        Component,
        _,
        stepNavigator,
        selectShippingMethodAction
    ){
        'use strict';

        return Component.extend({
            defaults: {
                template: 'Create_Checkoutstep/check-login'
            },

            isVisible: ko.observable(true),
            // isLogedIn: customer.isLoggedIn(),

            stepCode: 'isLogedCheck',

            stepTitle: 'Shipping Method',

            initialize: function(){
                this._super();

                stepNavigator.registerStep(
                    this.stepCode,

                    null,

                    this.stepTitle,

                    this.isVisible,

                    _.bind(this.navigate,this),

                    15
                );

                return this;
            },
            navigate: function () {

            },

            navigateToNextStep: function () {
                stepNavigator.next();
            }

            
        });
    }
);


