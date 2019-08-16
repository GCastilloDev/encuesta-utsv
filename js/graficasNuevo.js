function graficaPreguntas(nombre, pregunta, mb, b, r, m, p, na){

    document.getElementById("titulo").innerText = nombre;
    document.getElementById("pregunta").innerText = pregunta;


    google.charts.load("current", {packages:['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ["Element", "Cantidad", { role: "style" } ],
        ["MB", mb, "#b87333"],
        ["B", b, "silver"],
        ["R", r, "gold"],
        ["M", m, "color: #e5e4e2"],
        ["P", p, "color: #e5e4e2"],
        ["NA", na, "color: #e5e4e2"]
      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
        //title: nombre,
        width: '100%',
        height: 500,
        bar: {groupWidth: "95%"},
        legend: { position: "none" },
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("chart_div"));
      chart.draw(view, options);
  }
}

function graficaPreguntaGenero(nombre, pregunta, mujer, hombre){

  document.getElementById("titulo").innerText = nombre;
  document.getElementById("pregunta").innerText = pregunta;


  google.charts.load("current", {packages:['corechart']});
  google.charts.setOnLoadCallback(drawChart);
  function drawChart() {
    var data = google.visualization.arrayToDataTable([
      ["Element", "Cantidad", { role: "style" } ],
      ["MUJER", mujer, "#b87333"],
      ["HOMBRE", hombre, "color: #e5e4e2"]
    ]);

    var view = new google.visualization.DataView(data);
    view.setColumns([0, 1,
                     { calc: "stringify",
                       sourceColumn: 1,
                       type: "string",
                       role: "annotation" },
                     2]);

    var options = {
      //title: nombre,
      width: '100%',
      height: 500,
      bar: {groupWidth: "95%"},
      legend: { position: "none" },
    };
    var chart = new google.visualization.ColumnChart(document.getElementById("chart_div"));
    chart.draw(view, options);
}
}

function graficaPreguntaDiecinueve(nombre, pregunta, mujer, hombre){

  document.getElementById("titulo").innerText = nombre;
  document.getElementById("pregunta").innerText = pregunta;


  google.charts.load("current", {packages:['corechart']});
  google.charts.setOnLoadCallback(drawChart);
  function drawChart() {
    var data = google.visualization.arrayToDataTable([
      ["Element", "Cantidad", { role: "style" } ],
      ["Público", mujer, "#b87333"],
      ["Privado", hombre, "color: #e5e4e2"]
    ]);

    var view = new google.visualization.DataView(data);
    view.setColumns([0, 1,
                     { calc: "stringify",
                       sourceColumn: 1,
                       type: "string",
                       role: "annotation" },
                     2]);

    var options = {
      //title: nombre,
      width: '100%',
      height: 500,
      bar: {groupWidth: "95%"},
      legend: { position: "none" },
    };
    var chart = new google.visualization.ColumnChart(document.getElementById("chart_div"));
    chart.draw(view, options);
}
}

function graficaPreguntaVeinticinco(nombre, pregunta, p1, p2, p3, p4, p5){

  document.getElementById("titulo").innerText = nombre;
  document.getElementById("pregunta").innerText = pregunta;


  google.charts.load("current", {packages:['corechart']});
  google.charts.setOnLoadCallback(drawChart);
  function drawChart() {
    var data = google.visualization.arrayToDataTable([
      ["Element", "Cantidad", { role: "style" } ],
      ["Hasta 10 horas", p1, "#b87333"],
      ["11 a 20 horas", p2, "color: #e5e4e2"],
      ["21 a 30 horas", p3, "#b87333"],
      ["31 a 40 horas", p4, "color: #e5e4e2"],
      ["Más de 40 horas", p5, "color: #e5e4e2"]
    ]);

    var view = new google.visualization.DataView(data);
    view.setColumns([0, 1,
                     { calc: "stringify",
                       sourceColumn: 1,
                       type: "string",
                       role: "annotation" },
                     2]);

    var options = {
      //title: nombre,
      width: '100%',
      height: 500,
      bar: {groupWidth: "95%"},
      legend: { position: "none" },
    };
    var chart = new google.visualization.ColumnChart(document.getElementById("chart_div"));
    chart.draw(view, options);
}
}

function graficaPreguntaOcho(nombre, pregunta, p1, p2, p3, p4, p5, p6, p7){

  document.getElementById("titulo").innerText = nombre;
  document.getElementById("pregunta").innerText = pregunta;


  google.charts.load("current", {packages:['corechart']});
  google.charts.setOnLoadCallback(drawChart);
  function drawChart() {
    var data = google.visualization.arrayToDataTable([
      ["Element", "Cantidad", { role: "style" } ],
      ["Ya estabas trabajando y continuaste haciéndolo", p1, "#b87333"],
      ["Te contrataron donde hiciste la estadía", p2, "color: #e5e4e2"],
      ["Menos de 3 meses", p3, "#b87333"],
      ["De 3 a 6 meses", p4, "color: #e5e4e2"],
      ["Más de 6 meses a un año", p5, "color: #e5e4e2"],
      ["Más de un año", p6, "#b87333"],
      ["No has empezado a trabajar", p7, "color: #e5e4e2"]
    ]);

    var view = new google.visualization.DataView(data);
    view.setColumns([0, 1,
                     { calc: "stringify",
                       sourceColumn: 1,
                       type: "string",
                       role: "annotation" },
                     2]);

    var options = {
      //title: nombre,
      width: '100%',
      height: 500,
      bar: {groupWidth: "95%"},
      legend: { position: "none" },
    };
    var chart = new google.visualization.ColumnChart(document.getElementById("chart_div"));
    chart.draw(view, options);
}
}

function graficaPreguntaNueve(nombre, pregunta, p1, p2, p3, p4, p5, p6){

  document.getElementById("titulo").innerText = nombre;
  document.getElementById("pregunta").innerText = pregunta;


  google.charts.load("current", {packages:['corechart']});
  google.charts.setOnLoadCallback(drawChart);
  function drawChart() {
    var data = google.visualization.arrayToDataTable([
      ["Element", "Cantidad", { role: "style" } ],
      ["No he encontrado empleo con el salario que pretendo", p1, "#b87333"],
      ["No he encontrado empleo en el área de mi formación profesional", p2, "color: #e5e4e2"],
      ["No he encontrado empleo de ningún tipo", p3, "#b87333"],
      ["Curso licenciatura/ingeniería en otra Institución de Educación Superior", p4, "color: #e5e4e2"],
      ["Por situaciones médicas", p5, "color: #e5e4e2"],
      ["Me ocupo de las labores del hogar", p6, "#b87333"],
      ["No he buscado empleo", p7, "color: #e5e4e2"]
    ]);

    var view = new google.visualization.DataView(data);
    view.setColumns([0, 1,
                     { calc: "stringify",
                       sourceColumn: 1,
                       type: "string",
                       role: "annotation" },
                     2]);

    var options = {
      //title: nombre,
      width: '100%',
      height: 500,
      bar: {groupWidth: "95%"},
      legend: { position: "none" },
    };
    var chart = new google.visualization.ColumnChart(document.getElementById("chart_div"));
    chart.draw(view, options);
}
}


function graficaPreguntaVeintiseis(nombre, pregunta, p1, p2, p3, p4, p5, p6){

  document.getElementById("titulo").innerText = nombre;
  document.getElementById("pregunta").innerText = pregunta;


  google.charts.load("current", {packages:['corechart']});
  google.charts.setOnLoadCallback(drawChart);
  function drawChart() {
    var data = google.visualization.arrayToDataTable([
      ["Element", "Cantidad", { role: "style" } ],
      ["menos de $4,802", p1, "#b87333"],
      ["$4,803 a $9,604", p2, "color: #e5e4e2"],
      ["$9,605 a $14,407", p3, "#b87333"],
      ["$14,408 a $19,209", p4, "color: #e5e4e2"],
      ["$19,210 a $24,012", p5, "color: #e5e4e2"],
      ["más de $24,012", p6, "#b87333"]
    ]);

    var view = new google.visualization.DataView(data);
    view.setColumns([0, 1,
                     { calc: "stringify",
                       sourceColumn: 1,
                       type: "string",
                       role: "annotation" },
                     2]);

    var options = {
      //title: nombre,
      width: '100%',
      height: 500,
      bar: {groupWidth: "95%"},
      legend: { position: "none" },
    };
    var chart = new google.visualization.ColumnChart(document.getElementById("chart_div"));
    chart.draw(view, options);
}
}