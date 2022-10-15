
// so 1 xuat hien bao nhieu lan : 1

function findMostFrequentNumber(numberList) {
    if(!Array.isArray(numberList) || numberList.length === 0) return undefined

    const statistics = {};
    for(let i = 0 ; i < numberList.length; i++) {
    const number = numberList[i];

    statistics[number] = statistics[number] === undefined ? 1 : statistics[number] + 1;
    }
    let maxKey = undefined;
    for(const key in statistics) {
        if(maxKey === undefined
            || statistics[key] > statistics[maxKey]
            ) { 
           maxKey = key; 
        }
    }
    return Number.parseInt(maxKey);
}