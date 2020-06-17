const { param } = require('jquery');

window.axios = require('axios');
//creating all the  functions for axios
function getServicesByParams(type, paramName, params, callback){
    let parameters = '?'+paramName + '=' + param;
    axios.get(type+parameters)
    .then(response =>{
        callback(null, response.data.response);
    })
    .catch(function (err){
        callback(error, null);
    });
}
function getServices(type, cb){
    axios.get(type)
    .then(response =>{
        callback(null, response.data.response);
    })
    .catch(function (err){
        callback(error, null);
    });
}
function getServicesById(type, id, cb){
    axios.get(type + `/` + id)
    .then(function (res) {
        cb(null, res.data);
    })
    .catch(function (error) {
        console.log(error);
        cb(error, null);
    });
}
export {getServices,getServicesByParams,getServicesById};
