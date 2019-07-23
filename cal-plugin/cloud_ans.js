var ar = [0, 0, 1, 0, 0, 1, 0];
//var ar = [0,0,0,1,0,0];
let hops = 0;
for (let i = 0; i < ar.length; i++) {
    if (ar[i + 1] == 0 && ar[i + 2] == 0) {
        hops++;
        i += 1;
        console.log(">>00")
    } else if (ar[i + 1] == 0 && ar[i + 2] == 1) {
        hops++;
        console.log(">>01")

    } else if (ar[i + 1] == 1 && ar[i + 2] == 0) {
        i += 1;
        hops++;
        console.log(">>10")

    } else if (ar[i + 1] == 0) {
        hops++;
        i += 1;
        console.log(">>0u")

    }
    console.log(i, hops)
    console.log()
}

console.log(hops);