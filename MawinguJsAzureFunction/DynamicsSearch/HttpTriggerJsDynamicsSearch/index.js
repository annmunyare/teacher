module.exports = function (context, req) {
    context.log('JavaScript HTTP trigger function processed a request.');

    if (req.query.name || (req.body && req.body.name)) {
        context.res = {
            // status: 200, /* Defaults to 200 */
            body: "Hello " + (req.query.name || req.body.name)
        };
    }
    else {
        context.res = {
            status: 400,
            body: "Please pass a name on the query string or in the request body"
        };
    }
    context.done();
};

// module.exports = function(context, req) {
//     var patsId = req.query.patId;
//   var data = "";
  
//   xhttp.get("https://nanyukiaf-hospital-nelly.azurewebsites.net/getSinglePatient/"+patsId, callBack);
//   function callBack(resp) {
//     resp.on("data", response => {
//       data += response;
//     });

//     resp.on("end", () => {
//         context.log(data);
//       context.res = {
//         body: data
        
        
//       };
//       context.done();
//     });
//   }
  
 
// };