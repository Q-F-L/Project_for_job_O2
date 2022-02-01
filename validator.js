let validate =
{
	validate(_this)
	{
		let errors = true;
		let input = document.querySelectorAll('input[required]')
		for(let val of input)
		{
			if(val.value === '')
			{
				val.classList.add('error');
				errors = false;
			}

			else
				val.classList.remove('error');
		}

		let reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
		let address = document.querySelector('._email');
		if(reg.test(address.value) === false)
		{
			address.classList.add('error');
			errors = false;
		}

		return errors;
	},
	send(_this, event)
	{
        console.log($("._form").serialize())
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
					console.log(responce);
				}
			});
		}
	}
}