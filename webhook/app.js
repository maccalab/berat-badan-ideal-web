const https = require('https');
const http = require('http');

var admin = require("firebase-admin");

// Fetch the service account key JSON file contents
var serviceAccount = require("C:/xampp/htdocs/berat-badan-ideal-web/webhook/services-account-file.json");

// Initialize the app with a service account, granting admin privileges
admin.initializeApp({
  credential: admin.credential.cert(serviceAccount),
  // The database URL depends on the location of the database
  databaseURL: "https://bbideal-14f54-default-rtdb.firebaseio.com"
});

var db = admin.database();
var ref = db.ref("/");
ref.on("value", function(snapshot) {
  console.log(snapshot.val());
  updateDb(snapshot.val().Berat, snapshot.val().Tinggi, snapshot.val().Ideal);
}, (errorObject) => {
    console.log("The read failed: " + errorObject.name);
    });

function updateDb(berat, tinggi, kategori){
  console.log("updating database");
  http.get('http://localhost/berat-badan-ideal-web/insertData.php?berat='+berat+'&tinggi='+tinggi+'&kategori='+kategori, (resp) => {
  let data = '';

  // A chunk of data has been received.
  resp.on('data', (chunk) => {
    data += chunk;
  });

  // The whole response has been received. Print out the result.
  resp.on('end', () => {
    // console.log(JSON.parse(data).result);
    console.log(data);
  });

  }).on("error", (err) => {
  console.log("Error: " + err.message);
});
}