// viet ham statsticWorld(str) dem tan so xuat hiet
// cua 1 tu trong str
// return obj 
// key : la tu co xuat hien trong str
// value : so lan xuat hien cua key 


//str : 
// Emty str => empty obj
// // so sanh voi obj ,arr  => toEqual

// cach tiep can 
// 'easy frontend easy
// ['easy', 'frontend,'easy' ]
// {easy : 1 , frontend : 1}
// {easy : 2 , frontend : 1}

function statsticWorld(str = 'easy frontend easy') {

    if(str === '') return {};
    const statistics = {};
    // loai bo nhung phan tu rong 
    str.split(' ').filter((x) => {
    x !== ''
    }).forEach((str) => {
        if(statistics[str]) {
            statistics[str] += 1 ;
        } else {
            statistics[str] = 1;
        }
    });
    console.log(statistics);
    return statistics;

}

// viet qua reduce 
str.split(' ').filter((x) => x !== '')
.reduce((statistics, word) => {
    if(statistics[str]) {
        statistics[str] += 1 ;
    } else {
        statistics[str] = 1;
    }

    return statistics;

},{})