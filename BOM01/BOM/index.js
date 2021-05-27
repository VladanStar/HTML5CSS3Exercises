console.log("Hello World again!!!");

(function getall() {
  console.log("platform: ", window.navigator);
})();


(function getPlatform() {
    console.log("platform: ", window.navigator.platform);
})();

//getPlatform();
function browserVersion() {
  console.log("browser: ", window.navigator.appVersion);
}

browserVersion();

function browserCompany() {
  console.log("company:", window.navigator.vendor);
}
browserCompany();

function isOnline() {
  var status ="";
  if (window.navigator.onLine === true) {
    status = "status: online";
  } else {
    status = "status: offline";
  }
  return status;
}
console.log(isOnline());

function windowBrowserRes() {
  console.log("maxPossibile height: ", window.screen.height);
  console.log("maxPossiblie width: ", window.screen.width);
}
windowBrowserRes();

function maxPossibile() {
    console.log("curren height: ", window.screen.availHeight);
      console.log("current width: ", window.screen.availWidth);
}
maxPossibile();

///
(function getAllScreen() {
  console.log("platform: ", window.screen);
})();

(function getAllLocation() {
  console.log("platform: ", window.location);
})();
function domainName() {
  console.log("domain: ", window.location.hostname);
}
domainName();

function protocolName() {
  console.log("protocol: ", window.location.protocol);
}
protocolName();

function parametarsURL() {
    console.log("parametars one: ", window.location.origin);
    console.log("parameters two: ", window.location.pathname);
}
parametarsURL();

//  function reloadURL () {
//    window.location.reload();
//  }
//  reloadURL();

// function redirect (Vladan) {
//     window.location.replace(Vladan);
// }
// redirect('https://github.com/VladanStar');