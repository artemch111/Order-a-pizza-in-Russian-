class bruh {
    constructor(name, age) {
        this.name=name;
        this.age=age;
    }
sayHi(){
alert(this.name);
    }
}
function bruhHi() {
    let bruh1 = new bruh("Поздровляю, вы заказали пиццу и в подарок кола.",1);
    bruh1.sayHi();
}