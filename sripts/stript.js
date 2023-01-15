var goods = {
    "105105" : {
        id : 1,
        "name" : "Банан",
        "cost" : 30,
        "img" : "https://cdn0.iconfinder.com/data/icons/fruit-and-vegetable-15/200/yellow_banana_fruit_vegetable-256.png",
        "sklad" : "имеется"
    },
    "115115" : {
        id : 2,
        "name" : "Манго",
        "cost" : 40,
        "img" : "https://cdn0.iconfinder.com/data/icons/fruit-and-vegetable-15/200/orange_mango_fruit_vegetable-256.png",
        "sklad" : "имеется"
    }
};

console.log(goods);
var out = '';
for (var key in goods) {
    out+='Название: '+goods[key].name + '<br>';
}
document.getElementById('name').innerHTML = out;