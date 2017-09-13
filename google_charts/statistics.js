  // Load the Visualization API and the corechart package.
  google.charts.load('current', {'packages':['corechart']});
  // Set a callback to run when the Google Visualization API is loaded.
  google.charts.setOnLoadCallback(drawChart);

  // Callback that creates and populates a data table,
  // instantiates the pie chart, passes in the data and
  // draws it.
  function drawChart() {
    var jsonData = $.ajax({
              url: "statistics.php",
              dataType: "json",
              async: false
              }).responseText;

    // Create the data table.
    var data = new google.visualization.DataTable(jsonData);
  /*  data.addColumn('string', 'Предмет');
    data.addColumn('number', 'Количество участников');
    data.addRows([
      ['Mushrooms', 3],
      ['Onions', 1],
      ['Olives', 1],
      ['Zucchini', 1],
      ['Pepperoni', 2]
    ]);
*/
    // Set chart options
    var options = {'title':'Количество участников по предметам',
                   'width':500,
                   'height':350,
                   'is3D': true,
                   'backgroundColor':{
                     'strokeWidth':2
                   }
                 };

    // Instantiate and draw our chart, passing in some options.
    var chart = new google.visualization.PieChart(document.getElementById("chart_div"));
    chart.draw(data, options);
  }
