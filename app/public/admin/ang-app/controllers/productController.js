app.controller('productController', function($http,url,CSRF_TOKEN,characterService){
    var product = this;

    product.characterList = [];

    product.addCharacter = function(){
        console.log(product.character);
        var oneResult = characterService.get({character : product.character});
            oneResult.$promise.then(function(data) {
                    console.log(data);
                    product.characterList.push(data);
                    product.CreateList()
            },function(error){
                console.log(error);
            });
    };


    product.removeCharacter = function(index){
        product.characterList.splice(index,1);
        setTimeout(function(){
            product.CreateList();
        },1000);
    }; 

    product.CreateList = function(){
        product.RealEmailList = '';
        for (var i = 0; i<product.characterList.length; i++){
            product.RealEmailList += (product.characterList[i].name)+',';
        }
        console.log(product.RealEmailList);
    }
    
});