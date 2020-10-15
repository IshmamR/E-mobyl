var toCart = document.querySelectorAll(".toCart");
toCart.forEach(item => {
	item.addEventListener('click', function(e) {
		console.log(this.value);
		// this.value
	});
});