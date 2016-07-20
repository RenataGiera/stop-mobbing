var express = require('express');
var app = module.exports = express();

app.configure(function () {
    app.set('port', process.env.PORT || 3000);
});



app.listen(app.get('port'));
console.log('Listening on port ' + app.get('port'));