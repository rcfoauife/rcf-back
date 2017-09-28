app.factory('propService', function ($resource,url) {
    return $resource(url+'/admin/prop/:prop',{prop: "@prop"});
});