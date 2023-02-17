

/**
 * --------------------
 *     Main Header - Dark Theme
 * --------------------
 */
const darkMode = document.querySelector(".dark-mode");
const themeToggler = document.querySelector(".theme-toggler");
        darkMode.addEventListener("click", () => {
        document.body.classList.toggle("dark-theme-variables")
                        ? (themeToggler.firstElementChild.className = "far fa-moon")
                        : (themeToggler.firstElementChild.className = "far fa-sun");
      });



/**
 * --------------------
 *      Sidebar Menus
 * --------------------
 */


document.querySelectorAll(".sidebar-sub-menus").forEach((menu)=>{
        menu.querySelector(".sidebar-menu-dropdown").onclick = (e) => {
                e.preventDefault();
                menu.querySelector(".sidebar-menu-dropdown .dropdown-icons").classList.toggle("active");

                const sidebarMenuDropdownContent = menu.querySelector(".sidebar-menu-dropdown-content");
                const sidebarMenuDropdownContentList = sidebarMenuDropdownContent.querySelectorAll("li");
                const activeHeight = sidebarMenuDropdownContentList[0].clientHeight * sidebarMenuDropdownContentList.length;
                sidebarMenuDropdownContent.classList.toggle("active");
                sidebarMenuDropdownContent.style.height = sidebarMenuDropdownContent.classList.contains("active") ? activeHeight + "px" : "0";
        }
});





      /**
 * --------------------
 *     Overlay & Mobile Toggle
 * --------------------
 */

       let overlay = document.querySelector('.overlay')
       let sidebar = document.querySelector('.sidebar')

       document.querySelector('#mobile-toggle').onclick = () => {
           sidebar.classList.toggle('active')
           overlay.classList.toggle('active')
       }

       document.querySelector('#sidebar-close').onclick = () => {
           sidebar.classList.toggle('active')
           overlay.classList.toggle('active')
       }







/**
 * --------------------
 *      Customer Chart
 * --------------------
 */

var chart_options = {
        series: [{
        name: 'offline',
        data: [40, 70, 20, 90, 36, 80, 30, 91, 60]
      },
      {
        defer: true
      },
      {
        name: "Online",
        data: [20, 30, 10, 20, 16, 40, 20, 51, 10]
    }
],
        chart: {
        type: 'area',
        height: 350,
        zoom: {
          type: 'x',
          enabled: true,
          autoScaleYaxis: true
        },
        toolbar: {
          autoSelected: 'zoom'
        }
      },
      stroke: {
        curve: 'smooth'
    },
    legend: {
        position: 'top'
    },
      dataLabels: {
        enabled: false
      },
      markers: {
        size: 0,
      },
      title: {
        text: 'Customer Movement',
        align: 'left'
      },
      fill: {
        type: 'gradient',
        gradient: {
          shadeIntensity: 1,
          inverseColors: false,
          opacityFrom: 0.5,
          opacityTo: 0,
          stops: [0, 90, 100]
        },
      },
      yaxis: {
        labels: {
          formatter: function (val) {
            return (val / 1000000).toFixed(2);
          },
        },
        title: {
          text: 'Orders'
        },
      },
      xaxis: {
        categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct','Nov','Dec']
      },
      tooltip: {
        shared: false,
        y: {
          formatter: function (val) {
            return (val / 1000000).toFixed(2)
          }
        }
      }
      };
      var myChart = new ApexCharts(document.querySelector("#customer-chart"), chart_options);
      myChart.render();

