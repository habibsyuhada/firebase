// Your web app's Firebase configuration
var firebaseConfig = {
  apiKey: "AIzaSyD0ASphjMDmf9GcbVbo1MuJhFZpQ0Exs3w",
  authDomain: "developer-4772e.firebaseapp.com",
  databaseURL: "https://developer-4772e.firebaseio.com",
  projectId: "developer-4772e",
  storageBucket: "developer-4772e.appspot.com",
  messagingSenderId: "629954280163",
  appId: "1:629954280163:web:c05227b6451215f7cf63d6",
  measurementId: "G-88RD5Z970R"
};
// Initialize Firebase
firebase.initializeApp(firebaseConfig);
firebase.analytics();

const dbRef = firebase.database().ref();
const usersRef = dbRef.child('users');

readUserData();

function readUserData(argument) {
  const userListUI = document.getElementById("userList");
  usersRef.on("child_added", snap => {
    let user = snap.val();
    let $li = document.createElement("li");
    $li.innerHTML = user.name;
    $li.setAttribute("child-key", snap.key);
    $li.addEventListener("click", userClicked); 
    userListUI.append($li);
  });
}

function userClicked(e) {
  var userID = e.target.getAttribute("child-key");
  const userRef = dbRef.child('users/' + userID);
  const userDetailUI = document.getElementById("userDetail");
  userDetailUI.innerHTML = ""
  userRef.on("child_added", snap => {
    // edit icon
    let editIconUI = document.createElement("span");
    editIconUI.class = "edit-user";
    editIconUI.innerHTML = " ✎";
    editIconUI.setAttribute("userid", key);
    editIconUI.addEventListener("click", editButtonClicked)

    // delete icon
    let deleteIconUI = document.createElement("span");
    deleteIconUI.class = "delete-user";
    deleteIconUI.innerHTML = " ☓";
    deleteIconUI.setAttribute("userid", key);
    deleteIconUI.addEventListener("click", deleteButtonClicked)
      
    var $p = document.createElement("p");
    $p.innerHTML = snap.key + " - " + snap.val(); 
    $p.append(editIconUI);
    $p.append(deleteIconUI);
    userDetailUI.append($p);
  });
}

const addUserBtnUI = document.getElementById("add-user-btn"); 
addUserBtnUI.addEventListener("click", addUserBtnClicked);

function addUserBtnClicked() {
  const usersRef = dbRef.child('users');
  const addUserInputsUI = document.getElementsByClassName("user-input");
  let newUser = {};
  // loop through View to get the data for the model 
  for (let i = 0, len = addUserInputsUI.length; i < len; i++) {
    let key = addUserInputsUI[i].getAttribute('data-key');
    let value = addUserInputsUI[i].value;
    newUser[key] = value;
  }
  usersRef.push(newUser, function () {
    console.log("data has been inserted");
  })

}