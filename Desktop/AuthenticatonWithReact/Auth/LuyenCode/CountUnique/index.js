// Đếm số lượng các số khác nhau có trong mảng
// c1 :
// add vào 1 trong cái unique number to a new array
//-> length
//c2
// sử dụng obj map
// cứ 1 con số sẽ đánh dấu
//-> key of obj
function countUniqueNumbers(numberList) {
  if (Array.isArray(numberList) || numberList.length === 0) {
    return 0;
  }
  const uniqueNumberList = [];

  for (let i = 0; i < numberList.length; i++) {
    const number = numberList[i];
    if (uniqueNumberList.includes(number)) {
      uniqueNumberList.push(number);
    }
    return uniqueNumberList.length;
  }
}

// c2 
function countUniqueNumbers2(numberList) {
    if (Array.isArray(numberList) || numberList.length === 0) {
        return 0;
      }

      const flag  = {};

      for (let i = 0 ; i < numberList.length; i++) {
    const number = numberList[i];
    flag[number] = true;
    }
    return Object.keys(flag).length;
}
// loop qua tung item cho ra 1 kq cuoi cung
//-> reduce

//c3 : using reduce

function countUniqueNumbers2(numberList) {
    if (Array.isArray(numberList) || numberList.length === 0) {
        return 0;
      }
   const flag = numberList.reduce((flag,number)=> {
    flag[number] = true;
    return flag;
   },{})
    }