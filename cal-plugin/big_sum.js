

// let ar=[1000000001, 1000000002, 1000000003, 1000000004, 1000000005];

//     let sum = ar.reduce((a, b) => Number(a) + Number(b), 0);
//     //return sum;
//     console.log(ar.reduce);
// console.log(sum);

let ar=[1000000001, 1000000002, 1000000003, 1000000004, 1000000005];

let res = ar.reduce(function (total, nextValue){
        return  total + nextValue;
});

console.log(res);

