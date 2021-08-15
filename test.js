var fs = require('fs');

function makeId(length) {
    var result = "";
    var characters =
      "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789!@#$%^*()";
    var charactersLength = characters.length;
    for (var i = 0; i < length; i++) {
      result += characters.charAt(Math.floor(Math.random() * charactersLength));
    }
    return result;
  }


 




var data = {}
data.table = []
for (i=0; i <100 ; i++){
   var obj = {
       id: makeId(8)
       
   }
   data.table.push(obj)
}
fs.writeFile ("input.json", JSON.stringify(data), function(err) {
    if (err) throw err;
    console.log('complete');
    }
);