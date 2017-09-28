app.controller('propController', function($http,url,CSRF_TOKEN,propService,valService){
	var prop = this;

	prop.detailss = {name: '', pId: 0};
	prop.titlee =  '';
	prop.getProp = function(){
		var Result = propService.query({prop: prop.idd});
		Result.$promise.then(function(data) {
   			console.log(data);
   			prop.propList = data;
		},function(error){
			console.log(error);
		});
	}

	setTimeout(function(){
            prop.getProp();
        },1000);
	
	prop.saveProp = function(){
		var Res = propService.save({name: prop.name, pId: prop.idd});
		Res.$promise.then(function(data) {
			prop.getProp();
			prop.name = '';
		},function(error){
			console.log(error);
		});
	}

	prop.removeProp = function(id){
		var Res = propService.delete({prop: id});
		Res.$promise.then(function(data) {
			prop.getProp();
		},function(error){
			console.log(error);
		});
	}

	prop.openModal = function(pId,title){
		console.log(title);
		prop.titlee = title;
		prop.detailss.pId = pId;
		$('#myModal').modal('show');
	}

	prop.saveVal = function(){
		var Res = valService.save(prop.detailss);
		Res.$promise.then(function(data) {
			prop.getProp();
			$('#myModal').modal('hide');
		},function(error){
			console.log(error);
		});
	}

	prop.removeVal = function(id){
		var Res = valService.delete({val:id});
		Res.$promise.then(function(data) {
			prop.getProp();
		},function(error){
			console.log(error);
		});	
	}
});