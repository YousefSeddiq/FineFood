//admin side js
//myChart code
const labels = [ 
    'January',
    'February',
    'March',
    'April',
    'May',
    'June',
    'July',
    'August',
    'September',
    'October',
    'November',
    'December'
  ];
  
  const data = {
    labels: labels,
    datasets: [{
      label: 'Total Sale for 2022',
      backgroundColor: '#ff7800',
      borderColor: '#ff7800',
      data: [0, 10, 20, 30, 25, 45, 60, 50, 40, 90, 80],
    }]
  };
  
  const config = {
    type: 'line',
    data: data,
    options: {}
  };
  
  //dashboard boxes jquery code
  $(document).ready(function(){
  
    $(".dashboards").hover(function(){
      $(this).css('box-shadow', '1px 1px 10px 1px #888');
    },
    function(){
      $(this).css('box-shadow', '');
    });
  
  });
  //End of admin side js