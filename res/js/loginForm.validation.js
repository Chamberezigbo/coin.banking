$(function () {
	$("form[name='loginForm']").validate({
		// Define validation rules
		rules: {
			email: "required",
			logPassword: "required",
			email: {
				required: true,
				email: true,
			},
			pass: {
				required: true,
			},
		},
		// Specify validation error messages
		messages: {
			email: {
				required: "Please enter your email",
				email: "Please enter a valid email address",
			},
			logPassword: {
				required: "Please enter a password",
			},
		},
		submitHandler: function (form) {
			form.submit();
		},
	});
});
