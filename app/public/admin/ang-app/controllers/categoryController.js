app.controller('categoryController', function($http,url,CSRF_TOKEN,categoryService){
	var category = this;

	category.deleteCategory = function(id){
		console.log(id);
		var isConfirm = confirm('please confirm you want to remove the category');
		if(isConfirm){
			var oneCat = categoryService.delete({category: id});
			oneCat.$promise.then(function(data) {
     			location.reload();
			},function(error){
				console.log(error);
			});

		}
	}
	
});