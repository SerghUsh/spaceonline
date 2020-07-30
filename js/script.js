// age = prompt("Please tell me your age:");
// console.log(age);


// let a=10;

// a+=8;
// a--;
// console.log(a);

// const TAX_RATE = 0.08;

// function calculateFinalPurchaseAmount(amt) {
// 	amt= amt+(amt*TAX_RATE);

// 	return amt;
// }

// let amount = 99.99;
//  amount = calculateFinalPurchaseAmount(amount);

//  console.log(amount.toFixed(2) );



// function printAmount(amt) {
// 	console.log(amt.toFixed(2));
// }

// let amount = 99.99;

// printAmount(amount*2);


// let str1 = "Мне " ;
// let age = 28;
// let str2 = ' лет!';

// alert(str1+age + str2);

// let num = prompt('Введите любое число');

// alert(Math.pow(num, 2));

// let num = '12345';

// alert(num[0]*[1]*[2]*[3]*[4]*[5]);

// let hour = "17:";
// let min = "20:";
// let sec = "42";

// // alert(hour+min+sec);
// console.log(typeof(hour));

// let arr = ['a', 'b', ', c', 'd'];
// let plus = '+';
// alert(arr[0]+plus+arr[1] +  arr[2]+plus+arr[3]);

// var arr = ['Привет, ', 'мир', '!'];
// alert(arr[0] + arr[1] + arr[2]);

// let arr = [2,5,3,9];
// let arr1 = (arr[0]*arr[1]);
// let arr2 = (arr[2]*arr[3]);

// let result = arr1+arr2;

// alert(result);

// var obj = {a: 1, b: 2, c: 3};

// alert(obj['c']);

// var obj = {Коля: '1000', Вася: '500', Петя: ', 200'};

// alert(obj['Коля']+obj['Петя']);

// let obj = {1: "Понедельник", 2: "Вторник", 3: "Среда", 4: "Четверг", 5: "Пятница", 6: "Суббота", 7: "Воскресенье"};
// let day = 7;

// alert(obj[day]);

// let arr = [ [1, 2, 3], [4, 5, 6], [7,8,9] ];

// alert(arr[1][0]);

// let obj = {
// 	js:['jQuery', 'Angular'], 
// 	php: 'hello', 
// 	css: 'world'
// }

// alert(obj['js'][0]);

	// Многомерный массив

// let obj = {
// 	'ru': ["Понедельник", "Вторник", "Среда", "Четверг", "Пятница", "Суббота", "Воскресенье"],
// 	'en':['Monday', 'Tuesday', ', Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'],
// };

// let lang = 'en';
// let day = [4];


// alert(obj[lang][day]);


// let test = '1';
// if (test != true) {
// 	alert('Верно');
// } else {
// 	alert('Неверно');
// }

// switch (test) {
// 	case 'true':
// 		alert('Nevерно');
// 	// case 'false':
// 	// 	alert('Верно');
// 	// break;
// }
// alert('Верно');

// let a = 5;
// if (a>0 && a<5) {
// 	alert('Верно');
// } else {
// 	alert('Неверно');
// }

// let a = 2;

// if ( a===0 || a===2) {
// 	alert(a*7);
// } else {
// 	alert(a/10);
// }

// let a = 1;
// let b = 5;

// // if (a <= 1 && b >=3 ) {
// // 	alert(a+b);
// // } else {
// // 	alert(a-b);
// // }

// if (a>2 && a<11 || b>=6 && b<14) {
// 	alert('Верно');
// } else {
// 	alert('Неверно');
// }

// let page = document.querySelector('.page');
// let searchButton = document.querySelector('.search_button');

// searchButton.onclick = function() {
// 	page.classList.toggle('.display');
// 	page.classList.toggle('.display-1');
// };

