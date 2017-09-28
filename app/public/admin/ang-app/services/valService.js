app.factory('valService', function ($resource,url) {
    return $resource(url+'/admin/val/:val',{prop: "@val"});
});