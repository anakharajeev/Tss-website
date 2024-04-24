  function toggleTheme (){
      let theme = localStorage.getItem('theme');
      if (theme == 'light' || theme == ''|| theme==null) {
          document.documentElement.removeAttribute('data-theme',);
          localStorage.setItem('theme', 'light');
      } else {
          document.documentElement.setAttribute('data-theme','dark');
          localStorage.setItem('theme', 'dark');
          
      }
  }
  $(document).ready(function() {
    toggleTheme()
   
});


const checkbox = document.getElementById("checkboxdark");
checkbox.addEventListener('click', (e) => {
    let theme = localStorage.getItem('theme');    
    if (theme == 'light' || theme == '') {
        document.documentElement.setAttribute('data-theme', 'dark');
        localStorage.setItem('theme', 'dark');
    } else {
        document.documentElement.removeAttribute('data-theme');
        localStorage.setItem('theme', 'light');
    }
})