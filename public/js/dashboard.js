/** Side Menu Toggle  */
function dashToggle() {
    const dashTabs = document.querySelectorAll('.menu-list a');
    const dashContents = document.querySelectorAll('.dash-content');
  
    if(location.hash) {
        const dashTab = document.querySelector(`[href="${location.hash}"]`);
        const dashContent = document.querySelector(location.hash);
  
        dashTab.classList.add('is-active');
        dashContent.classList.add('display-dash-content');
    } else {
        if (dashTabs[0]) {
        dashTabs[0].classList.add('is-active');
        dashContents[0].classList.add('display-dash-content');
        }
    }
  
    window.addEventListener('hashchange', () => {
        const tabName = location.hash.split('#')[1];
        const dashTab = document.querySelector(`[href="#${tabName}"]`);
        const dashContent = document.querySelector(`#${tabName}`);
  
        // loop through all activated tab and hide them
        for (let i = dashContents.length - 1; i >= 0; i--) {
            dashContents[i].classList.remove('display-dash-content');
        }
        for (let i = dashTabs.length - 1; i >= 0; i--) {
            dashTabs[i].classList.remove('is-active');
        }
  
        // activate the selected tab
        dashTab.classList.add('is-active');
        dashContent.classList.add('display-dash-content');
    });
  }
  
  window.onload = dashToggle;

// Javascript to make the side menu do the fancy shit
const accordion = document.getElementsByClassName('has-submenu');

for(let i = 0; i < accordion.length; i++) {
  accordion[i].onclick = function () {
    this.classList.toggle('is-active');
    
    const submenu = this.nextElementSibling;
    
    if(submenu.style.maxHeight){
      //Close menu
      // console.log('tutup');
      submenu.style.maxHeight = null;
      submenu.style.marginTop = null;
      submenu.style.marginBottom = null;
    }else {
      //Open menu
      // console.log('Open');
      submenu.style.maxHeight = submenu.scrollHeight + "px";
      submenu.style.marginTop = "0.2em";
      submenu.style.marginBottm = "0.22em";
    }
  }
}