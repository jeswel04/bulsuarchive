//  ============== DEPARTMENT CHART ============== 


const departmentListofColor = ['#0263FF','#FF7723','#8E30FF','#6DF817','#F815A3','#C46B6B'];
const departmentBackgroundcolor = [];
//---------DEPARTMENT-------------//
$(document).ready(function(){
    $.ajax({
        url:"../app/controllers/ajax.php",
        method:"GET",
        data:{action:'fetch'},
        dataType:"JSON",
        success:function(data)
        {
            console.log(data);
            var total = [];
            var department_code =[];
            for(i =0 ; i< data.length; i++){
                total.push(data[i].total);
                department_code.push(data[i].department_code);
            }
            for (i=0; i < data.length; i++) {    
                var departmentLegendContainer = document.createElement("div");
                var departmentLegend = document.createElement("label");
                var departmentlabel = document.createElement("span");        
                var departmentLegendContent = document.createTextNode("");
                departmentLegend.appendChild(departmentLegendContent);
                departmentLegend.style.backgroundColor = departmentListofColor[i];
                departmentLegendContainer.appendChild(departmentLegend);
                departmentLegendContainer.appendChild(departmentlabel).innerHTML += department_code[i] + " Department";
                departmentList.appendChild(departmentLegendContainer);      
            } 

            var chart = $('#departmentChart');

            var data1 = {
                datasets: [
                    {
                        data: total,
                        backgroundColor:['#0263FF','#FF7723','#8E30FF','#6DF817','#F815A3','#C46B6B'],
                        borderColor:['transparent'], 
                        cutout: '80%'
                    }
                ]
            };
            var chart1 = new Chart(chart,{
                    type:"doughnut",
                    data:data1
            });
        }
    })

})

// ========== DEPARTMENT LEGEND =============== 
const departmentList = document.getElementById("department-list");


//--------BAM CHART-----------//
const bamListofColor = ['#0263FF','#FF7723','#8E30FF','#6DF817','#F815A3','#C46B6B'];
$(document).ready(function(){
    $.ajax({
        url:"../app/controllers/bam.php",
        method:"GET",
        data:{action:'fetch'},
        dataType:"JSON",
        success:function(data)
        {
            console.log(data);
            var total = [];
            var course_description =[];
            for(i =0 ; i< data.length; i++){
                total.push(data[i].total);
                course_description.push(data[i].course_description);
            }
            for (i=0; i < data.length; i++) {    
                var bamLegendContainer = document.createElement("div");
                var bamLegend = document.createElement("label");
                var departmentLabel = document.createElement("span");        
                var departmentLegendContent = document.createTextNode("");
                bamLegend.appendChild(departmentLegendContent);
                bamLegend.style.backgroundColor = bamListofColor[i];
                bamLegendContainer.appendChild(bamLegend);
                bamLegendContainer.appendChild(departmentLabel).innerHTML += course_description[i];
                bamList.appendChild(bamLegendContainer);      
            }

            var chart = $('#bamChart');

            var data1 = {
                datasets: [
                    {
                        data: total,
                        backgroundColor:['#0263FF','#FF7723','#8E30FF','#6DF817','#F815A3','#C46B6B'],
                        borderColor:['transparent'], 
                        cutout: '80%'
                    }
                ]
            };
            var chart1 = new Chart(chart,{
                    type:"doughnut",
                    data:data1
            });
        }
    })

})
const bamList = document.getElementById("bam-list");



//---------GATE DEPARTMENT-----------//
const gateListofColor = ['#0263FF','#FF7723','#8E30FF','#6DF817','#F815A3','#C46B6B'];
$(document).ready(function(){
    $.ajax({
        url:"../app/controllers/gate.php",
        method:"GET",
        data:{action:'fetch'},
        dataType:"JSON",
        success:function(data)
        {
            console.log(data);
            var total = [];
            var course_description =[];
            for(i =0 ; i< data.length; i++){
                total.push(data[i].total);
                course_description.push(data[i].course_description);
            }
            for (i=0; i < data.length; i++) {    
                var gateLegendContainer = document.createElement("div");
                var gateLegend = document.createElement("label");
                var departmentLabel = document.createElement("span");        
                var departmentLegendContent = document.createTextNode("");
                gateLegend.appendChild(departmentLegendContent);
                gateLegend.style.backgroundColor = gateListofColor[i];
                gateLegendContainer.appendChild(gateLegend);
                gateLegendContainer.appendChild(departmentLabel).innerHTML += course_description[i];
                gateList.appendChild(gateLegendContainer);      
            }

            var chart = $('#gateChart');

            var data1 = {
                datasets: [
                    {
                        data: total,
                        backgroundColor:['#0263FF','#FF7723','#8E30FF','#6DF817','#F815A3','#C46B6B'],
                        borderColor:['transparent'], 
                        cutout: '80%'
                    }
                ]
            };
            var chart1 = new Chart(chart,{
                    type:"doughnut",
                    data:data1
            });
        }
    })

})
const gateList = document.getElementById("gate-list");
//  ============== GATE CHART ============== 


