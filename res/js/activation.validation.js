$(function () {
	$("form[name='activation']").validate({
		// Define validation rules
		rules: {
			otpCode: "required",
			otpCode: {
				required: true,
				equalTo: "#dbOtpCode",
			},
		},
		// Specify validation error messages
		messages: {
			otpCode: {
				required: "Please enter your code",
				equalTo: "Wrong code",
			},
		},
		submitHandler: function (form) {
			form.submit();
		},
	});
});
