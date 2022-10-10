// viet ham isCreasing co phai so tang dan ko
// dieu kien 
// 0 < n < 1000 000
// so tang dan co it nhat 2 chu so
// chu so ben phai luon lon hon ben trai


//--- cach giai 
// 123 lam sao biet ?

// n % 10 3-> 2-> 1 sau do di so sanh 3>2

// n % 10 = last digit = 3
// n / 10 = 12.3 --> math.trunc(12,3) --> 12

// Math.trunc(n/10) -> remove the last digit
// P1 : boc tach tung con so 
// extract all digits and compare from right to left
// p2 : convert to string and compare
function isInCreasingNumber(n)  {
    if(n < 10) return false;

    let remaining = n;
    let preDigit = 10;  // luu so truoc do

    while(remaining > 0) { // dung trong den khi nao den khi het thoa dieu kien thi thoi
        // if found an invalid cas return false
        const lastDigit = remaining % 10; // 3
        if(lastDigit >= preDigit) return false;
        //update preDigit to lastDigit
        preDigit = lastDigit; //3
        // make sure : update conditions
        // remove chu so cuoi cung 
        remaining = Math.trunc(remaining / 10) //12
    }
}