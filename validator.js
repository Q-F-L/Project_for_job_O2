let validate =
{
	validate(_this)
	{
		// _this.preventDefault;
		// let errors = true;
		// let input = document.querySelectorAll('input[required]')
		// for(let val of input)
		// {
		// 	if(val.value === '')
		// 	{
		// 		val.classList.add('error');
		// 		errors = false;
		// 	}

		// 	else
		// 		val.classList.remove('error');
		// }

		// let reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
		// let address = document.querySelector('._email');
		// if(reg.test(address.value) === false)
		// {
		// 	address.classList.add('error');
		// 	errors = false;
		// }

		return true;
	},
	send(_this, event)
	{
		$("input").removeClass('error'); 
		event.preventDefault();
		if(this.validate(_this))
		{
			$.ajax({
				url: './vendor.php',
				method: 'POST',
				dataType: 'html',
				data: $("._form").serialize(),
				success: function(responce)
				{
					responce = JSON.parse(responce);
					console.log(responce);
					responce.fields.forEach(element => {
						$("input[name=\""+element+"\"").addClass('error'); 
					}); 
				}
			});
		}
	}
}