// tìm các mảng con có chứa số dương chẵn liên tiếp

findAllPositiveEvenSubArr([1,2,4,3,5,10,20]);

// // should return 
// [
//     [2,4],
//     [10,20]
// ]
function findAllPositiveEvenSubArr(numberList) {
    if(!Array.isArray(numberList) || numberList.length ===0) return [];

    const subArrayList = [];
    let subArray = [];
    for(let i = 0 ; i < numberList.length; i++) {
        const number = numberList[i];
        if(number % 2) subArray.push(number);

        // check if we need to reset subarray
        if(subArray.length > 0 && (number % 2 === 1 || i === numberList.length - 1)) {
            subArrayList.push(subArray);
            subArray = []; // reset subarray
            
        }

    }

}