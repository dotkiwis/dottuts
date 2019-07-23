

// var ar=[0,0,1,0,0,1,0];
// var a = [];
// let i = 0;
// for(i=0;i<ar.length;i++)
// {
//     if(ar[i+1]==0){
//     i +=1;

//     }
//     else{
//       ar[i+2];
//     }
//    // console.log(i);
//     a.push(i);
    
// }

// console.log(a.length - 1);

//******************** sum of array */

// let ar=[1,2,3,4,6,7]
// let sum = 0;
// for(let i=0;i < ar.length;i++){

//     sum += ar[i];

// }
// console.log(sum);

//*********************************** */

var a=[1,2,3,4,1]
var b=[1,3,2,4]
a.sort();
b.sort();

left = []; both = []; right = []; 
i = 0; j = 0;
while (i < a.length && j < b.length) {
    if (a[i] < b[j]) {
        left.push(a[i]);
        ++i;
    } else if (b[j] < a[i]) {
        right.push(b[j]);
        ++j;
    } else {
        both.push(a[i]);
        ++i; ++j;
    }
}
while (i < a.length) {
    left.push(a[i]);
    ++i;
}
while (j < b.length) {
    right.push(b[j]);
    ++j;
}
console.log(left);
console.log(right);
console.log(both);
console.log(i,j);
//console.log(j);
console.log(a.sort());
console.log(b.sort());
