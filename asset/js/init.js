$(document).ready(function () {

	$('.date-range-picker').daterangepicker({
		locale: { 
			format: 'YYYY-MM-DD' 
		}
	})

	$('.date-time-range-picker').daterangepicker({ 
		timePicker: true, 
		timePickerIncrement: 1, 
		timePicker24Hour : true,
		locale: { 
			format: 'YYYY-MM-DD hh:mm' 
		}
	})

	$('.date-range-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment(),
        locale: { 
			format: 'YYYY-MM-DD' 
		}
      },
      function (start, end) {
        $('.date-range-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

    $('.date-picker').datepicker({
      format: 'yyyy-mm-dd',
      autoclose: true
    })

    $('.timepicker').timepicker({
      showInputs: false
    })


})