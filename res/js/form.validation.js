$(function () {
	$("form[name='sign-up-form']").validate({
		// Define validation rules
		rules: {
			firstName: "required",
			lastName: "required",
			email: "required",
			phone: "required",
			pass: "required",
			confirmPass: "required",
			firstName: {
				required: true,
				minlength: 3,
			},
			lastName: {
				required: true,
				minlength: 3,
			},
			email: {
				required: true,
				email: true,
			},
			phone: {
				required: true,
				minlength: 10,
				maxlength: 12,
				number: true,
			},
			pass: {
				required: true,
				minlength: 8,
			},
			confirmPass: {
				required: true,
				minlength: 8,
				equalTo: "#password",
			},
		},
		// Specify validation error messages
		messages: {
			firstName: {
				required: "Please provide a valid name.",
				minlength: "Please provide a valid name.",
			},
			lastName: {
				required: "Please provide a valid name.",
				required: "Please provide a valid name.",
			},
			email: {
				required: "Please enter your email",
				minlength: "Please enter a valid email address",
			},
			phone: {
				required: "Please provide a phone number",
				minlength: "Phone number must be min 10 characters long",
				maxlength:
					"Phone number must not be more than 12 characters long",
			},
			pass: {
				required: "Please enter a password",
				minlength: "Password must be more than 8 character",
			},
			confirmPass: {
				required: "Please enter your confirm password",
				minlength: "Password must be more than 8 character",
				equalTo: "Password does't not match",
			},
		},
		submitHandler: function (form) {
			form.submit();
		},
	});
});
