function share(){
	if (navigator.share !== undefined) {
		navigator.share({
			title: 'restaurante',
			text: 'Compartilhe agora',
			url: 'catarinarestaurant',
		})
		.then(() => console.log('Successful share'))
		.catch((error) => console.log('Error sharing', error));
	}
}