app.factory('brandService', function ($resource,url) {
    return $resource(url+'/admin/brand/:brand',{brand: "@brand"});
});