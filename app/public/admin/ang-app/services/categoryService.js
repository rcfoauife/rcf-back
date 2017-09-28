app.factory('categoryService', function ($resource,url) {
    return $resource(url+'/admin/category/:category',{category: "@category"});
});