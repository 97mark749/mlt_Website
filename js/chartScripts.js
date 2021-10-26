/*new Chartist.Pie('.ct-chart-pie',{
    series: [{
        value: 180,
        name: 'Protein',
        className: 'proteinLabel',
        meta: 'Meta One'
    },{
        value: 150,
        name: 'Carbohydrates',
        className: 'CarbLabel',
        meta: 'Meta Two'
    },{
        value: 60,
        name: 'Fats',
        className: 'FatLabel',
        meta: 'Meta Three'
    }]
});*/


//Macros

var data = {
    series: [45,35,20],
    labels: ['Protein', 'Carbohydrates', 'Fats']
}; 
var options = {
    width: '100%',
    height: '100%',
}; 
  new Chartist.Pie('.ct-chart-pie', data, options);


// Weight

var data2 = {
    labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
    series: [170.2, 170.5, 169, 170, 168.7, 168.2, 169]
};
var options = {
    width: '100%',
    height: '100%',
};

new Chartist.Line('.ct-chart-line', data2, options);
