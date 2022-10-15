// viết hàm calcCartTotal(cardItemList) để tính tổng tiền của giỏ hàng
const cartItemList = [
  {
    id: 1,
    product: {
      id: 1,
      price: 50000,
    },
    quantity: 1,
  },
  {
    id: 2,
    product: {
      id: 2,
      price: 100000,
    },
    quantity: 2,
  },
];

function calcCartTotal(cartItemList) {
    if(!Array.isArray(cartItemList) || cartItemList.length === 0) {
    return 0;
    }
    let sum = 0;
    // loop and add to sum 
    for(let i = 0 ; i < cartItemList.length; i++){
        const cartItem = cartItemList[i];
        const itemTotal = cartItem.product.price * cartItem.quantity;
        sum += itemTotal;
    }
    return sum;

    }

    // su dung reduce 
function calcCartTotal1(cartItemList) {
    if(!Array.isArray(cartItemList) || cartItemList.length === 0) {
        return 0;
        }
    return cartItemList.reduce((sum, cartItem) => {
        const itemTotal = cartItem.product.price * cartItem.quantity;
        sum += itemTotal;
    },0)
}