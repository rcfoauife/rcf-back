app.factory('characterService', function ($resource,url) {
    return $resource(url+'/admin/character/:character',{character: "@character"});
});