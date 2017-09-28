app.controller('characterController', function($http,url,CSRF_TOKEN,characterService){
	var character = this;

	character.deleteCharacter = function(id){
		console.log(id);
		var isConfirm = confirm('please confirm you want to remove the category');
		if(isConfirm){
			var oneCat = characterService.delete({character : id});
			oneCat.$promise.then(function(data) {
     			location.reload();
			},function(error){
				console.log(error);
			});

		}
	}
	
});