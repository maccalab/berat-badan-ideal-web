const https = require('https');
const http = require('http');

var admin = require("firebase-admin");

// Fetch the service account key JSON file contents
// var serviceAccount = require("C:/laragon/www/berat-badan-ideal-web/webhook/services-account-file.json");
var serviceAccount = require("C:/xampp/htdocs/berat-badan-ideal-web/webhook/services-account-file.json");

// Initialize the app with a service account, granting admin privileges
admin.initializeApp({
  credential: admin.credential.cert(serviceAccount),
  // The database URL depends on the location of the database
  databaseURL: "https://bbideal-14f54-default-rtdb.firebaseio.com/"
});

var db = admin.database();
var result = db.ref("result");
var biodata = db.ref("biodata");
result.on("value", function(snapshot) {
  console.log(snapshot.val());
  if(snapshot.val().Send == 1){
    updateDb(snapshot.val().Berat, snapshot.val().Tinggi, snapshot.val().Ideal);
    resetSend();
  }
}, (errorObject) => {
    console.log("The read failed: " + errorObject.name);
    });

biodata.on("value", function(snapshot) {
  console.log(snapshot.val());
  insertData(snapshot.val().nama, snapshot.val().gender, snapshot.val().umur, snapshot.val().alamat);
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

function insertData(nama, jenis_kelamin, umur, alamat){
  console.log("updating database");
  http.get('http://localhost/berat-badan-ideal-web/insertData.php?nama='+nama+'&gender='+jenis_kelamin+'&umur='+umur+'&alamat='+alamat, (resp) => {
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

function resetSend(){
  console.log("reset send field firebase");
  http.get('http://localhost/berat-badan-ideal-web/sendData.php?reset=1', (resp) => {
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