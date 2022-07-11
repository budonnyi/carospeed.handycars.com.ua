jQuery(function ($) {
    $(document).ready(function () {
        if(typeof chartData != 'undefined'){
            if(chartData.length > 0){
                DrawCharts(chartData);
            }
        }
    });
});
$( window ).resize(function() {
    if(typeof chartData != 'undefined'){
        if(chartData.length > 0){
            ClearChart(chartData);
            DrawCharts(chartData);
        }
    }
});
function DrawCharts(chartData){
    for(let i = 0; i < chartData.length; i++){
        if(chartData[i].element){
            if(chartData[i].type == 'radialbar'){
                RadilaBar  = $(chartData[i].element).radialBar({
                    data: chartData[i].data,
                    width: "375",
                    height: "375",
                    tooltip: true,
                    padding: 10,
                });
                drawRadialLegend($(chartData[i].element), chartData[i].data);
            }
            if(chartData[i].type == 'simpleBar'){
                drawSimpleBar($(chartData[i].element), chartData[i].data);
            }
            if(chartData[i].type == 'verticalTinyLine'){
                drawTinyLineChart($(chartData[i].element), chartData[i].data);
            }
            if(chartData[i].type == 'verticaclRoundedBars'){
                drawVerticalRoundedBarChart($(chartData[i].element), chartData[i].data);
            }
            if(chartData[i].type == 'radialBars'){
                drawRadialBars($(chartData[i].element), chartData[i].data);
                drawRadialLegend($(chartData[i].element), chartData[i].data);
            }
            if(chartData[i].type == 'pieSimple'){
                drawPieSimple(chartData[i].element, chartData[i].data);
            }
            if(chartData[i].type == 'dougnatSimple'){
                drawDoughnatSimple(chartData[i].element, chartData[i].data);
                DrawDougnatLegend(chartData[i].element, chartData[i].data);
            }
        }
    }
}
function drawVerticalRoundedBarChart (element, data){
    if($(element).length==1 && data.length > 0){
        var total = 0;
        for (let i = 0; i < data.length; i++) {
            total += parseInt(data[i].progress);
        }
        var percentRation = 0;
        if(total > 0) {
            percentRation = 100/total;
        }
        var chartHtml = 
            '<div class="vertical-rounded-bars">';
        for (let i = 0; i < data.length; i++) {
            let percent = Math.round(parseInt(data[i].progress)*percentRation);
            let percentMinus = 100 - percent;
            let addCLass = '';
            if(percent<10){
                addCLass += ' low-percent ';
            }
            if(percent>80){
                chartHtml += 
                '<div class="item-wrapper">'
                +'    <div class="item-box">'
                +'      <div class="perecent" style="height: ' + percentMinus + '%;">'
                +'      </div>'
                +'      <div class="text with-percent ' + addCLass +'"'
                +'          style="background: ' + data[i].background +';'
                +'              height: '+ percent +'%;"'
                +'          >'
                +'          <div class="percent-text">'
                +'              ' + percent + ' %'
                +'          </div>'
                +'          <div class="label">'
                +                data[i].labelText
                +'          </div>'
                +'          <div class="line-tooltip">'
                +'              <div class="tip-cont">'
                +'                  <div class="value">'+ data[i].progress + 'шт</div>'
                +'              </div>'
                +'          </div>'
                +'      </div>'
                +'  </div>'
                +'</div>';

            } else {
                chartHtml += 
                '<div class="item-wrapper">'
                +'    <div class="item-box">'
                +'      <div class="perecent" style="height: ' + percentMinus + '%;">'
                +'          <div class="percent-text">'
                +'              ' + percent + ' %'
                +'          </div>'
                +'      </div>'
                +'      <div class="text ' + addCLass +'"'
                +'          style="background: ' + data[i].background +';'
                +'              height: '+ percent +'%;"'
                +'          >'
                +'          <div class="label">'
                +                data[i].labelText
                +'          </div>'
                +'          <div class="line-tooltip">'
                +'              <div class="tip-cont">'
                +'                  <div class="value">'+ data[i].progress + 'шт</div>'
                +'              </div>'
                +'          </div>'
                +'      </div>'
                +'  </div>'
                +'</div>';
            }
        }
        chartHtml += 
            +'</div>';
        $(chartHtml).appendTo($(element));
        let items = $(element).find('.item-box');
        for (let i = 0; i < items.length; i++) {
            if($(items[i]).find('.label').innerHeight() > $(items[i]).find('.text').innerHeight()) {
                $(items[i]).find('.text').addClass('low-percent');
            }
        }
    }
}
function drawTinyLineChart (element, data){
    if($(element).length==1 && data.length > 0){
        var total = 0;
        for (let i = 0; i < data.length; i++) {
            total += parseInt(data[i].progress);
        }
        var percentRation = 0;
        if(total > 0) {
            percentRation = 100/total;
        }
        var chartHtml = 
            '<div class="vertical-tiny-lines">'
            +'    <div class="scale-list">'
            +'      <div class="scale-item">  100% </div>'
            +'      <div class="scale-item"> 90% </div>'
            +'      <div class="scale-item"> 80% </div>'
            +'      <div class="scale-item"> 70% </div>'
            +'      <div class="scale-item"> 60% </div>'
            +'      <div class="scale-item"> 50% </div>'
            +'      <div class="scale-item"> 40% </div>'
            +'      <div class="scale-item"> 30% </div>'
            +'      <div class="scale-item"> 20% </div>'
            +'      <div class="scale-item"> 10% </div>'
            +'  </div>'
            +'  <div class="lines-list-responsive">'
            +'  <div class="lines-list">';
        for (let i = 0; i < data.length; i++) {
            let percent = Math.round(parseInt(data[i].progress)*percentRation);
            chartHtml += 
                '<div class="line-item">'
                +'    <div class="line-wrapper">'
                +'      <div class="line-value" style="height: ' + percent +'%;">'
                +'          <div class="line-tooltip">'
                +'              <div class="tip-cont">'
                +'                  <div class="value">' + percent + '% / ' + data[i].progress + 'шт</div>'
                +'              </div>'
                +'          </div>'
                +'      </div>'
                +'  </div>'
                +'  <div class="line-label">'
                + data[i].labelText
                +'  </div>'
                +'</div>';
        }
        chartHtml += 
            '  </div>'
            '  </div>'
            +'</div>';
        $(chartHtml).appendTo($(element))
    }
}
function drawRadialBars (element, data){
    if($(element).length==1 && data.length > 0){
        var total = 0;
        for (let i = 0; i < data.length; i++) {
            total += parseInt(data[i].progress);
        }
        var percentRation = 0;
        if(total > 0) {
            percentRation = 100/total;
        }
        var chartHtml = 
            '<div class="vertical-radial-bars">'
            +'    <div class="scale-list">'
            +'      <div class="scale-item">  100% </div>'
            +'      <div class="scale-item"> 90% </div>'
            +'      <div class="scale-item"> 80% </div>'
            +'      <div class="scale-item"> 70% </div>'
            +'      <div class="scale-item"> 60% </div>'
            +'      <div class="scale-item"> 50% </div>'
            +'      <div class="scale-item"> 40% </div>'
            +'      <div class="scale-item"> 30% </div>'
            +'      <div class="scale-item"> 20% </div>'
            +'      <div class="scale-item"> 10% </div>'
            +'  </div>'
            +'  <div class="lines-list">';
        for (let i = 0; i < data.length; i++) {
            let percent = Math.round(parseInt(data[i].progress)*percentRation);
            chartHtml += 
                '<div class="line-item">'
                +'    <div class="line-wrapper">'
                +'      <div class="line-value" style="height: ' + percent +'%;background: '+ data[i].background + '">'
                +'          <div class="line-tooltip">'
                +'              <div class="tip-cont">'
                +'                  <div class="value">' + percent + '% / ' + data[i].progress + 'шт</div>'
                +'              </div>'
                +'          </div>'
                +'      </div>'
                +'  </div>'
                +'</div>';
        }
        chartHtml += 
            '  </div>'
            +'</div>';
        $(chartHtml).appendTo($(element))
    }
}
function drawDoughnatSimple(element, data){
    if($(element).length==1 && data.length > 0){
        var newData = data;
        for (let i = 0; i < data.length; i++) {
            newData[i].title = data[i].labelText;
            newData[i].color = data[i].background;
            newData[i].value = parseInt(data[i].progress);
        }
        if(newData) {
            $(element).drawDoughnutChart(newData);
        }
    }
}
function DrawDougnatLegend(element, data){
    if($(element).length==1 && data.length > 0){
        let legend = $(element).parents('.dougnat').find('.legend');
        let legendHtml = '<div class="legend-list">';
        for (let i = 0; i < data.length; i++) {
            legendHtml += 
                '<div class="legend-item">'
                +'    <div class="square" style="background: ' + data[i].background +';"></div>'
                +'    <div class="label">' + data[i].labelText +'</div>'
                +'</div>';
        }
        legendHtml += '</div>';
        $(legendHtml).appendTo(legend);
    }
}
function drawPieSimple(element, data){
    if($(element).length==1 && data.length > 0){
        var newData = new Array();
        var total = 0;
        for (let i = 0; i < data.length; i++) {
            var temp = {
                title: data[i].labelText,
                color: data[i].background,
                value: parseInt(data[i].progress)
            }
            total = total + parseInt(data[i].progress);
            newData.push(temp);
        }
        if(newData[0].title !== '5') {
            newData.reverse();
        }
        if(newData) {
            if(total > 0) {
                $(element).drawPieChart(newData);
                drawPieSimpleLegend2(element, data);
            }
        }
    }
}
function drawPieSimpleLegend(element, data){
    let legend = $(element).parents('.circle-chart-wrapper').find('.legend-wrapper')
    if(legend.length > 0){
        let addClass = " ";
        if(data.length < 4){
            addClass += " full-width";
        }
        let legendHtml = '<div class="legend-list ' + addClass +'">';
        for (let index = 0; index < data.length; index++) {
            legendHtml += 
            '<div class="legend-item">'
            +'    <div class="square" style="background: ' + data[index].background + ';"></div>'
            +'  <div class="label">'
            +'      ' + data[index].labelText
            +'  </div>'
            +'</div>';
        }
        legendHtml += '</div>';
        $(legendHtml).appendTo(legend);
    }
}
function drawPieSimpleLegend2(element, data){
    let legend = $(element).parents('.pieSimple-flex').find('.pieSimple-legend');
    if(legend.length > 0){
        let legendHtml = '<div class="legend-list">';
        for (let index = 0; index < data.length; index++) {
            legendHtml += 
                '<div class="legend-item">'
                +'    <div class="square" style="background: ' + data[index].background + '"></div>'
                +'  <div class="label">' +  data[index].labelText + '</div>'
                +'</div>';
        }
        legendHtml += '</div>';
        $(legendHtml).appendTo(legend);
    }
}
function ClearChart(chartData){
    $('.doughnutTipExpand').remove();
    $('.pyraamidTip').remove();
    $('.doughnutTip').remove();
    $('.pieTip').remove();

    $('.chart-legend').html(' ');
    for(let i = 0; i < chartData.length; i++){
        if(chartData[i].type !== 'radialbar' && chartData[i].type !== 'radialBar2'){
            $(chartData[i].element).html(' ');
            $(chartData[i].element).parents('.chart-content').find('.legend .legend-list').html(' ');
        }
    }
}
function drawRadialLegend(element, data){
    let legend = $(element).parents('.chart-content').find('.legend');
    if(legend.length > 0){
        let legendHtml = '<div class="legend-list">';
        for (let index = 0; index < data.length; index++) {
            legendHtml += 
                '<div class="legend-item">'
                +'    <div class="square" style="background: ' + data[index].background + '"></div>'
                +'  <div class="label">' +  data[index].labelText + '</div>'
                +'</div>';
        }
        legendHtml += '</div>';
        $(legendHtml).appendTo(legend);
    }
}