//  ============== IIT CHART ==============  
const iitListofColor = ['#0263FF','#FF7723','#8E30FF','#6DF817','#F815A3','#C46B6B'];
$(document).ready(function(){
    $.ajax({
        url:"../app/controllers/iit.php",
        method:"GET",
        data:{action:'fetch'},
        dataType:"JSON",
        success:function(data)
        {
            console.log(data);
            var total = [];
            var course_description =[];
            for(i =0 ; i< data.length; i++){
                total.push(data[i].total);
                course_description.push(data[i].course_description);
            }
            for (i=0; i < data.length; i++) {    
                var iitLegendContainer = document.createElement("div");
                var iitLegend = document.createElement("label");
                var departmentLabel = document.createElement("span");        
                var departmentLegendContent = document.createTextNode("");
                iitLegend.appendChild(departmentLegendContent);
                iitLegend.style.backgroundColor = iitListofColor[i];
                iitLegendContainer.appendChild(iitLegend);
                iitLegendContainer.appendChild(departmentLabel).innerHTML += course_description[i];
                iitList.appendChild(iitLegendContainer);      
            }

            var chart = $('#iitChart');

            var data1 = {
                datasets: [
                    {
                        data: total,
                        backgroundColor:['#0263FF','#FF7723','#8E30FF','#6DF817','#F815A3','#C46B6B'],
                        borderColor:['transparent'], 
                        cutout: '80%'
                    }
                ]
            };
            var chart1 = new Chart(chart,{
                    type:"doughnut",
                    data:data1
            });
        }
    })

})
const iitList = document.getElementById("iit-list");


/*const iitChart = document.getElementById('iitChart').getContext('2d');
const iitData = [30,20,15, 5, 30];

const iitBackgroundcolor = [];

for(i = 0;i < gateData.length; i++) {
    iitBackgroundcolor[i] = iitListofColor[i];       
}

const iChart = new Chart(iitChart, {
    type: 'doughnut',
    data: {        
        datasets: [{            
            data: iitData,
            backgroundColor: iitBackgroundcolor,
            borderColor: ['transparent'],
            cutout:'80%',            
        }]
    },
     options: {
        plugins: {
            tooltip: {                
                 callbacks: {
                    
                }
            }
        }
    }
});

// ========== BAM LEGEND =============== 

const listofIIT = [
    "Bachelor of  Secondary EducationMajor in Sciences", 
    "Bachelor of  Secondary EducationMajor in English",
    "Bachelor of  Secondary EducationMajor in Mathematics",
    "Bachelor of  Secondary Education Major in Filipino",
    "Bachelor of  Secondary Education Major in Social Studies",
];*/

/*  SAMPLE FOR LEGEND
var colorList1 = {t1: 'red', t2: 'green', t3: 'blue'};

colorize = function(colorList) {
    var container = document.getElementById('container');
  
    for (var key in colorList) {
        var boxContainer = document.createElement("DIV");
        var box = document.createElement("DIV");
        var label = document.createElement("SPAN");

        label.innerHTML = key;
        box.className = "box";
        box.style.backgroundColor = colorList[key];

        boxContainer.appendChild(box);
        boxContainer.appendChild(label);

        container.appendChild(boxContainer);

   }
}

colorize(colorList);
 */
/*$(document).ready(function(){

        $.ajax({
            url:"/bulsu v1/app/controllers/Dashboard.php",
            method:"POST",
            dataType:"JSON",
            success:function(data){
                alert(data);
                var department = [];
                var total = [];
                var color = [];

                for(var ctr = 0; ctr < data.length; ctr++){
                    department.push(data[count].language);
                    total.push(data[count].total);
                    color.push(data[count].color);
                    console.log(department.push(data[count].language));
                }
                
                var chart_data = {
                    label:department,
                    datasets:[{
                        label: 'Department',
                        color:'#fff',
                        data:total
                    }]
                };
                var options = {
                    responsive:true,
                    scales:{
                        yAxes:[{
                            ticks:{
                                min:0
                            }
                        }]
                    }
                };
                var group_chart1 = $('#departmentChart');
                var graph1 = new Chart(group_chart1,{
                    type:"doughnut",
                    data:chart_data,
                    options:options
                });
            }
        });
});*/