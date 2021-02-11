firebase.initializeApp({
  apiKey: 'AIzaSyAoNlyKviIFQlQknOS8HOwiyciFVMb9gzE',
  authDomain: 'car-e-cf9ff.firebaseapp.com',
  projectId: 'car-e-cf9ff'
});

var db = firebase.firestore();

db.collection("Users").get().then((querySnapshot) => {
    querySnapshot.forEach((doc) => {
        // console.log(`${doc.id} => ${doc.data()}`);
        // console.log(doc.id);
        // console.log(doc.data());

        var myJSON = doc.data();
        console.log(myJSON.Email);
    });
});