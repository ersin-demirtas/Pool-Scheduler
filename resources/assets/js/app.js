
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));

const app = new Vue({
    el: '#app',
    data: {
    	job_end: '',
    	cloths: [],
    	colors: []
    },

    mounted() {
    	axios.get('../getCloth').then(
    		response => this.cloths = response.data);
    	axios.get('../getColor').then(
    		response => this.colors = response.data);
    },

    methods: {
   		onStartSelected: function() {
   			var start_time = $("select#job_start").val();
	    	var end_time = parseInt(start_time,10) + 300;
	    	$("select#job_end").val(end_time);
	    },
	    setDropAddress: function() {
	    	$('#dropoff_name').val($('#pickup_name').val());
	        $('#dropoff_phone').val($('#pickup_phone').val());
	        $('#dropoff_email').val($('#pickup_email').val());
	        $('#dropoff_street').val($('#pickup_street').val());
	        $('#dropoff_city').val($('#pickup_city').val());
	        $('#dropoff_state').val($('#pickup_state').val());
	        $('#dropoff_zip').val($('#pickup_zip').val());
	    },
      getServiceCost: function(id) {
        var totalCost =0;
        axios.get('../service/cost/' + id).then(
          function (response) {
            totalCost = response.data;
            $('#job_quote').val(response.data);
          }
        )
      },
      populateColors: function(id) {
      	alert("select");
      },

    }


});
