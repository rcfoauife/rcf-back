app.controller('brandController', function($http,url,CSRF_TOKEN,brandService){
	var brand = this;

	brand.deleteBrand = function(id){
		console.log(id);
		var isConfirm = confirm('please confirm you want to remove the category');
		if(isConfirm){
			var oneCat = brandService.delete({brand : id});
			oneCat.$promise.then(function(data) {
     			location.reload();
			},function(error){
				console.log(error);
			});

		}
	}
	
});