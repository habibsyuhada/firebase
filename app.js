// Initialize Firebase 
var config = {
  apiKey: "AIzaSyD0ASphjMDmf9GcbVbo1MuJhFZpQ0Exs3w",
  authDomain: "developer-4772e.firebaseapp.com",
  databaseURL: "https://developer-4772e.firebaseio.com",
  projectId: "developer-4772e",
  storageBucket: "developer-4772e.appspot.com",
  messagingSenderId: "629954280163",
  appId: "1:629954280163:web:c05227b6451215f7cf63d6",
  measurementId: "G-88RD5Z970R"
};
firebase.initializeApp(config);

const dbRef = firebase.database().ref();
const usersRef = dbRef.child('users');

const userListUI = document.getElementById("userList");
usersRef.on("child_added", snap => {
  let user = snap.val();
  let $li = document.createElement("li");
  $li.innerHTML = user.name;
  $li.setAttribute("child-key", snap.key);
  $li.addEventListener("click", userClicked); 
  userListUI.append($li);
});

function userClicked(e) {
  var userID = e.target.getAttribute("child-key");
  const userRef = dbRef.child('users/' + userID);
  const userDetailUI = document.getElementById("userDetail");
  userDetailUI.innerHTML = ""
  userRef.on("child_added", snap => {
    var $p = document.createElement("p");
    $p.innerHTML = snap.key + " - " + snap.val(); 
    userDetailUI.append($p);
  });
}