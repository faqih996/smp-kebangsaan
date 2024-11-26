/*!

=========================================================
* Argon Dashboard Tailwind - v1.0.1
=========================================================

* Product Page: https://www.creative-tim.com/product/argon-dashboard-tailwind
* Copyright 2022 Creative Tim (https://www.creative-tim.com)

* Coded by www.creative-tim.com

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

*/
// Generate URLs using Laravel's route helper
var dashboardUrl = "{{ route('dashboard') }}"; // URL for the dashboard
var teacherUrl = "{{ route('teacher') }}"; // URL for the teacher page
var articleUrl = "{{ route('article') }}"; // URL for the article page

// Get the current path from the URL
var currentPath = window.location.pathname;

// Determine the current page based on the URL
var page = currentPath.split("/").pop().split(".")[0]; // Get the last segment of the path

// Set default page if no valid page is found
if (!page || (page !== 'dashboard' && page !== 'teacher' && page !== 'article')) {
    page = 'dashboard'; // Default to 'dashboard' if not a valid page
}

// Log the current page and URLs for debugging
console.log('Current Page:', page);
console.log('Dashboard URL:', dashboardUrl);
console.log('Teacher URL:', teacherUrl);
console.log('Article URL:', articleUrl);

// You can use the URLs to navigate or perform actions
// For example, redirecting to the dashboard if needed
function goToDashboard() {
    window.location.href = dashboardUrl;
}

loadStylesheet(to_build + "../../css/admin/perfect-scrollbar.css");
loadJS(to_build + "../../js/admin/perfect-scrollbar.js" , true);

if (document.querySelector("[slider]")) {
  loadJS(to_build + "../../js/admin/carousel.js", true);
}

if (document.querySelector("nav [navbar-trigger]")) {
  loadJS(to_build + "../../js/admin/navbar-collapse.js", true);
}

if (document.querySelector("[data-target='tooltip']")) {
  loadJS(to_build + "../../js/admin/tooltips.js", true);
  loadStylesheet(to_build + "../../js/admin/tooltips.js");
}

if (document.querySelector("[nav-pills]")) {
  loadJS(to_build + "../../js/admin/nav-pills.js", true);
}

if (document.querySelector("[dropdown-trigger]")) {
  loadJS(to_build + "../../js/admin/dropdown.js", true);

}

if (document.querySelector("[fixed-plugin]")) {
  loadJS(to_build + "../../js/admin/fixed-plugin.js", true);
}

if (document.querySelector("[navbar-main]") || document.querySelector("[navbar-profile]")) {
  if(document.querySelector("[navbar-main]")){
    loadJS(to_build + "../../js/admin/navbar-sticky.js", true);
  }
  if (document.querySelector("aside")) {
    loadJS(to_build + "../../js/admin/sidenav-burger.js", true);
  }
}

if (document.querySelector("canvas")) {
  loadJS(to_build + "../../js/admin/charts.js", true);
}

if (document.querySelector(".github-button")) {
  loadJS("{{ url('https://buttons.github.io/buttons.js') }}", true);
}

function loadJS(FILE_URL, async) {
  let dynamicScript = document.createElement("script");

  dynamicScript.setAttribute("src", FILE_URL);
  dynamicScript.setAttribute("type", "text/javascript");
  dynamicScript.setAttribute("async", async);

  document.head.appendChild(dynamicScript);
}

function loadStylesheet(FILE_URL) {
  let dynamicStylesheet = document.createElement("link");

  dynamicStylesheet.setAttribute("href", FILE_URL);
  dynamicStylesheet.setAttribute("type", "text/css");
  dynamicStylesheet.setAttribute("rel", "stylesheet");

  document.head.appendChild(dynamicStylesheet);
}
