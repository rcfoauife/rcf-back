app.factory('productService', function ($resource,url) {
    return $resource(url+'/admin/product/:product',{product: "@product"});
});